
<?php
require 'databaseConfig.php';

class CarsMapper extends DatabasePDOConfiguration
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getCarByID($car_id)
    {
        $sql = "select * from cars where car_id = :id";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":id", $car_id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function getCarByCarName($carname)
    {
        $sql = "select * from cars where car_name = :carname";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":carname", $carname);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getAllCars()
    {

        $sql = "select * from cars";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;

    }


    public function insertCar($car)
    {
        $car['car_frontImage'] = '../../img/' .$car['car_frontImage'];
        $car['car_backImage'] = '../../img/' .$car['car_backImage'];

        $sql = "insert into cars(car_name,car_price,car_frontImage,car_backImage) values(:carname,:carprice,:carfrontImage,:carbackImage)";
        $car_name = $car->getCarName();
        $car_price = $car->getCarPrice();
        $car_frontImage = $car->getCarFrontImage();
        $car_backImage = $car->getCarBackImage();

        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":carname", $car_name);
        $statement->bindParam(":carprice", $car_price);
        $statement->bindParam(":carfrontImage", $car_frontImage);
        $statement->bindParam(":carbackImage", $car_backImage);
        $statement->execute();
        echo "<script> alert('Product has been inserted successfuly!'); </script>";

    }

    public function deleteCar($car_id){
        $sql = "delete from cars where car_id = :id";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(":id", $car_id);
        $statement->execute();
        echo "<script>alert('delete was successful'); </script>";
    }



}




?>