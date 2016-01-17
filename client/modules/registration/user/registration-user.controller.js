(function(){
    
    angular.module('app').controller('userController', ['$scope', '$location', 'userRegistrationService', '$state' , userController]);

    function userController($scope, $location, userRegistrationService, $state) 
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