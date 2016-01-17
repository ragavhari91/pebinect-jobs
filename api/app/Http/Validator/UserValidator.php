<?php
namespace App\Http\Validator;
use Validator;
use Illuminate\Http\Request;


class UserValidator
{
    public function userRegistrationValidator(Request $request)
    {
        $validator = Validator::make($request->all(), array(
            'user_first_name' => 'required',
            'user_last_name' => 'required',
            'user_email'=>'required',
            'user_password'=>'required'
        ));
        
        $response = "";
       
       if ($validator->fails()) 
       {
           $response = false;
       }
       else
       {
           $response = true;
       }
      return $response;
    }
}
