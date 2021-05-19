<?php
require_once("lib.php");
if (!isset($_REQUEST['Page']))
    $_REQUEST['Page'] = 0;
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
                        <div class="category leftbar">
                            <h3 class="title">
                                Categories
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Women
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Salon
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        New Trend
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Living room
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bed room
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="branch leftbar">
                            <h3 class="title">
                                Branch
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        New
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sofa
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Salon
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        New Trend
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Living room
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bed room
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="price-filter leftbar">
                            <h3 class="title">
                                Price
                            </h3>
                            <form class="pricing">
                                <label>
                                    $
                                    <input type="number" min="0">
                                </label>
                                <span class="separate">
                                    -
                                </span>
                                <label>
                                    $
                                    <input type="number" min="0">
                                </label>
                                <input type="submit" value="Go">
                            </form>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="clolr-filter leftbar">
                            <h3 class="title">
                                Color
                            </h3>
                            <ul>
                                <li>
                                    <a href="#" class="red-bg">
                                        light red
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" yellow-bg">
                                        yellow"
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="black-bg ">
                                        black
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pink-bg">
                                        pink
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dkpink-bg">
                                        dkpink
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chocolate-bg">
                                        chocolate
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="orange-bg">
                                        orange-bg
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="off-white-bg">
                                        off-white
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="extra-lightgreen-bg">
                                        extra-lightgreen
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="lightgreen-bg">
                                        lightgreen
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="biscuit-bg">
                                        biscuit
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chocolatelight-bg">
                                        chocolatelight
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="product-tag leftbar">
                            <h3 class="title">
                                Products
                                <strong>
                                    Tags
                                </strong>
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Lincoln us
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        SDress for Girl
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Corner
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Window
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        PG
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Oscar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bath room
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        PSD
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                                        <?php
                                        if (isset($_REQUEST['name'])){
                                            $sql = "SELECT * FROM product WHERE NAME LIKE '%" . $_GET['name'] . "%'";
                                        }
                                        else{
                                            $sql = "SELECT * FROM product";
                                        }
                                        $result = $conn->query($sql);
                                        $row = $result->num_rows;
                                        $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                        ?>
                                        <a href="productgird.php?Page=<?= $_REQUEST['Page'] > 0 ? $_REQUEST['Page'] - 1 : $_REQUEST['Page'] ?>" class="prev-page">
                                            <i class="fa fa-angle-left">
                                            </i>
                                        </a>
                                        <?php
                                        for ($i = 0; $i < $pages; $i++) {
                                        ?>
                                            <a href="productgird.php?Page=<?= $i ?>" class="active">
                                                <?= ($i + 1) ?>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        <a href="productgird.php?Page=<?= $_REQUEST['Page'] < $pages - 1 ? $_REQUEST['Page'] + 1 : $_REQUEST['Page'] ?>" class="next-page">
                                            <i class="fa fa-angle-right">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                if (isset($_REQUEST['name'])){
                                    $sql = "SELECT * FROM product WHERE NAME LIKE '%" . $_GET['name'] . "%'" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                }
                                else{
                                    $sql = "SELECT * FROM product" . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                }
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
                                            <?php
                                            if (isset($_REQUEST['name'])){
                                                $sql = "SELECT * FROM product WHERE NAME LIKE '%" . $_GET['name'] . "%'";
                                            }
                                            else {
                                                $sql = "SELECT * FROM product";
                                            }
                                            $result = $conn->query($sql);
                                            $row = $result->num_rows;
                                            $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                            ?>
                                            <a href="productgird.php?Page=<?= $_REQUEST['Page'] > 0 ? $_REQUEST['Page'] - 1 : $_REQUEST['Page'] ?>" class="prev-page">
                                                <i class="fa fa-angle-left">
                                                </i>
                                            </a>
                                            <?php
                                            for ($i = 0; $i < $pages; $i++) {
                                            ?>
                                                <a href="productgird.php?Page=<?= $i ?>" class="active">
                                                    <?= ($i + 1) ?>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                            <a href="productgird.php?Page=<?= $_REQUEST['Page'] < $pages - 1 ? $_REQUEST['Page'] + 1 : $_REQUEST['Page'] ?>" class="next-page">
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
                                    Get Our
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