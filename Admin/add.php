<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Welcome to TrippleTshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                            '<img class="img-thumbnail" src="' + e.target.result +
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
require_once('Sessionadmin.php');
if (islogin()) {
?>
    <?php
    if (!isset($_REQUEST['name'])) {
    ?>
        <div style="background-color: white;">
            <form class="border border-danger container" style="margin-top: 3%; width: 70%;height: 80;" method="POST" enctype="multipart/form-data" action="add.php">
                <div class="form-group" style="margin-top: 1%; width: 100%;background-color: red;">
                    <Strong>
                        <h3>+ Add New Product</h3>
                    </Strong>
                </div>
                <div class="row">
                    <div class=" col-md-5 form-group row">
                        <div class="col-md-12">
                            <label for="pwd">Image:</label>
                            <input type="FILE" name="fileToUpload" onchange="return fileValidation()" id="fileToUpload" accept="image/*" class="form-control-file" required>
                        </div>
                        <div id="imagePreview" class="col-md-12">
                        </div>
                    </div>
                    <div class=" col-md-7 row">
                        <div class="col-md-6 form-group">
                            <label for="pwd">Type:</label>
                            <select class="form-control" name="type" id="exampleFormControlSelect1">
                                <option value="MEN">MEN</option>
                                <option value="WOMEN">WOMEN</option>
                                <option value="UNISEX">UNISEX</option>
                                <option value="HOTPRODUCT">HOTPRODUCT</option>
                                <option value="FEATUREDPRODUCT">FEATUREDPRODUCT</option>
                            </select>

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
                            <input type="number" name="price" step="0.001" class="form-control" id="pwd" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" name="des" style="resize: none;" rows="5" id="comment" required></textarea>
                        </div>
                        <div class="col-md-12 row form-group mx-auto">
                            <div class="col-md-6">
                                <button class="btn btn-success btn-block" value="Upload Image" type="submit" onclick="return check()" name="submit">Add</button>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success btn-block" href="javascript:history.go(-1)">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php
    } else {
    ?>
        <?php
        $conn=connectDb();
        $target_dir = "../images/products/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $sql = sprintf(
            'INSERT INTO product (TYPE,NAME,PRICE,IMG,BRAND,DETAIL)
                    VALUES ("%s", "%s", "%s", "%s", "%s", "%s")',
            $_REQUEST['type'],
            $_REQUEST['name'],
            $_REQUEST['price'],
            substr($target_file,3,strlen($target_file)-1),
            $_REQUEST['brand'],
            $_REQUEST['des']
        );
        if ($conn->query($sql) === TRUE) {
            $bool=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
        else
        echo ($conn->error);
        closeDB($conn);
        ?><script>
            alert('Succes')
            window.location.href='index.php'
        </script>
    <?php
    }
    ?>
<?php
} else
    header('location: login.php');
?>

</html>