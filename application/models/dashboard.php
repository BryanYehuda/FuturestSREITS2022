<?php
class DASHBOARD extends CI_Model
{
    function getData($userdata)
    {
        return $this->db->get($userdata)->result_array();
    }
}
?>