<?php
require_once('lib.php');
$test=scandir('C:\xampp\htdocs\TrippleT\images\products\Unisex',1);
$path="images\\products\\Unisex";
$PID=35;
$stmt = $conn->prepare("INSERT INTO product (PID,TYPE,IMG) VALUES (?, ?, ?)");
$stmt->bind_param("iss",$PID,$TYPE,$IMG);
foreach($test as $i){
    if($i != "."&&$i != ".."){
        $PID;
        $TYPE="UNISEX";
        $IMG=$path."\\".$i;
        echo $IMG."<br>";
        $stmt->execute();
        $PID++;
    }
}
?>
