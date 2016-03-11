
    var testApp = angular.module('testApp', ['ngRoute']);


    testApp.config(function($routeProvider) {
        $routeProvider

            
            .when('/', {
                templateUrl : 'application/views/index/home.php',
                controller  : 'mainController'
            })

            
            .when('/about', {
                templateUrl : 'application/views/index/about.php',
                controller  : 'aboutController'
            })

            
            .when('/contact', {
                templateUrl : 'application/views/index/contact.php',
                controller  : 'contactController'
            });
    });

    
    testApp.controller('mainController', function($scope) {
    
        $scope.message = 'home page';
    });

    testApp.controller('aboutController', function($scope) {
        $scope.message = 'about page.';
    });

    testApp.controller('contactController', function($scope) {
        $scope.message = 'Contact us';
    });