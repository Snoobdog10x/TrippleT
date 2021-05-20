<?php
require_once('LoginSession.php');
?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/favicon.png">
   <title>Welcome to TrippleTshop</title>
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <link href="css/sequence-looptheme.css" rel="stylesheet" media="all" />
   <link href="css/style.css" rel="stylesheet">
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>

<body id="home">
   <div class="wrapper">
      <?php
      require_once('HeaderProduct.php');
      ?>
      <div class="clearfix"></div>
      <div class="hom-slider">
         <div class="container">
            <div id="sequence">
               <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
               <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
               <ul class="sequence-canvas">
                  <li class="animate-in">
                     <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris
                           show 2014</span></div>
                     <div class="flat-caption caption2 formLeft delay400 text-center">
                        <h1>Collection For Winter</h1>
                     </div>
                     <div class="flat-caption caption3 formLeft delay500 text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem
                           Ipsum is simply dummy text of the printing and typesetting</p>
                     </div>
                     <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                     <div class=" formLeft delay200" data-duration="5" data-bottom="true"><img src="images/slider/slider1.png" alt=""></div>
                  </li>
                  <li>
                     <div class="flat-caption caption2 formLeft delay400">
                        <h1>Collection For Winter</h1>
                     </div>
                     <div class="flat-caption caption3 formLeft delay500">
                        <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.
                        </h2>
                     </div>
                     <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More
                           Details</a></div>
                     <div class="formLeft delay200" data-bottom="true"><img src="images/slider/slider2.png" alt=""></div>
                  </li>
                  <li>
                     <div class="flat-caption caption2 formLeft delay400 text-center">
                        <h1>New Fashion of 2013</h1>
                     </div>
                     <div class="flat-caption caption3 formLeft delay500 text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem
                           Ipsum is simply dummy text of the printing and typesetting</p>
                     </div>
                     <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                     <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-03.png" alt=""></div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="promotion-banner">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="promo-box"><img src="images/promotion-01.png" alt=""></div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="promo-box"><img src="images/promotion-02.png" alt=""></div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="promo-box"><img src="images/promotion-03.png" alt=""></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="container_fullwidth">
         <div class="container">
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
                  $limit = ($end % 4 == 0) ? intval($end / 4) : intval($end / 4) + 1;
                  $start = 0;
                  for ($i = 0; $i < $limit; $i++) {
                  ?>
                     <li>
                        <div class="row">
                           <?php
                           $sql = "SELECT * FROM product WHERE Type='HOTPRODUCT' LIMIT " . $start . ",4";
                           $result = $conn->query($sql);
                           while ($row = $result->fetch_assoc()) {
                           ?>
                              <div class="col-md-3 col-sm-6">
                                 <div class="products">
                                    <div class="thumbnail"><a href="details.php?pid=<?= $row['PID'] ?>">
                                          <img src="<?= $row['IMG'] ?>" style="max-width: 100%;max-height: 100%;" alt="Product Name">
                                       </a>
                                    </div>
                                    <div class="productname"><?= $row['NAME'] ?></div>
                                    <h4 class="price"><?= $row['PRICE'] ?></h4>
                                    <div class="button_group"><button class="button add-cart" onclick="addtocart(<?=$row['PID']?>)" type="button">Add To
                                          Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                 </div>
                              </div>
                           <?php
                           }
                           $start = $start + 4;
                           ?>
                        </div>
                     </li>
                  <?php
                  }
                  ?>
               </ul>
            </div>
            <div class="clearfix"></div>
            <div class="featured-products">
               <h3 class="title"><strong>Featured </strong> Products</h3>
               <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
               <ul id="featured">
                  <?php
                  $sql = "SELECT * FROM product WHERE Type='FEATUREDPRODUCT'";
                  $result = $conn->query($sql);
                  $end = $result->num_rows;
                  $limit = ($end % 4 == 0) ? intval($end / 4) : intval($end / 4) + 1;

                  $start = 0;
                  for ($i = 0; $i < $limit; $i++) {
                  ?>
                     <li>
                        <div class="row">
                           <?php
                           $sql = "SELECT * FROM product WHERE Type='FEATUREDPRODUCT' LIMIT " . $start . ",4";
                           $result = $conn->query($sql);
                           while ($row = $result->fetch_assoc()) {
                           ?>
                              <div class="col-md-3 col-sm-6">
                                 <div class="products">
                                    <div class="thumbnail"><a href="details.php">
                                          <img src="<?= $row['IMG'] ?>" style="max-width: 100%;max-height: 100%;" alt="Product Name">
                                       </a>
                                    </div>
                                    <div class="productname"><?= $row['NAME'] ?></div>
                                    <h4 class="price"><?= $row['PRICE'] ?></h4>
                                    <div class="button_group"><button class="button add-cart" onclick="addtocart(<?=$row['PID']?>)" type="button">Add To
                                          Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                 </div>
                              </div>
                           <?php
                           }
                           $start = $start + 4;
                           ?>
                        </div>
                     </li>
                  <?php
                  }
                  closeDB();
                  ?>
               </ul>
            </div>
            <div class="clearfix"></div>
            <div class="our-brand">
               <h3 class="title"><strong>Our </strong> Brands</h3>
               <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
               <ul id="braldLogo">
                  <li>
                     <ul class="brand_item">
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <ul class="brand_item">
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="footer">
         <div class="footer-info">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="footer-logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h4 class="title">Contact <strong>Info</strong></h4>
                     <p>No. 08, Nguyen Trai, Hanoi , Vietnam</p>
                     <p>Call Us : (084) 1900 1008</p>
                     <p>Email : michael@leebros.us</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h4 class="title">Customer<strong> Support</strong></h4>
                     <ul class="support">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Payment Option</a></li>
                        <li><a href="#">Booking Tips</a></li>
                        <li><a href="#">Infomation</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                     <p>Lorem ipsum dolor ipsum dolor.</p>
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
                     <p>Copyright © 2012. Designed by <a href="#">Tripple T</a>. All rights reseved</p>
                  </div>
                  <div class="col-md-6">
                     <ul class="social-icon">
                        <li><a href="#" class="linkedin"></a></li>
                        <li><a href="#" class="google-plus"></a></li>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="facebook"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript==================================================-->
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
   <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
   <script defer src="js/jquery.flexslider.js"></script>
   <script type="text/javascript" src="js/script.min.js"></script>
</body>

</html>