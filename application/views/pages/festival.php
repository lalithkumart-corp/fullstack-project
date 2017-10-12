<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH.'helpers/util.php');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Festival</title>
	
	<script src="https://fb.me/react-15.0.0.js"></script>
    <script src="https://fb.me/react-dom-15.0.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script> -->

	<?php
		importJS('assets/js/lib/jquery-3.2.1.min.js');
		importJS('assets/js/frameworks/core.js');
		importBABEL('assets/js/aimvine/counter.js');
	?>
	<script type="text/babel">
    //   var Greeting = React.createClass({
    //     render: function() {
    //       return (
    //         <p>Hello, Universe</p>
    //       )
    //     }
    //   });

    //   ReactDOM.render(
    //     <Greeting/>,
    //     document.getElementById('counter')
    //   );
    </script>
</head>
<body>
	<div id='counter'></div>
	<input type='button' class="action-btn" value='click me'/>
</body>

</html>