<?php
require_once("lib.php");
if (!isset($_REQUEST['Page']))
    $_REQUEST['Page'] = 0;
if (!isset($_REQUEST['search_name']))
$_REQUEST['search_name']="";
if (!isset($_REQUEST['brand_list']))
$_REQUEST['brand_list']="";
if (!isset($_REQUEST['type_list']))
$_REQUEST['type_list']="";
if (!isset($_REQUEST['price_list']))
$_REQUEST['price_list']="";
if (!isset($_REQUEST['button_go']))
$_REQUEST['button_go']="Go";
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
                        <form action="productgird.php" method="GET">
                            <div class="category leftbar">
                                <h3 class="title">
                                    Name
                                </h3>
                                <font face="Verdana" size="3">
                                    <input type="text" id="search_name" name="search_name"></input>
                                </font>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="category leftbar">
                                <h3 class="title">
                                    Brand
                                </h3>
                                <font face="Verdana" size="3">
                                    <select id="brand" name="brand_list">
                                        <option value="">Choose a brand</option>
                                        <?php
                                        $result = $conn->query("SELECT DISTINCT BRAND FROM product WHERE BRAND IS NOT NULL");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<option value='" . $row['BRAND'] . "'>" . $row['BRAND'] . "</option>";
                                        }
                                        ?>
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
                                    <select id="type" name="type_list">
                                        <option value="">Choose a type</option>
                                        <?php
                                        $result = $conn->query("SELECT DISTINCT TYPE FROM product WHERE TYPE IS NOT NULL");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<option value='" . $row['TYPE'] . "'>" . $row['TYPE'] . "</option>";
                                        }
                                        ?>
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
                                    <select id="price" name="price_list">
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
                                                if ($sql == "")
                                                    $sql = "SELECT * FROM product";
                                            } else
                                                $sql = "SELECT * FROM product";
                                            return $sql;
                                        }
                                        $sql = getSQL();
                                        $result = $conn->query($sql);
                                        $row = $result->num_rows;
                                        $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                        if (isset($_REQUEST['button_go']))
                                            $search = sprintf(
                                                "&search_name=%s&brand_list=%s&type_list=%s&price_list=&button_go=%s",
                                                $_REQUEST['search_name'],
                                                $_REQUEST['brand_list'],
                                                $_REQUEST['type_list'],
                                                $_REQUEST['price_list'],
                                                $_REQUEST['button_go']
                                            );
                                        else
                                            $search = "";
                                        ?>
                                        <a href="productgird.php?Page=<?= $_REQUEST['Page'] > 0 ? $_REQUEST['Page'] - 1 : $_REQUEST['Page'] ?><?= $search ?>" class="prev-page">
                                            <i class="fa fa-angle-left">
                                            </i>
                                        </a>
                                        <?php
                                        for ($i = 0; $i < $pages; $i++) {
                                        ?>
                                            <a href="productgird.php?Page=<?= $i ?><?= $search ?>" class="active">
                                                <?= ($i + 1) ?>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        <a href="productgird.php?Page=<?= $_REQUEST['Page'] < $pages - 1 ? $_REQUEST['Page'] + 1 : $_REQUEST['Page'] ?><?= $search ?>" class="next-page">
                                            <i class="fa fa-angle-right">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                $sql = $sql . " LIMIT " . ($_REQUEST['Page'] * 6) . ",6";
                                $result = $conn->query($sql);
                                if ($result->num_rows == 0) {
                                ?>
                                    <script>
                                        alert('Cannot find product you need');
                                    </script>
                                <?php
                                }
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
                                                <button class="button add-cart" onclick="addtocart(<?= $row['PID'] ?>)" type="button">
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
                                            $sql = getSQL();
                                            $result = $conn->query($sql);
                                            $row = $result->num_rows;
                                            $pages = $row % 6 == 0 ? intval($row / 6) : intval($row / 6) + 1;
                                            ?>
                                            <a href="productgird.php?Page=<?= $_REQUEST['Page'] > 0 ? $_REQUEST['Page'] - 1 : $_REQUEST['Page'] ?><?= $search ?>" class="prev-page">
                                                <i class="fa fa-angle-left">
                                                </i>
                                            </a>
                                            <?php
                                            for ($i = 0; $i < $pages; $i++) {
                                            ?>
                                                <a href="productgird.php?Page=<?= $i ?><?= $search ?>" class="active">
                                                    <?= ($i + 1) ?>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                            <a href="productgird.php?Page=<?= $_REQUEST['Page'] < $pages - 1 ? $_REQUEST['Page'] + 1 : $_REQUEST['Page'] ?><?= $search ?>" class="next-page">
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
<?php
if (isset($_REQUEST['button_go'])) {
?>
    <script>
        document.getElementById('search_name').value = "<?= $_REQUEST['search_name'] ?>";
        document.getElementById('brand').value = "<?= $_REQUEST['brand_list'] ?>";
        document.getElementById('type').value = "<?= $_REQUEST['type_list'] ?>";
        document.getElementById('price').value = "<?= $_REQUEST['price_list'] ?>";
    </script>
<?php
}
?>