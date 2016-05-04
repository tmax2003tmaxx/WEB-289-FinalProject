<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["f_name"]);
unset($_SESSION["userLevel"]);
header("Location:index.php");
?>