<?php
require_once('LoginSession.php');
unset($_SESSION['Username']);
unset($_SESSION['cart']);
header('Location: index.php');
exit;
?>