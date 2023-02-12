<?php

class Car
{
    protected $car_name;
    protected $car_price;
    protected $car_frontImage;
    protected $car_backImage;

    public function __construct($car_name, $car_price,$car_frontImage,$car_backImage)
    {
        $this->car_name = $car_name;
        $this->car_price = $car_price;
        $this->car_frontImage = $car_frontImage;
        $this->car_backImage = $car_backImage;
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
    public function getCarFrontImage(){
        return $this->car_frontImage;
    }
    public function getCarBackImage(){
        return $this->car_backImage;
    }



}

?>