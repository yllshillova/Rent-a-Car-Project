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
                    <span class="text">Car Management </span>
                </div>




                <div class="activity">
                    <div class="boxx">
                        <a class="submitAdd" href="#divOne">Add new Car</a>
                    </div>
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="containerr">
                                    <form>
                                        <label>Car name</label>
                                        <input placeholder="Car name.." type="text">
                                        <label>Car price</label>
                                        <input placeholder="Car price.." type="text">
                                        <label>Car front Image</label>
                                        <input placeholder="Choose back image photo" type="file">
                                        <label>Car back Image</label>
                                        <input placeholder="Choose front image photo" type="file">
                                        <input type="submit" value="Submit">
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="rows"></td>
                                    <td class="rows"></td>
                                </tr>
                                <tr class="active-row">
                                    <td class="rows"></td>
                                    <td class="rows"></td>
                                </tr>
                                <!-- and so on... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </section>

    <script src="../../js/dashboard.js"></script>
</body>

</html>