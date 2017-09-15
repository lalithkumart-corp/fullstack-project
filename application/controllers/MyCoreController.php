<?php
class MyCoreController extends CI_Controller{
    public function index(){

    }

    //For POST type ajax call, this function will be applicabel, and it will print the Request Body
    public function getRequestParams(){
        $requestBody = file_get_contents("php://input");
        return $requestBody;
    }

    public function getBrowserIpAddress(){
        $userIp = getenv("REMOTE_ADDR");
        return $userIp;
    }
}
?>