<html><head><title>SPEP Media Info</title></head><body>
<?php 
include "../assets.php"; 
generateHeader("SPEP Media Info", True); 
/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) { ?> 
<ul> 
  <li> <a href="users.php">Internet Users</a> </li>
  <li> <a href="register.php">Add new users</a></li>
</ul> 

Click <a href="index.php?logout">here</a> to logout. 
<?php
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

generateFooter(true); 
?>

