<?php

class Reply
{
    protected $client_message;

    public function __construct($client_message)
    {
        $this->client_message = $client_message;
    }
    public function setSession(){
        $_SESSION['reply'] = "ClientReply";
    }   
    public function setCookie(){
        setcookie("client_message", $this->getClientMessage(), time() + 2 * 24 * 60 * 60);
    }

    public function getClientMessage(){
        return $this->client_message;
    }




}

?>