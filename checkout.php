<!DOCTYPE html>
<html>
<?= require_once('lib.php') ?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Welcome to TrippleTshop
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
<script>
    function checkcard() {
        if (document.getElementById('ccnum').value == '') {
            document.getElementById('numcard').innerHTML = '!!!';
            return false;
        }
        if (document.getElementById('expmonth').value == '') {
            document.getElementById('exp_month').innerHTML = '!!!';
            return false;
        }
        if (document.getElementById('expyear').value == '') {
            document.getElementById('exp_year').innerHTML = '!!!';
            return false;
        }
        if (document.getElementById('cvv').value == '') {
            document.getElementById('cvv_card').innerHTML = '!!!';
            return false;
        }
    }
</script>

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
                        <h5 class="title contact-title">
                            CHECKOUT
                        </h5>
                        <div class="clearfix">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact-infoormation">
                                    <h5>
                                        Cart
                                    </h5>
                                    <table style="border-collapse: collapse; width: 100%; margin-left: auto; margin-right: auto; height: 72px;" border="1">
                                        <tr style="height: 18px;">
                                            <td style="text-align: center; height: 18px;">
                                                <h6><strong>Name</strong>
                                                    <h6>
                                            </td>
                                            <td style="text-align: center; height: 18px;">
                                                <h6><strong>Price</strong>
                                                    <h6>
                                            </td>
                                            <td style="text-align: center; height: 18px;">
                                                <h6><strong>Quantity</strong>
                                                    <h6>
                                            </td>
                                            <td style="text-align: center; height: 18px;">
                                                <h6><strong>Price</strong>
                                                    <h6>
                                            </td>
                                        </tr>
                                        <?php
                                        $total = 0;
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $key => $value) {
                                                $sql = "SELECT * from product where PID=" . $key;
                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total = number_format($total + $row['PRICE'] * $value, 2); ?>
                                                <tr style="height: 18px;">
                                                    <td style="height: 18px; text-align: center;"><?= $row['NAME'] ?></td>
                                                    <td style="height: 18px; text-align: center;"><?= $row['PRICE'] ?></td>
                                                    <td style="height: 18px; text-align: center;" type="number"><?= $value ?></input></td>
                                                    <td style="height: 18px; text-align: center;"><?= number_format($row['PRICE'] * $value, 2) ?></td>
                                            <?php
                                            }
                                        }
                                            ?>
                                                </tr>
                                    </table>
                                    <br>
                                    <h5 style="text-align: right;">
                                        Total: <?= $total ?>
                                    </h5>
                                </div>
                            </div>
                            <style>
                                .row {
                                    display: -ms-flexbox;
                                    /* IE10 */
                                    display: flex;
                                    -ms-flex-wrap: wrap;
                                    /* IE10 */
                                    flex-wrap: wrap;
                                    margin: 0 -16px;
                                }

                                .col-25 {
                                    -ms-flex: 25%;
                                    /* IE10 */
                                    flex: 25%;
                                }

                                .col-50 {
                                    -ms-flex: 50%;
                                    /* IE10 */
                                    flex: 50%;
                                }

                                .col-75 {
                                    -ms-flex: 75%;
                                    /* IE10 */
                                    flex: 75%;
                                }

                                .col-25,
                                .col-50,
                                .col-75 {
                                    padding: 0 16px;
                                }

                                input[type=text] {
                                    width: 100%;
                                    margin-bottom: 20px;
                                    padding: 12px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                }

                                label {
                                    margin-bottom: 10px;
                                    display: block;
                                }

                                .icon-container {
                                    margin-bottom: 20px;
                                    padding: 7px 20px;
                                    font-size: 24px;
                                }

                                .btn {
                                    background-color: #04AA6D;
                                    color: white;
                                    padding: 12px;
                                    margin: 10px 0;
                                    border: none;
                                    width: 100%;
                                    border-radius: 3px;
                                    cursor: pointer;
                                    font-size: 17px;
                                }

                                .btn:hover {
                                    background-color: #45a049;
                                }

                                span.price {
                                    float: right;
                                    color: grey;
                                }

                                @media (max-width: 800px) {
                                    .row {
                                        flex-direction: column-reverse;
                                    }

                                    .col-25 {
                                        margin-bottom: 20px;
                                    }
                                }
                            </style>
                            <div class="col-md-8">
                                <div class="ContactForm">
                                    <form action="" method="GET" onsubmit="return checkcard()">
                                        <div class="row">
                                            <div class="col-50">
                                                <h3>Billing Address</h3>
                                                <?php $sql = "SELECT * FROM customer WHERE USERNAME ='" . $_SESSION['Username'] . "'";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                    $username = $row['USERNAME'];
                                                    $fullname = $row['NAME'];
                                                    $email = $row['EMAIL'];
                                                    $address = $row['ADDRESS'];
                                                    $phone = $row['PHONE'];
                                                }
                                                ?>
                                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                                <input type="text" id="fname" name="firstname" value="<?= $fullname ?>"></input>
                                                <label for="phone"><i class="fa fa-institution"></i>Phone</label>
                                                <input type="text" id="phone" name="phone" value="<?= $phone ?>"></input>
                                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                                <input type="text" id="email" name="email" value="<?= $email ?>"></input>
                                                <label for="adr"><i class="fa fa-address-card-o"></i> Address (Default)</label>
                                                <input type="text" id="adr" name="address" value="<?= $address ?>"></input>
                                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                                <input type="text" id="city" name="city" value="Ho Chi Minh city"></input>
                                                <div class="row">
                                                    <div class="col-50">
                                                        <label for="state">Country</label>
                                                        <input type="text" id="state" name="state" value="Viet Nam"></input>
                                                    </div>
                                                    <div class="col-50">
                                                        <label for="zip">Zip</label>
                                                        <input type="text" id="zip" name="zip" value="70000"></input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-50">
                                                <h3>Payment</h3>
                                                <label for="fname">Accepted Cards</label>
                                                <img src="images/CardIcons.jpeg" style="width: 95%;">
                                                <label for="cname">Name on Card</label>
                                                <input type="text" id="cname" name="cardname" value="<?= $fullname ?>">
                                                <label for="ccnum">Credit card number<span style="color:red;" id="numcard">&nbsp; *</span></label>
                                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" onsubmit="return checkcard()">
                                                <label for="expmonth">Exp Month<span style="color:red;" id="exp_month">*</span></label>
                                                <input type="text" id="expmonth" name="expmonth" placeholder="September" onsubmit="return checkcard()">
                                                <div class="row">
                                                    <div class="col-50">
                                                        <label for="expyear">Exp Year<span style="color:red;" id="exp_year">*</span></label>
                                                        <input type="text" id="expyear" name="expyear" placeholder="2018" onsubmit="return checkcard()">
                                                    </div>
                                                    <div class="col-50">
                                                        <label for="cvv">CVV<span style="color:red;" id="cvv_card">*</span></label>
                                                        <input type="text" id="cvv" name="cvv" placeholder="352" onsubmit="return checkcard()">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <label>
                                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address 2
                                        </label>
                                        <input type="submit" value="Continue to checkout" class="btn" name="submit_order">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_REQUEST['submit_order'])) {
                    $username = $_SESSION['Username'];
                    $day = date("Y-m-d");
                    $sql = "INSERT INTO `order` (`USERNAME`,`TOTAL`,`DATE`,`STATUS`) VALUES ('$username','$total','$day','PROCESSING')";
                    $result = $conn->query($sql);
                    $sql = "SELECT MAX(OID) as OID from `order`";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $OID = $row['OID'];
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $sql = "SELECT * from product where PID=" . $key;
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total = number_format($row['PRICE'] * $value, 2);
                        $sql = sprintf(
                            "INSERT INTO `orderdetail` (`OID`,`PID`,`UPRICE`,`AMOUNT`,`TOTAL`) VALUES ('%s','%s','%s','%s','%s')",
                            $OID,
                            $row['PID'],
                            $row['PRICE'],
                            $value,
                            $total
                        );
                        $result = $conn->query($sql);
                    }
                    unset($_SESSION['cart']);
                    ?>
                    <script>
                        alert('Order Success');
                        window.location.href="index.php";
                    </script>
                    <?php
                    closeDB($conn);
                } else {
                    echo ($conn->error);
                    closeDB($conn);
                }
                ?>
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
                            <div class="footer-logo" style="margin-top: -20%;">
                                <a href="#" >
                                    <img src="images/logo2.png" width="150px" height="150px"  alt="">
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
    <script type="text/javascript" src="js/script.min.js">
    </script>
</body>

</html>