<?php
session_start();
$messageInfo = '';

if ( !isset($_SESSION['messageInfo']) ) {
    $messageInfo = '';
} else {
    $messageInfo = $_SESSION['messageInfo'];
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- META -->
    <title>Pierre Martin | Graphic Design / Web Design &amp; UX Designe</title>
    <meta name="description" content="Portfolio de Pierre Martin | Front-end Developer / Webdesigner / Web Design et Illustration">
    <meta name="keywords" content="Portfolio, Pierre Martin, Graphic Design, Webdesigner, Web, Design, Illustration">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CSS MAIN -->
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/animations.css" rel="stylesheet" type="text/css" media="screen">

    <!-- INTRO -->
    <link href="intro/styles.css" rel="stylesheet" type="text/css">
    <script src="bower_components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript" ></script>
    <script src="js/velocity.js" type="text/javascript"></script>

    <!-- Google WebFont -->
    <link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:900,400' rel='stylesheet' type='text/css'>

    <!-- CSS LIQUIDE SLIDER -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/liquid-slider.css">

    <style type="text/css" media="screen">@import url("css/media_queries.css");</style>

    <link href="css/print.css" rel="stylesheet" type="text/css" media="print">

    <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- CSS IE INFERIEUR OU EGALE A IE8 -->
    <!--[if lte IE 8]>
        <link href="css/ie.css" rel="stylesheet" type="text/css">
    <![endif]-->

</head>

<body>
    <!-- SI ANCIEN NAVIGATEUR IE, ALORS ON AFFICHE :-->
    <!--[if lte IE 8]>

        <div class="ie_contener">
            <div class="ie_logo">
                <img src="img/ie_logo.jpg" alt="Internet Exploreur">
            </div>

            <p class="ie_info">Ce site utilise des technologies modernes.<br> Votre navigateur Internet ne permet pas l'affichage correcte de ce site</p>
            <p class="ie_info">Veuillez télécharger la derniere version d'Internet Explorer ou utiliser un autre navigateur internet pour acceder au site.</p>

            <a class="ie_btn" href="http://windows.microsoft.com/fr-FR/internet-explorer/download-ie" target="_blank">Télécharger la derniere version d'Internet Exploreur !</a>

            <p class="ie_note">Le téléchargement de la derniere version d'Internet Exploreur est gratuite et ne nécessite pas d'inscription quelconque</p>
        </div>

    <![endif]-->


    <!-- SI ANCIEN NAVIGATEUR IE, ALORS ON AFFICHE RIEN DU SITE :-->
    <!--[if (!IE 8) & (!IE 7) & (!IE 6)]><!-->

    <!-- INTRO -->
    <div class="hideIntro"></div>

    <div class="contenerLoad">

        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

        <img class="logoImgHaut" src="img/logoHaut.png" alt="Logo Pierre">
        <img class="logoImgBas" src="img/logoBas.png" alt="Logo Pierre">

        <svg version="1.1" id="svgIntro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="100%" height="500" viewBox="0 0 1788.179 951.095" enable-background="new 0 0 1788.179 951.095"
             xml:space="preserve">

                <!-- CONTOUR BAS -->
                <clipPath id="contourBasPath">
                    <path d="M580.772,471.213c-3.287,4.762-6.648,9.462-9.981,14.186c-3.326,4.729-6.718,9.406-10.082,14.104
                    l-10.174,14.03l-10.235,13.98l-10.29,13.936l-10.348,13.89l-10.397,13.849l-10.433,13.82l-3.304-12.361l16.375,5.738l16.352,5.798
                    l16.343,5.819l16.315,5.895l16.309,5.91l16.284,5.974l16.278,5.989l16.253,6.055l8.068,3.006l-1.269,8.759l-2.486,17.161
                    l-2.567,17.148l-2.567,17.147l-2.652,17.136l-1.338,8.565l-1.388,8.558l-2.815,17.109l-2.934,17.092l-3.028,17.076l-11.914-11.918
                    c5.733-0.779,11.476-1.5,17.217-2.23l17.229-2.152l17.241-2.08l17.249-2.03l34.5-4.049c11.502-1.332,22.999-2.701,34.491-4.103
                    l4.69-0.571l1.45,4.117l5.765,16.374l5.839,16.345c1.941,5.45,3.924,10.885,5.919,16.313c1.996,5.43,3.956,10.873,6,16.283
                    l6.079,16.253l6.196,16.206c2.052,5.408,4.155,10.795,6.259,16.183l6.318,16.16l-5.994-1.607l13.432-10.993l13.38-11.056
                    c4.466-3.679,8.899-7.397,13.339-11.108l13.296-11.16l13.255-11.211l13.217-11.26l26.357-22.613l4.013-3.443l4.572,3.445
                    l55.468,41.795l13.83,10.495l13.798,10.536l13.767,10.572l13.729,10.621l-16.862,4.514l24.131-65.099l24.221-65.063l3.527-9.475
                    l10.303,1.495l34.352,4.984l17.171,2.52l17.161,2.585l17.159,2.6c5.722,0.853,11.435,1.764,17.149,2.661l17.144,2.696
                    c5.714,0.898,11.431,1.787,17.138,2.733l-15.246,15.237l-5.083-34.336l-4.901-34.364l-2.432-17.185l-2.375-17.193l-4.692-34.396
                    l-1.288-9.438l8.543-3.071l16.313-5.865l16.331-5.818l32.688-11.57l32.734-11.448l32.783-11.321l-3.242,12.058l-20.752-27.73
                    l-10.328-13.905l-10.267-13.954l-10.263-13.957l-10.192-14.014c-3.382-4.684-6.804-9.335-10.153-14.046l-10.065-14.116
                    l1.943-1.572l11.697,12.798c3.904,4.261,7.736,8.581,11.608,12.869l11.569,12.901l11.5,12.957l11.496,12.96l11.434,13.01
                    l22.772,26.098l6.823,7.82l-10.065,4.238l-31.965,13.458l-32.014,13.332l-32.061,13.21l-16.043,6.571l-16.061,6.525l7.255-12.509
                    l5.961,34.199l2.952,17.104l2.895,17.113l5.752,34.231l5.57,34.26l2.91,17.891l-18.156-2.653
                    c-5.725-0.837-11.439-1.73-17.156-2.614l-17.151-2.652c-5.716-0.885-11.435-1.757-17.145-2.687l-17.136-2.748l-17.134-2.764
                    l-17.123-2.828l-34.237-5.711l13.83-7.979l-25.92,64.405l-26.01,64.37l-5.631,13.936l-11.231-9.422l-13.298-11.156l-13.258-11.204
                    l-13.229-11.241l-13.195-11.283l-52.635-45.312l8.585,0.002l-27.722,20.919L858.91,822.76l-13.784,10.555l-13.743,10.605
                    c-4.574,3.545-9.153,7.082-13.701,10.658l-13.659,10.71l-13.608,10.773l-4.129,3.269l-1.865-4.876l-6.197-16.206
                    c-2.068-5.401-4.137-10.803-6.257-16.184l-6.319-16.16l-6.437-16.113c-2.128-5.378-4.339-10.725-6.516-16.084
                    c-2.177-5.358-4.366-10.713-6.597-16.052l-6.676-16.021l-6.75-15.993l6.14,3.546c-11.374,2.16-22.742,4.353-34.104,6.582
                    l-34.096,6.636l-17.049,3.312l-17.057,3.263l-17.068,3.19c-5.691,1.05-11.381,2.109-17.08,3.111l-13.851,2.434l1.937-14.352
                    l2.32-17.187l2.416-17.172l2.533-17.154l1.286-8.573l1.336-8.566l2.697-17.128l2.781-17.114l2.781-17.115l2.862-17.103
                    l6.799,11.765l-16.113-6.418l-16.088-6.483l-16.082-6.499l-16.057-6.562l-16.051-6.578l-16.022-6.653l-16.014-6.675l-15.991-6.734
                    l-10.273-4.326l6.969-8.035l11.346-13.081l11.382-13.052l11.432-13.012l11.49-12.964l11.543-12.921l11.605-12.871
                    c3.896-4.269,7.763-8.559,11.697-12.796c3.928-4.243,7.825-8.509,11.798-12.715L580.772,471.213z"/>
                </clipPath>

                <path class="svgAnim1" clip-path="url(#contourBasPath)" fill="none" stroke="#493442" stroke-width="30" stroke-miterlimit="10" d="M579.8,470.427
                    c-2.813,3.476-5.627,6.951-8.441,10.426c-6.784,8.379-13.568,16.759-20.353,25.139c-8.27,10.214-16.539,20.428-24.808,30.642
                    c-7.269,8.979-14.538,17.957-21.807,26.935c-3.783,4.673-7.566,9.346-11.349,14.019c-0.12,0.147-0.239,0.296-0.359,0.443
                    c4.167,1.605,8.333,3.211,12.5,4.817c10.051,3.873,20.103,7.747,30.155,11.62c12.264,4.727,24.528,9.452,36.792,14.179
                    c10.805,4.163,21.609,8.327,32.414,12.491c5.672,2.186,11.345,4.371,17.017,6.557c0.072,0.028,0.595,0.174,0.582,0.257
                    c-0.064,0.414-0.129,0.827-0.193,1.24c-0.382,2.448-0.765,4.896-1.146,7.345c-1.511,9.681-3.022,19.361-4.533,29.041
                    c-2.001,12.82-4.002,25.64-6.004,38.459c-1.884,12.071-3.769,24.143-5.653,36.215c-1.161,7.435-2.321,14.87-3.482,22.306
                    c-0.126,0.806-0.251,1.611-0.377,2.417c4.408-0.687,8.815-1.373,13.222-2.06c10.636-1.656,21.271-3.313,31.906-4.97
                    c12.983-2.022,25.966-4.045,38.949-6.066c11.45-1.784,22.901-3.567,34.351-5.351c6.037-0.94,12.074-1.881,18.111-2.821
                    c0.068-0.011,0.634-0.146,0.66-0.079c0.146,0.379,0.293,0.758,0.439,1.136c0.885,2.29,1.771,4.58,2.656,6.869
                    c3.521,9.105,7.042,18.212,10.563,27.318c4.675,12.09,9.351,24.181,14.025,36.271c4.413,11.413,8.826,22.826,13.239,34.239
                    c2.735,7.073,5.471,14.147,8.206,21.221c0.308,0.797,0.615,1.593,0.923,2.389c3.475-2.797,6.949-5.594,10.424-8.392
                    c8.384-6.749,16.769-13.499,25.153-20.248c10.236-8.239,20.471-16.479,30.707-24.718c9.027-7.267,18.054-14.533,27.081-21.8
                    c4.76-3.831,9.52-7.663,14.279-11.494c0.054-0.044,0.476-0.443,0.531-0.397c0.316,0.255,0.633,0.51,0.949,0.764
                    c1.911,1.541,3.823,3.081,5.735,4.622c7.604,6.126,15.206,12.253,22.81,18.38c10.096,8.135,20.191,16.27,30.287,24.404
                    c9.529,7.68,19.06,15.358,28.589,23.037c5.906,4.76,11.813,9.52,17.72,14.279c0.664,0.535,1.329,1.07,1.994,1.606
                    c1.611-4.159,3.222-8.318,4.832-12.478c3.888-10.037,7.774-20.074,11.662-30.111c4.744-12.252,9.489-24.504,14.234-36.756
                    c4.186-10.807,8.37-21.612,12.555-32.418c2.207-5.697,4.413-11.395,6.619-17.092c0.025-0.064,0.191-0.621,0.263-0.61
                    c0.401,0.062,0.802,0.125,1.203,0.188c2.426,0.378,4.853,0.757,7.278,1.135c9.648,1.505,19.297,3.01,28.945,4.514
                    c12.811,1.998,25.621,3.996,38.432,5.993c12.093,1.886,24.186,3.771,36.279,5.657c7.495,1.169,14.99,2.338,22.485,3.507
                    c0.843,0.132,1.687,0.263,2.53,0.395c-0.685-4.407-1.369-8.814-2.054-13.223c-1.651-10.635-3.304-21.271-4.955-31.906
                    c-2.017-12.982-4.032-25.966-6.049-38.949c-1.778-11.45-3.557-22.9-5.335-34.351c-0.938-6.038-1.875-12.075-2.812-18.112
                    c-0.011-0.068-0.146-0.634-0.079-0.659c0.381-0.146,0.761-0.291,1.141-0.437c2.299-0.88,4.597-1.759,6.896-2.639
                    c9.137-3.497,18.274-6.994,27.411-10.491c12.121-4.639,24.242-9.277,36.363-13.917c11.421-4.371,22.842-8.742,34.263-13.113
                    c7.038-2.692,14.075-5.386,21.112-8.079c0.763-0.292,1.525-0.584,2.288-0.876c-2.812-3.478-5.623-6.954-8.435-10.432
                    c-6.779-8.384-13.558-16.768-20.337-25.151c-8.263-10.219-16.525-20.438-24.789-30.657c-7.263-8.982-14.526-17.965-21.789-26.948
                    c-3.78-4.675-7.561-9.35-11.341-14.025c-0.119-0.148-0.239-0.296-0.358-0.444"/>



                <!-- CONTOUR HAUT -->
                <clipPath id="contourHautPath">
                    <path d="M1212.065,470.453c3.271-4.806,6.617-9.551,9.934-14.32c3.311-4.774,6.687-9.496,10.035-14.239
                        l10.129-14.165l10.191-14.115c6.811-9.396,13.67-18.754,20.548-28.096l10.355-13.984l10.391-13.955l3.307,12.325l-16.378-5.833
                        l-16.354-5.895l-16.345-5.916l-16.316-5.989l-16.31-6.006l-16.286-6.068l-16.278-6.086l-16.255-6.148l-8.013-3.031l1.26-8.715
                        l2.488-17.208l2.567-17.195l2.567-17.195l2.655-17.182c0.887-5.727,1.778-11.453,2.73-17.169l2.82-17.156l2.933-17.138
                        l3.033-17.123l11.886,11.9c-5.733,0.772-11.477,1.479-17.218,2.205c-5.739,0.733-11.482,1.441-17.229,2.127
                        c-11.487,1.415-22.991,2.715-34.488,4.064l-34.497,4.003c-11.502,1.317-22.998,2.674-34.489,4.06l-4.676,0.563l-1.445-4.104
                        l-5.766-16.384l-5.842-16.356c-1.94-5.454-3.927-10.891-5.92-16.325c-1.994-5.434-3.959-10.879-6.002-16.293l-6.079-16.264
                        l-6.197-16.218c-2.052-5.412-4.157-10.802-6.26-16.194l-6.319-16.171l5.996,1.609l-13.432,10.987l-13.381,11.05l-13.339,11.103
                        l-13.296,11.154l-13.257,11.205l-13.217,11.253l-26.359,22.6l-4.013,3.44l-4.568-3.444l-55.466-41.81l-13.83-10.498
                        l-13.797-10.538c-9.192-7.033-18.349-14.11-27.495-21.2l16.854-4.509l-24.131,65.092l-24.222,65.057l-3.525,9.47l-10.298-1.495
                        l-34.351-4.985l-17.171-2.521l-17.162-2.583c-11.437-1.747-22.884-3.431-34.309-5.259l-17.144-2.697
                        c-5.714-0.902-11.432-1.783-17.139-2.73l15.253-15.243l5.083,34.335l4.907,34.362l2.436,17.184l2.376,17.193l4.697,34.395
                        l1.279,9.371l-8.439,3.118l-32.65,12.063l-32.696,11.949l-32.744,11.827l-32.794,11.7l3.212-12.026l20.706,28.052l10.303,14.066
                        l10.242,14.114l10.236,14.119c3.422,4.698,6.776,9.451,10.167,14.174c3.373,4.737,6.786,9.443,10.126,14.207l10.038,14.277
                        l-1.955,1.559l-11.685-12.963c-3.9-4.317-7.729-8.691-11.596-13.034c-3.85-4.357-7.737-8.685-11.556-13.067l-11.487-13.122
                        L520.861,406.7l-11.42-13.175L486.7,367.096l-6.668-7.75l9.88-4.276l31.954-13.83l32.004-13.702l32.052-13.581l32.098-13.466
                        l-7.16,12.488l-5.957-34.2l-2.951-17.104l-2.891-17.113l-5.747-34.232l-5.571-34.26l-2.91-17.896l18.164,2.653
                        c5.725,0.836,11.438,1.739,17.156,2.62l17.151,2.653c11.438,1.739,22.854,3.621,34.28,5.44l17.133,2.767l17.123,2.829
                        l34.237,5.714l-13.823,7.975l25.92-64.399l26.011-64.364l5.624-13.917l11.23,9.408c8.871,7.432,17.731,14.876,26.556,22.366
                        l13.228,11.244l13.195,11.285l52.635,45.322l-8.581-0.004l27.72-20.908l13.822-10.501l13.783-10.549l13.743-10.6l13.701-10.652
                        l13.659-10.704l13.607-10.768l4.132-3.27l1.864,4.879l6.195,16.218c2.07,5.405,4.136,10.811,6.255,16.196l6.317,16.172
                        l6.437,16.125c2.128,5.382,4.335,10.733,6.514,16.096c2.178,5.362,4.362,10.723,6.594,16.065l6.674,16.034l6.748,16.005
                        l-6.12-3.541c11.374-2.146,22.743-4.319,34.106-6.532l34.099-6.588c11.368-2.182,22.729-4.412,34.107-6.527
                        c5.687-1.079,11.376-2.136,17.068-3.169c5.692-1.039,11.382-2.098,17.081-3.091l13.808-2.405l-1.922,14.306l-2.316,17.234
                        l-2.415,17.219l-2.528,17.201c-0.83,5.736-1.723,11.462-2.618,17.188l-2.693,17.175l-2.781,17.162l-2.782,17.162l-2.859,17.149
                        l-6.753-11.746l16.112,6.512l16.088,6.575l16.08,6.592l16.057,6.654l16.05,6.671l16.021,6.744l16.013,6.766l15.988,6.828
                        l10.144,4.332l-6.837,7.994l-11.309,13.223l-11.346,13.193c-7.588,8.775-15.195,17.536-22.852,26.258l-11.509,13.062
                        l-11.571,13.012c-3.884,4.316-7.741,8.653-11.664,12.939c-3.917,4.29-7.803,8.604-11.767,12.856L1212.065,470.453z"/>
                </clipPath>

                <path class="svgAnim2" clip-path="url(#contourHautPath)" fill="none" stroke="#DD5754" stroke-width="30" stroke-miterlimit="10" d="M1213.042,471.233
                    c2.778-3.48,5.558-6.96,8.336-10.44c6.709-8.402,13.417-16.804,20.126-25.206c8.197-10.267,16.396-20.534,24.593-30.8
                    c7.246-9.075,14.492-18.149,21.737-27.224c3.853-4.825,7.705-9.65,11.559-14.476c0.149-0.188,0.299-0.375,0.449-0.563
                    c-4.152-1.624-8.304-3.248-12.456-4.872c-10.021-3.92-20.042-7.84-30.063-11.76c-12.24-4.788-24.479-9.575-36.719-14.363
                    c-10.807-4.227-21.613-8.454-32.42-12.681c-5.722-2.238-11.443-4.477-17.166-6.715c-0.875-0.342-0.605-0.481-0.457-1.435
                    c0.374-2.402,0.748-4.803,1.121-7.205c1.496-9.61,2.992-19.22,4.488-28.83c1.992-12.798,3.985-25.597,5.978-38.395
                    c1.888-12.122,3.774-24.244,5.661-36.366c1.181-7.581,2.36-15.162,3.541-22.743c0.141-0.901,0.28-1.803,0.421-2.704
                    c-4.407,0.681-8.815,1.361-13.223,2.042c-10.635,1.642-21.271,3.284-31.906,4.926c-12.983,2.005-25.966,4.009-38.949,6.014
                    c-11.45,1.768-22.9,3.536-34.351,5.304c-6.037,0.932-12.075,1.864-18.112,2.796c-0.068,0.011-0.633,0.145-0.659,0.078
                    c-0.146-0.379-0.293-0.758-0.439-1.137c-0.885-2.291-1.771-4.583-2.655-6.874c-3.521-9.112-7.042-18.225-10.563-27.338
                    c-4.675-12.099-9.35-24.198-14.024-36.297c-4.413-11.421-8.826-22.842-13.239-34.264c-2.735-7.079-5.471-14.158-8.205-21.236
                    c-0.309-0.797-0.616-1.593-0.924-2.39c-3.475,2.795-6.949,5.591-10.424,8.387c-8.385,6.746-16.77,13.492-25.154,20.237
                    c-10.235,8.235-20.472,16.47-30.707,24.705c-9.027,7.263-18.054,14.525-27.081,21.788c-4.76,3.829-9.52,7.658-14.279,11.488
                    c-0.054,0.043-0.476,0.442-0.532,0.397c-0.315-0.255-0.632-0.51-0.948-0.765c-1.911-1.541-3.823-3.082-5.735-4.623
                    c-7.603-6.128-15.206-12.257-22.81-18.386c-10.095-8.137-20.19-16.274-30.286-24.411c-9.529-7.681-19.059-15.362-28.589-23.043
                    c-5.906-4.761-11.812-9.521-17.719-14.282c-0.665-0.536-1.33-1.072-1.994-1.607c-1.611,4.159-3.222,8.318-4.833,12.477
                    c-3.887,10.036-7.774,20.071-11.662,30.107c-4.745,12.251-9.49,24.502-14.235,36.753c-4.185,10.805-8.37,21.609-12.555,32.414
                    c-2.207,5.697-4.413,11.394-6.62,17.09c-0.025,0.065-0.191,0.622-0.262,0.61c-0.401-0.062-0.803-0.125-1.204-0.188
                    c-2.426-0.378-4.852-0.757-7.278-1.135c-9.648-1.505-19.297-3.01-28.946-4.515c-12.811-1.999-25.621-3.997-38.432-5.995
                    c-12.093-1.887-24.186-3.773-36.279-5.659c-7.495-1.169-14.99-2.338-22.485-3.508c-0.844-0.131-1.687-0.263-2.531-0.395
                    c0.685,4.407,1.369,8.815,2.054,13.222c1.652,10.635,3.304,21.271,4.956,31.906c2.016,12.983,4.033,25.966,6.049,38.949
                    c1.778,11.45,3.557,22.9,5.335,34.351c0.938,6.037,1.875,12.074,2.813,18.111c0.011,0.069,0.146,0.633,0.079,0.66
                    c-0.377,0.149-0.755,0.298-1.132,0.446c-2.282,0.9-4.563,1.8-6.845,2.699c-9.08,3.58-18.159,7.16-27.239,10.74
                    c-12.065,4.757-24.131,9.515-36.197,14.272c-11.41,4.499-22.82,8.998-34.23,13.497c-7.113,2.805-14.226,5.609-21.339,8.414
                    c-0.83,0.328-1.661,0.655-2.491,0.982c2.772,3.476,5.543,6.952,8.315,10.427c6.695,8.396,13.391,16.792,20.087,25.189
                    c8.189,10.27,16.379,20.54,24.569,30.81c7.254,9.097,14.509,18.194,21.763,27.291c3.89,4.877,7.779,9.754,11.668,14.632
                    c0.163,0.205,0.326,0.409,0.489,0.614"/>


                <!-- P 1 -->
                <clipPath id="p1BasPath">
                    <path d="M784.105,469.233c-19.58,62.543-32.88,131.734-32.88,177.818c0,37.429,0.614,59.519,20.862,59.519
                        c34.361,0,70.562-6.136,70.562-36.202l6.136-114.74c0-12.923,8.178-47.602,16.331-86.395H784.105z"/>
                </clipPath>
                <path class="p1BasPath" clip-path="url(#p1BasPath)" fill="none" stroke="#493442" stroke-width="120" stroke-miterlimit="10" d="M828.267,449.233
                    c-8,50-22,98-30,148c-4,30-20,106,2,126"/>


                <!-- P 2 -->
                <clipPath id="p2BasPath">
                    <path d="M972.93,469.233c-35.979,29.15-88.558,15.09-88.558,36.08c0,24.544,40.497,27.611,65.654,27.611
                        c52.135,0,94.838-26.444,121.597-63.691H972.93z"/>
                </clipPath>

                <path class="p2BasPath" clip-path="url(#p2BasPath)" fill="none" stroke="#493442" stroke-width="120" stroke-miterlimit="10" d="M1034.458,443.334
                    c-22,62-102.19,73.898-158.19,73.898"/>


                <!-- P 3 FIRST -->
                <clipPath id="p1HautPath">
                    <path d="M873.329,325.532c-17.794,0-34.975,22.703-42.951,34.975c-16.854,27.015-33.004,66.345-46.272,108.726
                        h81.011c8.106-38.567,16.189-81.201,16.189-110.567C881.305,342.099,878.851,325.532,873.329,325.532z"/>
                </clipPath>
                <path class="p1HautPath" clip-path="url(#p1HautPath)" fill="none" stroke="#DD5754" stroke-width="120" stroke-miterlimit="10" d="M810.267,509.233
		            c14-26,14-58,28-84c16-32,28-98,52-122"/>



                <!-- P 4 -->
                <clipPath id="p2HautPath">
                    <path d="M746.93,337.19c38.042,0,63.199-42.951,151.556-42.951c69.948,0,107.377,30.066,107.377,83.448
                        c0,49.542-14.222,76.386-32.933,91.546h98.693c19.536-27.194,30.572-60.147,30.572-92.773c0-71.79-54.609-141.125-188.371-141.125
                        c-66.267,0-130.693,33.134-154.624,60.745c-14.112,16.567-20.249,28.225-20.249,34.361
                        C738.953,334.736,742.021,337.19,746.93,337.19z"/>
                </clipPath>
                <path class="p2HautPath" clip-path="url(#p2HautPath)" fill="none" stroke="#DD5754" stroke-width="120" stroke-miterlimit="10" d="M1010.267,493.233
                    c14-42,62-96,48-146c-12-44-72-70-112-74c-36-4-94-8-126,6c-44,18-80,62-112,96"/>

        </svg>

    </div>

    <script>
        $(document).ready(function() {
            // EN MODE DEVELOPPEMENT; ON DESACTIVE L'INTRO :
            //$(".hideIntro").remove();

            $('.contenerLoad').fadeIn(1000);

            $.Velocity
                .RegisterEffect("fadeOutSvg", {
                    defaultDuration: 200,
                    calls: [
                        [ { opacity: [0, 1] } ]
                    ]
                })
                .RegisterEffect("animationLogoHaut", {
                    defaultDuration: 1500,
                    calls: [
                        [ { translateY: -1000               }, 0 ],
                        [ { opacity   : [1, 0]              }, 0 ],
                        [ { translateY: 0                   }, 0.150 ],
                        [ { translateY: -15, scaleY: 0.9    }, 0.100 ],
                        [ { translateY: 0,   scaleY: 1      }, 0.100 ]
                    ]
                })
                .RegisterEffect("animationLogoBas", {
                    defaultDuration: 1500,
                    calls: [
                        [ { translateY: 1000                }, 0 ],
                        [ { opacity   : [1, 0]              }, 0 ],
                        [ { translateY: 0                   }, 0.150 ],
                        [ { translateY: 15,  scaleY: 0.9    }, 0.100 ],
                        [ { translateY: 0,   scaleY: 1      }, 0.100 ]
                    ]
                })
                .RegisterEffect("hideIntro", {
                    defaultDuration: 1200,
                    calls: [
                        [ { backgroundColor: '#ffffff' }, 0 ],
                        [ { backgroundColor: '#dba8aa' }, 1.5 ],
                        [ { backgroundColor: '#8bbabc' }, 1.5 ],
                        [ { translateX: ['-100%', 0] }, 1, { easing: "easeOutExpo" } ],
                        [ { opacity: [0, 1] } ]
                    ]
                });

            // Appel des fonctions de Velocity :
            $(".contenerLoad svg").velocity("fadeOutSvg",   { delay: 3500 } );

            $(".logoImgHaut").velocity("animationLogoHaut", { delay: 700 } );
            $(".logoImgBas") .velocity("animationLogoBas",  { delay: 700 } );

            // REMOVE DIV :
            $(".hideIntro").velocity("hideIntro").fadeOut(800, function(){
                $(this).remove();
            });

            $(".contenerLoad").delay(4000).fadeOut(400, function(){
                $(this).remove();
            });
        });
    </script>
    
    <!-- FIN INTRO -->

	<nav id="horizontal" class="transitionmenu">
        <div class="containerBar">
            <div class="bar">
                <i class="fa fa-circle" style=""></i>
                <span style=""></span>
            </div><!--
         --><div class="bar">
                <i class="fa fa-circle" style=""></i>
                <span style=""></span>
            </div><!--
         --><div class="bar">
                <i class="fa fa-circle" style=""></i>
                <span style=""></span>
            </div><!--
         --><div class="bar">
                <i class="fa fa-circle" style=""></i>
                <span style=""></span>
            </div><!--
         --><div class="bar">
                <i class="fa fa-check check" style=""></i>
                <span style=""></span>
            </div>
        </div>


        <ul>
            <li class="link-hover">
                <a href="#ancre_websites" id="websites" title="Websites et Mailings">Websites</a>
            </li><!--
         --><li class="link-hover">
                <a href="#ancre_graph" id="graphismes" title="Graphismes et llustrations">Graphismes</a>
            </li><!--
         --><li class="link-hover">
                <a href="#ancre_anim" id="anim" title="Animations / Flash">Animations</a>
            </li><!--
         --><li class="link-hover">
                <a href="#ancre_bio" id="biographie" title="Biographie">A propos</a>
            </li><!--
         --><li class="link-hover">
                <a href="#ancre_contact" id="contact" title="Contact">Contact</a>
            </li>
        </ul>
    </nav>

 	<div id="fondheader">
    	<div id="video_container">
            <video id="video_background" loop>
                <source src="http://pierredesigner.com/videos/video2.webm" type="video/webm" />
                <source src="http://pierredesigner.com/videos/video2.mp4" type="video/mp4" />
                <source src="http://pierredesigner.com/videos/video2.ogv" type="video/ogg" />
            </video>
        	<div class="matrix"></div>
        </div>
        <script>
            setTimeout(function(){
                document.getElementById("video_background").play();
            }, 7000);
        </script>

    	<div id="conteneur">
            <header>

                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <a href="CV-Pierre.pdf" target="_blank" title="CV à télécharger !">
                            <div class="front"><!-- front content -->
                                <img src="img/logoFull.png" title="CV à télécharger !" alt="CV à télécharger !">
                            </div>
                        </a>

                        <div class="back"> <!-- back content -->
                            <a href="CV-Pierre.pdf" target="_blank"></a>
                      </div>
                    </div>
                </div>

            </header>

            <nav id="vertical" class="cachemobile">
                <ul>
                    <li><a class="btn btn_web" href="#ancre_websites" id="websites2" title="Websites et Mailings">Websites</a></li>
                    <li><a class="btn btn_graph" href="#ancre_graph" id="graphismes2" title="Graphismes et llustrations">Graphismes</a></li>
                    <li><a class="btn btn_anim" href="#ancre_anim" id="anim2" title="Animation / Flash">Animations</a></li>
                    <li><a class="btn btn_bio" href="#ancre_bio" id="biographie2" title="Biographie">A propos</a></li>
                    <li><a class="btn btn_con" href="#ancre_contact" id="contact2" title="Contact">Contact</a></li>
                </ul>
            </nav>

            <article id="articletop">
                <br>
                <h1>Pierre Martin</h1>
                <p class="big_texte text-shadow_vert">FRONT-END DEVELOPER / MOTION DESIGNER / WEB DESIGNER</p>
                <br>
                <span id="sroll">scroll - faire défiler</span>
                <br>

                <img id="animate2" src="img/scroll.png" alt="faire défiller">
            </article>
        </div>
    </div>
    <div id="fondheaderbottom"></div>


	<div class="fond2 percentDiv" id="ancre_websites">
        <h1>Websites</h1>

        <!-- PROJET Pokemon -->
        <div class="siteContainer project-pokemon">
            <div class="siteText">
                <h2>Pokemon Stars Rating</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'une application web dynamique permettant de noter des Pokemons.</p>
                <span><strong>Environnement de travail : </strong>Freelance</span>
                <br>
                <span><strong>Technologies utilisées : </strong>Node.js, MongoDB, React et Flux (pour l'architecture + le rendu coté serveur)</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://51.254.120.16:3000" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- PROJET GMAP -->
        <div class="siteContainer project-gmap">
            <div class="siteText">
                <h2>Google Map + Angular</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'une carte interactive montrant des différentes courses</p>
                <span><strong>Environnement de travail : </strong>Freelance</span>
                <br>
                <span><strong>Technologies utilisées : </strong>Angular, Node.js, api gmap, Jquery</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://pierredesigner.com/sites/gmap/#/" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- SITE APS -->
        <div class="siteContainer project-aps">
            <div class="siteText">
                <h2>APS-Export</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un site vitrine pour la société APS-Export.</p>
                <span><strong>Environnement de travail : </strong>Au sein de la société Société APS</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, php, Jquery, SVG, Velocity JS</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://pierredesigner.com/sites/aps/" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- SITE JLD -->
        <div class="siteContainer project-jld">
            <div class="siteText">
                <h2>JLD Consulting</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un site vitrine pour la société JLD Consulting. Site actuellement en construction</p>
                <span><strong>Environnement de travail : </strong>Au sein de la société Société APS</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, php, Jquery, SVG, Jquery, Velocity JS</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://pierredesigner.com/sites/jld/" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- SITE FELT -->
        <div class="siteContainer project-felt">
            <div class="siteText">
                <h2>Felt Energy</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un site vitrine pour la société Felt Energy. Site actuellement en construction</p>
                <span><strong>Environnement de travail : </strong>Au sein de la société Société APS</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, Bootstrap, Sass, Compass, SVG, Jquery, Velocity JS</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://pierredesigner.com/sites/felt/" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- SITE DOREUSE BLOIS -->
        <!--<div class="siteContainer project-doreuse">
            <div class="siteText">
                <h2>La Doreuse de Blois</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un site marchand pour une boutique d'objets anciens et de restauration de cadres/dorures.</p>
                <span><strong>Environnement de travail : </strong>En freelance</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, Magento, Jquery</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://www.doreuse-de-blois.com/" target="_blank"><div class="fullSize"></div></a>
        </div>-->

        <!-- SITE ATELIER MATSUOKA -->
        <div class="siteContainer project-matsuoka">
            <div class="siteText">
                <h2>Atelier Matsuoka - Paris</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un projet web sur mesure pour l'ouverture d'un atelier de restauration de peintures, de meubles anciens et d'oeuvres d'art situé à Paris.</p>
                <span><strong>Environnement de travail : </strong>En freelance</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, php, Jquery</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://www.ateliermatsuoka.com/" target="_blank"><div class="fullSize"></div></a>
        </div>

        <!-- SITE ACV -->
        <div class="siteContainer project-acv">
            <div class="siteText">
                <h2>ACV</h2>
                <p><strong>A propos du projet :</strong><br> Conception et réalisation d'un projet web sur mesure pour une association de collection de disques. Site réalisé sous WordPress.</p>
                <span><strong>Environnement de travail : </strong>A l'école - Projet de fin d'étude pour une association</span>
                <br>
                <span><strong>Technologies utilisées : </strong>HTML5, CSS3, php, WordPress, Jquery, Velocity JS</span>
            </div>
            <div class="siteLeft"></div>
            <div class="siteRight"></div>
            <a href="http://acv-calais.fr/" target="_blank"><div class="fullSize"></div></a>
        </div>


        <article class="articlebody">

  			<ul class="grid cs-style-2"> <!-- /Galerie jQuery -->
                    <h2 style="margin-top: 30px;">Mailings :</h2>
           			<li class="site1">
						<img src="img/mailing3_big.jpg" alt="Mailing TLMVPSP">
						<div class="figcaption">
							<h3>Mailing TLMVPSP</h3>
							<span>Société Silicon Carne</span>
							<a href="mailings/tlm1/index.html" target="_blank">Voir le mailing</a>
						</div>
					</li>
					<p class="texte_sites" style="margin: 0;">Mailing Tout le Monde Veux Prendre Sa Place - Silicon carne</p>
					<p class="texte_sites_sm">#Digital #Mailing</p>
					<hr>


                    <li class="site1">
						<img src="img/mailing4_big.jpg" alt="Mailing QPUC">
						<div class="figcaption">
							<h3>Mailing Question Pour Un Champion</h3>
							<span>Société Silicon Carne</span>
							<a href="mailings/qpuc_sso/index.html" target="_blank">Voir le mailing</a>
						</div>
					</li>
					<p class="texte_sites" style="margin: 0;">Mailing Question Pour Un Champion - Silicon Carne</p>
					<p class="texte_sites_sm">#Digital #Mailing</p>
					<hr>

            </ul><!-- /Fin galerie jQuery -->


			<section class="conteneur_sections1">
				<section class="boite">
					<img src="img/web.png" alt="website">
					<h3 class="texte_sites_sm">WEBSITE</h3>
					<p class="texte_sites_sm">Création de sites sur mesure, sites e-commerces, Web design, ergonomie, e-mailings, respect des standards W3C, hébergement</p>
				</section>

				<section class="boite">
					<img src="img/dev.png" alt="developpement">
					<h3 class="texte_sites_sm">DEVELOPPEMENT</h3>
					<p class="texte_sites_sm">Intégration, HTML5, JavaScript, JQuery, PHP, base de données, CMS (WordPress), programmation applicative</p>
				</section>

				<section class="boite">
					<img src="img/responsive.png" alt="responsive design">
					<h3 class="texte_sites_sm">RESPONSIVE DESIGN</h3>
					<p class="texte_sites_sm">Adaptation sur mobiles & tablettes, mobile design</p>
				</section>

            </section>

        </article>
    </div>

    <div id="fond2bottom"></div>


	<div class="fond3 percentDiv" id="ancre_graph">
    	<article class="articlebody">
            <h1>Graphismes</h1>
            <h2 class="textestyle2">Réalisations personnelles :</h2>

            <div class="liquid-slider" id="slider-id"> <!-- slider-id -->

                 <div>
                      <h2 class="title">1</h2>
                      <p>Réalisation de mon dépliant - recto (format A4)</p>
                      <img src="img_slide/pierre_flyer1.jpg" alt="Réalisation de mon dépliant - recto (format A4)">
                 </div>

				 <div>
                      <h2 class="title">2</h2>
                      <p>Réalisation de mon dépliant - verso (format A4)</p>
                      <img src="img_slide/pierre_flyer2.jpg" alt="Réalisation de mon dépliant - verso (format A4)">
                 </div>

				 <div>
                      <h2 class="title">3</h2>
                      <p>Réalisation d'un affiche pour la société Ad4screen</p>
                      <img src="img_slide/ad4screen.jpg" alt="Réalisation d'un affiche pour la société Ad4screen">
                 </div>

				 <div>
                      <h2 class="title">4</h2>
                      <p>Réalisation d'une maquette d'une newsletter pour la société Lydia</p>
                      <img src="img_slide/lydia.jpg" alt="Réalisation d'une maquette d'une newsletter pour la société Lydia">
                 </div>

                 <div>
                      <h2 class="title">5</h2>
                      <p>Perroquet</p>
                      <img src="img_slide/PerroquetV3.jpg" alt="Perroquet">
                 </div>

                 <div>
                      <h2 class="title">6</h2>
                      <p>3D effet</p>
                      <img src="img_slide/3dfx2.jpg" alt="3D effet 1">
                 </div>

                 <div>
                      <h2 class="title">7</h2>
                      <p>3D effet</p>
                      <img src="img_slide/3dfx3.jpg" alt="3D effet 1">
                 </div>

                 <div>
                      <h2 class="title">8</h2>
                      <p>Réalisation affiche et guitare en vectoriel</p>
                      <img src="img_slide/affiche_Guitare.jpg" alt="affiche guitare">
                 </div>

                 <div>
                      <h2 class="title">9</h2>
                      <p>Réalisation fiole en vectoriel</p>
                      <img src="img_slide/fiole.jpg" alt="fiole">
                 </div>

            </div> <!-- slider-id -->


            <hr>
            <h2 class="textestyle2">Réalisations pour la société "Silicon Carne"</h2>

            <div class="liquid-slider" id="slider-id3"> <!-- slider-id3 -->

                 <div>
                      <h2 class="title">1</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation visuel pour la page fan Facebook</p>
                      <img src="img_slide/sc_theme_humoristes.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">2</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation visuel pour la page fan Facebook</p>
                      <img src="img_slide/sc_theme_grec.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">3</h2>
                      <p>"SLAM" : Réalisation d'une newsletter</p>
                      <img src="img_slide/sc_slam_galette.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">4</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation d'une newsletter</p>
                      <img src="img_slide/sc_tlm_spa.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">5</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation d'une roue</p>
                      <img src="img_slide/sc_roue.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">6</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation d'un visuel pour la page fan Facebook</p>
                      <img src="img_slide/sc_jo1.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

                 <div>
                      <h2 class="title">7</h2>
                      <p>"Tout le monde veux prendre sa place" : Réalisation d'un PopUp pour une roue</p>
                      <img src="img_slide/sc_roue_popup.jpg" alt="Réalisation stage Silicon Carne Paris">
                 </div>

            </div> <!-- slider-id3 -->

<!--
                <section class="conteneur_sections1">
                    <section class="boite">
                        <img src="img/print.png" alt="Print">
                        <h3>PRINT</h3>
                        <p>flyers, affiches, brochures, cartes de visites...</p>
                    </section>

                    <section class="boite">
                        <img src="img/photo.png" alt="photos">
                        <h3>PHOTOGRAPHIE</h3>
                        <p>Montages photos, mattes-paintings, retouche photos...</p>
                    </section>

                    <section class="boite">
                        <img src="img/picto.png" alt="pictogrammes">
                        <h3>PICTOGRAMME</h3>
                        <p>Identité visuelle, logos, illustrations, pictogrammes, objets vectoriels...</p>
                    </section>
                </section>
-->
        </article> <!-- articlebody -->
    </div>  <!-- fond3 -->


    <div id="fond3bottom"></div>


    <!-- ANIMATION FLASH -->
    <div class="fond_anim percentDiv" id="ancre_anim">
    	<article class="articlebody">
            <h1>Animations</h1>
            <h2 class="textestyle2">Mes réalisations sur Flash</h2>

            <div class="flash_conteneur">

            	<h3 class="textestyle2">Réalisation Silicon Carne </h3>
                <div id="flash_noel">
                    <a href="http://www.adobe.com/go/getflash">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir Adobe Flash Player" />
                    </a>
                    <p>Cette page requiert Flash Player version 9.0.124 ou ultérieure.</p>
                </div>
                <hr><br>

                <h3 class="textestyle2">Réalisation Silicon Carne pour le jeu "Tout le monde veux prendre sa place"</h3>
                <div id="flash_tlm2">
                    <a href="http://www.adobe.com/go/getflash">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir Adobe Flash Player" />
                    </a>
                    <p>Cette page requiert Flash Player version 10.3.0 ou ultérieure.</p>
                </div>

            </div>

        </article> <!-- articlebody -->
    </div>


    <div id="fond_anim_bottom"></div>


    <div class="fond4 percentDiv" id="ancre_bio">
        <h1>A propos</h1>
    	<article class="articlebody">
   	    	<section style="text-align: center;">
                <p class="textestyle1">Je m'appelle <span class="textestyle4">Pierre MARTIN</span>, j'ai 28 ans.
                    <br>je suis <span class="textestyle4">designer créatif</span> et <span class="textestyle4">développeur intéractif front-end</span>.
                    <br>Reçu avec succès au sortir d’une école <span class="textestyle4">« Développeur Multimédia »</span>, je possède une expérience professionnelle effectuée en alternance sur Symfony, Laravel, jQuery...
                    <br>Passionné, autonome, je possède une bonne culture web et j’ai l’esprit d’équipe que j’ai acquis en travaillant en startup en faisant face à de nombreux nouveaux challenges technologiques.
                    <br>
                </p>

                <hr><br>

                <a class="btn btn_graph" href="formation.pdf" target="_blank" id="websites2" title="Contenu de ma fomation">Voir le contenu de ma précédente formation !</a>
            </section>

		</article>
	</div>

	<div id="fond4bottom"></div>


	<div class="fond5" id="ancre_contact">
    	<div class="percentDivLast percentDiv"></div>
    	<h1>Contact</h1>
        <section>
            <p class="textestyle1">Vous avez besoin d'un renseignement, vous avez envie de me proposer votre projet ou de me rencontrer ?
            N'hésitez pas à me contacter via le formulaire ci-dessous.</p>
        </section>

        <section id="mapgoogle" >

			<div id="map-canvas"></div>

            <article class="articlebody articlebodymap">
                <p class="conatainerMessageSend"><?php echo $messageInfo; ?></p>
                <br>

                <form action="form.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire_mailing" class="formular" id="formID">

                    <fieldset>
                        <input type="hidden" name="hidden" id="securite">

                        <input type="text" name="nom" id="nom" size="30" maxlength="50" placeholder="Nom" autocomplete="off" required>
                        <br>
                        <input type="text" name="prenom" id="prenom" size="30" maxlength="50" placeholder="Prenom" autocomplete="off" required>
                        <br>
                        <input type="email" name="email" id="mail" size="30" maxlength="50" placeholder="Adresse mail" autocomplete="off" required>
                        <br>

                        <textarea name="message" cols="20" rows="6" maxlength="800" placeholder="Votre message" autocomplete="off" required></textarea>
                    </fieldset>

                    <fieldset class="center">
                        <input name="envoyer" type="submit" class="bouton" title="Envoyer" value="ENVOYER">
                    </fieldset>
                </form>

            </article>

        </section>

	</div>

	<div id="fond5bottom"></div>


    <div id="fondfooter">
		<footer class="textestyle3">
          		<h2>MERCI DE VOTRE VISITE !</h2>
          		<div class="linkFooter" style="margin-bottom: 50px;">
          		    <a href="#fondheader">Haut de page</a>
          		    <span>|</span>
          		    <a href="#ancre_websites">Websites</a>
          		    <span>|</span>
          		    <a href="#ancre_graph">Graphismes</a>
          		    <span>|</span>
          		    <a href="#ancre_bio">A propos</a>
          		    <span>|</span>
          		    <a href="#ancre_contact">Contact</a>
          		</div>

                <div class="containerSocial">
                    <a class="linkedin" href="https://fr.linkedin.com/in/pierredesigner" target="_blank" title="linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>

                    <a class="twitter" href="https://twitter.com/Pierredevparis?lang=fr" target="_blank" title="Twitter">
                        <i class="fa fa-twitter-square"></i>
                    </a>

                    <a class="facebook" href="https://www.facebook.com/pierre.mrt.5?ref=tn_tnmn/" target="_blank" title="Facebook">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a class="github" href="https://github.com/PierreMartin" target="_blank" title="github">
                        <i class="fa fa-github-square"></i>
                    </a>
                </div>

                <p class="texte_copyright">COPYRIGHT © 2015 PIERRE MARTIN. ALL RIGHTS RESERVED.</p>
        </footer>

        <div id="hautdepage">
            	<a href="#fondheader" title="haut de page">
            	    <i class="fa fa-arrow-circle-up"></i>
                </a>
        </div>

	</div>

    <!--<![endif]--> <!-- FIN DES ANCIENS NAVIGATEUR IE -->


    <!-- ====================== SCRIPTS ====================== -->

    <!-- SCROLLING -->
    <script src="js/smooth-scroll.js"></script>

    <!-- LIQUIDE SLIDER -->
    <script src="./js/jquery.touchSwipe.min.js"></script>
    <script src="./js/jquery.liquid-slider.min.js"></script>

    <!-- MAIN JS -->
    <script type="text/javascript" src="js/main.js"></script>

    <!-- FLASH -->
    <script type="text/javascript" src="js/swfobject.js"></script>

    <script type="text/javascript">
        var swfVersionStr          = "9.0.124";
        var xiSwfUrlStr            = "";
        var flashvars              = {};
        var params                 = {};

        params.quality             = "high";
        params.bgcolor             = "#ffffff";
        params.play                = "true";
        params.loop                = "true";
        params.wmode               = "window";
        params.scale               = "showall";
        params.menu                = "true";
        params.devicefont          = "false";
        params.salign              = "";
        params.allowscriptaccess   = "sameDomain";

        var attributesNoel         = {};
        attributesNoel.id          = "pere_noel";
        attributesNoel.name        = "pere_noel";
        attributesNoel.align       = "middle";
        swfobject.createCSS("body", "height:100%;");
        swfobject.embedSWF("pere_noel.swf", "flash_noel", "414", "600", "9.0.0");

        var attributesPub          = {};
        attributesPub.id           = "pub1-CS6";
        attributesPub.name         = "pub1-CS6";
        attributesPub.align        = "middle";
        swfobject.embedSWF("pub1-CS6.swf", "flash_apple", "728", "90", swfVersionStr, xiSwfUrlStr, flashvars, params, attributesPub);

        var attributesAvatars      = {};
        attributesAvatars.id       = "anim_avatars";
        attributesAvatars.name     = "anim_avatars";
        attributesAvatars.align    = "middle";
        swfobject.embedSWF("anim_avatars.swf", "flash_tlm1", "290", "180", swfVersionStr, xiSwfUrlStr, flashvars, params, attributesAvatars);

        var attributesFacebook     = {};
        attributesFacebook.id      = "anim_facebook";
        attributesFacebook.name    = "anim_facebook";
        attributesFacebook.align   = "middle";
        swfobject.embedSWF("anim_facebook.swf", "flash_tlm2", "290", "180", swfVersionStr, xiSwfUrlStr, flashvars, params, attributesFacebook);

        var attributesJeu          = {};
        attributesJeu.id           = "anim_jeu";
        attributesJeu.name         = "anim_jeu";
        attributesJeu.align        = "middle";
        swfobject.embedSWF("anim_jeu.swf", "flash_tlm3", "290", "180", swfVersionStr, xiSwfUrlStr, flashvars, params, attributesJeu);
    </script>


    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-45695346-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <!-- GOOGLE MAP API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var styles =
            [
                {
                  "stylers": [
                    { "hue": "#00ff5e" },
                    { "lightness": 50 },
                    { "gamma": 0.16 }
                  ]
                },{
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [
                    { "lightness": 42 },
                    { "gamma": 0.34 },
                    { "hue": "#77ff00" }
                  ]
                },{
                  "featureType": "water",
                  "stylers": [
                    { "hue": "#00f6ff" }
                  ]
                },{
                  "featureType": "road.local",
                  "elementType": "geometry",
                  "stylers": [
                    { "gamma": 0.27 },
                    { "lightness": 76 },
                    { "hue": "#ffa200" },
                    { "color": "#25826b" }
                  ]
                },{
                  "featureType": "transit.station"  },{
                },{
                  "featureType": "road.arterial",
                  "elementType": "geometry",
                  "stylers": [
                    { "color": "#eae990" },
                    { "saturation": 56 }
                  ]
                },{
                }
            ]

            var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap stylée"});

            // LOCALISATION
            var myLatlng = new google.maps.LatLng(48.8818268,2.3314562);

            // Carte centrée sur le cinéma
            var myMapOptions = {
                zoom: 17,
                scrollwheel: false, // désactive le scrolling
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Création de la carte
            var myMap = new google.maps.Map(document.getElementById('map-canvas'),myMapOptions);

            // Création du marker
            var myMarker = new google.maps.Marker({
                position: myLatlng,
                map: myMap,
                title: "Pierre Webdesigner"
            });

            // Options de la fenêtre
            var myWindowOptions = {
                content:
                '<h3>Pierre Webdesigner</h3>'+
                '<p>61 rue Blanche <br>75009 PARIS</p>'
            };

            // Création de la fenêtre
            var myInfoWindow = new google.maps.InfoWindow(myWindowOptions);

            // Affichage de la fenêtre au click sur le marker
            google.maps.event.addListener(myMarker, 'click', function() {
                myInfoWindow.open(myMap,myMarker);
            });

            // STYLES
             myMap.mapTypes.set('map_style', styledMap);
             myMap.setMapTypeId('map_style');

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</body>
</html>
