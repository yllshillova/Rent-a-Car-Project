<?php
if (!isset($_SESSION)) {
    session_start();
}


include_once '../userMapper.php';
include_once '../userconfig/adminUser.php';
include_once '../userconfig/simpleUser.php';

if (isset($_POST['signin-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verify();
} else if (isset($_POST['signup-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->registerUser();
} else {
    header("Location: ../../views/LoginRegister.php");
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
        if ($this->verifyCorrectData($this->username, $this->password)) {
            header("Location: ../../views/HomePage.php");
        } else if ($this->verifyEmptyData($this->username, $this->password)) {
            header("Location:../../views/LoginRegister.php");
        } else if ($this->verifyUnknownUser($this->username)) {
            header("Location: ../../views/LoginRegister.php");
        } else if ($this->verifyPassword($this->password)) {
            header("Location: ../../views/LoginRegister.php");
        } else {
            header("Location: ../../views/LoginRegister.php");
        }
    }

    private function verifyEmptyData($username, $password)
    {

        if (empty($username) || empty($password)) {
            return $_SESSION['message'] = "Username and password required!";
        }

        return false;
    }

    private function verifyUnknownUser($username)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        $sql = "select * from user where username = '$username'";
        $result = mysqli_query($mapper->getConnection(), $sql);
        if (mysqli_num_rows($result) == 0 || $user == null) {
            return $_SESSION['message'] = "User doesnt exist!";
        }
    }
    private function verifyPassword($password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByPassword($password);
        if (!password_verify($password, $user['password'])) {
            $_SESSION['message'] = "Password incorrect!";
            return true;
        }
    }
    private function verifyCorrectData($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        // echo "User is: ".$user;  
        if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $admin = new AdminUser($user['username'], $user['userlastname'], $user['password'], $user['role']);
                $admin->setSession($admin->getUsername());
            } else if ($user['role'] == 0) {
                $simple = new SimpleUser($user['username'], $user['userlastname'], $user['password'], $user['role']);
                $simple->setSession($simple->getUsername());
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
        $mapper = new UserMapper();
        $query = "SELECT * FROM user WHERE username='$this->username'";
        $result = $mapper->getConnection()->query($query);
        if ($result->num_rows > 0) {
            $_SESSION['message'] = "Username is <strong>taken!</strong> Try again.";
            header("Location: ../../views/LoginRegister.php");
        }
        else if(empty($this->username) || empty($this->lastname) || empty($this->password)) {
            $_SESSION['message'] = "All fields are <strong>required</strong>to sign up!";
            header("Location: ../../views/LoginRegister.php");
        }
        else if (
            ($this->username === "yll" && $this->lastname === "shillova")
            || ($this->username === "fazli" && $this->lastname === "thaqi")
        ) {
            $user = new AdminUser($this->username, $this->lastname, $this->password, 1);
            $mapper = new UserMapper();
            $user->setSession($user->getUsername());
            $mapper->insertUser($user);
            header("Location: ../../views/HomePage.php");
        }
        else {
            $user = new SimpleUser($this->username, $this->lastname, $this->password, 0);
            $mapper = new UserMapper();
            $user->setSession($user->getUsername());
            $mapper->insertUser($user);
            header("Location: ../../views/HomePage.php");
        }
    }



}








?>