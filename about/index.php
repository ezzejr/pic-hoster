<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>&middot; Pic-Hoster &middot;</title>
	<link href="../source/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="../source/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../favicon.ico" />
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
	<div align="center"><img src="http://pic-h.tk/logotipo.png" /></div>
	<div id="header">
	  <div class="menu">
		<nav id="left">
			<ul>
				<li><a  href="../">Home</a></li>
				<li><a  href="../terms">Terms of Service</a></li>
				<li><a  href="./">About us</a></li>
			</ul>
		</nav>
	  </div>
	</div>
	<div class="content">
		<center>
			<h1>
				About
			</h1>
		</center>
		<div id="form">
		This project, have as main function help all those who need a site to store your images on the Internet. Despite the few resources we had, we managed to create this website and we hope everyone enjoy it, respecting of course the <b><a href="../terms">Terms of Service</a></b>.
		<br /><br /><br />
		For any questions please contact me at:<br />
		<b><a href ="http://joserodrigues.tk">www.joserodrigues.tk</a></b>
		</div>
		<br />
		<div class="footer">
			<hr size="6">
			<center>
				&middot; Pic-Hoster &copy; 2015 | Developed by <a href="http://joserodrigues.tk" target="_blank">Jos&eacute; Rodrigues</a> &middot;
			</center>
		</div>
	</div> 
</body>
</html>