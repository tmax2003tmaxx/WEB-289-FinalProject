<?php 
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: loginFunctions.php
// Description: This is the code designed to add a new member to the database and the code for the Admin to change the price of a product.


// add_user retrieves the users information and adds to to the members database.
function add_user($fName, $lName, $email, $address, $userLevel, $password, $phone) {

    global $db;
	 $password = hash('sha256', $password);
    $query = 'INSERT INTO members
                 (f_name, l_name, email, address, userLevel, password, phone)
              VALUES
                 (:First_Name, :Last_Name, :Email, :Address, :userLevel, :Password, :Phone)';
    $statement = $db->prepare($query);
    $statement->bindValue(':First_Name', $fName);
    $statement->bindValue(':Last_Name', $lName);
    $statement->bindValue(':Email', $email);
    $statement->bindValue(':Address', $address);
    $statement->bindValue(':userLevel', $userLevel);
    $statement->bindValue(':Password', $password);
    $statement->bindValue(':Phone', $phone);
    $statement->execute();
    $statement->closeCursor();
    
}


// new_price retrieves the product id and the new price from the form and makes the change in the database.
function new_price($product_id, $price) {
    global $db;
    $query = 'UPDATE products
                SET price = :price
                WHERE product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>