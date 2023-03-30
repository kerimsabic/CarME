<?php

class CarsDao {

    private $conn;
    private $host = 'localhost';
    private $database = 'carmarketplace';
    private $username = 'root';
    private $password = 'sifra';
   
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function query($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    function getAllCars() {
        $stmt = $this->query("SELECT * FROM cars");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCarById($car_id) {
        $stmt = $this->query("SELECT * FROM cars WHERE car_id = :car_id", ["car_id" => $car_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function addCar($car) {
        $this->query("INSERT INTO cars (manufacturer_id, model_id, category_id, engine_id, year, mileage, price, color, vin, dealer_id, numOfDors, emisions, seats, navigation, aircondition, parkingSensor_front, parkingSensor_rear,driveType_id) 
        VALUES (:manufacturer_id, :model_id, :category_id, :engine_id, :year, :mileage, :price, :color, :vin, :dealer_id, :numOfDors, :emisions, :seats, :navigation, :aircondition, :parkingSensor_front, :parkingSensor_rear, :driveType_id)", $car);
        $car['car_id'] = $this->conn->lastInsertId();
        return $car;
    }
}

?>