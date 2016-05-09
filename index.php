<?php
// Author: Cody Mogensen
// Revision Date: 05/04/2016
// File Name: index.php
// Description: This is the code designed to control the user as the navigate the website.
include_once 'view/header.php';
require_once('model/database.php');
include_once 'model/loginFunctions.php';


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}

$lName = '';
$users = array();

/**
 * An autoloader would be more appropriate here
 * @see spl_autoload_register()
 */

switch( $action ) {
    case 'home':
        include_once ('view/home.php');
    break;
    case 'gallery':
        include_once ('view/gallery.php');
    break;
    case 'login':
        include_once ('view/bmdLogin.php');
    break;
    case 'services':
        include_once ('view/services.php');
    break;

    case 'buyHappiness':

        if (isset($_SESSION["f_name"]) && ($_SESSION["userLevel"] == 'Admin')){
            include_once ('view/buyHappinessAdmin.php'); 
        } elseif (isset($_SESSION["f_name"]) && ($_SESSION["userLevel"] == 'Member')){ 
            include_once ('view/buyHappinessMember.php');
        } else {
            include_once('view/buyHappiness.php');
        }

    break;

    case 'user_dashboard':
        include_once ('view/user_dashboard.php');
    break;
    case 'logout':
        include_once ('view/logout.php');
    break;
    case 'member_dashboard':
        include_once ('view/member_dashboard.php');
    break;
    case 'contact':
        include_once ('view/contact.php');
    break;
    case 'signUp':
        include_once ('view/register_customer.php');
    break;
    case 'add_user':
        
        // Add User
        $fName     = filter_input(INPUT_POST, 'f_name');
        $lName     = filter_input(INPUT_POST, 'l_name');
        $email     = filter_input(INPUT_POST, 'email');
        $address   = filter_input(INPUT_POST, 'address');
        $userLevel = filter_input(INPUT_POST, 'userLevel');
        $password  = filter_input(INPUT_POST, 'password');
        $phone     = filter_input(INPUT_POST, 'phone');

        add_user($fName, $lName, $email, $address, $userLevel, $password, $phone);

        // Display the user list
        include_once ('view/bmdLogin.php');

    break;
}

include 'view/footer.php';