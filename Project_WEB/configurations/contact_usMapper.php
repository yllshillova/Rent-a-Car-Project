<?php
require 'databaseConfig.php';
class ContactUsMapper extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getClientPreferencebyID($id)
    {

        $data = null;

        $query = "SELECT * FROM contact_us WHERE client_id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function getClientPreferenceByFullname($fullname)
    {
        $data = null;
        $query = "SELECT * FROM contact_us WHERE client_fullname = '$fullname'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function getAllClientPreferences()
    {
        $data = null;
        $query = "SELECT * FROM contact_us";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function deleteClientPreference($client_id){
 
        $query = "DELETE FROM contact_us where client_id = '$client_id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

}
