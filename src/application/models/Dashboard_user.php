<?php
class Dashboard_user extends CI_Model
{
    function getData($table, $oldid)
    {
        $column = '';

        if($table === 'pendaftaran_essaycompetition'){
			$column = 'pendaftaranessaycompetition_id';
		}elseif($table === 'pendaftaran_reinnovation'){
			$column = 'pendaftaranreinnovation_id';
		}
        
        $this->db->where('pendaftaranreinnovation_id', $oldid);
        return $this->db->get($table)->result_array();
    }
}
?>