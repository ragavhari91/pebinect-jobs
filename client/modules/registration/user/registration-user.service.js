(function () {

    angular.module('app').factory('userRegistrationService', ['$q', '$http', userRegistrationService]);

    function userRegistrationService($q, $http) {
        return {
            userRegistration: userRegistration,
        }
        
        function userRegistration(data)
        {
           return $http({method: 'POST',data: data,url: HOST + USER_REGISTRATION}).then(function(response){return response.data;})
        }
    }
}());