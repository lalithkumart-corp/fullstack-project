<?php 
class Common_model extends CI_Model{
    public function __construct(){

    }
    function getSessionVal(){
        
        session_start(); 
        $_SESSION['season'] = 'winter';
        //return 'u-name from browser';//$_SESSION['u_session'];
        return $_SESSION['season'];
    }

    //will pass cookie in header, and thjis will be set in browser
    function setCookie(){
        setcookie("name", "John Watkin", time()+3600, "/","", 0); 
    }
}
?>