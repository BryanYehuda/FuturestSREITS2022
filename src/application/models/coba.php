<?php

class coba extends CI_Model{

    function data(){
        $query = "SELECT * FROM `pendaftaran`";
        $hail  = $this->db->query($query);
        return $hail->result_array();
    }

}

?>