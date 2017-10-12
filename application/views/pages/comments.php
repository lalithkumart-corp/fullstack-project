<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH.'helpers/util.php');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Comments</title>
	
	<script src="https://fb.me/react-15.0.0.js"></script>
    <script src="https://fb.me/react-dom-15.0.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
    <script src="https://unpkg.com/remarkable@1.7.1/dist/remarkable.min.js"></script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script> -->

	<?php
		importJS('assets/js/lib/jquery-3.2.1.min.js');
		importJS('assets/js/frameworks/core.js');
		importBABEL('assets/js/comments/comments.js');
	?>
</head>
<body>
	<div id='content'></div>
	<input type='button' class="action-btn" value='click me'/>
</body>

</html>