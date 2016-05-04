<?php
session_start();
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: logout.php
// Description: This is the code designed to terminate the session when a user clicks the logout link.
unset($_SESSION["email"]);
unset($_SESSION["f_name"]);
unset($_SESSION["userLevel"]);
header("Location:index.php");
?>