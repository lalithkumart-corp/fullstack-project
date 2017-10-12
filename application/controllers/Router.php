<?php
include_once(APPPATH . 'controllers/MyCoreController.php');
require_once(APPPATH . 'libraries/HttpHelper.php');
class Router extends MyCoreController {
    public $uriPathArray = '';
    public function index(){
        //$this->output->enable_profiler(TRUE);
        $theUri =  $this->uri->uri_string();
        $this->parseUri($theUri);
        //$this->printRequestParams();
        //$this->printARequestParam();
        //$this->printCookies();
        //$this->printSessionId();
        //$this->printIpAddr();
        //$this->printUserAgent();
        $modelAndMeth = $this->getModelAndMeth();
        $this->generateResponse($modelAndMeth);
    }
    public function parseUri($theUri){
        //$uriPathArray = $this->getMethod($theUri);
        $this->uriPathArray = $this->getMethod2($theUri);
    }
    public function getMethod($theUri){
        if (($pos = strpos($theUri, "/")) !== FALSE) { 
            // preg_match("/^.+?\](.+)$/is" , $theUri, $match);
            // echo trim($match[1]);
            $meth = substr($theUri, $pos+1);
            $matchingVal = substr($meth, (strpos($meth, '/')+1));
        }
        return $matchingVal;
    }

    public function getMethod2($theUri){
        // $matchingVal = preg_match("/\//g" , $theUri, $match);
        $matchingVal = explode("/" , $theUri);
        return $matchingVal;
    }

    //For POST type ajax call, this function will be applicable, and it will print the Request Body
    function printRequestParams(){
        $params = $this->getRequestParams();
        print_r($params);
    }

    function printARequestParam(){
        $name = $_POST['myName'];
        echo $name;
    }

    //It will try to get cookie values
    function printCookies(){
        $keys = array_keys($_COOKIE);
        print_r($keys);
    }

    function printSessionId(){
        if(isset($_GET['sid']))
            print_r($_GET['sid']);
        else
            print_r('No SID');
    }

    function printIpAddr(){
        $userIp = $this->getBrowserIpAddress();
        print_r($userIp);
    }

    function printUserAgent(){
        print_r($_SERVER['HTTP_USER_AGENT']);
    }

    function getModelIdentifier(){
        return $this->uriPathArray[1];
    }

    function getModelAndMeth(){
        $returnVal = $this->uriPathArray[1];

        if(isset($this->uriPathArray['2']))
            $returnVal .= '/'.$this->uriPathArray['2'];

        return $returnVal;
    }

    function generateResponse($theModelAndMeth){
        $myResponse = new stdClass();
        $myResponse->status = 'Success';
        $myResponse->uri = $this->getModelAndMeth();
        switch($_SERVER['REQUEST_METHOD']) {
           case 'GET':
                switch($theModelAndMeth){
                    case 'profile/get-profile':
                        $this->load->model('user_profile', 'profile');
                        $myResponse->BODY = $this->profile->getDetails();
                        break;
                    case 'results/get-results':
                        $this->load->model('results_model', 'myResults');
                        $myResponse->BODY = $this->myResults->getResults();
                        break;
                    case 'user/list':
                        $this->load->model('user_model', 'userModel');
                        $myResponse->BODY = $this->userModel->getUserList();
                        break;
                    case 'error':
                        show_404();
                        break;
                    case 'practice':
                        $this->load->model('common_model', 'commonModel');
                        $myResponse->BODY = $this->commonModel->getSessionVal();
                        break;
                    case 'comments':
                        $this->load->model('comments', 'comments');
                        $myResponse->BODY = $this->comments->getComments();
                        break;
                }
                break;
            case 'POST':
                switch($theModelAndMeth){
                    case 'comments':
                        $this->load->model('comments', 'comments');
                        $myResponse->BODY = $this->comments->updateComments();
                        break;
                }
           };        
        echo json_encode($myResponse);
    }
}
