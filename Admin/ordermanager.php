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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Oid</th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = connectDb();
                    $sql = "select* from `order` Limit " . ($_REQUEST['Page'] * 4) . ",4";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr data-toggle="tooltip" data-placement="top" title="Click to see order detail">
                            <td><?= $row['OID'] ?></td>
                            <td><?= $row['USERNAME'] ?></td>
                            <td><?= $row['DATE'] ?></td>
                            <td><?= $row['STATUS'] ?></td>
                            <td>
                                <?php
                                if ($row['STATUS'] == "DONE") {
                                ?>
                                    <button data-toggle="modal" onclick="location.href = 'UpdateStt.php?oid=<?= $row['OID'] ?>&stt=<?= $row['STATUS'] ?>'" data-target="#updateModal">Processing</button>
                                <?php
                                } else {
                                ?>
                                    <button data-toggle="modal" data-target="#updateModal" onclick="location.href = 'UpdateStt.php?oid=<?= $row['OID'] ?>&stt=<?= $row['STATUS'] ?>'">Done</button>
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <button data-toggle="modal" data-target="#updateModal" onclick="location.href = 'Orderdetail.php?oid=<?= $row['OID'] ?>'">Detail</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="pager">
                <?php
                $sql = "select* from `order`";
                $result = $conn->query($sql);
                $row = $result->num_rows;
                $pages = $row % 4 == 0 ? intval($row / 3) : intval($row / 3) + 1;
                $search = '?Page=' . (($_REQUEST['Page'] > 0) ? $_REQUEST['Page'] - 1 : $_REQUEST['Page']);
                if ($pages !== 0) {
                ?>
                    <ul class="pagination">

                        <li><a href="ordermanager.php<?= $search ?>">Previous</a></li>
                        <?php
                        for ($i = 0; $i < $pages; $i++) {
                            $search = "Page=" . $i;
                        ?>
                            <li><a href="ordermanager.php?<?= $search ?>" class="active">
                                    <?= ($i + 1) ?>
                                </a></li>
                        <?php
                        }
                        closeDB($conn);
                        $search = '?Page=' . (($_REQUEST['Page'] < $pages - 1) ? $_REQUEST['Page'] + 1 : $_REQUEST['Page']);
                        ?>
                        <li><a href="ordermanager.php<?= $search ?>">Next</a></li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    </body>

    </html>
<?php
} else
    header('location: login.php');
?>