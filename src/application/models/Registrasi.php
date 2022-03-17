<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends CI_Model{

    function data(){
        $query = "SELECT * FROM `pendaftaran1`";
        $hail  = $this->db->query($query);
        return $hail->result_array();
    }
    
    function regisRE101($data)
    {
        $regis = array(
            'pendaftaranre101_name'                 => $this->input->post('name'),
            'pendaftaranre101_email'                => $this->input->post('email'),
            'pendaftaranre101_domicile'             => $this->input->post('domicile'),
            'pendaftaranre101_university'           => $this->input->post('university'),
            'pendaftaranre101_major'                => $this->input->post('major'),
            'pendaftaranre101_batch'                => $this->input->post('batch'),
            'pendaftaranre101_question'             => $this->input->post('question'),
            'pendaftaranre101_followingfuturestig'  => $data['followfuturestig'],
            'pendaftaranre101_followingsreig'       => $data['followsreig'],
            'pendaftaranre101_sharestory'           => $data['sharestory'],
            'pendaftaranre101_dataUpdated'          => date('Y-m-d')
        );
  
        $this->db->insert('pendaftaran_re101', $regis);
    }

    function regisGrandTalkshow($data)
    {
        $regis = array(
            'pendaftarangrandtalkshow_name'                 => $this->input->post('name'),
            'pendaftarangrandtalkshow_email'                => $this->input->post('email'),
            'pendaftarangrandtalkshow_domicile'             => $this->input->post('domicile'),
            'pendaftarangrandtalkshow_university'           => $this->input->post('university'),
            'pendaftarangrandtalkshow_major'                => $this->input->post('major'),
            'pendaftarangrandtalkshow_batch'                => $this->input->post('batch'),
            'pendaftarangrandtalkshow_question'             => $this->input->post('question'),
            'pendaftarangrandtalkshow_followingfuturestig'  => $data['followfuturestig'],
            'pendaftarangrandtalkshow_followingsreig'       => $data['followsreig'],
            'pendaftarangrandtalkshow_twibbon'              => $data['twibbon'],
            'pendaftarangrandtalkshow_sharestory'           => $data['sharestory'],
            'pendaftarangrandtalkshow_dataUpdated'          => date('Y-m-d')
        );
  
        $this->db->insert('pendaftaran_grandtalkshow', $regis);
    }

    function regisFinalTalkshow($data)
    {
        $regis = array(
            'pendaftaranfinaltalkshow_name'                 => $this->input->post('name'),
            'pendaftaranfinaltalkshow_email'                => $this->input->post('email'),
            'pendaftaranfinaltalkshow_domicile'             => $this->input->post('domicile'),
            'pendaftaranfinaltalkshow_university'           => $this->input->post('university'),
            'pendaftaranfinaltalkshow_major'                => $this->input->post('major'),
            'pendaftaranfinaltalkshow_batch'                => $this->input->post('batch'),
            'pendaftaranfinaltalkshow_question'             => $this->input->post('question'),
            'pendaftaranfinaltalkshow_followingfuturestig'  => $data['followfuturestig'],
            'pendaftaranfinaltalkshow_followingsreig'       => $data['followsreig'],
            'pendaftaranfinaltalkshow_sharestory'           => $data['sharestory'],
            'pendaftaranfinaltalkshow_dataUpdated'          => date('Y-m-d')
        );
  
        $this->db->insert('pendaftaran_finaltalkshow', $regis);
    }

    function regis3C($data)
    {
        $regis = array(
            'pendaftaranclimatechangecommunity_name'                 => $this->input->post('name'),
            'pendaftaranclimatechangecommunity_email'                => $this->input->post('email'),
            'pendaftaranclimatechangecommunity_domicile'             => $this->input->post('domicile'),
            'pendaftaranclimatechangecommunity_university'           => $this->input->post('university'),
            'pendaftaranclimatechangecommunity_major'                => $this->input->post('major'),
            'pendaftaranclimatechangecommunity_batch'                => $this->input->post('batch'),
            'pendaftaranclimatechangecommunity_linkedin'             => $this->input->post('linkedin'),
            'pendaftaranclimatechangecommunity_cv'                   => $data['CV'],
            'pendaftaranclimatechangecommunity_motivation'           => $this->input->post('motivation'),
            'pendaftaranclimatechangecommunity_contribution'         => $this->input->post('contribution'),
            'pendaftaranclimatechangecommunity_prioritize'           => $this->input->post('prioritze'),
            'pendaftaranclimatechangecommunity_willingness'          => $this->input->post('willingness'),
            'pendaftaranclimatechangecommunity_committed'            => $this->input->post('committed'),
            'pendaftaranclimatechangecommunity_followingfuturestig'  => $data['followfuturestig'],
            'pendaftaranclimatechangecommunity_followingsreig'       => $data['followsreig'],
            'pendaftaranclimatechangecommunity_sharestory'           => $data['sharestory'],
            'pendaftaranclimatechangecommunity_twibbon'              => $data['twibbon'],
            'pendaftaranclimatechangecommunity_dataUpdated'          => date('Y-m-d')
        );
  
        $this->db->insert('pendaftaran_climatechangecommunity', $regis);
    }

    function regisReInnovation($data)
    {
        $regis = array(
            'pendaftaranreinnovation_teamname'          => $this->input->post('teamname'),
            'pendaftaranreinnovation_college'           => $this->input->post('college'),
            'pendaftaranreinnovation_1_name'            => $this->input->post('name_1'),
            'pendaftaranreinnovation_1_major'           => $this->input->post('major_1'),
            'pendaftaranreinnovation_1_batch'           => $this->input->post('batch_1'),
            'pendaftaranreinnovation_1_card'            => $data['card_1'],
            'pendaftaranreinnovation_1_activestudent'   => $data['activestudent_1'],
            'pendaftaranreinnovation_1_photo'           => $data['photo_1'],
            'pendaftaranreinnovation_1_phone'           => $this->input->post('phone_1'),
            'pendaftaranreinnovation_1_email'           => $this->input->post('email_1'),
            'pendaftaranreinnovation_1_follow'          => $data['follow_1'],
            'pendaftaranreinnovation_2_name'            => $this->input->post('name_2'),
            'pendaftaranreinnovation_2_major'           => $this->input->post('major_2'),
            'pendaftaranreinnovation_2_batch'           => $this->input->post('batch_2'),
            'pendaftaranreinnovation_2_card'            => $data['card_2'],
            'pendaftaranreinnovation_2_activestudent'   => $data['activestudent_2'],
            'pendaftaranreinnovation_2_photo'           => $data['photo_2'],
            'pendaftaranreinnovation_2_phone'           => $this->input->post('phone_2'),
            'pendaftaranreinnovation_2_email'           => $this->input->post('email_2'),
            'pendaftaranreinnovation_2_follow'          => $data['follow_2'],
            'pendaftaranreinnovation_dataUpdated'       => date('Y-m-d')
        );
        //'pendaftaranreinnovation_payment'           => $data['payment'],
        if(!empty($this->input->post('name_3')))
        {
            $regis['pendaftaranreinnovation_3_name']            = $this->input->post('name_3');
        }
        if(!empty($this->input->post('major_3')))
        {
            $regis['pendaftaranreinnovation_3_major']           = $this->input->post('major_3');
        }
        if(!empty($this->input->post('batch_3')))
        {
            $regis['pendaftaranreinnovation_3_batch']           = $this->input->post('batch_3');
        }
        if(!empty($data['card_3']))
        {
            $regis['pendaftaranreinnovation_3_card']            = $data['card_3'];
        }
        if(!empty($data['activestudent_3']))
        {
            $regis['pendaftaranreinnovation_3_activestudent']   = $data['activestudent_3'];
        }
        if(!empty($data['photo_3']))
        {
            $regis['pendaftaranreinnovation_3_photo']           = $data['photo_3'];
        }
        if(!empty($this->input->post('phone_3')))
        {
            $regis['pendaftaranreinnovation_3_phone']           = $this->input->post('phone_3');
        }
        if(!empty($this->input->post('email_3')))
        {
            $regis['pendaftaranreinnovation_3_email']           = $this->input->post('email_3');
        }
        if(!empty($data['follow_3']))
        {
            $regis['pendaftaranreinnovation_3_follow']          = $data['follow_3'];
        }

        $this->db->insert('pendaftaran_reinnovation', $regis);
    }

    function regisEssayCompetitionteam($data)
    {
        $regis = array(
            'pendaftaranessaycompetition_teamname'          => $this->input->post('teamname'),
            'pendaftaranessaycompetition_1_name'            => $this->input->post('name_1'),
            'pendaftaranessaycompetition_1_age'             => $this->input->post('age_1'),
            'pendaftaranessaycompetition_1_college'         => $this->input->post('university_1'),
            'pendaftaranessaycompetition_1_card'            => $data['card_1'],
            //'pendaftaranessaycompetition_1_photo'           => $data['photo_1'],
            'pendaftaranessaycompetition_1_phone'           => $this->input->post('phone_1'),
            'pendaftaranessaycompetition_1_email'           => $this->input->post('email_1'),
            'pendaftaranessaycompetition_1_twibbon'         => $data['twibbon_1'],
            'pendaftaranessaycompetition_1_follow'          => $data['follow_1'],
            //'pendaftaranessaycompetition_1_activestudent'   => $data['activestudent_1'],
            'pendaftaranessaycompetition_2_name'            => $this->input->post('name_2'),
            'pendaftaranessaycompetition_2_age'             => $this->input->post('age_2'),
            'pendaftaranessaycompetition_2_college'         => $this->input->post('university_2'),
            'pendaftaranessaycompetition_2_card'            => $data['card_2'],
            //'pendaftaranessaycompetition_2_photo'           => $data['photo_2'],
            'pendaftaranessaycompetition_2_phone'           => $this->input->post('phone_2'),
            'pendaftaranessaycompetition_2_email'           => $this->input->post('email_2'),
            'pendaftaranessaycompetition_2_twibbon'         => $data['twibbon_2'],
            'pendaftaranessaycompetition_2_follow'          => $data['follow_2'],
            //'pendaftaranessaycompetition_2_activestudent'   => $data['activestudent_2'],
            //'pendaftaranessaycompetition_payment'           => $data['payment'],
            'pendaftaranessaycompetition_dataUpdated'       => date('Y-m-d')
        );
        
        if(!empty($this->input->post('major_1')))
        {
            $regis['pendaftaranessaycompetition_1_major']       = $this->input->post('major_1');
        }
        if(!empty($this->input->post('major_2')))
        {
            $regis['pendaftaranessaycompetition_2_major']       = $this->input->post('major_2');
        }
        
        $this->db->insert('pendaftaran_essaycompetition', $regis);
    }

    function regisEssayCompetition($data){
        $regis = array(
            'pendaftaranessaycompetition_teamname'          => '--INDIVIDU--',
            'pendaftaranessaycompetition_1_name'            => $this->input->post('name_1'),
            'pendaftaranessaycompetition_1_age'             => $this->input->post('age_1'),
            'pendaftaranessaycompetition_1_college'         => $this->input->post('university_1'),
            'pendaftaranessaycompetition_1_card'            => $data['card_1'],
            //'pendaftaranessaycompetition_1_photo'           => $data['photo_1'],
            'pendaftaranessaycompetition_1_phone'           => $this->input->post('phone_1'),
            'pendaftaranessaycompetition_1_email'           => $this->input->post('email_1'),
            'pendaftaranessaycompetition_1_follow'          => $data['follow_1'],
            'pendaftaranessaycompetition_1_twibbon'         => $data['twibbon_1'],
            //'pendaftaranessaycompetition_1_activestudent'   => $data['activestudent_1'],
            //'pendaftaranessaycompetition_payment'           => $data['payment'],
            'pendaftaranessaycompetition_dataUpdated'       => date('Y-m-d')
        );
        
        if(!empty($this->input->post('major_1')))
        {
            $regis['pendaftaranessaycompetition_1_major']       = $this->input->post('major_1');
        }
        
        $this->db->insert('pendaftaran_essaycompetition', $regis);
    }

    function is_it_empty($error)
    {
        foreach($error as $e)
        {
            if(!empty($e))
            {
                return false;
            }
        }
        return true;
    }

    function showDataUnVerified($nama_table, $limit, $start)
    {
        return $this->db->get($nama_table, $limit, $start)->result_array();
    }
}

?>