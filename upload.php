<?php
function genRandomString() {
    $length = 7;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVXZKWY";
    $string = "";    

    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }

    return $string;
}
		
$max_size = 2000;          // maximum file size, in KiloBytes
$alwidth = 3600;            // maximum allowed width, in pixels
$alheight = 2551;           // maximum allowed height, in pixels
$allowtype = array('bmp', 'gif', 'jpg', 'jpe', 'png');        // allowed extensions

if(isset($_FILES['photoimg']) && strlen($_FILES['photoimg']['name']) > 1) {
  $sepext = explode('.', strtolower($_FILES['photoimg']['name']));
  $type = end($sepext);       // gets extension
  list($width, $height) = getimagesize($_FILES['photoimg']['tmp_name']);     // gets image width and height
  $err = '';         // to store the errors
  
  $string = genRandomString();
  $nname="".$string.".".$type."";
  $uploadpath= "i/".$nname;
  
  // If no errors, upload the image, else, output the errors
  if($err == '') {
	if(move_uploaded_file($_FILES['photoimg']['tmp_name'], $uploadpath)) { 
			header('Location: http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$uploadpath.'"');
	}
    else {
		header('Location: up.php');		
	}
  }
}
?> 