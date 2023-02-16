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

    <title>Users Management</title>
</head>

<body>
    
    <?php
    include '../../views/Dashboard/actionsSidebar.php';
    ?>
    <section class="dashboard">
        <div class="top">
            <i class="fas fa-bars sidebar-toggle"></i>


        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fas fa-users-cog"></i>
                    <span class="text">Cars Management</span>
                </div>
                <div class="activity">
                    <div class="overlay2" id="divOne">
                        <div class="wrapper2">
                            <h2>Car Updating form</h2>
                            <div class="content">
                                <div class="containerr2">
                                    <?php
                                    require_once '../carsMapper.php';
                                    $mapper = new CarsMapper();
                                    $id = $_REQUEST['car_id'];
                                    $car = $mapper->editCar($id);
                                    if (isset($_POST['update'])) {
                                        if (
                                            isset($_POST['car_name']) && isset($_POST['car_price']) &&
                                            isset($_POST['car_frontImage']) && isset($_POST['car_backImage'])
                                        ) {
                                            $data['car_id'] = $id;
                                            $data['car_name'] = $_POST['car_name'];
                                            $data['car_price'] = $_POST['car_price'];
                                            $data['car_frontImage'] ='../img/'. $_POST['car_frontImage'];
                                            $data['car_backImage'] ='../img/'. $_POST['car_backImage'];
                                            $update = $mapper->updateCar($data);
                                            if ($update) {
                                                echo "<script>alert('Car updated successfully');</script>";
                                                echo "<script>window.location.href = '../../views/Dashboard/Carsmanagement.php';</script>";
                                            } else {
                                                echo "<script>alert('Car update failed');</script>";
                                                echo "<script>window.location.href = '../../views/Dashboard/Carsmanagement.php';</script>";
                                            }
                                        } else {
                                            echo "<script>alert('empty');</script>";
                                            echo "<script>window.location.href = ' ../../configurations/carconfig/editCar.php?car_id=$id';</script>";
                                        }
                                    }


                                    ?>
                                    <form action="" method="POST">
                                        <label>Car name</label>
                                        <input name="car_name" placeholder="Car name.." type="text" value="<?php echo $car['car_name'] ?>">
                                        <label>Car price</label>
                                        <input name="car_price" placeholder="Car price.." type="text" value="<?php echo $car['car_price'] ?>">
                                        <label>Car front Image</label>
                                        <input name="car_frontImage" id="foto" type="file" value="<?php echo $car['car_frontImage'] ?>">
                                        <label>Car back Image</label>
                                        <input name="car_backImage" id="foto" type="file" value="<?php echo $car['car_backImage'] ?>">
                                        <input name="update" class="submitBtn" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>

    <script src="../../js/dashboard.js"></script>
</body>



</html>