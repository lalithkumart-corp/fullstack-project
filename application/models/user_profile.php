<?php
class User_profile extends CI_Model{
    function getDetails(){
        HttpHelper::setCacheTime(6);
        return 'NEW USER';
    }
}
?>