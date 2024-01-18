<?php
// using PDO
class Database {

    private static $instance;
    private $db;

    private function __construct($dataSourceName, $username, $password) {
        // Create database connection
        $this->db = new PDO($dataSourceName, $username, $password);

        // Set the PDO error mode to exception
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance($dataSourceName, $username, $password) {
        if (!self::$instance) {
            self::$instance = new self($dataSourceName, $username, $password);
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->db;
    }

    public function closeConnection() {
        $this->db = null; // Close connection in PDO
    }

    // Begin a transaction
    public function beginTransaction() {
        $this->db->beginTransaction();
    }

    // Commit the current transaction
    public function commit() {
        $this->db->commit();
    }

    // Roll back the current transaction
    public function rollback() {
        $this->db->rollBack();
    }
}


// using mysqli
// class Database {

//     private static $instance;
//     private $db;

//     private function __construct($host, $dbname, $username, $password) {
//         // Create database connection
//         $this->db = new mysqli($host, $username, $password, $dbname);

//         if ($this->db->connect_error) {
//             die("Database connection failed: " . $this->db->connect_error);
//         }
//     }

//     public static function getInstance($host, $dbname, $username, $password) {
//         if (!self::$instance) {
//             self::$instance = new self($host, $dbname, $username, $password);
//         }
//         return self::$instance;
//     }

//     public function getConnection() {
//         return $this->db;
//     }

//     public function closeConnection() {
//         $this->db->close();
//     }

//     // Transaction methods...

//     // Begin a transaction, use this before multiple transactions or sql queries (INSERT / UPDATE)
//     public function beginTransaction() {
//         $this->db->autocommit(false);
//         $this->db->begin_transaction();
//     }

//     // Commit the current transaction, if there is no error like query execution was successful and completed
//     public function commit() {
//         $this->db->commit();
//         $this->db->autocommit(true);
//     }

//     // Roll back the current transaction, if there is/are errors like query execution incomplete
//     public function rollback() {
//         $this->db->rollback();
//         $this->db->autocommit(true);
//     }
// }
