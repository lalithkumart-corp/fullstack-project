<?php

class User_model extends CI_Model{

    public function __construct(){
        //$this->load->library('session');
        
        //echo json_encode($this->session->u_session);
    }

    public function getUserList(){
        $anUser = new stdClass();
        $anUser->name = 'Lalith';
        $anUser->status = 'married';
        $anUser->wife = array('partner1', 'partner2');
        $anUser->children = array("1"=>"one", "2"=>"two");
        
        return $anUser;
    }
}

?>