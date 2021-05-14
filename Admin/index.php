<?= require_once('lib.php') ?>
<?= require_once('Sessionadmin.php') ?>

<?php
if (islogin()) {
    if(!isset($_REQUEST['Page']))
    $_REQUEST['Page']=0;
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body style="background-color: white;">
        <div class="navbar navbar-fixed-top" style="background-color: rgb(67, 67, 67,0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo"><a href="index.php?Page=0"><img src="../images/logo.png" alt="FlatShop"></a></div>
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
                                    <li><a onclick="changePage('PManagement')">product management</a></li>
                                    <li><a onclick="changePage('OManagement')">order management</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product management-->
        <div id="PManagement" class="container_fullwidth">
            <div class="container" style="background-color: white;width: 90%;margin-top: 5%;">
                <br>
                <h3>Product Management</h3>
                <br>
                <br>
                <div class="row">
                    <button class="col-md-6" onclick="location.href = 'add.php'" style="width: 10%;" data-toggle="modal" data-target="#addModal">Add</button>
                    <div class="pager col-md-6">
                        <a href="#" class="prev-page">
                            <i class="fa fa-angle-left">
                            </i>
                        </a>
                        <?php
                        $sql = "SELECT * FROM product";
                        $result = $conn->query($sql);
                        $row = $result->num_rows;
                        $pages = $row % 4 == 0 ? intval($row / 4) : intval($row / 4) + 1;
                        for ($i = 0; $i < $pages; $i++) {
                        ?>
                            <a href="index.php?Page=<?= $i ?>" class="active">
                                <?= ($i + 1) ?>
                            </a>
                        <?php
                        }
                        ?>
                        <a href="#" class="next-page">
                            <i class="fa fa-angle-right">
                            </i>
                        </a>
                    </div>
                </div>

                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Pid</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Img</th>
                            <th>Brand</th>
                            <th>Detail</th>
                            <th>Edit product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select* from product Limit " . ($_REQUEST['Page'] * 4) . ",4";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $count = $row['PID'];
                        ?>
                            <tr>
                                <td><?= $row['PID'] ?></td>
                                <td><?= $row['TYPE'] ?></td>
                                <td><?= $row['NAME'] ?></td>
                                <td><?= $row['PRICE'] ?></td>
                                <td><img src=" ../<?= $row['IMG'] ?>" width="10%" alt=""></td>
                                <td><?= $row['BRAND'] ?></td>
                                <td><?= $row['DETAIL'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#updateModal" onclick="location.href = 'update.php?id=<?= $row['PID'] ?>'">Update</button>
                                    <button onclick="wannadelete('<?= $row['PID'] ?>')">Delete</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Oder management-->
        <div id="OManagement" class="container_fullwidth">
            <div class="container" style="background-color: white;width: 90%;margin-top: 5%;">
                <br>
                <h3>Oder Management</h3>
                <br>
                <br>
                <div class="row">
                    <button class="col-md-6" onclick="location.href = 'add.php'" style="width: 10%;" data-toggle="modal" data-target="#addModal">Add</button>
                    <div class="pager col-md-6">
                        <a href="#" class="prev-page">
                            <i class="fa fa-angle-left">
                            </i>
                        </a>
                        <?php
                        $sql = "SELECT * FROM order";
                        $result = $conn->query($sql);
                        $row = $result->num_rows;
                        $pages = $row % 4 == 0 ? intval($row / 4) : intval($row / 4) + 1;
                        for ($i = 0; $i < $pages; $i++) {
                        ?>
                            <a href="index.php?Page=<?= $i ?>" class="active">
                                <?= ($i + 1) ?>
                            </a>
                        <?php
                        }
                        ?>
                        <a href="#" class="next-page">
                            <i class="fa fa-angle-right">
                            </i>
                        </a>
                    </div>
                </div>

                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Oid</th>
                            <th>Username</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Brand</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select* from order Limit " . ($_REQUEST['Page'] * 4) . ",4";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $count = $row['PID'];
                        ?>
                            <tr>
                                <td><?= $row['PID'] ?></td>
                                <td><?= $row['TYPE'] ?></td>
                                <td><?= $row['NAME'] ?></td>
                                <td><?= $row['PRICE'] ?></td>
                                <td><img src=" ../<?= $row['IMG'] ?>" width="10%" alt=""></td>
                                <td><?= $row['BRAND'] ?></td>
                                <td><?= $row['DETAIL'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#updateModal" onclick="location.href = 'update.php?id=<?= $row['PID'] ?>'">Update</button>
                                    <button onclick="wannadelete('<?= $row['PID'] ?>')">Delete</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            var PM = document.getElementById('PManagement')
            var OM = document.getElementById('OManagement')
            PM.style.display = "block";
            OM.style.display = "none";

            function changePage(idpage) {
                var x = document.getElementById(idpage)
                PM.style.display = "none";
                OM.style.display = "none";
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
            }

            function wannadelete(pid) {
                if (confirm("Do you want to delete it?"))
                    window.location.href = 'delete.php?id=' + pid
            }
        </script>
    </body>

    </html>
<?php
} else
    header('location: login.php');
?>