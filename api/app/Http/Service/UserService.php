<?php
namespace App\Http\Service;
use App\Http\Model\User;
use App\Http\Constants\AppConstants;

class UserService 
{
    public function createuser(User $user)
    {
       $constants   =   new AppConstants();
       
       if($this->isUserExist($user->user_email))
       {
           $result = $constants->USER_ALREADY_EXISTS_STATUS();
       }
       else
       {
            if($user->save())
            {
                $result = $constants->USER_INSERT_SUCCESS_STATUS();
            }
            else
            {
                $result = $constants->USER_INSERT_FAILURE_STATUS();
            }
       }
      
       return $result;
    }
    
    private function isUserExist($user_email)
    {
       $user    = new User();
       $result  = $user->where('user_email','=',$user_email)->count();
       if($result != 0)
       {
            $userExist  = true;
       }
       else
       {
            $userExist = false;
       }
       return $userExist;
    }
    
    public function loginuser(User $user)
    {
       $constants   =   new AppConstants();
       $result      =   $user->where('user_email',$user->user_email)->where('user_password',$user->user_password)->first();
       
            if($result == null)
            {
                $result = $constants->LOGIN_FAILURE_STATUS();
            }
            else
            {
                $result = $constants->LOGIN_SUCCESS_STATUS();
            }
       
       return $result;
    }
}
