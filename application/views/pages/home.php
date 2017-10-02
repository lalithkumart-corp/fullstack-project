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
		
		// importJS(site_url('/assets/js/lib/jquery-3.2.1.min.js')); ---- > Working! (But load Uri-Helper model)
		// importJS('/assets/js/lib/jquery-3.2.1.min.js'); ---- > Working!
		
		importJS('assets/js/lib/jquery-3.2.1.min.js');
		importJS('assets/js/frameworks/core.js');
	?>
	<script>
		$(document).ready(function(e){
			bindEvents();
		});
		function bindEvents(){
			$('.get-profile').on('click', function(e){
				call('/api/profile/get-profile');
			});
			$('.action-btn').on('click', function(e){
				call('/api/results/get-results');
			});
		}
		function call(theUrl){
			//var api_request_data = '{"APIKEY":"EE109DAC-CDA6-4299-8095-F6D6DBF96380","APPLICATION_NAME":"web","CLIENT_TRACK_ID":"knovel","METHOD":{"NAME":"logging/send-event","PARAMS":{"EVENT_TYPE":"UI","EVENT_NAME":"PAGE_LOAD","EVENT_VALUE":{"URL":"https://lalith-new.knewknovel.com/web/browse.v","KPROMOTER":""}},"TYPE":"POST"},"OPTIONAL_INPUT":{"ANALYTICS_ID":"","DOMAIN_TOKEN":"","DOMAIN_NAME":"moc.levonkwenk.wen-htilal"},"SESSION":{"ID":"59b77330-258a-c36c-223c-0425631700b7"}}';
			
			var api_request_data = JSON.stringify({name:'lalith'});
			
			//var api_request_data = {myName:'lalith', sno: '1'};
			
			$.ajax({
				type: 'GET',
				url: theUrl,
				data: api_request_data,
				contentType: "application/json; charset=utf-8",
				success: function(response) {
									
				},
				error: function(jqXHR, textStatus, errorThrown) {
					
				}
			});
		}
	</script>
</head>
<body>
	<input type='button' value='Get Profile' class='get-profile'/>
	<input type='button' value='Get Results' class='action-btn'/>
</body>

</html>