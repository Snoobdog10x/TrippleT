<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tripplet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function unsetSS()
{
  unset($_SESSION['URL']);
}
function closeDB()
{
  if (isset($conn))
    $conn->close();
}
