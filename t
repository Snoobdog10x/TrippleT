$path="images\new-product";
$PID=17;
$stmt = $conn->prepare("INSERT INTO product (PID,TYPE,IMG) VALUES (?, ?, ?)");
$stmt->bind_param("iss",$PID,$TYPE,$IMG);
foreach($test as $i){
    if($i != "."&&$i != ".."){
        $PID++;
        $TYPE="FEATUREDPRODUCT";
        $IMG=$path."\\".$i;
        echo $IMG."<br>";
        $stmt->execute();
    }
}