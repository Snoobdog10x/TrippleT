<?php
require_once('LoginSession.php');
if (islogin()) {
?>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2">
          <div class="logo"><a href="index.php"><img src="images/logo.png" alt="FlatShop"></a></div>
        </div>
        <div class="col-md-10 col-sm-10">
          <div class="header_top">
            <div class="row">
              <div class="col-md-3">
                <ul class="option_nav">
                  <li class="dorpdown">
                    <a href="#">Eng</a>
                    <ul class="subnav">
                      <li><a href="#">Eng</a></li>
                      <li><a href="#">Vns</a></li>
                      <li><a href="#">Fer</a></li>
                      <li><a href="#">Gem</a></li>
                    </ul>
                  </li>
                  <li class="dorpdown">
                    <a href="#">USD</a>
                    <ul class="subnav">
                      <li><a href="#">USD</a></li>
                      <li><a href="#">UKD</a></li>
                      <li><a href="#">FER</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="topmenu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Recruiment</a></li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </div>
              <div class="col-md-3 topmenu">
                <div class=''>
                  <h3 style="color: white;" class='text-center'>Hello <?= $_SESSION['Username'] ?></h3>
                </div>
                <br>
                <div>
                  <a class='text-center' href="Logout.php">
                    <h4>Logout</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="header_bottom">
            <ul class="option">
              <li id="search" class="search">
                <form action="productgird.php" method="GET">
                  <input class="search-submit" type="submit" value>
                  <input class="search-input" placeholder="Enter your search term..." type="text" name="search_name">
                </form>
              </li>
              <li class="option-cart">
                <a href="cart.php" class="cart-icon">cart <span class="cart_no"><?= getlengcart() ?></span></a>
              </li>
            </ul>
            <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">home</a></li>
                <li><a href="productgird.php">Productgird</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li><a href="updateacc.php">Update account</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
} else {
?>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2">
          <div class="logo"><a href="index.php"><img src="images/logo.png" alt="FlatShop"></a></div>
        </div>
        <div class="col-md-10 col-sm-10">
          <div class="header_top">
            <div class="row">
              <div class="col-md-3">
                <ul class="option_nav">
                  <li class="dorpdown">
                    <a href="#">Eng</a>
                    <ul class="subnav">
                      <li><a href="#">Eng</a></li>
                      <li><a href="#">Vns</a></li>
                      <li><a href="#">Fer</a></li>
                      <li><a href="#">Gem</a></li>
                    </ul>
                  </li>
                  <li class="dorpdown">
                    <a href="#">USD</a>
                    <ul class="subnav">
                      <li><a href="#">USD</a></li>
                      <li><a href="#">UKD</a></li>
                      <li><a href="#">FER</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="topmenu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Recruiment</a></li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul class="usermenu">
                  <li><a href="login.php" class="log">Login</a></li>
                  <li><a href="Regist.php" class="reg">Register</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="header_bottom">
            <ul class="option">
              <li id="search" class="search">
                <form action="productgird.php" method="GET">
                  <input class="search-submit" type="submit" value>
                  <input class="search-input" placeholder="Enter your search term..." type="text" name="search_name">
                </form>
              </li>
              <li class="option-cart">
                <a href="#" onclick="isloginn()" class="cart-icon">cart <span class="cart_no">0</span></a>
              </li>
            </ul>
            <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">home</a></li>
                <li><a href="productgird.php">Productgird</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="contact.php">contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
<?php
if (islogin()) {
?>
  <script>
    var islogin = true;
  </script>
<?php
} else {
?>
  <script>
    var islogin = false;
  </script>
<?php
}
?>
<script>
  function isloginn() {
    if (islogin) {
      return true;
    } else {
      alert("Please login to add item to cart!");
      return false;
    }
  }

  function addtocart(id) {
    if (isloginn()) {
      window.location.href = 'addcart.php?id=' + id;
    }
  }
</script>