<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');


include "../assets.php"; 
include "../config.php"; 
generateHeader("Users", True); 

require_once("classes/Login.php");
require_once("config/db.php"); 

$login = new Login();

if ($login->isUserLoggedIn() == true) { ?>
<?php
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName); 
$sql="select * from netusers"; 

$rs=$conn->query($sql); 
$rs->data_seek(0); 
?>
<a href="index.php">Back to menu</a>
<table border=2 cellpadding=2> 
<tr><td>id</td><td>ip</td><td>viewers</td><td>comment</td><td>date</td>
<td>media</td><td></td><tr>

<?php
while ($row = $rs->fetch_assoc()) { 
$viewers[$row['id']] = $row['viewers']; 
?> 
<tr>
  <td> <?php echo $row['id']; ?> </td>
  <td> <?php echo $row['ip']; ?> </td> 
  <td> <?php echo $row['viewers']; ?> </td> 
  <td> <?php echo $row['comment']; ?> </td> 
  <td> <?php echo $row['date']; ?> </td> 
  <td> <?php echo $row['media']; ?> </td>
  <td> <a href="delete.php?id=<?php echo $row['id'];?>">delete </a></td>
</tr>
<?php 
} 
?>
</table>
<?php
$totalViewers=0; 
foreach($viewers as $num)
{ 
  $totalViewers += $num; 
} 
//print_r($viewers); 
echo "Average viewers per click: " . $totalViewers/count($viewers); ?> 
<br><a href="users.php?logout">Logout</a>
<?php
} else { ?>
<h1>You must be logged in for this action.</h1>
<?php 
require_once("views/not_logged_in.php"); 
}
generateFooter(True); 
?>
