
<?php
require 'databaseConfig.php';

class CarsMapper extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getCarByID($car_id)
    {
        $data = null;

        $query = "SELECT * FROM cars WHERE userid = '$car_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;

    }

    public function getCarByCarName($carname)
    {
        $data = null;
        $query = "SELECT * FROM cars WHERE username = '$carname'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function getAllCars()
    {
        $data = null;
        $query = "SELECT * FROM cars";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // public function insertCar($car)
    // {
    //     $car['car_frontImage'] = '../../img/' .$car['car_frontImage'];
    //     $car['car_backImage'] = '../../img/' .$car['car_backImage'];

    //     $sql = "insert into cars(car_name,car_price,car_frontImage,car_backImage) values(:carname,:carprice,:carfrontImage,:carbackImage)";
    //     $car_name = $car->getCarName();
    //     $car_price = $car->getCarPrice();
    //     $car_frontImage = $car->getCarFrontImage();
    //     $car_backImage = $car->getCarBackImage();

    //     $statement = $this->conn->prepare($sql);
    //     $statement->bindParam(":carname", $car_name);
    //     $statement->bindParam(":carprice", $car_price);
    //     $statement->bindParam(":carfrontImage", $car_frontImage);
    //     $statement->bindParam(":carbackImage", $car_backImage);
    //     $statement->execute();
    //     echo "<script> alert('Product has been inserted successfuly!'); </script>";

    // }

 
    public function insertCar($car)
    {
        
        $car['car_frontImage'] = '../../img/' .$car['car_frontImage'];
        $car['car_backImage'] = '../../img/' .$car['car_backImage'];

        $car_name = $car->getCarName();
        $car_price = $car->getCarPrice();
        $car_frontImage = $car->getCarFrontImage();
        $car_backImage = $car->getCarBackImage();


        $query = "INSERT INTO cars(car_name, car_price, car_frontImage, car_backImage) 
        VALUES ('$car_name','$car_price', '$car_frontImage', '$car_backImage')";
        if ($sql = $this->conn->query($query)) {
            echo "<script>alert('records added successfully');</script>";
        } else {
            echo "<script>alert('failed');</script>";
        }
    }
    public function editCar($car_id)
    {

        $data = null;

        $query = "SELECT * FROM user WHERE car_id = '$car_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateCar($data)
    {
        $car_id = $data['car_id'];
        $car_name = $data->getCarName();
        $car_price = $data->getCarPrice();
        $car_frontImage = $data->getCarFrontImage();
        $car_backImage = $data->getCarBackImage();

        $query = "update cars set car_name='$car_name', car_price='$car_price',
        car_frontImage='$car_frontImage', car_backImage='$car_backImage' where car_id='$car_id'";


        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteUser($car_id){
 
        $query = "DELETE FROM cars where car_id = '$car_id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}




?>