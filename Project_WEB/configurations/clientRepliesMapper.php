<?php
require_once 'databaseConfig.php';

class ClientRepliesMapper extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getClientReplyByID($client_ID)
    {
        $data = null;

        $query = "SELECT * FROM client_replies WHERE client_ID = '$client_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;

    }
    public function getAllClientReplies()
    {
        $data = null;
        $query = "SELECT * FROM client_replies";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function insertReply($reply)
    {

        $client_message = $reply->getClientMessage();


        $query = "INSERT INTO client_replies(client_message) VALUES ('$client_message')";
        if ($sql = $this->conn->query($query)) {
            $_SESSION['message'] = "Reply has been <strong>sent</strong> succesfully!";
        } else {
            $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }
    public function editReply($client_ID)
    {

        $data = null;

        $query = "SELECT * FROM client_replies WHERE client_ID = '$client_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateReply($data)
    {
        $client_ID = $data['client_ID'];
        $client_message = $data['client_message'];

        $query = "update client_replies set client_message='$client_message' where client_ID = '$client_ID'";

        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Preference has been <strong>updated</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }

    public function deleteReply($client_id)
    {

        $query = "DELETE FROM client_replies where client_ID = '$client_id'";
        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Reply has been <strong>deleted</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }


}




?>