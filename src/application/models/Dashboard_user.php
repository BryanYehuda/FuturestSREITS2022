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
        $this->db->set('pendaftaranreinnovation_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->set('pendaftaranreinnovation_abstract', $data['abstract']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
    }

    function submitfullpaper($data)
    {
        $this->db->set('pendaftaranreinnovation_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->set('pendaftaranreinnovation_fullpaper', $data['fullpaper']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
    }

    function submitppt($data)
    {
        $this->db->set('pendaftaranreinnovation_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->set('pendaftaranreinnovation_ppt', $data['ppt']);
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");
        
    }

    function submitesai($data)
    {
        $this->db->set('pendaftaranessaycompetition_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->set('pendaftaranessaycompetition_esai', $data['Essay']);
        $this->db->where('pendaftaranessaycompetition_id', $data['id']);
        $this->db->update("pendaftaran_essaycompetition");
        
        $query = $this->db->get_where("pendaftaran_essaycompetition", ['pendaftaranessaycompetition_id' => $data['id']])->result_array();
        $res = $query[0];
        $email = $res['pendaftaranessaycompetition_1_email'];
        if($res['pendaftaranessaycompetition_teamname'] === '--INDIVIDU--')
        {
            $name = $res['pendaftaranessaycompetition_1_name'];
        }
        else
        {
            $name = $res['pendaftaranessaycompetition_teamname'];
        }
        $return = [
            'name' => $name,
            'email' => $email
        ];
        return $return;
    }
}
?>