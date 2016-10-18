'use strict';

var mainControllers = angular.module('mainControllers', []);


mainControllers.controller('mapCtrl', ['$scope', '$http', '$timeout', '$filter', function($scope, $http, $timeout, $filter) {

    // STYLE MAP :
    var styles = [
        {
            "elementType": "geometry",
            "stylers": [
                {
                    "hue": "#ff4400"
                },
                {
                    "saturation": -68
                },
                {
                    "lightness": -4
                },
                {
                    "gamma": 0.72
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.icon"
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry",
            "stylers": [
                {
                    "hue": "#0077ff"
                },
                {
                    "gamma": 3.1
                }
            ]
        },
        {
            "featureType": "water",
            "stylers": [
                {
                    "hue": "#00ccff"
                },
                {
                    "gamma": 0.44
                },
                {
                    "saturation": -33
                }
            ]
        },
        {
            "featureType": "poi.park",
            "stylers": [
                {
                    "hue": "#44ff00"
                },
                {
                    "saturation": -23
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "hue": "#007fff"
                },
                {
                    "gamma": 0.77
                },
                {
                    "saturation": 65
                },
                {
                    "lightness": 99
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "gamma": 0.11
                },
                {
                    "weight": 5.6
                },
                {
                    "saturation": 99
                },
                {
                    "hue": "#0091ff"
                },
                {
                    "lightness": -86
                }
            ]
        },
        {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": -48
                },
                {
                    "hue": "#ff5e00"
                },
                {
                    "gamma": 1.2
                },
                {
                    "saturation": -23
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "saturation": -64
                },
                {
                    "hue": "#ff9100"
                },
                {
                    "lightness": 16
                },
                {
                    "gamma": 0.47
                },
                {
                    "weight": 2.7
                }
            ]
        }
    ];

    var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

    // MAP :
    var mapOptions = {
        zoom: 6,
        center: new google.maps.LatLng(46.80, 1.70),
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        disableDefaultUI: true,
        scaleControl: true,
        zoomControl: true,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.map.mapTypes.set('map_style', styledMap);
    $scope.map.setMapTypeId('map_style');

    // MARKERS :
    $http.get('json/racesData.json').success(function(data) {

        // JSON
        var locas = data;

        // DEBUG
        angular.forEach(data, function(value) {
            console.log(value.routes[0].locations[0].coordinates.longitude);
            angular.forEach(value.routes, function(value2) {
                if (typeof(value2.cost) != "undefined") {
                    console.log('prix : '+ value2.cost.price_value);
                }
            });
            console.log('------------------- fin de la course ------------------');
        });

        // INIT
        $scope.markers = [];
        var infoWindow = new google.maps.InfoWindow();

        google.maps.event.addListener(infoWindow, 'domready', function () {
            $('.gm-style-iw').parent().addClass('custom-iw');
        });

        // MARKERS
        var createMarker = function (info) {
            var marker = new google.maps.Marker({
                map:        $scope.map,
                icon:       'images/marker.png',
                animation:  google.maps.Animation.DROP,
                position:   new google.maps.LatLng(info.routes[0].locations[0].coordinates.latitude, info.routes[0].locations[0].coordinates.longitude),
                title:      '<h2>' + info.title + '</h2>',
                title_raw:   info.title,
                date:        $filter('date')(info.time, "dd/MM/yyyy"),
                city:        info.routes[0].locations[0].address.city,
                routes:      info.routes
            });

            // ANIMATION
            function stopAnimAll() {
                $scope.markers.forEach(function (a, b) {
                    a.setAnimation(null);
                });
            }

            function toggleBounce() {
                $timeout(function() {
                    stopAnimAll();
                }, 1400);

                if (marker.getAnimation() == null) {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            marker.addListener('click', toggleBounce);


            google.maps.event.addListener($scope.map, 'click', stopAnimAll);


            // CONTENTS + TITLES
            google.maps.event.addListener(marker, 'click', function(){
                infoWindow.setContent(marker.title + marker.date + '<br>' + marker.city);
                infoWindow.open($scope.map, marker);
            });

            $scope.markers.push(marker);
        };

        for (var i = 0; i < locas.length; i++) {
            createMarker(locas[i]);
        }

        $scope.openInfoWindow = function(e, selectedMarker) {
            e.preventDefault();
            google.maps.event.trigger(selectedMarker, 'click');
        }

    });

}]);
