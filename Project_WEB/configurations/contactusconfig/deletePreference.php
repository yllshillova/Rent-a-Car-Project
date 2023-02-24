<?php 
if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
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