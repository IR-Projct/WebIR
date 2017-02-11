<?php

class models extends CI_Model {

  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

  public function show($id)
  {
    var_dump($id);
    $sql = "SELECT * FROM food WHERE id = '$id' ";
    var_dump($sql);
    $query = $this->db->query($sql);
    return $query;
  }
  public function n()
  {
    $sql = "SELECT * FROM food WHERE region_id = 'r1' ";
    $query = $this->db->query($sql);
    return $query;
  }
  public function c()
  {
    $sql = "SELECT * FROM food WHERE region_id = 'r2' ";
    $query = $this->db->query($sql);
    return $query;
  }
  public function e()
  {
    $sql = "SELECT * FROM food WHERE region_id = 'r3' ";
    $query = $this->db->query($sql);
    return $query;
  }
  public function s()
  {
    $sql = "SELECT * FROM food WHERE region_id = 'r4' ";
    $query = $this->db->query($sql);
    return $query;
  }

}
?>
