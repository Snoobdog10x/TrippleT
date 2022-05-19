<?php
 $servername = "localhost";
 $username = "root";
 $password = "thanhanh";
 $dbname = "tripplet";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function closeDB(){
  if(isset($conn))
  $conn->close();
}
?>
