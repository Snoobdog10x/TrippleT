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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function fileValidation() {
            var fileInput =
                document.getElementById('fileToUpload');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } else {

                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                                'imagePreview').innerHTML =
                            '<img style="width:100%; height:70%;" src="' + e.target.result +
                            '"/>';
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

        function check() {
            var x = document.getElementById("");
        }
    </script>
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
            <form class="panel panel-danger container" style="margin-top: 10%; width: 70%;" method="post" enctype="multipart/form-data" action="add.php">
                <div class="form-group" style="margin-top: 1%; width: 100%;background-color: red;">
                    <Strong>
                        <h3>+ Add New Product</h3>
                    </Strong>
                </div>
                <div class="row">
                    <div class=" col-md-5 form-group row">
                        <div class="col-md-12">
                            <label for="pwd">Image:</label>
                            <input type="FILE" name="fileToUpload" onchange="return fileValidation()" id="fileToUpload" id="imageFile" accept="image/*" class="form-control" required>
                        </div>
                        <div id="imagePreview" class="col-md-12">
                        </div>
                    </div>
                    <div class=" col-md-7 row">
                        <div class="col-md-6 form-group">
                            <label for="pwd">Type:</label>
                            <input type="text" name="type" class="form-control" id="pwd" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pwd">Name:</label>
                            <input type="text" name="name" class="form-control" id="pwd" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pwd">Brand:</label>
                            <input type="text" name="brand" class="form-control" id="pwd" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="PID">Price:</label>
                            <input type="number" name="price" class="form-control" id="pwd" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" name="des" style="resize: none;" rows="5" id="comment" required></textarea>
                        </div>
                        <div class="col-md-12 row form-group center-block">
                            <div class="col-md-6">
                                <button class="btn btn-success" style="width: 100%;" value="Upload Image" type="submit" onclick="return check()" name="submit">Add</button>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success col-md-6" href="index.php" style="width: 100%;">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </body>
    <?php
    } else {
    ?>
    <?php
        $target_dir = "../images/products/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $sql = sprintf(
            "INSERT INTO product
                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
            $_REQUEST['type'],
            $_REQUEST['name'],
            $_REQUEST['price'],
            $target_file,
            $_REQUEST['brand'],
            $_REQUEST['des']
        );
        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
        $conn->close();
        header('location: index.php');
    }
    ?>
<?php
} else
    header('location: login.php');
?>

</html>