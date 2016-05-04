<h2 class="menu">Menu</h2>
<?php
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: buyHappiness.php
// Description: This is the code designed to display the products table to a user of the site who is not logged in.
$message="";
$conn = mysql_connect("mysql5.000webhost.com","a6185815_cody","maggie1234");
mysql_select_db("a6185815_bmd",$conn);
$result = mysql_query("SELECT * FROM products  ORDER BY category");
$row  = mysql_fetch_array($result);
?>
<br>
<table id="memberTable">
	<tr>
		<th class="hide">Category</th>
		<th>Product</th>
		<th>Description</th>
		<th class='adminhide'>Quantity</th>
		<th>Price</th>
	</tr>
<?php 
  while($row=mysql_fetch_array($result)){
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $description = $row['description'];
    $servings = $row['servings'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $type = $row['category'];
?>
	<tr>
		<td class="hide"><?php echo $type; ?></td>
		<td><?php echo $product_name; ?></td>
		<td><?php echo $description; ?></td>
		<td class='adminhide'><?php echo $quantity; ?></td>
		<td><?php echo $price; ?></td>
	</tr>

<?php } ?>

</table>