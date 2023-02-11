<?php

class Car
{
    protected $car_name;
    protected $car_price;

    public function __construct($car_name, $car_price)
    {
        $this->car_name = $car_name;
        $this->car_price = $car_price;
    }

    public function setSession(){
        $_SESSION['car_name'] = "simpleCar";
    }   
    public function setCookie(){
        setcookie("car_name", $this->getCarName(), time() + 2 * 24 * 60 * 60);
    }

    public function getCarName(){
        return $this->car_name;
    }


    public function getCarPrice(){
        return $this->car_price;
    }


}

?>