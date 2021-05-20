<!DOCTYPE html>
<html>
<?= require_once('lib.php') ?>
<head>
  <style>
    input[type=number]:hover::-webkit-inner-spin-button {
      width: 40px;
      height: 40px;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.png">
  <title>
    Welcome to TrippleTshop
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
  <script>
    function update(id) {
      var value=document.getElementById(id).value;
      window.location.href="updatecart.php?id="+id+"&value="+value;
    }
  </script>
</head>

<body id="home">
  <div class="wrapper">
    <?= require_once("HeaderProduct.php") ?>
    <div class="clearfix">
    </div>
    <div class="container_fullwidth">
      <div class="container shopping-cart">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title">
              Shopping Cart
            </h3>
            <div class="clearfix">
            </div>
            <table class="shop-table">
              <thead>
                <tr>
                  <th>
                    Image
                  </th>
                  <th>
                    Details
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Quantity
                  </th>
                  <th>
                    Delete
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $total=0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $sql = "SELECT * from product where PID=" . $key;
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total=number_format($total+$row['PRICE']*$value, 2);
                ?>
                    <tr>
                      <td>
                        <img src="<?= $row['IMG'] ?>" alt="">
                      </td>
                      <td>
                        <div class="shop-details">
                          <div class="productname">
                            <?= $row['NAME'] ?>
                          </div>
                          <p>
                            <img alt="" src="images/star.png">
                            <a class="review_num" href="#">
                              02 Review(s)
                            </a>
                          </p>
                          <div class="color-choser">
                            <span class="text">
                              Product Color :
                            </span>
                            <ul>
                              <li>
                                <a class="black-bg " href="#">
                                  black
                                </a>
                              </li>
                              <li>
                                <a class="red-bg" href="#">
                                  light red
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p>
                            Product Code :
                            <strong class="pcode">
                              Dress 120
                            </strong>
                          </p>
                        </div>
                      </td>
                      <td>
                        <h5>
                          <?= $row['PRICE'] ?>
                        </h5>
                      </td>
                      <td>
                        <input type="number" style="width: 5em;" name="" id="<?= $key ?>" min="1" onkeydown="return false" max="4" onchange="update(<?= $key ?>)" step="1" value="<?= $value ?>">
                      </td>
                      <td>
                        <a href="deletecart.php?id=<?= $key ?>">
                          <img src="images/remove.png" alt="">
                        </a>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="6">
                    <button onclick="window.location.href='productgird.php'" class="pull-left">
                      Continue Shopping
                    </button>
                  </td>
                </tr>
              </tfoot>
            </table>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-6">
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="shippingbox">
                  <h5>
                    Discount Codes
                  </h5>
                  <form>
                    <label>
                      Enter your coupon code if you have one
                    </label>
                    <input type="text" name="">
                    <div class="clearfix">
                    </div>
                    <button>
                      Get A Qoute
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="shippingbox">
                  <div class="subtotal">
                    <h5>
                      Sub Total
                    </h5>
                    <span>
                      <?=$total?>$
                    </span>
                  </div>
                  <div class="grandtotal">
                    <h5>
                      GRAND TOTAL
                    </h5>
                    <span>
                    <?=$total?>$
                    </span>
                  </div>
                  <button>
                    <a href="checkout.php" onclick="return checktotal('<?=$total?>');">Process To Checkout</a>
                    <script>
                    function checktotal(total){
                      if(total!=0){
                        return true;
                      }
                      else alert("empty cart!!");
                      return false;
                    }
                    </script>
                  </button>
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
              <div class="footer-logo" style="margin-top: -20%;">
                <a href="#" >
                  <img src="images/logo.png" width="150px" height="150px" alt="">
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