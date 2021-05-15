<?php
require_once('LoginSession.php');
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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>
<?php
if (isset($_REQUEST['Username'])) {
    $log = login($_REQUEST['Username'], $_REQUEST['Password']);
    if (islogin()) {
        header('Location: index.php');
    } else {
?>

        <body id="home">
            <div class="container" style="width: 30%; margin-top: 15%;">
                <form action="Login.php" method="POST">
                    <div class="text-center">
                        <h1>Customer login</h1>
                    </div>
                    <br><br>
                    <h5 style="color: red;">* <?= $log ?></h5>
                    <br>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="Username" type="text" class="form-control" name="Username" placeholder="Username" required>
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="Password" placeholder="Password" required>
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <a href="Regist.php" class="">
                            <h5>Don't have account? Regist now!</h5>
                        </a>
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
} else {
    if ($_REQUEST['Sign'] == "Success") {
    ?>
        <script>
            alert('Sign Up Success')
        </script>
    <?php
    }
    ?>

    <body id="home">
        <div class="container" style="width: 30%; margin-top: 15%;">
            <form action="Login.php" method="POST">
                <div class="text-center">
                    <h1>Customer login</h1>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="Username" type="text" class="form-control" name="Username" placeholder="Username" required>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="Password" placeholder="Password" required>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <a href="Regist.php" class="">
                        <h5>Don't have account? Regist now!</h5>
                    </a>
                </div>
                <br>
                <br>
                <div class="">
                    <div class="row center-block">
                        <div class="col-md-6 ">
                            <button type="submit" style="width: 100%;" class="btn btn-default ">
                                <h4>Login</h4>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" style="width: 100%;" onclick="window.location.href='index.php'" class="btn btn-default center-block">
                                <h4>cancel</h4>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>
<?php
}
?>