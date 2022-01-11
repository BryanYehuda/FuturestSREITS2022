<?php
class Dashboard_user extends CI_Model
{
    function getData($table, $oldid)
    {
        $this->db->where('pendaftaranessaycompetition_id', $oldid);
        return $this->db->get($table)->result_array();
    }
}
?>