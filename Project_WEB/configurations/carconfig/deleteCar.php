<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../carsMapper.php';
include '../../views/Dashboard/message.php';
$car = new CarsMapper();
$id = $_REQUEST['car_id'];
$delete = $car->deleteCar($id);

if ($delete) {
    header("Location:../../views/Dashboard/CarsManagement.php");
    echo "<script>alert('Car deleted successfully');</script>";
}
?>