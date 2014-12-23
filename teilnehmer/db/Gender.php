<?php

require_once('DB.php');

class DB_Gender extends DB {

  # gender lesen
  function readById($id) {
    $q = oci_parse($this->config->db, 
	               "select gen_id,                     
                           gen_name
         			from gender where gen_id = :gen_id");

    oci_bind_by_name($q,":gen_id", $id);

    $r = oci_execute($q, OCI_DEFAULT);

    $row = oci_fetch_array($q, OCI_ASSOC);
	  $this->setName($row['GEN_NAME']); 
  }
}