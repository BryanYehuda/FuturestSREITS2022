<?php
class Login extends CI_Model
{
    function getUser($username)
    {
        return $this->db->get_where('account', ['account_username' => $username])->row_array();
    }
}