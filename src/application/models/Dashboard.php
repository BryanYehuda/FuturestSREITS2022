<?php
class Dashboard extends CI_Model
{
    function getData($userdata)
    {
        return $this->db->get($userdata)->result_array();
    }

    function getDataEssayWhere($where)
    {
        return $this->db->get_where("pendaftaran_essaycompetition", ['pendaftaranessaycompetition_status' => $where])->result_array();
    }

    function getDataREIWhere($where)
    {
        return $this->db->get_where("pendaftaran_reinnovation", ["pendaftaranreinnovation_status" => $where])->result_array();
    }

    function confirmStsEssay($data)
    {
        $this->db->set('pendaftaranessaycompetition_status', $data['status']);
        $this->db->set('pendaftaranessaycompetition_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->where('pendaftaranessaycompetition_id', $data['id']);
        $this->db->update("pendaftaran_essaycompetition");

        $query = $this->db->get_where("pendaftaran_essaycompetition", ['pendaftaranessaycompetition_id' => $data['id']])->result_array();
        $res = $query[0];
        $id = $res['pendaftaranessaycompetition_id'];
        if($res['pendaftaranessaycompetition_teamname'] === '--INDIVIDU--')
        {
            $username = str_replace(' ', '', $res['pendaftaranessaycompetition_1_name']);
        }
        else
        {
            $username = str_replace(' ', '', $res['pendaftaranessaycompetition_teamname']);
        }

        $email = $res['pendaftaranessaycompetition_1_email'];
        $password = $id . $username . '!';
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $insert = [
            'account_oldid' => $id,
            'account_username' => $username,
            'account_password' => $passwordHash,
            'account_role' => 'user',
            'account_table' => 'pendaftaran_essaycompetition'
        ];
        $this->db->insert('account', $insert);

        $return = [
            'username' => $username,
            'password' => $password,
            'email' => $email
        ];

        return $return;
    }

    function confirmStsREI($data)
    {
        $this->db->set('pendaftaranreinnovation_status', $data['status']);
        $this->db->set('pendaftaranreinnovation_dataUpdated', date('Y-m-d H:i:s'));
        $this->db->where('pendaftaranreinnovation_id', $data['id']);
        $this->db->update("pendaftaran_reinnovation");

        $query = $this->db->get_where("pendaftaran_reinnovation", ['pendaftaranreinnovation_id' => $data['id']])->result_array();
        $res = $query[0];
        $id = $res['pendaftaranreinnovation_id'];
        
        $username = str_replace(' ', '', $res['pendaftaranreinnovation_teamname']);
        
        $teamname = $res['pendaftaranreinnovation_teamname'];
        $email = $res['pendaftaranreinnovation_1_email'];
        $password = $id . $username . '!';
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $insert = [
            'account_oldid' => $id,
            'account_username' => $username,
            'account_password' => $passwordHash,
            'account_role' => 'user',
            'account_table' => 'pendaftaran_reinnovation'
        ];
        $this->db->insert('account', $insert);

        $return = [
            'teamname' => $teamname,
            'username' => $username,
            'password' => $password,
            'email' => $email
        ];

        return $return;
    }

    function getDataEssayId($id)
    {
        $query = $this->db->get_where('pendaftaran_essaycompetition', ['pendaftaranessaycompetition_id' => $id])->result_array();
        $res = $query[0];
        return $res;
    }

    function getDataREIId($id)
    {
        $query = $this->db->get_where('pendaftaran_reinnovation', ['pendaftaranreinnovation_id' => $id])->result_array();
        $res = $query[0];
        return $res;
    }

    function deleteDataEssayId($id)
    {
        $this->db->where('pendaftaranessaycompetition_id', $id);
        $this->db->delete('pendaftaran_essaycompetition');
    }

    function deleteDataREIId($id)
    {
        $this->db->where('pendaftaranreinnovation_id', $id);
        $this->db->delete('pendaftaran_reinnovation');
    }

    function confirmREIpay($id)
    {
        $this->db->set('pendaftaranreinnovation_status', 2);
        $this->db->where('pendaftaranreinnovation_id', $id);
        $this->db->update("pendaftaran_reinnovation");
    }

    function cancelREIpay($id)
    {
        $this->db->set('pendaftaranreinnovation_status', 1);
        $this->db->where('pendaftaranreinnovation_id', $id);
        $this->db->update("pendaftaran_reinnovation");
    }
    
    function confirmEssaypay($id)
    {
        $this->db->set('pendaftaranessaycompetition_status', 2);
        $this->db->where('pendaftaranessaycompetition_id', $id);
        $this->db->update("pendaftaran_essaycompetition");
    }

    function cancelEssaypay($id)
    {
        $this->db->set('pendaftaranessaycompetition_status', 1);
        $this->db->where('pendaftaranessaycompetition_id', $id);
        $this->db->update("pendaftaran_essaycompetition");
    }
}
?>