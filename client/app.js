/* 
* Description:
* Created on: Dec 27, 2015 
* Modified on:
* Modified by:  
* Version: 
* Changes made since last version:
*/

var app = angular.module('app', ['ui.router','ngMaterial','ngMessages','oc.lazyLoad']);

app.config(function($stateProvider, $urlRouterProvider,$mdThemingProvider,$mdIconProvider,$ocLazyLoadProvider) {
    
    $ocLazyLoadProvider.config({debug:false,events:true});
    
    $urlRouterProvider.otherwise('/login');
    
    $stateProvider
        
        .state('login', {
            url: '/login',
            templateUrl: URL_LOGIN,
            resolve: {
            loadMyDirectives:function($ocLazyLoad){
                return $ocLazyLoad.load(MODULE_USER_LOGIN);
                }
            }
        })
        
        .state('registration', {
            url: '/registration',
            templateUrl: URL_REGISTRATION,
            resolve: {
            loadMyDirectives:function($ocLazyLoad){
                return $ocLazyLoad.load(MODULE_USER_REGISTRATION);
                }
            }
        });
                
        
        
        $mdThemingProvider.theme('primary')
        .primaryPalette('grey', {
          'default': '600'
        })
        .accentPalette('teal', {
          'default': '500'
        })
        .warnPalette('defaultPrimary');

    $mdThemingProvider.theme('dark', 'default')
      .primaryPalette('defaultPrimary')
      .dark();

    $mdThemingProvider.theme('grey', 'default')
      .primaryPalette('grey');

    $mdThemingProvider.theme('custom', 'default')
      .primaryPalette('defaultPrimary', {
        'hue-1': '50'
    });

    $mdThemingProvider.definePalette('defaultPrimary', {
      '50':  '#FFFFFF',
      '100': 'rgb(255, 198, 197)',
      '200': '#E75753',
      '300': '#E75753',
      '400': '#E75753',
      '500': '#E75753',
      '600': '#E75753',
      '700': '#E75753',
      '800': '#E75753',
      '900': '#E75753',
      'A100': '#E75753',
      'A200': '#E75753',
      'A400': '#E75753',
      'A700': '#E75753'
    });

        
});

app.controller('menuController', function($scope, $mdSidenav) {
	  $scope.toggleMenu = function() {
	    $mdSidenav('left').toggle();
	  };
});