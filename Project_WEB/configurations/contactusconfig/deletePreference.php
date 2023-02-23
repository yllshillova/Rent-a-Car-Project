<?php 
if (!isset($_SESSION)) {
    session_start();
  }
    include '../contact_usMapper.php';
    include '../../views/Dashboard/message.php';
    $mapper = new ContactUsMapper();
    $id = $_REQUEST['client_id'];
    $delete = $mapper->deleteClientPreference($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/Contactusmanagement.php");
    }
 ?>