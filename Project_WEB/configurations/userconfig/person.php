<?php 

abstract class Person{

    protected $username;
    protected $userlastname;
    protected $password;
    protected $role;

    public function __construct($username,$userlastname,$password,$role){
        $this->username = $username;
        $this->userlastname = $userlastname;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();

    abstract protected function setCookie();

    protected function getUsername(){
        return $this->username;
    }

}



?>