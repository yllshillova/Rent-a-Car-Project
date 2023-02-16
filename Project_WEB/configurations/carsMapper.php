

<?php
require_once 'databaseConfig.php';

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

        $query = "SELECT * FROM cars WHERE car_id = '$car_id'";
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
        $query = "SELECT * FROM cars WHERE carname = '$carname'";
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

    public function insertCar($car)
    {
        

        $car_name = $car->getCarName();
        $car_price = $car->getCarPrice();
        $car_frontImage ='../img/'.$car->getCarFrontImage();
        $car_backImage = '../img/'.$car->getCarBackImage();


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

        $query = "SELECT * FROM cars WHERE car_id = '$car_id'";
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
        $car_name = $data['car_name'];
        $car_price = $data['car_price'];
        $car_frontImage = $data['car_frontImage'];
        $car_backImage = $data['car_backImage'];

        $query = "update cars set car_name='$car_name', car_price='$car_price',
        car_frontImage='$car_frontImage', car_backImage='$car_backImage' where car_id='$car_id'";


        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteCar($car_id){
 
        $query = "DELETE FROM cars where car_id = '$car_id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}




?>



