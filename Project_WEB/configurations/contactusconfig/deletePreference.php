<?php 
    include '../contact_usMapper.php';
    $mapper = new ContactUsMapper();
    $id = $_REQUEST['client_id'];
    $delete = $mapper->deleteClientPreference($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/Contactusmanagement.php");
        echo "<script>alert('Preference deleted successfully');</script>";
    }
 ?>