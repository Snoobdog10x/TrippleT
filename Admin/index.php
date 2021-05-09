<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Welcome to FlatShop</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
    <link href="../css/sequence-looptheme.css" rel="stylesheet" media="all" />
    <link href="../css/style.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<?php
if (!isset($_REQUEST['Username'])) {
?>

    <body id="home">
        <div class="container" style="width: 30%; margin-top: 15%;">
            <form action="index.php" method="GET">
                <div class="text-center">
                    <h1>Admin login</h1>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="Username" type="text" class="form-control" name="Username" placeholder="Username">
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="Password" placeholder="Password">
                </div>
                <br>
                <br>
                <button type="submit" class="large btn btn-default center-block">
                    <h4>Login</h4>
                </button>
            </form>
        </div>
    </body>
    <?php
} else {
    require_once('Sessionadmin.php');
    $log=login($_REQUEST['Username'], $_REQUEST['Password']);
    if (islogin()) {
    ?>
        <body id="home">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="logo"><a href="index.php"><img src="../images/logo.png" alt="FlatShop"></a></div>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="clearfix"></div>
                            <div class="header_bottom">
                                <ul class="option">
                                    <h3 style="color: white;">Hello <?=$_SESSION['USERNAME']?></h3>
                                    <a href="logout.php"><h3>logout</h3></a>
                                </ul>
                                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle
                                            navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="productgird.php?Type=MEN&Page=0">men</a></li>
                                        <li><a href="productgird.php?Type=MEN&Page=0">women</a></li>
                                        <li><a href="productgird.php?Type=UNISEX&Page=0">unisex</a></li>
                                        <li><a href="productgird.php?Type=&Page=0">Productgird</a></li>
                                        <li><a href="#">blog</a></li>
                                        <li><a href="contact.php">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    <?php
    } else {
    ?>

        <body id="home">
            <div class="container" style="width: 30%; margin-top: 15%;">
                <form action="index.php" method="POST">
                    <div class="text-center">
                        <h1>Admin login</h1>
                    </div>
                    <br><br>
                    <h5 style="color: red;">* <?=$log?></h5>
                    <br>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="Username" type="text" class="form-control" name="Username" placeholder="Username">
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="Password" placeholder="Password">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="large btn btn-default center-block">
                        <h4>Login</h4>
                    </button>
                </form>
            </div>
        </body>
<?php
    }
}
?>

</html>