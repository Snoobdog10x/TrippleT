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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>

<body id="home">
    <div class="wrapper">
        <?= require("HeaderProduct.php") ?>
    </div>
    <div class="clearfix">
    </div>
    <div class="container_fullwidth">
        <div class="container">
        <form action="" method="POST">
            <div class="row">
                <?php
                require_once("lib.php");
                $sql = "SELECT * FROM product where PID=" . $_REQUEST['pid'];
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                closeDB();
                ?>
                <div class="col-md-9">
                    <div class="products-details">
                        <div class="preview_image">
                            <div class="preview-small">
                                <img id="zoom_03" src="<?= $row['IMG'] ?>" data-zoom-image="<?= $row['IMG'] ?>" alt="">
                            </div>
                        </div>
                        <div class="products-description">
                            <h5 class="name">
                                <?= $row['NAME'] ?>
                            </h5>
                            <p>
                                <img alt="" src="images/star.png">
                                <a class="review_num" href="#">
                                    02 Review(s)
                                </a>
                            </p>
                            <p>
                                Availability:
                                <span class=" light-red">
                                    In Stock
                                </span>
                            </p>
                            <p>
                                Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrie ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulps utate, tristique ut lectus. Sed et lorem nunc...
                            </p>
                            <hr class="border">
                            <div class="price">
                                Price :
                                <span class="new_price">
                                    <?= $row['PRICE'] ?>
                                    <sup>
                                        $
                                    </sup>
                                </span>
                                <span class="old_price">
                                    <?= number_format($row['PRICE'] + 10, 2) ?>
                                    <sup>
                                        $
                                    </sup>
                                </span>
                            </div>
                            <hr class="border">
                            <div class="wided">
                                <div class="qty">
                                    Qty &nbsp;&nbsp;:
                                    <input type="number" value="0" name="quantity"></input>
                                    </div>
                                <div class="button_group">
                                    <button class="button" onclick="addtocart(<?= $row['PID'] ?>)">
                                    <button class="button" type="submit" name="addcart">
                                        Add To Cart
                                    </button>
                                    <button class="button compare">
                                        <i class="fa fa-exchange">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-heart-o">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-envelope-o">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            </form>
                            <hr class="border">
                            <img src="images/share.png" alt="" class="pull-right">
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="tab-box">
                        <div id="tabnav">
                            <ul>
                                <li>
                                    <a href="#Description">
                                        Description
                                    </a>
                                </li>
                                <li>
                                    <a href="#Reviews">
                                        REVIEW
                                    </a>
                                </li>
                                <li>
                                    <a href="#tags">
                                        PRODUCT TAGS
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content-wrap">
                            <div class="tab-content" id="Description">
                                <p>
                                    <?= $row['DETAIL']; ?>
                                </p>
                            </div>
                            <div class="tab-content" id="Reviews">
                                <form>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    &nbsp;
                                                </th>
                                                <th>
                                                    1 star
                                                </th>
                                                <th>
                                                    2 stars
                                                </th>
                                                <th>
                                                    3 stars
                                                </th>
                                                <th>
                                                    4 stars
                                                </th>
                                                <th>
                                                    5 stars
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Quality
                                                </td>
                                                <td>
                                                    <input type="radio" name="quality" value="Blue" />
                                                </td>
                                                <td>
                                                    <input type="radio" name="quality" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="quality" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="quality" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="quality" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Price
                                                </td>
                                                <td>
                                                    <input type="radio" name="price" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Value
                                                </td>
                                                <td>
                                                    <input type="radio" name="value" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value" value="">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value" value="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-row">
                                                <label class="lebel-abs">
                                                    Your Name
                                                    <strong class="red">
                                                        *
                                                    </strong>
                                                </label>
                                                <input type="text" name="" class="input namefild">
                                            </div>
                                            <div class="form-row">
                                                <label class="lebel-abs">
                                                    Your Email
                                                    <strong class="red">
                                                        *
                                                    </strong>
                                                </label>
                                                <input type="email" name="" class="input emailfild">
                                            </div>
                                            <div class="form-row">
                                                <label class="lebel-abs">
                                                    Summary of You Review
                                                    <strong class="red">
                                                        *
                                                    </strong>
                                                </label>
                                                <input type="text" name="" class="input summeryfild">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-row">
                                                <label class="lebel-abs">
                                                    Your Name
                                                    <strong class="red">
                                                        *
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <input type="submit" value="Submit" class="button">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-content">
                                <div class="review">
                                    <p class="rating">
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star-half-o gray">
                                        </i>
                                        <i class="fa fa-star-o gray">
                                        </i>
                                    </p>
                                    <h5 class="reviewer">
                                        Reviewer name
                                    </h5>
                                    <p class="review-date">
                                        Date: 01-01-2014
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros
                                        neque. In sapien est, malesuada non interdum id, cursus vel neque.
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="rating">
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star light-red">
                                        </i>
                                        <i class="fa fa-star-half-o gray">
                                        </i>
                                        <i class="fa fa-star-o gray">
                                        </i>
                                    </p>
                                    <h5 class="reviewer">
                                        Reviewer name
                                    </h5>
                                    <p class="review-date">
                                        Date: 01-01-2014
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros
                                        neque. In sapien est, malesuada non interdum id, cursus vel neque.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-content" id="tags">
                                <div class="tag">
                                    Add Tags :
                                    <input type="text" name="">
                                    <input type="submit" value="Tag">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="hot-products">
                        <h3 class="title"><strong>Hot</strong> Products</h3>
                        <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                        <ul id="hot">
                            <?php
                            require_once('lib.php');
                            ?>
                            <?php
                            $sql = "SELECT * FROM product WHERE Type='HOTPRODUCT'";
                            $result = $conn->query($sql);
                            $end = $result->num_rows;
                            $limit = ($end % 3 == 0) ? intval($end / 3) : intval($end / 3) + 1;
                            $start = 0;
                            for ($i = 0; $i < $limit; $i++) {
                            ?>
                                <li>
                                    <div class="row">
                                        <?php
                                        $sql = "SELECT * FROM product WHERE Type='HOTPRODUCT' LIMIT " . $start . ",3";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                        ?>

                                            <div class="col-md-4 col-sm-7">
                                                <div class="products">
                                                    <div class="thumbnail"><a href="details.php?pid=<?= $row['PID'] ?>">
                                                            <img src="<?= $row['IMG'] ?>" style="max-width: 100%;max-height: 100%;" alt="Product Name">
                                                        </a>
                                                    </div>
                                                    <div class="productname"><?= $row['NAME'] ?></div>
                                                    <h4 class="price"><?= $row['PRICE'] ?></h4>
                                                    <div class="button_group"><button class="button add-cart" type="button">Add To
                                                            Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        $start = $start + 3;
                                        ?>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="special-deal leftbar">
                        <h4 class="title">
                            Special
                            <strong>
                                Deals
                            </strong>
                        </h4>
                        <?php
                        $sql = "select * from product limit 0,4";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="special-item">
                                <div class="product-image">
                                    <a href="details.php?pid=<?= $row['PID'] ?>">
                                        <img src="<?= $row['IMG'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <p>
                                        <?= $row['NAME'] ?>
                                    </p>
                                    <h5 class="price">
                                        <?= $row['PRICE'] ?>
                                        <strike style="color: black;font-size: 13px;"><?= number_format($row['PRICE'] + 30, 2) ?></strike>
                                    </h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
                        <div class="clearfix">
                        </div>
                        <div class="get-newsletter leftbar">
                            <h3 class="title">
                                Get
                                <strong>
                                    newsletter
                                </strong>
                            </h3>
                            <p>
                                Casio G Shock Digital Dial Black.
                            </p>
                            <form>
                                <input class="email" type="text" name="" placeholder="Your Email...">
                                <input class="submit" type="submit" value="Submit">
                            </form>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="fbl-box leftbar">
                            <h3 class="title">
                                Facebook
                            </h3>
                            <span class="likebutton">
                                <a href="#">
                                    <img src="images/fblike.png" alt="">
                                </a>
                            </span>
                            <p>
                                12k people like Flat Shop.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                            </ul>
                            <div class="fbplug">
                                <a href="#">
                                    <span>
                                        <img src="images/fbicon.png" alt="">
                                    </span>
                                    Facebook social plugin
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
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
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src='js/jquery.elevatezoom.js'>
    </script>
    <script type="text/javascript" src="js/script.min.js">
    </script>
</body>

</html>