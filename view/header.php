<?php 
session_start();
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: header.php
// Description: This is the code designed to serve as the beginning of every html page. 
 ?>
 <!doctype html>
<head>
<title>Bake My Day</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" media="screen and (min-width: 1050px)">
<link href="css/medium.css" rel="stylesheet" media="screen and (min-width: 816px) and (max-width: 1049px)">
<link href="css/small.css" rel="stylesheet" media="screen and (min-width: 501px) and (max-width: 815px)">
<link href="css/mobile.css" rel="stylesheet" media="screen and (max-width: 500px)">
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<!--[if lt IE 9]>
<script src="http://html5shim.goog
<html lang="en"> le.com/svn/trunk/html5.js">
</script>
<! [endif]-->
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="js/project7.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<ul id="navbar">
		<li>
			<a href="index.php">Home</a>
		</li>
		<li>	
			<a href="?action=gallery">Gallery</a>
		</li>
		<li>
			<a href="?action=services">Services </a>
		</li>
	    <li>
	    	<a href="?action=contact">Contact</a>
	    </li>
	    <li>
	    	<a href="?action=buyHappiness">Menu</a>
	    </li>
	</ul>
<div id="wrapper">
<div id="logo"></div>

<div id="logIn">
<?php
	if(isset($_SESSION["f_name"])) {
?>

<a href="index.php?action=logout" tite="Logout">Logout <?php echo $_SESSION["f_name"]; ?></a>

<?php
	} else {  
?>

<a href="?action=login">Login</a>

<?php
}
?>
</div>
