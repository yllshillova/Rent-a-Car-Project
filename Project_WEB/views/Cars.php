<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['user']) || (trim ($_SESSION['user']) == '')){
    header('Location:LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="../css/CarsStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<body>

    <?php

    include '../components/header.php';
    ?>

    <section class="section2">
        <div class="container" id="section2">

            <div class="navbar2">
                <ul class="nav-items">
                    <li><a href="#">Available cars for rent</a></li>
                </ul>
            </div>

            <?php

            include_once '../configurations/carsMapper.php';
            $car = new CarsMapper();
            $allCars = $car->getAllCars();

            foreach ($allCars as $cars): ?>
                <?php
                echo '<div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="' . $cars['car_frontImage'] . '" />
                    </div>
                    <div class="flip-card-back">
                        <img src="' . $cars['car_backImage'] . '" />
                        <h3 name="carName">' . $cars['car_name'] . '</h3>
                        <h1 name="price">' . $cars['car_price'] . '</h1>
                        <div class="car-booking">
                            <a href="#divOne">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>';
                ?>
            <?php endforeach;
            ?>



            <?php
            require_once '../configurations/bookingsMapper.php';
            require_once '../configurations/bookingsconfig/bookings.php';
            if (isset($_POST['subBooking'])) {
                $client_name = $_POST['client_name'];
                $client_email = $_POST['client_email'];
                $check_in_date = $_POST['check_in_date'];
                $check_out_date = $_POST['check_out_date'];
                $car_name = $_POST['car_name'];
                $booking = new Bookings(
                    $client_name,
                    $client_email,
                    $check_in_date,
                    $check_out_date,
                    $car_name
                );
                $mapper = new BookingsMapper();
                if(empty($client_name) || empty($client_email) || empty($check_in_date) || empty($check_out_date) || empty($car_name)){
                    echo "<script>alert('All fields are required. Booking failed!');</script>";
                }
                else if($mapper->insertBooking($booking)){
                    echo "<script>alert('Booking made succesfully!');</script>";
                }
            }

            ?>
            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <div class="overlay" id="divOne">
                            <div class="wrapper">
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-50">
                                            <h2 class="rent">Booking Form</h2>
                                            <label for=""><i class="fa fa-user"></i>Name</label>
                                            <input name="client_name" type="text" id="fname" placeholder="John M. Doe">
                                            <label for=""><i class="fa fa-envelope"></i>Email</label>
                                            <input name="client_email" type="text" id="email" placeholder="john@example.com">
                                            <label for=""><i class="fas fa-calendar-week"></i>Check-in Date</label>
                                            <input name="check_in_date" type="date" id="checkin-date" >
                                            <label for=""><i class="fas fa-calendar-week"></i>Check-out Date</label>
                                            <input name="check_out_date" type="date" id="checkout-date">
                                            <label for=""><i class="fas fa-calendar-week"></i>Car Name</label>
                                            <input name="car_name" type="text" id="car_name">
                                            <hr>
                                            <!-- <p>Total <span class="price" style="color:black"><b></b></span></p> -->


                                            <input name="subBooking" type="submit" id="bookCar"
                                                value="Book your car now!" class="btn">
                                            <input type="submit" value="Cancel!" class="btn1"
                                                onclick="window.history.go(-1); ">
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- metoden qe i merr getCars -->
            <!-- <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto1kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto1Kategorit.jpg" />
                        <h3 name="carName">Kia Rio</h3>
                        <h1 name="price">$59,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto2Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto2Kategorit.jpg" />
                        <h3 name="carName">Kia Rio</h3>
                        <h1 name="price">$59,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto3Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto3Kategorit.jpg" />
                        <h3 name="carName">Kia Forte</h3>
                        <h1 name="price">$69,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto4Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto4Kategorit.jpg" />
                        <h3 name="carName">Genesis G70</h3>
                        <h1 name="price">$79,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto6Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto6Kategorit.jpg" />
                        <h3 name="carName">Nissan Maxima</h3>
                        <h1 name="price">$85,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto15Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto15Kategorit.jpg" />
                        <h3 name="carName">Porsche Panamera</h3>
                        <h1 name="price">$149,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto18Kategorite.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto18Kategorite.jpg" />
                        <h3 name="carName">BMW M4</h3>
                        <h1 name="price">$119,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto14Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto14Kategorit.jpg" />
                        <h3 name="carName">Jeep Ford</h3>
                        <h1 name="price">$69,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto13Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto13Kategorit.jpg" />
                        <h3 name="carName">Chevrolet S240</h3>
                        <h1 name="price">$99,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto11Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto11Kategorit.jpg" />
                        <h3 name="carName">Lexus Jeep</h3>
                        <h1 name="price">$99,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto10Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto10Kategorit.jpg" />
                        <h3 name="carName">Chevrolet L030</h3>
                        <h1 name="price">$99,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/auto9Kategorit.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <img src="../img/auto9Kategorit.jpg" />
                        <h3 name="carName">BMW X6 Series</h3>
                        <h1 name="price">$129,90 per day</h1>
                        <div class="car-booking">
                            <a href="bookings.php">Book yours now!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
        </div>
    </section>
    <?php

    include '../components/footer.php';
    ?>
</body>

</html>