<?php
require_once('Sessionadmin.php');
$conn=connectDb();
$sql = "DELETE FROM product WHERE pid=" . $_REQUEST['id'];
if ($conn->query($sql) === TRUE) {
    closeDB($conn);
?>
    <script>
        alert('Succes')
        window.location.href = 'index.php'
    </script>
<?php
}
?>