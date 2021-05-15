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
                            '<img style="width:100%;" src="' + e.target.result +
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
        $sql = "select * from product where PID=" . $_REQUEST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
        <div style="background-color: white;">
            <form class="border border-danger container" style="margin-top: 3%; width: 70%;height: 80;" method="POST" enctype="multipart/form-data" action="update.php">
                <input type="hidden" value="<?= $row['PID'] ?>" name="pid">
                <input type="hidden" value="<?= $row['IMG'] ?>" name="oldimg">
                <div class="form-group" style="margin-top: 1%; width: 100%;background-color: red;">
                    <Strong>
                        <h3>+ Update New Product</h3>
                    </Strong>
                </div>
                <div class="row">
                    <div class=" col-md-5 form-group row">
                        <div class="col-md-12">
                            <label for="pwd">Image:</label>
                            <input type="FILE" name="fileToUpload" onchange="return fileValidation()" id="fileToUpload" accept="image/*" class="form-control-file">
                        </div>
                        <div id="imagePreview" class="col-md-12">
                            <img src="../<?= $row['IMG'] ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class=" col-md-7 row">
                        <div class="col-md-6 form-group">
                            <label for="pwd">Type:</label>
                            <select class="form-control" name="type">
                                <option id="men" value="MEN">MEN</option>
                                <option id="women" value="WOMEN">WOMEN</option>
                                <option id="uni" value="UNISEX">UNISEX</option>
                                <option id="hot" value="HOTPRODUCT">HOT PRODUCT</option>
                                <option id="feat" value="FEATUREDPRODUCT">FEATURED PRODUCT</option>
                            </select>

                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pwd">Name:</label>
                            <input type="text" name="name" value="<?= $row['NAME'] ?>" class="form-control" id="pwd" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pwd">Brand:</label>
                            <input type="text" name="brand" value="<?= $row['BRAND'] ?>" class="form-control" id="pwd" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="PID">Price:</label>
                            <input type="number" name="price" value="<?= $row['PRICE'] ?>" step="0.001" class="form-control" id="pwd" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" name="des" style="resize: none;" rows="5" id="comment" required><?= $row['DETAIL'] ?></textarea>
                        </div>
                        <div class="col-md-12 row form-group mx-auto">
                            <div class="col-md-6">
                                <button class="btn btn-success btn-block" value="Upload Image" type="submit" onclick="return check()" name="submit">Update</button>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success btn-block" href="javascript:history.go(-1)"   >Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            var type = "<?= $row['TYPE'] ?>"
            switch (type) {
                case 'MEN':
                    document.getElementById('men').selected = "true";
                    break;
                case 'WOMEN':
                    document.getElementById('women').selected = "true";
                    break;
                case 'UNISEX':
                    document.getElementById('uni').selected = "true";
                    break;
                case 'HOTPRODUCT':
                    document.getElementById('hot').selected = "true";
                    break;
                case 'FEATUREDPRODUCT':
                    document.getElementById('feat').selected = "true";
                    break;
                default:
                    break;
            }
        </script>
    <?php
    } else {
    ?>
        <?php
        if ($_FILES["fileToUpload"]["name"] != '') {
            $target_dir = "../images/products/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $sql = sprintf(
                'UPDATE product 
                    SET TYPE="%s",NAME="%s",PRICE="%s",IMG="%s",BRAND="%s",DETAIL="%s"
                    WHERE PID=%s',
                $_REQUEST['type'],
                $_REQUEST['name'],
                $_REQUEST['price'],
                substr($target_file, 3, strlen($target_file) - 1),
                $_REQUEST['brand'],
                $_REQUEST['des'],
                $_REQUEST['pid']
            );
            var_dump($sql);
            if ($conn->query($sql) === TRUE) {
                unlink('../' . $_REQUEST['oldimg']);
                $bool = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            }
        } else {
            $sql = sprintf(
                'UPDATE product 
                    SET TYPE="%s",NAME="%s",PRICE="%s",IMG="%s",BRAND="%s",DETAIL="%s"
                    WHERE PID=%s',
                $_REQUEST['type'],
                $_REQUEST['name'],
                $_REQUEST['price'],
                $_REQUEST['oldimg'],
                $_REQUEST['brand'],
                $_REQUEST['des'],
                $_REQUEST['pid']
            );
            var_dump($sql);
            if ($conn->query($sql) === TRUE) {
            }
        }
        ?>
        <script>
            alert("success");
            window.location.href='index.php';
        </script>
    <?php
    }
    ?>
<?php
} else
    header('location: login.php');
?>

</html>