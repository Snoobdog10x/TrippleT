<?php
session_start();
function connectDb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tripplet";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function login($username, $password)
{
    $conn = connectDb();
    $sql = "select * from customer where USERNAME='" . $username . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            if ($row['PASSWORD'] == $password) {
                $_SESSION['Username'] = $username;
                $_SESSION['Name']=$row['NAME'];
                return "Login succeed";
            } else {
                return "Wrong password";
            }
        }
    } else {
        return "Username doesn't exists";
    }
}
function islogin(){
    return isset($_SESSION['Username']);
}
function logout()
{
    unset($_SESSION['Username']);
}
?>