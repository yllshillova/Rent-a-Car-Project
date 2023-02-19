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
            echo "<script>alert('records added successfully');</script>";
        } else {
            echo "<script>alert('failed');</script>";
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
        $query = "UPDATE bookings SET name='$data[client_name]', email='$data[client_email]',
        check_in_date='$data[check_in_date]',check_out_date='$data[check_out_date]' WHERE booking_ID='$data[booking_ID]'";
 
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
    
    public function deleteBooking($booking_ID){
 
        $query = "DELETE FROM bookings where booking_ID = '$booking_ID'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}
