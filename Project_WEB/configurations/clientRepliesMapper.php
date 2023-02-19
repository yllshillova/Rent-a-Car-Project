
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
        
        $client_message =$reply->getClientMessage();


        $query = "INSERT INTO client_replies(client_message) 
        VALUES ('$client_message')";
        if ($sql = $this->conn->query($query)) {
            echo "<script>alert('reply sent successfully');</script>";
            header('Location:HomePage.php');
        } else {
            echo "<script>alert('failed');</script>";
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
        $client_message = $data['client_message'];;

        $query = "update client_replies set  client_message='$client_message'";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteReply($client_id){
 
        $query = "DELETE FROM client_replies where client_ID = '$client_id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}




?>