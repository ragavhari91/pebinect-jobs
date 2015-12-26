(function () {

    angular.module('app').controller('userController', ['$scope', '$location','$state', userController]);
    
    function userController($scope,$location,$state){
        $scope.user = "Hello";
    }
}());


