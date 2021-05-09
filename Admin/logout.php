<?php
require_once('Sessionadmin.php');
unset($_SESSION['USERNAME']);
header('Location: index.php');
exit;
?>