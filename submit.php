
<h1>Oops</h1>
<p>Something's gone horribly wrong, click <a href="http://www.ustream.tv/embed/11308704">here</a> to watch, or <a href="http://72.81.132.9:8000/listen.m3u">here</a> to listen.</p> 
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include "config.php"; 

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($conn->connect_error) {
  echo "ERROR"; 
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}



$v1 = $conn->real_escape_string($_POST['viewers']);
$v2 = "'" . $conn->real_escape_string($_POST['comments']) . "'"; 
$v3 = "'" .  $_SERVER['REMOTE_ADDR'] . "'" ;
$media = "'" . $conn->real_escape_string($_POST['media']) . "'"; 

date_default_timezone_set('America/New_York');
$date = "'" .  date('m/d/Y h:i:s a', time()) . "'";


$sql = "insert into netusers(ip, viewers, comment, date, media) values($v3, $v1, $v2, $date, $media);" ;

 
if($conn->query($sql) === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
} else {
  echo "YAY"; 
  $last_inserted_id = $conn->insert_id;
  $affected_rows = $conn->affected_rows;
}

$redirect=False; 
if ($_POST['media'] == "watch")
{ 
  $redirect_url="http://www.ustream.tv/embed/11308704"; 
  $redirect=True;
} 
else if ($_POST['media'] == "listen")
{
  $redirect_url="http://72.81.132.9:8000/listen.m3u"; 
  $redirect=True; 
} 
if ($redirect)
{
  header("Location: $redirect_url"); 
}
?> 

