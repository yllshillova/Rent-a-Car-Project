<?php 
if (!isset($_SESSION)) {
    session_start();
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