<?php
require_once('LoginSession.php');
if(!isset($_REQUEST['quantity']))
$_REQUEST['quantity']=1;
addnewitemID($_REQUEST['id'],$_REQUEST['quantity']);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>