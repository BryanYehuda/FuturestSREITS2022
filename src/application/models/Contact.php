<?php
class Contact extends CI_Model
{
    function addSuggestion()
    {
        $suggestion = array(
            'suggestion_email'      => $this->input->post('email'), 
            'suggestion_message'    => $this->input->post('message')
        );

        $this->db->insert('suggestion', $suggestion);
    }
}
?>