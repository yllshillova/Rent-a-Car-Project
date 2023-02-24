<?php 
if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
}
    include '../bookingsMapper.php';
    include '../../views/Dashboard/message.php';
    $mapper = new BookingsMapper();
    $id = $_REQUEST['booking_ID'];
    $delete = $mapper->deleteBooking($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/BookingsManagement.php");
    }
 ?>