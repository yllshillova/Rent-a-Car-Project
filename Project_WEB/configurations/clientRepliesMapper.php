
<?php
require 'databaseConfig.php';

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