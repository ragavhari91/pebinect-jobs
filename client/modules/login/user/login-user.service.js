/* 
* Description: User login service
* Created on: Dec 27, 2015 
* Modified on: Jan 31, 2016
* Modified by: Uva
* Version: 1.0
* Changes made since last version:
*   Created userLoginService
*/

(function () {

    angular.module('app').factory('userLoginService', ['$q', '$http', userLoginService]);

    function userLoginService($q, $http) {
        return {
            userLogin: userLogin,
        }
        
        function userLogin(data)
        {
           return $http({method: 'POST',data: data,url: HOST + USER_LOGIN}).then(function(response){return response.data;})
        }
    }
}());