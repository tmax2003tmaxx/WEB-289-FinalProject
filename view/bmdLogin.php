<?php
session_start();
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: bmdLogin.php
// Description: This is the code designed to log the user in. 
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("mysql5.000webhost.com","a6185815_cody","maggie1234");
mysql_select_db("a6185815_bmd",$conn);
$password = hash('sha256', $_POST["password"]);
$result = mysql_query("SELECT * FROM members WHERE email='" . $_POST["email"] . "' and password = '". $password."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["f_name"] = $row['f_name'];
$_SESSION["email"] = $row['email'];
$_SESSION["userLevel"] = $row['userLevel'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["f_name"])) {
header("Location:index.php?action=buyHappiness");
}
?>

<h4 id="newMember">If you are not a member yet Sign Up <a href="index.php?action=signUp">Here</a></h4>
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<form id="signUp" name="frmUser" method="post" action="">
<table border="0" cellpadding="10" cellspacing="1" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Email</td>
<td><input type="text" id="name" name="email" required="required"value="
<?php if(isset($_POST['email'])) echo $_POST['email'];
?>"><br></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" id="password" name="password" required="required"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>

</form>
