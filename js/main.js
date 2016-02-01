// affiche le logo d'intro au charement de la page (opacity :0 en css) :
$('.contenerLoad').fadeIn(1000);

// EN MODE DEVELOPPEMENT; ON DESACTIVE L'INTRO :
// $(".hideIntro").remove();


// VELOCITY
$(document).ready(function() {
         $.Velocity
            .RegisterEffect("fadeOutSvg", {
                defaultDuration: 200,
                calls: [
                    [ { opacity: [0, 1] } ],
                ]
            })

            .RegisterEffect("animationLogoHaut", {
                defaultDuration: 1500,
                calls: [
                    [ { translateY: -1000               }, 0 ],
                    [ { opacity   : [1, 0]              }, 0 ],
                    [ { translateY: 0                   }, 0.150 ],
                    [ { translateY: -15, scaleY: 0.9    }, 0.100 ],
                    [ { translateY: 0,   scaleY: 1      }, 0.100 ],
                ]
            })
             .RegisterEffect("animationLogoBas", {
                defaultDuration: 1500,
                calls: [
                    [ { translateY: 1000                }, 0 ],
                    [ { opacity   : [1, 0]              }, 0 ],
                    [ { translateY: 0                   }, 0.150 ],
                    [ { translateY: 15,  scaleY: 0.9    }, 0.100 ],
                    [ { translateY: 0,   scaleY: 1      }, 0.100 ],
                ]
            })

//            .RegisterEffect("animationLogoHautEnd", {
//                defaultDuration: 800,
//                calls: [
//                    [ { translateY: -1000               } ],
//                    [ { opacity   : [0, 1]              } ],
//                ]
//            })
//            .RegisterEffect("animationLogoBasEnd", {
//                defaultDuration: 1000,
//                calls: [
//                    [ { translateY: 1000                } ],
//                    [ { opacity   : [0, 1]              } ],
//                ]
//            })
             .RegisterEffect("hideIntro", {
                defaultDuration: 1200,
                calls: [
                    [ { backgroundColor: '#ffffff' }, 0 ],
                    [ { backgroundColor: '#dba8aa' }, 1.5 ],
                    [ { backgroundColor: '#8bbabc' }, 1.5 ],
                    [ { translateX: ['-100%', 0] }, 1, { easing: "easeOutExpo" } ],
                    [ { opacity: [0, 1] } ],
                ]
            });

        // APPELLE DES FONCTION
        $(".contenerLoad svg").velocity("fadeOutSvg",   { delay: 3500 } );

        $(".logoImgHaut").velocity("animationLogoHaut", { delay: 700 } );
        $(".logoImgBas") .velocity("animationLogoBas",  { delay: 700 } );

//        $(".logoImgHaut").velocity("animationLogoHautEnd", { delay: 750 } );
//        $(".logoImgBas") .velocity("animationLogoBasEnd",  { delay: 750 } );

        // REMOVE DIV :
        $(".hideIntro").velocity("hideIntro").fadeOut(800, function(){
            $(this).remove();
        });

        $(".contenerLoad").delay(4000).fadeOut(400, function(){
            $(this).remove();
        });


    // VELOCITY 2 : EFFETS SUR LES LI DE LA NAV
    $('#vertical li').css("opacity","0");

    $.Velocity
        .RegisterEffect("animationNav", {
                defaultDuration: 300,
                calls: [
                    [ { opacity: [ 1, 0 ], transformOriginX: [ "50%", "50%" ], transformOriginY: [ "50%", "50%" ], scaleX: [ 1, 1.5 ], scaleY: [ 1, 1.5 ], translateZ: 0 } ]
                ]
        });

    $("#vertical li").velocity("animationNav", { delay: 6000, stagger: 200 } );


});


// HIDE / SHOW LA NAV AU SCROLL :
$('#hautdepage, #horizontal').css("display","none");

$(window).scroll(function() {
    var posScroll = $(document).scrollTop();

    if (posScroll >= 830)
        $('#hautdepage, #horizontal').fadeIn(600);
    else
        $('#hautdepage, #horizontal').fadeOut(600);
});


// GESTION DU GLISSEMENT LORS DU CLIQUE (SMOOTH SCROLL) :
 $("#horizontal a, #vertical a, #hautdepage a, .linkFooter a").click(function (e){
     e.preventDefault();

     var hash = this.hash.substr(1);
     console.log(hash);

     $('html, body').animate({
    scrollTop: $("#"+ hash).offset().top + 8
     }, 1200);

 });

// GESTION DE L'EFFET HOVER AUTOMATIQUE DE LA NAV :
var aChildren = $(".link-hover").children();
var aArray = [];

for (var i = 0; i < aChildren.length; i++) {
    var aChild  = aChildren[i];
    var ahref   = $(aChild).attr('href');
    aArray.push(ahref);
}

$(window).scroll(function(){
    var windowPos       = $(window).scrollTop();
    var windowHeight    = $(window).height();
    var docHeight       = $(document).height();

    for (var i = 0; i < aArray.length; i++) {
        var theID       = aArray[i];
        var divPos      = $(theID).offset().top;
        var divHeight   = $(theID).height();
        if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
            $("a[href='" + theID + "']").addClass("nav-active");
        } else {
            $("a[href='" + theID + "']").removeClass("nav-active");
        }
    }

    if (windowPos + windowHeight == docHeight) {
        if (!$(".link-hover:first-child a").hasClass("nav-active")) {
            var navActiveCurrent = $(".nav-active").attr("href");
            $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
            $(".link-hover:first-child a").addClass("nav-active");
        }
    }
});

// BAR DE PROGRESSION EN POURCENTAGE
$(window).scroll(function (){
    var contener_bar_height = $(".containerBar").height();
    var top = $(this).scrollTop();

    // BAR DE PROGRESSION EN POURCENTAGE
    $(".percentDiv").each(function(i){
        var this_top    = $(this).offset().top;
        var height      = $(this).height();
        var this_bottom = this_top + height;
        var percent     = 0;

        // Scrolle
        if (top >= this_top && top <= this_bottom) {
            percent = ((top - this_top) / (height - contener_bar_height)) * 100;
            if (percent >= 100) {
                percent = 100;
                $(".containerBar .bar:eq("+i+") i").css("color", "#fff");
                $(".containerBar .bar:eq("+i+") .check").css("opacity", "1");
            }
            else {
                $(".containerBar .bar:eq("+i+") i").css("color", "#3F3D3D");
                $(".containerBar .bar:eq("+i+") .check").css("opacity", "0");
            }
        }
        else if (top > this_bottom) {
            percent = 100;
            $(".containerBar .bar:eq("+i+") i").css("color", "#fff");
            $(".containerBar .bar:eq("+i+") .check").css("opacity", "1");
        }
        console.log(i);
        $(".containerBar .bar:eq("+i+") span").css("width", percent + "%");
    });
});


$(document).ready(function(){

	// SLIDER LIQUIDE
	$(function () {
		$("#slider-id").liquidSlider({
			includeTitle:false,
			minHeight: 720,
			autoSlide: true,
			autoSlideInterval: 4500,
			pauseOnHover: true,

			dynamicArrows: true,
			dynamicArrowsGraphical: true,
			hoverArrows: true,

			dynamicTabs: true,
			dynamicTabsAlign: "center",
			preloader: true,
			responsive: true,
			mobileNavigation: true,

			autoHeight:false,
		    slideEaseFunction:'animate.css',
		    slideEaseDuration:1000,
		    heightEaseDuration:1000,
		    animateIn:"fadeInDown",
		    animateOut:"bounceOutUp",
		    callback: function() {
				var self = this;
				$('.slider-6-panel').each(function() {
			  	$(this).removeClass('animated ' + self.options.animateIn);
				});
				}
			});
	});

	// SLIDER LIQUIDE 3
	$(function () {
		$("#slider-id3").liquidSlider({
			includeTitle:false,
			minHeight: 720,
			autoSlide: true,
			autoSlideInterval: 4500,
			pauseOnHover: true,

			dynamicArrows: true,
			dynamicArrowsGraphical: true,
			hoverArrows: true,

			dynamicTabs: true,
			dynamicTabsAlign: "center",
			preloader: true,
			responsive: true,
			mobileNavigation: true,

			autoHeight:false,
		    slideEaseFunction:'animate.css',
		    slideEaseDuration:1000,
		    heightEaseDuration:1000,
		    animateIn:"fadeInDown",
		    animateOut:"bounceOutUp",
		    callback: function() {
				var self = this;
				$('.slider-6-panel').each(function() {
			  	$(this).removeClass('animated ' + self.options.animateIn);
				});
				}
			});
	});



    //////////////////////// WEB ZONE ////////////////////////
    var myEasingWeb = "easeInOutElastic";
    var mydurationWeb = 800;
    $(".siteContainer").mouseover(function(){
        $(this).find(".siteLeft").stop().animate({left:'-30%'}, 500, "easeInOutQuart");
        $(this).find(".siteRight").stop().animate({right:'-30%'}, 500, "easeInOutQuart");
    });

    $(".siteContainer").mouseout(function(){
        $(this).find(".siteLeft").stop().animate({left:'0%'}, mydurationWeb, myEasingWeb);
        $(this).find(".siteRight").stop().animate({right:'0%'}, mydurationWeb, myEasingWeb);
    });

    var elementsHover= function () {
        $(".project-felt .fullSize, .project-jld .fullSize, .project-aps .fullSize, .project-doreuse .fullSize, .project-matsuoka .fullSize, .project-acv .fullSize").addClass("webHover");
    };

    var elementsOut = function () {
        $(".project-felt .fullSize, .project-jld .fullSize, .project-aps .fullSize, .project-doreuse .fullSize, .project-matsuoka .fullSize, .project-acv .fullSize").removeClass("webHover");
    };

    // APS
    $( ".project-aps" ).mouseover(function() {
        elementsHover();
        $(".project-aps .fullSize").removeClass("webHover");
    });
    $( ".project-aps").mouseout(function() {
        elementsOut();
    });

    // JLD
    $( ".project-jld" ).mouseover(function() {
        elementsHover();
        $(".project-jld .fullSize").removeClass("webHover");
    });
    $( ".project-jld").mouseout(function() {
        elementsOut();
    });

    // FELT
    $( ".project-felt" ).mouseover(function() {
        elementsHover();
        $(".project-felt .fullSize").removeClass("webHover");
    });
    $( ".project-felt").mouseout(function() {
        elementsOut();
    });

    // DOREUSE
    $( ".project-doreuse" ).mouseover(function() {
        elementsHover();
        $(".project-doreuse .fullSize").removeClass("webHover");
    });
    $( ".project-doreuse").mouseout(function() {
        elementsOut();
    });

    // MATSUOKA
    $( ".project-matsuoka" ).mouseover(function() {
        elementsHover();
        $(".project-matsuoka .fullSize").removeClass("webHover");
    });
    $( ".project-matsuoka").mouseout(function() {
        elementsOut();
    });

    // ACV
    $( ".project-acv" ).mouseover(function() {
        elementsHover();
        $(".project-acv .fullSize").removeClass("webHover");
    });
    $( ".project-acv").mouseout(function() {
        elementsOut();
    });



    //////////////////////// WEB ZONE OLD ////////////////////////
    $('.grid li').hover(function(){
        $(this).find('img').stop().animate({bottom:'90px'},{queue:false,duration:300});

    }, function(){
        $(this).find('img')
        .stop().animate({bottom:'0px'},130)
        .stop().animate({bottom:'20px'},100)
        .stop().animate({bottom:'0px'},100)
        .stop().animate({bottom:'5px'},100)
        .stop().animate({bottom:'0px'},80);
    });


	// Formulaires cacher/afficher texte par defaut
		$(function(){
    	$(".inputValDefaut").bind({
    		blur:function(){
    			if($(this).val() == "")
    			{
    				$(this).val($(this).attr("title"));
    				$(this).removeClass("inputValDefautValeur");
    			}
    		},
    		focus:function(){
    			if($(this).val() == $(this).attr("title"))
    			{
    				$(this).val("");
    				$(this).addClass("inputValDefautValeur");
    			}
    		}
			});
			$(".inputValDefaut").each(function(){$(this).val($(this).attr("title"))});
		});

});
