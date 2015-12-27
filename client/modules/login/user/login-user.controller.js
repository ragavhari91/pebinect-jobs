/* 
* Description:
* Created on: Dec 27, 2015 
* Modified on:
* Modified by:  
* Version: 
* Changes made since last version:
*/

(function () {

    angular.module('app').controller('userController', ['$scope', '$location','$state', userController]);
    
    function userController($scope,$location,$state){
        $scope.user = "Hello";
    }
}());


