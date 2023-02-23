<?php
require_once 'person.php';

class AdminUser extends Person{

    public function __construct($username,$userlastname,$password, $role){
        parent::__construct($username, $userlastname,$password, $role);

    }

    public function setSession($username){
        $_SESSION['role'] = '1';
        $_SESSION['roleName'] = "Administrator";
        $_SESSION['user'] = $username;
    }   

    public function setCookie(){
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }


    public function getUserLastName(){
        return $this->userlastname;
    }

    public function setUserLastName($userlastname){
        $this->userlastname = $userlastname;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

}



?>