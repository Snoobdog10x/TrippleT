<?php
require_once('Sessionadmin.php');
$stt = ($_REQUEST['stt'] == "DONE") ? "PROCESSING" : "DONE";
$conn = connectDb();
$sql = sprintf("update `order`
set STATUS='%s'
where OID='%s'", $stt, $_REQUEST['oid']);
if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Change status success");
        window.location.href="ordermanager.php";
    </script>
    <?php
}
    ?>
