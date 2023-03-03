<?php

Class Track {

  private $db;
  //...

  public function __construct($db) {
    $this->db = $db;
  }

  public function getAll() {
    $sql = "SELECT * FROM 230217_tracks LIMIT 50";
    return $this->db->executeQuery($sql);
  }

}
