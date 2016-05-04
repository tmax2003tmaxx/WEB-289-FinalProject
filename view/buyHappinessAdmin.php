<h2 class="menu">Admin Menu</h2>
<?php
$message="";
$conn = mysql_connect("mysql5.000webhost.com","a6185815_cody","maggie1234");
mysql_select_db("a6185815_bmd",$conn);
$result = mysql_query("SELECT * FROM products  ORDER BY category");
$row  = mysql_fetch_array($result);


  echo "<table id='adminTable'>";
    echo "<tr>";
        echo "<th class='hide'>Category</th>";
        echo "<th>Product</th>";
        echo "<th class='adminhide'>Description</th>";
        echo "<th class='adminHide'>Quantity</th>";
        echo "<th>Change Price</th>";
    echo "</tr>";

  while($row=mysql_fetch_array($result)){
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $description = $row['description'];
    $servings = $row['servings'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $type = $row['category'];

    echo "<tr>";
        echo "<td class='hide'>" .$type . "</td>";
        echo "<td>" .$product_name . "</td>";
        echo "<td class='adminhide'>" . $description . "</td>";
        echo "<td class='adminHide'>" .$quantity . "</td>";
        echo "<td><form action='.' method='post' id='aligned'>";
        echo "<input type='hidden' name='action' value='new_price'>"; 
        echo "<input type='hidden' name='product_id' value=" .$product_id . ">";
        echo "<input type='text' size='9' placeholder=$". $price . " name='price'> <input type='Submit' value='Update Price' /></form></td>";
		echo "</tr>";

}  echo "</table>";

?>    