<?php 
if (!isset($_SESSION)) {
    session_start();
  }
    include '../clientRepliesMapper.php';
    $mapper = new ClientRepliesMapper();
    $id = $_REQUEST['client_ID'];
    $delete = $mapper->deleteReply($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/Clientrepliesmanagement.php");
        echo "<script>alert('Reply deleted successfully');</script>";
    }
 ?>