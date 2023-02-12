<?php
require 'databaseConfig.php';
class UserMapper extends DatabasePDOConfiguration
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $sql = "select * from user where userid = :id";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByUsername($username)
    {
        $sql = "select * from user where username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $sql = "select * from user";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function insertUser($user)
    {
        $sql = "insert into user(username,userlastname,role,password) values (:name,:userlastname,:role,:password)";

        $username = $user->getUsername();
        $userlastname = $user->getUserLastName();
        $role = $user->getRole();
        $password = $user->getPassword();
        $pass = password_hash($password, PASSWORD_BCRYPT);


        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":name", $username);
        $statement->bindParam(":userlastname", $userlastname);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":password", $pass);
        $statement->execute();
        echo "<script> alert('User has been inserted successfuly!'); </script>";
    }


    public function deleteUser($userId)
    {
        $sql = "delete from user where id= :id";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        echo "<script>alert('delete was successful'); </script>";

    }




}



?>