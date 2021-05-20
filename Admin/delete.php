<?php
require_once('Sessionadmin.php');
$conn=connectDb();
$sql="select * from product where PID=" . $_REQUEST['id'];
$result=$conn->query($sql);
$row=$result->fetch_assoc();
unlink('../' . $row['IMG']);
$sql = "DELETE FROM product WHERE PID=" . $_REQUEST['id'];
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