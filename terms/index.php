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
				<li><a  href="./">Terms of Service</a></li>
				<li><a  href="../about/">About us</a></li>
			</ul>
		</nav>
	  </div>
	</div>
	<div class="content">
		<center>
			<h1>
				Terms Of Service
			</h1>
		</center>
		<div id="form">
			<br />The <b>Pic-Hoster</b> will always have the right to remove or replace all the images that compromise the security of the server, or do not conform to the terms of use. You can&#39;t host:<i><br /><br />
			&bull; </i>Images with<b> porn</b> or <b>sexually explicit</b>;<i><br />
			&bull; </i>Images wich violate <b>copyrights</b> of any entity;<i><br />
			&bull; </i>Images that are <b>ilegal</b> and/or are violating any law.
			<br /><br />
			<b>Violation of any term, will result in:</b>
			<br /><i>&bull;</i> Exclusion of the image.
			<br /><i>&bull;</i> Ban the IP from our website.<br /><br />
			<b>Legal Policy</b>:
			<br /><br />
			These Terms of Service are subject to change without notice. Users of 
			<b>Pic-Hoster</b>, have to agree with them all, and above all not to engage us in any type of legal action.
			Note also that the <b>pic-h.tk</b> is not responsible for any actions of their users.
		</div>
		<div id='preview'></div>
		<div class="footer">
			<hr size="6">
			<center>
				&middot; Pic-Hoster &copy; 2015 | Developed by <a href="http://joserodrigues.tk" target="_blank">Jos&eacute; Rodrigues</a> &middot;
			</center>
		</div>
	</div> 
</body>
</html>