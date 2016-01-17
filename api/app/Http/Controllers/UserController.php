<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Model\User;
use App\Http\Model\Response;
use App\Http\Service\UserService;
use App\Http\Validator\UserValidator;
use App\Http\Constants\AppConstants;



class UserController extends Controller
{
   public function register(Request $request)
   {
           $user                =   new User();
           $userService         =   new UserService();
           $uservalidator       =   new UserValidator();
           $response            =   new Response();
           $constants           =   new AppConstants();
           
           
           if(!$uservalidator->userRegistrationValidator($request))
           {
                $response->setResponseStatus($constants->FAILURE());
                $response->setResponseMessage($constants->USER_VALIDATION_ERROR_MESSAGE());
           }
           else
           {             
                $user->user_first_name    =   $request->user_first_name;
                $user->user_last_name     =   $request->user_last_name;
                $user->user_email         =   $request->user_email;
                $user->user_password      =   $request->user_password;
                
                $result          =   $userService->createuser($user);  
                
                if($result == $constants->USER_INSERT_SUCCESS_STATUS())
                {
                    $response->setResponseStatus($constants->SUCCESS());
                    $response->setResponseMessage($constants->USER_INSERT_SUCCESS_MESSAGE());
                }
                else if($result == $constants->USER_ALREADY_EXISTS_STATUS())
                {
                    $response->setResponseStatus($constants->FAILURE());
                    $response->setResponseMessage($constants->USER_ALREADY_EXISTS_MESSAGE());
                }
                else
                {
                    $response->setResponseStatus($constants->FAILURE());
                    $response->setResponseMessage($constants->USER_INSERT_FAILURE_MESSAGE());
                }
           } 
        return json_encode(array("status"=>$response->getResponseStatus(),"message"=>$response->getResponseMessage()));   
   }
   
   public function login(Request $request)
   {
        
   }
}
