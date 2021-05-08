<?php
require_once('lib.php');
$test=scandir('C:\xampp\htdocs\TrippleT\images\products\Women',1);
$path="images\\products\\Women";
$PID=41;
$stmt = $conn->prepare("INSERT INTO product (PID,TYPE,IMG) VALUES (?, ?, ?)");
$stmt->bind_param("iss",$PID,$TYPE,$IMG);
foreach($test as $i){
    if($i != "."&&$i != ".."){
        $PID;
        $TYPE="WOMEN";
        $IMG=$path."\\".$i;
        echo $IMG."<br>";
        $stmt->execute();
        $PID++;
    }
}
?>
