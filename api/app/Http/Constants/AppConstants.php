<?php
namespace App\Http\Constants;

class AppConstants
{
    function SUCCESS()
    {
        return "Success";
    }
    
    function FAILURE()
    {
        return "Failure";
    }
    
    function USER_VALIDATION_ERROR_STATUS()
    {
        return "VALIDATION_ERROR";
    }
    
    function USER_VALIDATION_ERROR_MESSAGE()
    {
       return "Validation error occurs,please fill the required fields";
    }
    
    function USER_ALREADY_EXISTS_STATUS()
    {
        return "ALREADY_EXISTS";
    }
    
    function USER_ALREADY_EXISTS_MESSAGE()
    {
       return "An user with this email already exists";
    }
    
    function USER_INSERT_FAILURE_STATUS()
    {
       return "INSERT_FAILURE"; 
    }
    
    function USER_INSERT_FAILURE_MESSAGE()
    {
       return "User Registration Failed,Please try again"; 
    }
    
    function USER_INSERT_SUCCESS_STATUS()
    {
       return "INSERT_SUCCESS"; 
    }
    
    function USER_INSERT_SUCCESS_MESSAGE()
    {
       return "User Registration Success";
    }
    
    function LOGIN_SUCCESS_MESSAGE()
    {
       return "Login Success";
    }
    
    function LOGIN_FAILURE_MESSAGE()
    {
       return "Login Failure,Please check your credentials";
    }
    
    function LOGIN_SUCCESS_STATUS()
    {
       return "LOGIN_SUCCESS"; 
    }
    
    function LOGIN_FAILURE_STATUS()
    {
       return "LOGIN_FAILURE"; 
    }
}




