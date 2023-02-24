<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
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