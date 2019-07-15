<?php
class Database
{
    // DB Params
    private $host = 'localhost';
    private $db_name = "merch-tracker";
    private $username = "root";
    private $password = "123456";
    // User with fewer permissions
    // $username = "schwam_merch_usr"; 
    // $password = "123456";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
