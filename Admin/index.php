<?= require_once('lib.php') ?>
<?= require_once('Sessionadmin.php') ?>

<?php
if (islogin()) {
    if (!isset($_REQUEST['Page']))
        $_REQUEST['Page'] = 0;
    require_once('header.php');
?>
    <!--product management-->
    <div id="PManagement" class="container_fullwidth">
        <div class="container" style="background-color: white;width: 90%;margin-top: 5%;">
            <br>
            <h3>Product Management</h3>
            <br>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <button onclick="location.href = 'add.php'" class="btn-lg" style="width: 100%;" data-toggle="modal" data-target="#addModal">Add</button>
                </div>
                <div class="col-md-10 ">
                    <form class="pull-right navbar-form navbar-left form-inline" action="index.php">
                        <div class="form-group">
                            <label for="sel1">Select type:</label>
                            <select class="form-control" name="type" id="sel1">
                                <option id="men" value="MEN">MEN</option>
                                <option id="women" value="WOMEN">WOMEN</option>
                                <option id="uni" value="UNISEX">UNISEX</option>
                                <option id="hot" value="HOTPRODUCT">HOT PRODUCT</option>
                                <option id="feat" value="FEATUREDPRODUCT">FEATURED PRODUCT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
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
            <div class="row">
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
        </div>
    </div>


    </html>
<?php
} else
    header('location: login.php');
?>