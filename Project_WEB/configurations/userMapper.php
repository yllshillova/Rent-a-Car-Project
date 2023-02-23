<?php
require_once 'databaseConfig.php';
class UserMapper extends Database
{

    private $conn;
    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    public function getUserById($id)
    {

        $data = null;

        $query = "SELECT * FROM user WHERE userid = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function getUserByUsername($username)
    {
        $data = null;
        $query = "SELECT * FROM user WHERE username = '$username'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }

        return $data;
    }

    public function getUserByPassword($password){
        $data = null;
        $query = "SELECT * FROM user WHERE password = '$password'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }

        return $data;
    }

    public function getAllUsers()
    {
        $data = null;
        $query = "SELECT * FROM user";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insertUser($user)
    {
        $username = $user->getUsername();
        $userlastname = $user->getUserLastName();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole(); // error while setting it with md5 DO NOT MAKE IT AGAINNNNN 
        $query = "INSERT INTO user(username, userlastname,role , password) VALUES ('$username','$userlastname','$role', '$password')";
        if ($sql = $this->conn->query($query)) {
            $_SESSION['message'] = "Admin/User <strong>added</strong> succesfully!";
        } else {
            $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }


    public function editUser($userid)
    {

        $data = null;

        $query = "SELECT * FROM user WHERE userid = '$userid'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateUser($data)
    {
        $userid = $data['userid'];
        $username = $data['username'];
        $userlastname = $data['userlastname'];
        $password = $data['password'];
        $role = $data['role'];

        $query = "update user set username='$username', userlastname='$userlastname',
        password='$password' , role='$role' where userid='$userid'";


        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Admin/User has been <strong>updated</strong> succesfully!";
        } else {
           return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }

    public function deleteUser($userid)
    {

        $query = "DELETE FROM user where userid = '$userid'";
        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Admin/User has been <strong>deleted</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }





}



?>