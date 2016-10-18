'use strict';

var myApp = angular.module('myApp', [
    'ngRoute',
    'mainControllers',
    'uiGmapgoogle-maps'
]);


myApp.config(['$routeProvider', 'uiGmapGoogleMapApiProvider', function($routeProvider, uiGmapGoogleMapApiProvider) {

    uiGmapGoogleMapApiProvider.configure({
        key: '',
        v: '3',
        libraries: 'weather,geometry,visualization'
    });

    $routeProvider.
        when('/', {
            templateUrl: 'partials/map.html',
            controller: 'mapCtrl'
        });

        /*.
        otherwise({
            redirectTo: '/'
        });*/
}]);



