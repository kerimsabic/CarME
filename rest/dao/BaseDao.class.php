<?php

require_once __DIR__ . '/../config.php';

class BaseDao{

    protected $connection;
    protected $table_name;


    public function __construct($table_name) {
        $this->table_name=$table_name;
        $host = Config::$host;
        $username = Config::$username;
        $password = Config::$password;
        $database = Config::$database;
        $port = Config::$port;
        $this->connection=new PDO("mysql:host=$host;dbname=$database;port:$port",$username,$password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }



    function query($query, $params = []) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    function get_all() {
        $stmt = $this->query("SELECT * FROM " . $this->table_name);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getById($id) {
        $stmt = $this->query("SELECT * FROM " . $this->table_name . " WHERE id = :id", ["id" => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($entity) {
        $query = "INSERT INTO " . $this->table_name . " (" ;
        foreach ($entity as $column => $value) {
            $query .= $column . ", ";
        }
        $query = substr($query, 0, -2);
        $query .= ") VALUES (";
        foreach ($entity as $column => $value) {
            $query .= ":" . $column . ", ";
        }
        $query = substr($query, 0, -2);
        $query .= ")";

        $stmt = $this->connection->prepare($query);
        $stmt->execute($entity); // sql injection prevention
        $entity['id'] = $this->connection->lastInsertId();
        return $entity;
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM " . $this->table_name . " WHERE id=:id");
        $stmt->bindParam(':id', $id); // SQL injection prevention
        $stmt->execute();
    }

    public function update($id, $entity, $id_column = "id") {
        $query = "UPDATE " . $this->table_name . " SET ";
        foreach ($entity as $column => $value) {
            $query .= $column . "= :" . $column . ", ";
        }
        $query = substr($query, 0, -2);
        $query .= " WHERE $id_column = :id";

        $stmt = $this->connection->prepare($query);
        $entity['id'] = $id;
        $stmt->execute($entity);
    }

    protected function query_unique($query, $params) {
        $results = $this->query($query, $params);
        return reset($results);
    }




    
        
    
}

?>