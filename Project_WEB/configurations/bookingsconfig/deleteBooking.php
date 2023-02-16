<?php 
    include '../bookingsMapper.php';
    $mapper = new BookingsMapper();
    $id = $_REQUEST['booking_ID'];
    $delete = $mapper->deleteBooking($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/BookingsManagement.php");
        echo "<script>alert('Booking deleted successfully');</script>";
    }
 ?>