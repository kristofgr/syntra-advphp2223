<?php

Class Track {

  private $db;
  //...

  public function __construct($db) {
    $this->db = $db;
  }


  public function getTotal() {
    $sql = "SELECT COUNT(id) AS total FROM 230217_tracks";
    return $this->db->executeQuery($sql);
  }
  

  public function getAll($offset = 0, $limit = 50, $filters = []) {
    $sql = "SELECT id, track_id, track_name, artist_name, genre FROM 230217_tracks LIMIT $limit OFFSET $offset";
    return $this->db->executeQuery($sql);
  }

}
