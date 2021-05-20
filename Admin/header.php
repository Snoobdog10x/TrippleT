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
    <script>
        function wannadelete(pid) {
            if (confirm("Do you want to delete it?"))
                window.location.href = 'delete.php?id=' + pid
        }
    </script>
</head>
<body style="background-color: white;">
    <div class="navbar navbar-fixed-top" style="background-color: rgb(67, 67, 67,0.5);">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="logo"><a href="index.php"><img src="../images/logo.png" alt="FlatShop"></a></div>
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="clearfix"></div>
                    <div class="header_bottom">
                        <ul class="option">
                            <h3 style="color: white;">Hello <?= $_SESSION['USERNAME'] ?></h3>
                            <a href="logout.php">
                                <h3>logout</h3>
                            </a>
                        </ul>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a onclick="window.location.href='index.php'">product management</a></li>
                                <li><a onclick="window.location.href='ordermanager.php'">order management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>