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
<?php
if (islogin()) {
?>
    <?php
    if (!isset($_REQUEST['name'])) {
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
                                    <h2>ADD PRODUCT PAGE </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="panel panel-danger container" style="margin-top: 10%; width: 70%;" action="add.php">
                <div class="form-group" style="margin-top: 1%; width: 100%;background-color: red;">
                    <Strong>
                        <h3>+ Add New Product</h3>
                    </Strong>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="PID">Pid:</label>
                        <input type="text" name="pid" class="form-control" id="pwd">
                    </div>
                    <div class="col-md-4">
                        <label for="pwd">Type:</label>
                        <input type="text" name="type" class="form-control" id="pwd">
                    </div>
                    <div class="col-md-4">
                        <label for="pwd">Name:</label>
                        <input type="text" name="name" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="PID">Price:</label>
                        <input type="number" name="price" class="form-control" id="pwd">
                    </div>
                    <div class="col-md-4">
                        <label for="pwd">Brand:</label>
                        <input type="text" name="brand" class="form-control" id="pwd">
                    </div>
                    <div class="col-md-4">
                        <label for="pwd">Image:</label>
                        <input type="FILE" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment">Description:</label>
                    <textarea class="form-control" name="des" style="resize: none;" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add</button>
                </div>
            </form>
        </body>
<?php
    } else {
        $target_dir = "../";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $sql = sprintf(
            "INSERT INTO product
                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            $_REQUEST['PID'],
            $_REQUEST['Type'],
            $_REQUEST['name'],
            $_REQUEST['price'],
            $_REQUEST['image'],
            $_REQUEST['Brand'],
            $_REQUEST['description']
        );
        var_dump($sql);
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            //header('location: index.php?Page=0');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
} else
    header('location: login.php');
?>

</html>