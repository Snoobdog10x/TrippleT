<!DOCTYPE html>
<html lang="en">
<?= require_once('lib.php') ?>
<?= require_once('Sessionadmin.php') ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
    function changePage() {

    }
</script>
<script>
    function wannadelete(pid) {
        if (confirm("Do you want to delete it?"))
            window.location.href = 'delete.php?id=' + pid
    }
</script>
<?php
if (islogin()) {
?>

    <body id="PManagement" style="background-color: white;">
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
                            <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle
                                        navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                            <div class="navbar-collapse collapse">
                                <h2>UPDATE PRODUCT PAGE </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <form class="border border-danger" action="../action_page.php">
            <div class="container" style="margin-top: 3%;">
                <a href="index.php" class="btn btn-light mb-3" style="margin-top: 10%;"><< Go Back</a>
                        <div class="panel panel-danger">
                            <div class="panel bg-danger text-white" style="background-color: red;">
                                <strong><i class="fa fa-plus"></i> Update Product</strong>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="PID" class="col-form-label">PID</label>
                                    <input type="text" class="form-control" id="PID" name="PID" placeholder="PID" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Type" class="col-form-label">Type</label>
                                    <input type="text" class="form-control" id="Type" name="Type" placeholder="Type" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="price" class="col-form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Brand" class="col-form-label">Brand</label>
                                    <input type="text" class="form-control" name="Brand" id="Brand" placeholder="Brand">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="image" class="col-form-label">Image</label>
                                    <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="note" class="col-form-label">Description</label>
                                    <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>

                        </div>
            </div>
        </form>

    </body>
<?php
} else
    header('location: login.php');
?>

</html>