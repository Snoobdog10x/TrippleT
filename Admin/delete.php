<?php
require_once('lib.php');
$sql = "DELETE FROM product WHERE pid=" . $_REQUEST['id'];
if ($conn->query($sql) === TRUE) {
    closeDB();
?>
    <script>
        alert('Succes')
        window.location.href = 'index.php'
    </script>
<?php
}
?>