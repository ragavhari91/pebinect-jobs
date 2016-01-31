/* 
 Description: User registration controller 
 Created on: Dec 27, 2015 
 Modified on: Jan 03, 2016
 Modified by: Ragav
 Version: 1.0
 Changes made since last version:
    Changed the controller from userController to userRegistrationController
*/
(function(){
    
    angular.module('app').controller('userRegistrationController', ['$scope', '$location', 'userRegistrationService', '$state' , userRegistrationController]);

    function userRegistrationController($scope, $location, userRegistrationService, $state) 
    {
        $scope.status_message = "";
        
        $scope.registrationSubmit = function()
        {
            var data = {
                "user_first_name":$scope.first_name,
                "user_last_name":$scope.last_name,
                "user_email":$scope.email_id,
                "user_password":$scope.password
            };
            
            userRegistrationService.userRegistration(data).then(function(response){
                
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