<?php
class Dashboard extends CI_Model
{
    function getData($userdata)
    {
        return $this->db->get($userdata)->result_array();
    }

    function getDataEssayWhere($userdata, $where)
    {
        return $this->db->get_where($userdata, ['pendaftaranessaycompetition_status' => $where])->result_array();
    }

    function confirmStsEssay($data)
    {
        $this->db->set('pendaftaranessaycompetition_status', $data['status']);
        $this->db->where('pendaftaranessaycompetition_id', $data['id']);
        $this->db->update($data['tableName']);

        $query = $this->db->get_where($data['tableName'], ['pendaftaranessaycompetition_id' => $data['id']])->result_array();
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
}
?>