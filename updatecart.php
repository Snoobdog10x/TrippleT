<?php
require_once('LoginSession.php');
updateitemID($_REQUEST['id'],$_REQUEST['value']);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>