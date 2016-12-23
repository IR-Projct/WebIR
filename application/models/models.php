<?php

class models extends CI_Model {

  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

  public function show_list($search)
  {
    $sql = "SELECT Name FROM food WHERE Name LIKE '%$search%'";
    $query = $this->db->query($sql);
    return $query;
  }

}
?>
