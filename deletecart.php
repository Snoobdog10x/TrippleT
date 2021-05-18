<?php
require_once('LoginSession.php');
deleteitemID($_REQUEST['id']);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>