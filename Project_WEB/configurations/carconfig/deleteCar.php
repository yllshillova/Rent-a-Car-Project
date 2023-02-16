<?php 
    include '../carsMapper.php';
    $car = new CarsMapper();
    $id = $_REQUEST['car_id'];
    $delete = $car->deleteCar($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/CarsManagement.php");
        echo "<script>alert('Car deleted successfully');</script>";
    }
 ?>