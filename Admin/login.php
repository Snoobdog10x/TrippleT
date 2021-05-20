<head>
    <meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Welcome to TrippleTshop</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
    <link href="../css/sequence-looptheme.css" rel="stylesheet" media="all" />
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<html>
<?php
if (!isset($_REQUEST['Username'])) {
?>

    <body id="home">
        <div class="container" style="width: 30%; margin-top: 15%;">
            <form action="login.php" method="POST">
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
                <button type="submit" onclick="return check();" class="large btn btn-default center-block">
                    <h4>Login</h4>
                </button>
            </form>
        </div>
    </body>
    <?php
} else {
    require_once('Sessionadmin.php');
    $log = login($_REQUEST['Username'], $_REQUEST['Password']);
    if (islogin())
        header('location: index.php?Page=0');
    else {
    ?>
        <body id="home">
            <div class="container" style="width: 30%; margin-top: 15%;">
                <form action="login.php" method="POST">
                    <div class="text-center">
                        <h1>Admin login</h1>
                    </div>
                    <br><br>
                    <h5 style="color: red;">* <?= $log ?></h5>
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
                    <button type="submit" onclick="return check();" class="large btn btn-default center-block">
                        <h4>Login</h4>
                    </button>
                </form>
            </div>
        </body>
<?php
    }
}
?>
<script>
function check(){
    if(document.getElementById('Username').value.trim()==""){
        alert('fill in username')
        return false
    }
    if(document.getElementById('password').value.trim()==""){
        alert('fill in password')
        return false
    }
    return true
}
</script>
</html>