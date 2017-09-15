<?php
class HttpHelper{
    /**
	 *  setCacheTime
	 *  params time - string
	 *  Set cache-control header
	 *  Output none
	 **/
     public static function setCacheTime($time){
    	header("Cache-Control: max-age=$time");
    }
}
?>