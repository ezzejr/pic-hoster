<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Pic-Hoster - Image Uploader</title>
	<link href="source/style.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="source/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="source/scripts/jquery.form.js"></script>
	<script type="text/javascript" >
	$(document).ready(function() { 
		$('#photoimg').live('change', function() { 
				   $("#preview").html('');
			$("#preview").html('<img src="source/loading.gif" alt="Uploading...."/>');
			$('#form').fadeOut(200).hide();
		$("#imageform").ajaxForm({
					target: '#preview'
	}).submit();
	
		});
	}); 
	</script>
</head>
<body>
	<div id="bg-darker"></div>

	<div id="header">
		<div class="navi">
			<ul>
				<li><a  href="./">Home</a></li>
				<li><a  href="terms/">Terms of Service</a></li>
				<li><a  href="about/">About us</a></li>
			</ul>
		</nav>
	</div>
	
	<div id="all">
		<div class="content" >
			<div id="form">
				Here you can upload here your images and share with your friends! This service is 100% free. When you use this service you're accepting the <a  href="terms/">Terms Of Service</a>.<br /><br />
				
				<center>
					<form id="imageform" method="POST" enctype="multipart/form-data" action="upload.php">
						<button id="button">
							<input type="file" name="photoimg" id="photoimg">
							<span>upload</span>
						</button>
					</form>
				</center>
			</div>
			<div id='preview'></div>
		</div> 
		<div class="footer">
				Pic-Hoster &copy; 2015 - All rights reserved | Developed by <a href="http://jr-web.ml" target="_blank">Jos&eacute; Rodrigues</a>
		</div>
	</div>
</body>
</html>