<?= require_once('Sessionadmin.php') ?>

<?php
if (islogin()) {
    if (!isset($_REQUEST['Page']))
        $_REQUEST['Page'] = 0;
    require_once('header.php');
?>
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
                    $conn = connectDb();
                    $sql = "SELECT * FROM `order`";
                    $result = $conn->query($sql);
                    $row = $result->num_rows;
                    $pages = $row % 4 == 0 ? intval($row / 4) : intval($row / 4) + 1;
                    for ($i = 0; $i < $pages; $i++) {
                    ?>
                        <a href="ordermanager.php?Page=<?= $i ?>" class="active">
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select* from `order` Limit " . ($_REQUEST['Page'] * 4) . ",4";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $row['OID'] ?></td>
                            <td><?= $row['USERNAME'] ?></td>
                            <td><?= $row['DATE'] ?></td>
                            <td><?= $row['Status'] ?></td>
                            <td>
                                <button data-toggle="modal" data-target="#updateModal" onclick="location.href = 'update.php?id=<?= $row['PID'] ?>'">Update</button>
                                <button onclick="">Delete</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </body>

    </html>
<?php
} else
    header('location: login.php');
?>