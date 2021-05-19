<?php
function getSQL()
{
    $sql = "";
    if (isset($_REQUEST['button_go'])) {
        if ($_REQUEST['search_name'] != '') {
            $sql = sprintf("SELECT * FROM product WHERE NAME LIKE '%%%s%%'", $_REQUEST['search_name']);
        }
        if ($_REQUEST['brand_list'] != '') {
            if ($sql != "")
                $sql = $sql . sprintf(" and BRAND='%s'", $_REQUEST['brand_list']);
            else
                $sql = sprintf("SELECT * FROM product WHERE BRAND='%s'", $_REQUEST['brand_list']);
        }
        if ($_REQUEST['type_list'] != '') {
            if ($sql != "")
                $sql = $sql . sprintf(" and TYPE='%s'", $_REQUEST['type_list']);
            else
                $sql = sprintf("SELECT * FROM product WHERE TYPE='%s'", $_REQUEST['type_list']);
        }
        if ($_REQUEST['price_list'] != '') {
            $a = explode('-', $_REQUEST['price_list']);
            if ($sql != "")
                $sql = $sql . sprintf(" and PRICE BETWEEN '%s' and '%s'", $a[0], $a[1]);
            else
                $sql = sprintf("SELECT * FROM product WHERE PRICE BETWEEN '%s' and '%s'", $a[0], $a[1]);
        }
        if ($_REQUEST['search_name'] == ''&&$_REQUEST['brand_list'] != ''&&$_REQUEST['type_list'] != ''&&$_REQUEST['price_list'] != '')
        $sql = "SELECT * FROM product";
    } else
        $sql = "SELECT * FROM product";
    return $sql;
}
$sql=getSQL();
var_dump($sql);
