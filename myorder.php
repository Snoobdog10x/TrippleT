<!DOCTYPE html>
<html>
<?= require_once('lib.php') ?>

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
        <?php
        require('HeaderProduct.php') ?>
        <div class="clearfix">
        </div>
        <div class="container_fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title contact-title">
                            MY ORDER
                        </h4>
                        <div class="clearfix">
                        </div>
                        <div style="height:350px">
                            <table class="shop-table">
                                <tbody>
                                    <tr>
                                        <th>Purchase Date</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Order Status</th>
                                        <th>Detail</th>
                                    </tr>
                                    <?php
                                    $getOID = $conn->query("SELECT * FROM `order`");
                                    while ($row = $getOID->fetch_assoc()) {
                                        $oid = $row['OID'];
                                        $date = $row['DATE'];
                                        $total = $row['TOTAL'];
                                        $status = $row['STATUS']; ?>
                                        <tr>
                                            <td><?= $date ?></td>
                                            <td style="text-align: center;">
                                                <?php
                                                $getname_pro = $conn->query("SELECT * FROM `orderdetail`,`product` WHERE orderdetail.PID=product.PID AND orderdetail.OID=$oid");
                                                while ($row = $getname_pro->fetch_assoc()) {
                                                    echo $row['NAME'] . "</br>";
                                                } ?><br></td>
                                            <td><?= $total ?> $</td>
                                            <td><?= $status ?></td>
                                            <td><button ata-toggle="modal" data-target="#updateModal" onclick="location.href='orderdetails.php?oid= <?= $oid ?>' ">Detail</button></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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

            </div>
        </div>
        <div class="footer">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-logo" style="margin-top: -20%;">
                                <a href="#">
                                    <img src="images/logo2.png" width="150px" height="150px" alt="">
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
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js">
    </script>
</body>

</html>