<?php
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: database.php
// Description: This is the code designed to connect to the mysql database.
global $db;
$debug = true;

if ($_SERVER['HTTP_HOST'] == "localhost" OR $_SERVER['HTTP_HOST'] == "127.0.0.1") {
$dsn = 'mysql:host=localhost;dbname=bakemyday';
$username = 'root';
$password = '';
$host_location = "local";
} else {
$dsn = 'mysql:host=mysql5.000webhost.com;dbname=a6185815_bmd';
$username = 'a6185815_cody';
$password = 'maggie1234';
$host_location = "remote";
}

try {
$db = new PDO($dsn, $username, $password);
if ($debug) {
//echo "Successfully connected to: " . $host_location;
//echo "<p />";
}
}
catch (PDOException $e) {
$error_message = $e->getMessage();
echo $error_message;
exit();
}
?>