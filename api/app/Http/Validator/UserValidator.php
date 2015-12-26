<?php
namespace App\Http\Validator;
use Validator;
use Illuminate\Http\Request;

class UserValidator 
{
    public function userRegistrationValidator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'emailId'=>'required',
            'password'=>'required'
        ]);
        
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
