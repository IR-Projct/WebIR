<?php

class models extends CI_Model {

  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

  public function show($id)
  {
    //var_dump($id);
    $sql = "SELECT * FROM food WHERE id = '$id' ";
    //var_dump($sql);
    $query = $this->db->query($sql);
    return $query;
  }
  public function all()
  {

    $sql = "SELECT * FROM food f JOIN region r on f.region_id = r.region_id JOIN cook_type on f.type_id = cook_type.type_id ";
    $query = $this->db->query($sql);
    return $query;
  }
  public function n()
  {

    $sql = "SELECT * FROM food f JOIN region r on f.region_id = r.region_id JOIN cook_type on f.type_id = cook_type.type_id WHERE f.region_id = 'r1'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function c()
  {
    $sql = "SELECT * FROM food f JOIN region r on f.region_id = r.region_id JOIN cook_type on f.type_id = cook_type.type_id WHERE f.region_id = 'r1'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function e()
  {
    $sql = "SELECT * FROM food f JOIN region r on f.region_id = r.region_id JOIN cook_type on f.type_id = cook_type.type_id WHERE f.region_id = 'r1'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function s()
  {
    $sql = "SELECT * FROM food f JOIN region r on f.region_id = r.region_id JOIN cook_type on f.type_id = cook_type.type_id WHERE f.region_id = 'r1'";
    $query = $this->db->query($sql);
    return $query;
  }

}
?>
