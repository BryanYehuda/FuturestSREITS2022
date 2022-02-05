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
        
        $this->db->where($column, $oldid);
        return $this->db->get($table)->result_array();
    }

    function submitabstract($data)
    {
        $this->db->set('pendaftaranreinnovation_abstract', $data['abstract']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
    }

    function submitfullpaper($data)
    {
        $this->db->set('pendaftaranreinnovation_fullpaper', $data['fullpaper']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
    }

    function submitppt($data)
    {
        $this->db->set('pendaftaranreinnovation_ppt', $data['ppt']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
    }

    function submitesai($data)
    {
        $this->db->set('pendaftaranessaycompetition_esai', $data['Essay']);
        $this->db->where('pendaftaranessaycompetition_id', $data['id']);
        $this->db->update("pendaftaran_essaycompetition");
    }
}
?>