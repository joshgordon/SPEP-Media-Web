<?php
include "../assets.php"; 
generateHeader("New User Registration", True); 
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
require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {



  // load the registration class
  require_once("classes/Registration.php");

  // create the registration object. when this object is created, it will do all registration stuff automatically
  // so this single line handles the entire registration process.
$registration = new Registration();

  // show the register view (with the registration form, and messages/errors)
  include("views/register.php");

}
else
{ 
?>
<h1>This operation is not permitted.</h1> 
<a href="index.php">Back to main menu.</a>
<?php
}

generateFooter(True); 
?> 
