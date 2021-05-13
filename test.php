<?php
if(!isset($_REQUEST['type'])&&!isset($_REQUEST['from']))
    $where='';
else if(isset($_REQUEST['type'])&&isset($_REQUEST['from']))
    $where="where TYPE= '".$_REQUEST['type']."' and PRICE>=".$_REQUEST['from']." and PRICE<=".$_REQUEST['to']; 
else if(isset($_REQUEST['type'])) 
    $where="where TYPE= '" .$_REQUEST['type']."'";
    else
    $where="where PRICE>=".$_REQUEST['from']." and PRICE<=".$_REQUEST['to'];
if($_REQUEST['sub']=='all')
    $sql="select * from product ".$where;
else{
    if($where=='')
    $sql="select * from product where NAME like ".$_REQUEST['name'];
    else
    $sql="select * from product ".$where." and NAME like ".$_REQUEST['name'];
    echo($sql)
}
