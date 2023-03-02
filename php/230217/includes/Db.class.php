<?php

Class Db {

    // Database configuration
    private static $host = 'db';
    private static $dbname = 'syntrafs';
    private static $username = 'root';
    private static $password = 'rootpass';
    private static $port = 3306;
    private static $pdo;

  // Create a new PDO instance
  public static function connect()
  {
      if (self::$pdo === null) {
          try {
              self::$pdo = new PDO("mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbname . ";charset=utf8mb4", self::$username, self::$password);
          } catch (PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
              return null;
          }
      }

      return self::$pdo;
  }

  public static function getTracks()
  {
      $pdo = self::connect();
      $stmt = $pdo->prepare("SELECT * FROM 230217_tracks LIMIT 10");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}