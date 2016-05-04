<?php 

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