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
                                        <tr style="height: 18px;" >
                                            <td style="text-align: center; height: 18px;"><h6><strong>No.</strong><h6></td>
                                            <td style="text-align: center; height: 18px;"><h6><strong>Name</strong><h6></td>
                                            <td style="text-align: center; height: 18px;"><h6><strong>Price</strong><h6></td>
                                            <td style="text-align: center; height: 18px;"><h6><strong>Quantity</strong><h6></td>
                                            <td style="text-align: center; height: 18px;"><h6><strong>Price</strong><h6></td>
                                        </tr>
                                        <tr style="height: 18px;">
                                            <td style="text-align: center; height: 18px;">1</td>
                                            <td style="height: 18px; text-align: center;">Name Product 1</td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                            <td style="height: 18px; text-align: center;"><input value="1" type="number" min="1" style="width:30%; padding:4px 5px; font-size:12px"></input></td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                        </tr>
                                        <tr style="height: 18px;">
                                            <td style="text-align: center; height: 18px;">2</td>
                                            <td style="height: 18px; text-align: center;">Name Product 2</td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                            <td style="height: 18px; text-align: center;"><input value="1" type="number" min="1" style="width:30%; padding:4px 5px; font-size:12px"></input></td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                        </tr>
                                        <tr style="height: 18px;">
                                            <td style="text-align: center; height: 18px;">3</td>
                                            <td style="height: 18px; text-align: center;">Name Product 3</td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                            <td style="height: 18px; text-align: center;"><input value="1" type="number" min="1" style="width:30%; padding:4px 5px; font-size:12px"></input></td>
                                            <td style="height: 18px; text-align: center;">20$</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
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
                                    <h5>
                                        Billing Address &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Payment
                                    </h5>   
        <form action="" method="GET">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">Country</label>
                <input type="text" id="state" name="state" placeholder="U.S">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <img src="images/CardIcons.jpeg" style="width: 95%;">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
                                </div>
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