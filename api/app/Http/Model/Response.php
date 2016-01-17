<?php
namespace App\Http\Model;
class Response
{
    private $response_status;
    private $response_message;
    
    public function getResponseStatus()
    {
        return $this->response_status;
    }
    
    public function setResponseStatus($response_status)
    {
        $this->response_status = $response_status;
    }
            
    public function getResponseMessage()
    {
        return $this->response_message;
    }
    
    public function setResponseMessage($response_message)
    {
        $this->response_message = $response_message;
    }
}

