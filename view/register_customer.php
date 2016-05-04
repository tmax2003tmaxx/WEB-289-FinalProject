<!-- 
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: register_customer.php
// Description: This is the code designed to register a new member to the site. 
-->
<br>
<form id="signUp" name="frmUser" method="post" action="index.php?action=add_user">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" align="center">
	<tr class="tableheader">
		<td align="center" colspan="2">Sign Up</td>
	</tr>
		<tr class="tablerow">
		<td align="right">First Name</td>
		<td><input type="text" id="f_name" name="f_name" required="required" value="<?php if(isset($_POST['f_name'])) echo $_POST['f_name'];?>"></td>
	</tr>
	</tr>
		<tr class="tablerow">
		<td align="right">Last Name</td>
		<td><input type="text" id="l_name" name="l_name" required="required" value="<?php if(isset($_POST['l_name'])) echo $_POST['l_name'];?>"></td>
	</tr>

	<tr class="tablerow">
		<td align="right">Email</td>
		<td><input type="email" id="email" name="email" required="required" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"></td>
	</tr>
	<tr class="tablerow">
		<td align="right">Address</td>
		<td><input type="text" id="address" name="address" required="required" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>"></td>
	</tr>

		<input type="hidden" name="userLevel" value="Member">

	<tr class="tablerow">
		<td align="right">Password</td>
		<td><input type="password" id="password" name="password" required="required"></td>
	</tr>
	</tr>
		<tr class="tablerow">
		<td align="right">Phone Number</td>
		<td><input type="tel" id="phone" name="phone" required="required" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>"></td>
	</tr>
	<tr class="tableheader">
		<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>
