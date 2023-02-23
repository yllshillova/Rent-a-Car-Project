<?php
if (!isset($_SESSION)) {
    session_start();
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

    <title>Bookings Management</title>
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
                    <span class="text">Bookings Management</span>
                </div>
                <div class="activity2">
                    <div class="overlay2" id="divOne">
                        <div class="wrapper2">
                            <h2>Booking Update form</h2>
                            <div class="content">
                                <div class="containerr2">
                                    <?php
                                    require_once '../bookingsMapper.php';
                                    $mapper = new BookingsMapper();
                                    $id = $_REQUEST['booking_ID'];
                                    $booking = $mapper->editBooking($id);
                                    if (isset($_POST['update'])) {


                                        if (
                                            isset($_POST['client_name']) && isset($_POST['client_email']) &&
                                            isset($_POST['check_in_date']) && isset($_POST['check_out_date']) &&
                                            isset($_POST['car_name'])
                                        ) {
                                            $data['booking_ID'] = $id;
                                            $data['client_name'] = $_POST['client_name'];
                                            $data['client_email'] = $_POST['client_email'];
                                            $data['check_in_date'] = $_POST['check_in_date'];
                                            $data['check_out_date'] = $_POST['check_out_date'];
                                            $data['car_name'] = $_POST['car_name'];
                                            $update = $mapper->updateBooking($data);
                                            if (
                                                empty($data['client_name']) || empty($data['client_email']) ||
                                                empty($data['check_in_date']) || empty($data['check_out_date']) || empty($data['car_name'])
                                            ) {
                                                $_SESSION['message'] = "Update failed, all fields are <strong>required!</strong> Possible loss of data.";
                                                echo "<script>window.location.href = '../../views/Dashboard/Bookingsmanagement.php';</script>";
                                                return;
                                            } else if (
                                                !(empty($data['client_name']) || empty($data['client_email']) ||
                                                    empty($data['check_in_date']) || empty($data['check_out_date']) || empty($data['car_name']))
                                            ) {
                                                if ($update) {
                                                    echo "<script>window.location.href = '../../views/Dashboard/Bookingsmanagement.php';</script>";
                                                }
                                                return;
                                            }
                                        } else {
                                            $_SESSION['message'] = "Something went <strong>wrong</strong>!";
                                            echo "<script>window.location.href = '../../views/Dashboard/Bookingsmanagement.php';</script>";
                                        }
                                    }


                                    ?>
                                    <form action="" method="POST">
                                        <label>Client Name</label>
                                        <input name="client_name" placeholder="Client name.." type="text"
                                            value="<?php echo $booking['client_name'] ?>">
                                        <label>Email</label>
                                        <input name="client_email" placeholder="clientemail@gmail.com" type="text"
                                            value="<?php echo $booking['client_email'] ?>">
                                        <label>Check in Date</label>
                                        <input name="check_in_date" placeholder="Ex. 20-04-2020 .." type="date"
                                            value="<?php echo $booking['check_in_date'] ?>">
                                        <label>Check out Date</label>
                                        <input name="check_out_date" placeholder="Ex. 10-05-2020.." type="date"
                                            value="<?php echo $booking['check_out_date'] ?>">
                                        <label for=""><i class="fas fa-calendar-week"></i>Car Name</label>
                                        <input name="car_name" type="text" id="checkout-date"
                                            value="<?php echo $booking['car_name'] ?>">
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