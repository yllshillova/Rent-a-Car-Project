<?php
session_start();
include_once '../userMapper.php';
include_once '../userconfig/adminUser.php';
include_once '../userconfig/simpleUser.php';

if (isset($_POST['signin-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verify();
} else if (isset($_POST['signup-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->registerUser();
}
else{
    header("Location: ../../views/HomePage.php");
}

class LoginLogic
{

    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verify()
    {
        if ($this->verifyEmptyData($this->username, $this->password)) {
            header("Location:../../views/LoginRegister.php");
        } else if ($this->verifyCorrectData($this->username, $this->password)) {
            header("Location: ../../views/HomePage.php");
        } else {
            header("Location: ../../views/LoginRegister.php");
        }
    }

    private function verifyEmptyData($username, $password)
    {

        if (empty($username) || empty($password)) {
            return true;
        }

        return false;
    }

    private function verifyCorrectData($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0)
            return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new AdminUser($user['username'],$user['userlastname'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['username'],$user['userlastname'], $user['password'], $user['role']);
                $obj->setSession();
            }
            return true;
        } else
            return false;

    }

}


class RegisterLogic
{

    private $username = "";
    private $lastname = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['signup-username'];
        $this->lastname = $formData['signup-lastname'];
        $this->password = $formData['signup-password'];

    }

    public function registerUser()
    {
        if ($this->username === "yll" || $this->username === "fazli") {
            $user = new AdminUser($this->username, $this->lastname, $this->password, 1);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../../views/LoginRegister.php");
        }
        else{
            $user = new SimpleUser($this->username, $this->lastname, $this->password, 0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../../views/LoginRegister.php");
        }
    }



}








?>