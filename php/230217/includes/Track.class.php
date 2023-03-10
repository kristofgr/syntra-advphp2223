<?php

Class Track {

  private $db;
  

  public function __construct($db) {
    $this->db = $db;
  }


  public function getTotal($filters = []) {
    $where = $this->buildWhere($filters);
    $sql = "SELECT COUNT(id) AS total FROM 230217_tracks $where";
    return $this->db->executeQuery($sql, $filters)[0]->total;
  }
  

  public function getAll($offset = 0, $limit = 50, $filters = []) {
    $where = $this->buildWhere($filters);
    $sql = "SELECT id, track_id, track_name, artist_name, genre FROM 230217_tracks $where LIMIT $limit OFFSET $offset";
    return $this->db->executeQuery($sql, $filters);
  }
  

  public function getById($id) {
    $sql = "SELECT * FROM 230217_tracks WHERE id=:id";
    return $this->db->executeQuery($sql, ['id' => $id]);
  }
  

  public function add($data) {


    $keys = array_keys($data);
    $cols = implode(', ', $keys);
    
    
    $values = array_map(function($key) {
      return ':'. $key;
    }, $keys);
    $values = implode(', ', $values);



    $sql = "INSERT INTO 230217_tracks($cols) VALUES ($values)";

    // print $sql;
    // exit;

    return $this->db->executeQuery($sql, $data);
  }


  private function buildWhere($filters) {
    $where = '';
    if (count($filters)) {
      $where = [];
      foreach ($filters as $key => $value) {
        $where[] = "$key = :$key";
      }
      $where = 'WHERE ' . implode(' AND ', $where);
    }
    return $where;
  }

}
