<?php
if (!isset($_SESSION)) {
    session_start();
  }
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../LoginRegister.php');
}
?>
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

            <div class="activity2">
            <?php include_once('message.php'); ?>    
            <div class="boxx">
                    <a class="submitAdd" href="#divOne">Add new Booking</a>
                </div>
                <div class="overlay" id="divOne">
                    <div class="wrapper">
                        <h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
                        <div class="content">
                            <div class="containerr">
                                <?php
                                require_once '../../configurations/bookingsMapper.php';
                                require_once '../../configurations/bookingsconfig/bookings.php';
                                if (isset($_POST['submit'])) {
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
                                        if(empty($client_name) || empty($client_email) || empty($check_in_date) || empty($check_out_date) || empty($car_name)){
                                            $_SESSION['message'] = "All fields are <strong>required!</strong>";
                                            header('Location: BookingsManagement.php#');
                                            return;
                                        }
                                    $mapper = new BookingsMapper();
                                    $mapper->insertBooking($booking);
                                    header('Location: BookingsManagement.php#');
                                }

                                ?>
                                <form action="" method="POST">
                                    <label>Client Name</label>
                                    <input name="client_name" placeholder="Client name.." type="text">
                                    <label>Email</label>
                                    <input name="client_email" placeholder="clientemail@gmail.com" type="text">
                                    <label>Check in Date</label>
                                    <input name="check_in_date" placeholder="Ex. 20-04-2020 .." type="date">
                                    <label>Check out Date</label>
                                    <input name="check_out_date" placeholder="Ex. 10-05-2020.." type="date">
                                    <label>Car Name</label>
                                    <input name="car_name" type="text" placeholder="Car name.." id="car_name">
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
                                <th class="heads">ID</th>
                                <th class="heads">Name</th>
                                <th class="heads">Email</th>
                                <th class="heads">Check-in-date</th>
                                <th class="heads">Check-out-date</th>
                                <th class="heads">Car Name</th>
                                <th class="heads">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once '../../configurations/bookingsMapper.php';
                            $mapper = new BookingsMapper();
                            $allBookings = $mapper->getAllBookings();
                            foreach ($allBookings as $booking):
                                ?>
                                <tr>
                                    <td class="rows">
                                        <?php echo $booking['booking_ID'] ?>
                                    </td>
                                    <td class="rows">
                                        <?php echo $booking['client_name']; ?>
                                    </td>
                                    <td class="rows">
                                        <?php echo $booking['client_email']; ?>
                                    </td>
                                    <td class="rows">
                                        <?php echo $booking['check_in_date'] ?>
                                    </td>
                                    <td class="rows">
                                        <?php echo $booking['check_out_date']; ?>
                                    </td>
                                    <td class="rows">
                                        <?php echo $booking['car_name']; ?>
                                    </td>
                                    <td class="rows">
                                        &nbsp;<a
                                            href="../../configurations/bookingsconfig/editBooking.php?booking_ID=<?php echo $booking['booking_ID']; ?>"><i
                                                class="far fa-edit"></i></a> &nbsp;&nbsp;
                                        <a
                                            href="../../configurations/bookingsconfig/deleteBooking.php?booking_ID=<?php echo $booking['booking_ID']; ?>"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                                <?php
                            endforeach;

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