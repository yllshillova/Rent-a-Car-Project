<?php

class Contact
{
    protected $client_fullname;
    protected $client_email;
    protected $client_message;

    public function __construct($client_fullname,$client_email,$client_message)
    {
        $this->client_fullname = $client_fullname;
        $this->client_email = $client_email;
        $this->client_message = $client_message;
    }
    public function setSession(){
        $_SESSION['contact'] = "ClientPreference";
    }   
    public function setCookie(){
        setcookie("client_fullname", $this->getClientFullName(), time() + 2 * 24 * 60 * 60);
    }

    public function getClientFullName(){
        return $this->client_fullname;
    }

    public function getClientEmail(){
        return $this->client_email;
    }

    public function getClientMessage(){
        return $this->client_message;
    }




}

?>