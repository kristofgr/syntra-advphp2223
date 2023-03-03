<?php

Class Db {

    // Database configuration
    private $host = 'db';
    private $dbname = 'syntrafs';
    private $username = 'root';
    private $password = 'rootpass';
    private $port = 3306;
    private $pdo;

  // Create a new PDO instance
  public function __construct()
  {
      if ($this->pdo === null) {
          try {
              $this->pdo = new PDO(
                "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname . ";charset=utf8mb4", 
                $this->username, 
                $this->password);
          } catch (PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
              return null;
          }
      }
  }

  public function executeQuery($sql, $filters = [], $fetch = PDO::FETCH_OBJ) {
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($filters);
    return $stmt->fetchAll($fetch);
  }
}