<?php
require_once 'databaseConfig.php';

class BookingsMapper extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getBookingByID($booking_ID)
    {
        $data = null;

        $query = "SELECT * FROM bookings WHERE booking_ID = '$booking_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;

    }

    public function getBookingsByClientName($client_name)
    {
        $data = null;
        $query = "SELECT * FROM bookings WHERE client_name = '$client_name'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function getAllBookings()
    {
        $data = null;
        $query = "SELECT * FROM bookings";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insertBooking($booking)
    {
        $client_name = $booking->getBookingClientName();
        $client_email = $booking->getBookingClientEmail();
        $check_in_date = $booking->getBookingCheck_in_date();
        $check_out_date = $booking->getBookingCheck_out_date();
        $car_name = $booking->getBookingCarName();

        $query = "INSERT INTO bookings(client_name, client_email,check_in_date,check_out_date,car_name) 
        VALUES ('$client_name','$client_email','$check_in_date','$check_out_date','$car_name')";
        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Booking has been <strong>added</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }
    public function editBooking($booking_ID)
    {

        $data = null;

        $query = "SELECT * FROM bookings WHERE booking_ID = '$booking_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateBooking($data)
    {
        $query = "UPDATE bookings SET client_name='$data[client_name]', client_email='$data[client_email]',
        check_in_date='$data[check_in_date]',check_out_date='$data[check_out_date]', car_name= '$data[car_name]' WHERE booking_ID='$data[booking_ID]'";

        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Booking has been <strong>updated</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }

    public function deleteBooking($booking_ID)
    {

        $query = "DELETE FROM bookings where booking_ID = '$booking_ID'";
        if ($sql = $this->conn->query($query)) {
            return $_SESSION['message'] = "Booking has been <strong>deleted</strong> succesfully!";
        } else {
            return $_SESSION['message'] = "Something went <strong>wrong</strong>!";
        }
    }


}