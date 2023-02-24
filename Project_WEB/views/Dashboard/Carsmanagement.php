<?php
if (!isset($_SESSION)) {
    session_start();
  }
if(!isset($_SESSION['user']) || (trim ($_SESSION['user']) == '')){
    header('Location:../LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/Dashboard/CarsManagement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/Dashboard/tables.css?v=<?php echo time(); ?>">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <?php
    include 'sidebar.php';
    ?>
    <section class="dashboard">
        <div class="top">
            <i class="fas fa-bars sidebar-toggle"></i>


        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fas fa-car-side"></i>
                    <span class="text">Cars Management </span>
                </div>

                <div class="activity2">
                <?php include_once('message.php'); ?>
                <div class="boxx">
                        <a class="submitAdd" href="#divOne">Add new Car</a>
                    </div>
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="containerr">
                                    <?php
                                    require_once '../../configurations/carsMapper.php';
                                    require_once '../../configurations/carconfig/car.php';
                                    if (isset($_POST['submit'])) {
                                        $car_name = $_POST['car_name'];
                                        $car_price = $_POST['car_price'];
                                        $car_frontImage = $_POST['car_frontImage'];
                                        $car_backImage = $_POST['car_backImage'];
                                            $car = new Car(
                                                $car_name,
                                                $car_price,
                                                $car_frontImage,
                                                $car_backImage
                                            );
                                            if(empty($car_name) || empty($car_price) || empty($car_frontImage) || empty($car_backImage || strlen($data['car_frontImage']) < 8 ||
                                            strlen($data['car_backImage']) < 8)){
                                                $_SESSION['message'] = "All fields are <strong>required!</strong>";
                                                header('Location: CarsManagement.php#');
                                                return;
                                            }
                                            $mapper = new CarsMapper();
                                            $mapper->insertCar($car);
                                            header('Location: CarsManagement.php#');
                                        } 

                                    ?>
                                    <form action="" method="POST">
                                        <label>Car name</label>
                                        <input name="car_name" placeholder="Car name.." type="text">
                                        <label>Car price</label>
                                        <input name="car_price" placeholder="Car price.." type="text">
                                        <label>Car front Image</label>
                                        <input name="car_frontImage" type="file">
                                        <label>Car back Image</label>
                                        <input name="car_backImage" type="file">
                                        <input name="submit" class="subBtn" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th class="heads">Car ID</th>
                                    <th class="heads">Car Name</th>
                                    <th class="heads">Car Price</th>
                                    <th class="heads">Car Front Image</th>
                                    <th class="heads">Car Back Image</th>
                                    <th class="heads">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../../configurations/carsMapper.php';
                                $cars = new CarsMapper();
                                $allCars = $cars->getAllCars();
                                foreach ($allCars as $car) {
                                    ?>
                                    <tr>
                                        <td class="rows">
                                            <?php echo $car['car_id'] ?>
                                        </td>
                                        <td class="rows">
                                            <?php echo $car['car_name']; ?>
                                        </td>
                                        <td class="rows">
                                            <?php echo $car['car_price']; ?>
                                        </td>
                                        <td class="rows">
                                            <?php echo $car['car_frontImage']; ?>
                                        </td>
                                        <td class="rows">
                                            <?php echo $car['car_backImage']; ?>
                                        </td>
                                        <td class="rows">
                                            &nbsp;<a
                                                href="../../configurations/carconfig/editCar.php?car_id=<?php echo $car['car_id']; ?>"><i
                                                    class="far fa-edit"></i></a> &nbsp;&nbsp;
                                            <a
                                                href="../../configurations/carconfig/deleteCar.php?car_id=<?php echo $car['car_id']; ?>"><i
                                                    class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </section>

    <script src="../../js/dashboard.js"></script>
</body>

</html>