<?php
require_once 'databaseConfig.php';
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

    public function insertPreference($contact)
    {
        

        $client_fullname = $contact->getClientFullName();
        $client_email =$contact->getClientEmail();
        $client_message =$contact->getClientMessage();


        $query = "INSERT INTO contact_us(client_fullname, client_email, client_message) 
        VALUES ('$client_fullname','$client_email', '$client_message')";
        if ($sql = $this->conn->query($query)) {
            echo "<script>alert('records added successfully');</script>";
            header('Location:HomePage.php');
        } else {
            echo "<script>alert('failed');</script>";
        }
    }
    public function editPreference($client_id)
    {

        $data = null;

        $query = "SELECT * FROM contact_us WHERE client_id = '$client_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updatePreference($data)
    {
        $client_id = $data['client_id'];
        $client_fullname = $data['client_fullname'];
        $client_email = $data['client_email'];
        $client_message = $data['client_message'];

        $query = "update contact_us set client_fullname='$client_fullname', client_email='$client_email',
        client_message='$client_message'  where client_id = '$client_id'";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
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
