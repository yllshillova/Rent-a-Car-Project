<?php

class Bookings
{
    protected $client_name;
    protected $client_email;
    protected $check_in_date;
    protected $check_out_date;
    protected $car_name;
    public function __construct($client_name, $client_email, $check_in_date,$check_out_date,$car_name)
    {
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->check_in_date = $check_in_date;
        $this->check_out_date = $check_out_date;
        $this->car_name = $car_name;
    }
    public function setSession(){
        $_SESSION['booking'] = "bookedCar";
    }   
    public function setCookie(){
        setcookie("client_name", $this->getBookingClientName(), time() + 2 * 24 * 60 * 60);
    }

    public function getBookingClientName(){
        return $this->client_name;
    }
    public function getBookingClientEmail(){
        return $this->client_email;
    }
    public function getBookingCheck_in_date(){
        return $this->check_in_date;
    }
    public function getBookingCheck_out_date(){
        return $this->check_out_date;
    }

    public function getBookingCarName(){
        return $this->car_name;
    }

}

?>