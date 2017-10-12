<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH.'helpers/util.php');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Home page</title>
	<!-- <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> -->
	<?php
		importJS('assets/js/lib/jquery-3.2.1.min.js');
		importJS('assets/js/frameworks/core.js');
		importJS('assets/js/home/home.js');
	?>
</head>
<body>
	<input type='button' value='Get Profile' class='get-profile'/>
	<input type='button' value='Get Results' class='action-btn'/>
	<input type='button' value='Get List' class='user-list-btn'/>
	<input type='button' value='Practice' class='practice'/>
</body>

</head>