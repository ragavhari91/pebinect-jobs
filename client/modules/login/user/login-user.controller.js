/* 
 Description: User registration controller 
 Created on: Dec 27, 2015 
 Modified on: Jan 31, 2016
 Modified by: Uva
 Version: 1.0
 Changes made since last version:
    Created userLoginController
*/
(function(){
    
    angular.module('app').controller('userLoginController', ['$scope', '$location', 'userLoginService', '$state' , userLoginController]);

    function userLoginController($scope, $location, userLoginService, $state) 
    {
        $scope.status_message = "";
        
        $scope.loginSubmit = function()
        {
            var data = {
                "user_email":$scope.email_id,
                "user_password":$scope.password
            };
            
            userLoginService.userLogin(data).then(function(response){
                
                if(response.status === "Failure")
                {
                    $scope.status_message = response.message;
                }
                else
                {
                    $scope.status_message = response.message; 
                }
               
            });
            
        }
    }
    
}());