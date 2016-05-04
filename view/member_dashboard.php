<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<h1>Member</h1>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["f_name"]) {
?>
Welcome Member <?php echo $_SESSION["f_name"]; ?>. Click here to <a href="index.php?action=logout" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body></html>