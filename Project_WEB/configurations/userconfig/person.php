<?php 

abstract class Person{

    protected $username;
    protected $userlastname;
    protected $role;
    protected $password;

    public function __construct($username,$userlastname,$role,$password){
        $this->username = $username;
        $this->userlastname = $userlastname;
        $this->role = $role;
        $this->password = $password;
    }

    abstract protected function setSession($username, $role);

    abstract protected function setCookie();


}



?>