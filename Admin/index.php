<?php
if (!isset($_REQUEST['Username'])) {
?>
    hihi
<?php
} else {
?>
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
    require('HeaderAdmin.php')
    ?>
    </html>
<?php
}
?>