<?php 
if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
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