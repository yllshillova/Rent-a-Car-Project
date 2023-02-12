<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="../css/CarsStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/HomePage.css?v=<?php echo time(); ?>">
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
 
            <!-- metoden qe i merr getCars -->
            <div class="flip-card">
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

            </div>
        </div>
    </section>
    <?php

    include '../components/footer.php';

    ?>
</body>

</html>