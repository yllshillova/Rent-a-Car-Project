<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/Dashboard/BookingsManagement.css?v=<?php echo time(); ?>">
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
                    <i class="fas fa-calendar-alt"></i>
                    <span class="text">Bookings Management</span>
                </div>


            </div>

            <div class="activity">
                <div class="table">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th class="heads">ID</th>
                                <th class="heads">Name</th>
                                <th class="heads">Email</th>
                                <th class="heads">Address</th>
                                <th class="heads">City</th>
                                <th class="heads">Check-in-date</th>
                                <th class="heads">Check-out-date</th>
                                <th class="heads">Card Name</th>
                                <th class="heads">Card Number</th>
                                <th class="heads">State</th>
                                <th class="heads">Zip</th>
                                <th class="heads">CVV</th>
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