<?php
require_once('lib.php');
$test=array();
$test=scandir("images\best-product",1);
$path="images\best-product";
$PID=4;
$stmt = $conn->prepare("INSERT INTO product (PID,TYPE,IMG) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $PID,$TYPE,$IMG);
foreach($test as $i){
    if($i != "."&&$i != ".."){
        $PID++;
        $TYPE="HOTPRODUCT";
        $IMG=$path."\\".$i;
        echo $IMG."<br>";
        $stmt->execute();
    }
}
