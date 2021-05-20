<?php
require_once('Sessionadmin.php');
if (islogin()) {
    $conn = connectDb();
    $sql = "select * from `order` where OID=" . $_REQUEST['oid'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <style>
            a {
                text-decoration: none;
                display: inline-block;
                padding: 8px 16px;
            }

            a:hover {
                background-color: #ddd;
                color: black;
            }

            .previous {
                background-color: #f1f1f1;
                color: black;
            }

            .next {
                background-color: #04AA6D;
                color: white;
            }

            .round {
                border-radius: 50%;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/php;charset=utf-8" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/favicon.png">
        <title>Welcome to TrippleTshop</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Document</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>


    <body class="container-fluid mx-auto" style="background-color: #f1f1f1;">
        <nav class="navbar fixed-top navbar-light bg-white">
            <div class="container row ">
                <div class="row align-items-center col-md-6">
                    <a  href="javascript:history.back()" class="previous round">&#8249;</a>
                    <Strong class="ml-2">Order-> #<?= $row['OID'] ?></Strong>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <label for="">
                                Processing</label>
                        </div>
                        <div class=" col-md-6 text-md-right">
                            <label for="">
                                Done</label>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width:<?= ($row['STATUS'] == 'DONE' ? "100%" : "50%") ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row" style="width: 100%; margin-top: 8%;">
            <div class="col-md-3 bg-white" style="margin-left: 4%;height: 350px;">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Invoice #<?= $row['OID'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Order Date: <?= $row['DATE'] ?></td>
                        </tr>
                        <tr>
                            <td>Note</td>
                        </tr>
                        <td>
                            <?php
                            $sql = "select * from `customer` where USERNAME='" . $row['USERNAME'] . "'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            ?>
                            <p> Name: <?= $row['NAME'] ?></p>
                            <p> Phone: <?= $row['PHONE'] ?></p>
                            <p> Adrress: <?= $row['ADDRESS'] ?></p>
                        </td>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-8 ml-3 row ">
                <div class="col-md-12 bg-white">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Description</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit price</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from `orderdetail` where OID='" . $_REQUEST['oid'] . "'";
                            $result = $conn->query($sql);
                            $count = 1;
                            $total = 0.00;
                            while ($row = $result->fetch_assoc()) {
                                $sql = "select * from `product` where PID=" . $row['PID'] . "";
                                $resp = $conn->query($sql);
                                $row1 = $resp->fetch_assoc();
                                $total = number_format($total + $row['UPRICE'] * $row['AMOUNT'], 2);
                            ?>
                                <tr>
                                    <th><?= $count++ ?></th>
                                    <td><img src="../<?= $row1['IMG'] ?>" width=5%" alt=""><?= $row1['NAME'] ?></td>
                                    <td><?= $row['AMOUNT'] ?></td>
                                    <td><?= $row['UPRICE'] ?></td>
                                    <td><?= $row['TOTAL'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="3"> </td>
                                <td class="text-right">Total:</td>
                                <td> <?= $total ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
closeDB($conn);
} else
    header('location: login.php');
?>