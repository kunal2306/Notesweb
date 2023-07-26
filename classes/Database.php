<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'notesweb3';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    private function connect() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
