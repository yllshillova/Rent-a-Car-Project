<?php 

abstract class Person{

    protected $username;
    protected $userlastname;
    protected $role;
    protected $password;

    public function __construct($username,$userlastname,$password, $role){
        $this->username = $username;
        $this->userlastname = $userlastname;
        $this->role = $role;
        $this->password = $password;
    }

    abstract protected function setSession($username);

    abstract protected function setCookie();


}



?>