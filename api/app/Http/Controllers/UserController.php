<?php

use Illuminate\Http\Request;
use App\Http\Model\User;
use App\Http\Service\UserService;
use App\Http\Validator\UserValidator;


class UserController 
{
   public function register(Request $request)
   {
           $user                =   new User();
           $userService         =   new UserService();
           $uservalidator       =   new UserValidator();
           
           $response            =   array();
           
           if(!$uservalidator->userRegistrationValidator($request))
           {
                $response        =   array("status"=>"failure","message"=>"Validation Error Occurs");
           }
           else
           {
                $user->first_name    =   $request->firstName;
                $user->last_name     =   $request->lastName;
                $user->email_id      =   $request->emailId;
                $user->password      =   $request->password;
                
                $response            =   $userService->createuser($user);  
           }
           
        return $response;   
   }
   
   public function login(Request $request)
   {
        
   }
}
