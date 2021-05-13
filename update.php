<?php
require_once("lib.php");
$sql = "select * from product where TYPE='MEN'";
$result = $conn->query($sql);
$count=1;
while ($row = $result->fetch_assoc()) {
    $a=explode("/",$row['IMG']);
    $img=$a[0]."/products/M-".$count++.".png";

    $sql = sprintf("UPDATE product SET IMG='%s' WHERE PID=%s",$img,$row["PID"]);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$sql = "select * from product where TYPE='WOMEN'";
$result = $conn->query($sql);
$count=1;
while ($row = $result->fetch_assoc()) {
    $a=explode("/",$row['IMG']);
    $img=$a[0]."/products/W-".$count++.".png";

    $sql = sprintf("UPDATE product SET IMG='%s' WHERE PID=%s",$img,$row["PID"]);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$sql = "select * from product where TYPE='UNISEX'";
$result = $conn->query($sql);
$count=1;
while ($row = $result->fetch_assoc()) {
    $a=explode("/",$row['IMG']);
    $img=$a[0]."/products/U-".$count++.".png";

    $sql = sprintf("UPDATE product SET IMG='%s' WHERE PID=%s",$img,$row["PID"]);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$sql = "select * from product where TYPE='HOTPRODUCT' or TYPE='FEATUREDPRODUCT'";
$result = $conn->query($sql);
$count=1;
while ($row = $result->fetch_assoc()) {
    $a=explode("\\",$row['IMG']);
    $img=$a[0]."/products/".$a[count($a)-1];

    $sql = sprintf("UPDATE product SET IMG='%s' WHERE PID=%s",$img,$row["PID"]);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>