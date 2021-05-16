<?php
require_once("lib.php");
if(!isset($_REQUEST['Page']))
$_REQUEST['Page']=0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Welcome to FlatShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="home">
    <div class="wrapper" id="home">
        <?= require("HeaderProduct.php") ?>
        <div class="clearfix">
        </div>
        <div class="container_fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <form action="search.php" method="GET">
                        <div class="category leftbar">
                            <h3 class="title">  
                                Brand
                            </h3>
                            <font face="Verdana" size="3">
                                <select id="gender" name="brand_list">
                                    <option value="">Choose a brand</option>
                                    <option value="Gaultier">Gaultier</option>
                                    <option value="Narciso Rodriguez">Narciso Rodriguez</option>
                                    <option value="Lacoste">Lacosteo</option>
                                    <option value="Paco Rabanne">Paco Rabanne</option>
                                    <option value="Issey Miyake">Issey Miyake</option>
                                    <option value="Kenzo World">Kenzo World</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Calvin Klein">Calvin Klein</option>
                                    <option value="Dolce & Gabbana">Dolce & Gabbana</option>
                                </select>
                            </font>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="category leftbar">
                            <h3 class="title">  
                                Type
                            </h3>
                            <font face="Verdana" size="3">
                                <select id="gender" name="type_list">
                                    <option value="">Choose a type</option>
                                    <option value="HOTPRODUCT">Hot Product</option>
                                    <option value="FEATUREDPRODUCT">Featured Product</option>
                                    <option value="MEN">Men</option>
                                    <option value="WOMEN">Women</option>
                                    <option value="UNISEX">Unisex</option>
                                </select>
                            </font>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="category leftbar">
                            <h3 class="title">  
                                Price
                            </h3>
                            <font face="Verdana" size="3">
                                <select id="gender" name="price_list">
                                    <option value="">Select the price</option>
                                    <option value="0-30">0$-30$</option>
                                    <option value="31-50">30$-50$</option>
                                    <option value="51-70">50$-70$</option>
                                    <option value="71-99">70$-100$</option>
                                    <option value="100-10000">>=100$</option>
                                </select>
                            </font>                            
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="pricing">
                        <input type="submit" value="Go" name="button_go">
                        </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div class="banner">
                            <div class="bannerslide" id="bannerslide">
                                <ul class="slides">
                                    <li>
                                        <a href="#">
                                            <img src="images/banner-01.jpg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/banner-02.jpg" alt="" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="products-grid">
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="sort-by">
                                        Sort by :
                                        <select name="">
                                            <option value="Default" selected>
                                                Default
                                            </option>
                                            <option value="Name">
                                                Name
                                            </option>
                                            <option value="Price">
                                                Price
                                            </option>
                                        </select>
                                    </div>
                                    <div class="pager">
                                        <a href="#" class="prev-page">
                                            <i class="fa fa-angle-left">
                                            </i>
                                        </a>
                                        <?php
                                        if (isset($_REQUEST['button_go'])) {
                                            $a = explode('-', $_REQUEST['price_list']);
                                            if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "'";
                                            }
                                            else if ($_REQUEST['type_list']!='' && empty($_REQUEST['brand_list']) && empty($_REQUEST['price_list'])) {
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "'";
                                            }
                                            else if ($_REQUEST['price_list']!=''&& empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list'])){
                                                $sql = "SELECT * FROM product WHERE PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";     
                                            }     
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "'";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                echo '<script type="text/javascript">
                                                window.location = "productgird.php?Type=&Page=0"
                                                </script>';  
                                            }
                                        }
                                        else {
                                            $sql = "SELECT * FROM product";
                                        }
                                        $result = $conn->query($sql);
                                        $row = $result->num_rows;
                                        $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                        for ($i = 0; $i < $pages; $i++) {
                                            $search_advance = "Page=" . $i . (isset($_REQUEST['brand_list']) ? ("&brand=" . $_REQUEST['brand_list']) : "") . (isset($_REQUEST['type_list']) ? ("&type=" . $_REQUEST['type_list']) : "");
                                        ?>
                                            <a href="search.php?<?= $search_advance ?>" class="active">
                                                <?= ($i + 1) ?>
                                            </a>
                                        <?php
                                        }
                                        /*
                                        for ($i = 0; $i < $pages; $i++) {
                                        ?>
                                            <a href="productgird.php?Type=<?= $_REQUEST['Type'] ?>&Page=<?= $i ?>" class="active">
                                                <?= ($i + 1) ?>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        */
                                        /*
                                        for ($i = 0; $i < $pages; $i++) {
                                            ?>                                            
                                                <a href="productgird.php?name=<?=$_REQUEST['name']?>&Page=<?= $i ?>" class="active">
                                                    <?= ($i + 1) ?>
                                                </a>
                                            <?php
                                            }
                                            */
                                            ?>
                                        <a href="#" class="next-page">
                                            <i class="fa fa-angle-right">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                /*
                                if (isset($_REQUEST['name'])) {
//                                    print_r($_REQUEST['Page']); exit;
                                    $sql = "SELECT * FROM product WHERE NAME LIKE '%" . $_REQUEST['name'] . "%'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                }
                                else
                                if ($_REQUEST['Type'] != '') {
                                    $sql = "SELECT * FROM product where Type='" . $_REQUEST['Type'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                } else {
                                    $sql = "SELECT * FROM product" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                }
                                */
                                        if (isset($_REQUEST['button_go'])) {
                                            $a = explode('-', $_REQUEST['price_list']);
                                            if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if ($_REQUEST['type_list']!='' && empty($_REQUEST['brand_list']) && empty($_REQUEST['price_list'])) {
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if ($_REQUEST['price_list']!=''&& empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list'])){
                                                $sql = "SELECT * FROM product WHERE PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";     
                                            }     
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                echo '<script type="text/javascript">
                                                window.location = "productgird.php?Type=&Page=0"
                                                </script>';    
                                            }
                                        }
                                        else {
                                            $sql = "SELECT * FROM product" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                        }
                                        /*
                                if ($_REQUEST['brand_list'] != '') {
                                    $sql = "SELECT * FROM product WHERE BRAND ='" . $_REQUEST['brand_list'] . "'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                } else {
                                    $sql = "SELECT * FROM product" . " LIMIT " . ($_REQUEST['brand_list'] * 6) . ",6";
                                }*/
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="products">
                                            <div class="thumbnail">
                                                <a href="details.php?pid=<?= $row['PID']; ?>">
                                                    <img src="<?= $row['IMG']; ?>" style="max-width:100%;max-height:100%;" alt="Product Name">
                                                </a>
                                            </div>
                                            <div class="productname">
                                                <?= $row['NAME']; ?>
                                            </div>
                                            <h4 class="price">
                                                <?= $row['PRICE']; ?>
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                closeDB();
                                ?>
                            </div>
                            <div class="products-grid">
                                <div class="toolbar">
                                    <div class="sorter">
                                        <div class="sort-by">
                                            Sort by :
                                            <select name="">
                                                <option value="Default" selected>
                                                    Default
                                                </option>
                                                <option value="Name">
                                                    Name
                                                </option>
                                                <option value="Price">
                                                    Price
                                                </option>
                                            </select>
                                        </div>
                                        <div class="pager">
                                            <a href="#" class="prev-page">
                                                <i class="fa fa-angle-left">
                                                </i>
                                            </a>
                                            <?php
                                            /*
                                            if (isset($_REQUEST['name'])) {
                                                $sql = "SELECT * FROM product WHERE NAME LIKE '%" . $_REQUEST['name'] . "%'";                      
                                            }
                                            else
                                            if ($_REQUEST['Type'] != '')
                                                $sql = "SELECT * FROM product where Type='" . $_REQUEST['Type'] . "'";
                                            else
                                                $sql = "SELECT * FROM product";
                                            
                                            */
                                        if (isset($_REQUEST['button_go'])) {
                                            $a = explode('-', $_REQUEST['price_list']);
                                            if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "'";
                                            }
                                            else if ($_REQUEST['type_list']!='' && empty($_REQUEST['brand_list']) && empty($_REQUEST['price_list'])) {
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "'";
                                            }
                                            else if ($_REQUEST['price_list']!=''&& empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list'])){
                                                $sql = "SELECT * FROM product WHERE PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";     
                                            }     
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && empty($_REQUEST['price_list'])){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "'";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && empty($_REQUEST['type_list']) && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if ($_REQUEST['brand_list']!='' && $_REQUEST['type_list']!='' && $_REQUEST['price_list']!=''){
                                                $sql = "SELECT * FROM product WHERE BRAND ='" . $_GET['brand_list'] . "' AND TYPE ='" . $_GET['type_list'] . "' AND PRICE BETWEEN '" . $a['0'] . "' AND '" . $a['1'] . "'";
                                            }
                                            else if (empty($_REQUEST['brand_list']) && empty($_REQUEST['type_list']) && empty($_REQUEST['price_list'])){
                                                echo '<script type="text/javascript">
                                                window.location = "productgird.php?Type=&Page=0"
                                                </script>';                                             }
                                        }
                                        else {
                                            $sql = "SELECT * FROM product";
                                        }
                                            $result = $conn->query($sql);
                                            $row = $result->num_rows;
                                            $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                            for ($i = 0; $i < $pages; $i++) {
                                                $search_advance = "Page=" . $i . (isset($_REQUEST['brand_list']) ? ("&brand=" . $_REQUEST['brand_list']) : "") . (isset($_REQUEST['type_list']) ? ("&type=" . $_REQUEST['type_list']) : "");
                                            ?>
                                                <a href="search.php?<?= $search_advance ?>" class="active">
                                                    <?= ($i + 1) ?>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                            <a href="#" class="next-page">
                                                <i class="fa fa-angle-right">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="our-brand">
                        <h3 class="title">
                            <strong>
                                Our
                            </strong>
                            Brands
                        </h3>
                        <div class="control">
                            <a id="prev_brand" class="prev" href="#">
                                &lt;
                            </a>
                            <a id="next_brand" class="next" href="#">
                                &gt;
                            </a>
                        </div>
                        <ul id="braldLogo">
                            <li>
                                <ul class="brand_item">
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/envato.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/themeforest.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/photodune.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/activeden.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/envato.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="brand_item">
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/envato.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/themeforest.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/photodune.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/activeden.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="brand-logo">
                                                <img src="images/envato.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="footer">
                <div class="footer-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="footer-logo">
                                    <a href="#">
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="title">
                                    Contact
                                    <strong>
                                        Info
                                    </strong>
                                </h4>
                                <p>
                                    No. 08, Nguyen Trai, Hanoi , Vietnam
                                </p>
                                <p>
                                    Call Us : (084) 1900 1008
                                </p>
                                <p>
                                    Email : michael@leebros.us
                                </p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="title">
                                    Customer
                                    <strong>
                                        Support
                                    </strong>
                                </h4>
                                <ul class="support">
                                    <li>
                                        <a href="#">
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Payment Option
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Booking Tips
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Infomation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4 class="title">
                                    REQUEST Our
                                    <strong>
                                        Newsletter
                                    </strong>
                                </h4>
                                <p>
                                    Lorem ipsum dolor ipsum dolor.
                                </p>
                                <form class="newsletter">
                                    <input type="text" name="" placeholder="Type your email....">
                                    <input type="submit" value="SignUp" class="button">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Copyright © 2012. Designed by
                                    <a href="#">
                                        Michael Lee
                                    </a>
                                    . All rights reseved
                                </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="social-icon">
                                    <li>
                                        <a href="#" class="linkedin">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="google-plus">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="facebook">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js">
        </script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js">
        </script>
        <script type="text/javascript" src="js/bootstrap.min.js">
        </script>
        <script defer src="js/jquery.flexslider.js">
        </script>
        <script type="text/javascript" src="js/jquery.sequence-min.js">
        </script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
        </script>
        <script type="text/javascript" src="js/script.min.js">
        </script>
</body>

</html>