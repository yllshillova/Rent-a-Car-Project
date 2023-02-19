<?php
require_once 'databaseConfig.php';
class UserMapper extends Database
{

    private $conn;
    public function __construct(){
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
        $role = $user->getRole();
        $password = password_hash($user->getPassword(),PASSWORD_BCRYPT); // error while setting it with md5 DO NOT MAKE IT AGAINNNNN 
        $query = "INSERT INTO user(username, userlastname, role, password) VALUES ('$username','$userlastname', '$role', '$password')";
        if ($sql = $this->conn->query($query)) {
            $_SESSION['message']= "Admin/User added succesfully";
            echo "<script>alert('records added successfully');</script>";
        } else {
            $_SESSION['message']= "Admin/User not added";
            echo "<script>alert('failed');</script>";
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
        $role = $data['role'];
        $password = $data['password'];

        $query = "update user set username='$username', userlastname='$userlastname',
         role='$role', password='$password' where userid='$userid'";


        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($userid){
 
        $query = "DELETE FROM user where userid = '$userid'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }





}



?>