<?php
namespace App\Http\Service;
use App\Http\Model\User;
use App\Http\Model\Session;
use App\Http\Constants\AppConstants;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Hash;

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
       
       $logincount = $user->where('user_email', $user->user_email)->where('user_password',md5($user->user_password))->count(); //Getting row for corresponding email

       
       /* if (Hash::check($user->user_password, $hashedPassword))
        {
            $result = $constants->LOGIN_SUCCESS_STATUS();
        }
        else
        {
            $result = $constants->LOGIN_FAILURE_STATUS();
        }*/
       
       if($logincount > 0)
       {
           $result = $constants->LOGIN_SUCCESS_STATUS();
       }
       else
       {
           $result = $constants->LOGIN_FAILURE_STATUS();
       }
       return $result;
    }
    
    private function getUserID(User $user)
    {
        $result  = $user->where('user_email',$user->user_email)->value('id');
        return $result;
    }
    
    
    public function createSession(User $user)
    {
        $current_time =  Carbon::now()->timestamp;
        $token = str_random(10).$current_time; 
        $ip = Request::ip();
        $userid = $this->getUserID($user);
        $session_status = 1000;
        
        
        $session = new Session();
        $session->user_id = $userid;
        $session->session_id = $token;
        $session->datetime = $current_time;
        $session->ip_address = $ip;
        $session->session_status = $session_status;
        
        
        if($session->save())
        {
            $response = array("session_status"=>"True","session"=>$session);
        }
        else
        {
            $response = array("session_status"=>"False","session"=>"");
        }
        return $response;
         
    }
    
}
