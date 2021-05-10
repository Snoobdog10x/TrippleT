<?php
require_once('LoginSession.php');
unset($_SESSION['Username']);
header('Location: index.php');
exit;
?>