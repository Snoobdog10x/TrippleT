<?php
require_once('Sessionadmin.php');
if (islogin()) {
    if (!isset($_REQUEST['Page']))
        $_REQUEST['Page'] = 0;
    if (!isset($_REQUEST['search']))
        $_REQUEST['search'] = "";
    if (!isset($_REQUEST['type']))
        $_REQUEST['type'] = "";
    if (!isset($_REQUEST['price']))
        $_REQUEST['price'] = "";
    if (!isset($_REQUEST['search1']))
        $_REQUEST['search1'] = "";
    require_once('header.php');
?>
    <!--product management-->

    <div class="container_fullwidth" style="background-color: white;">
        <div class="container" style="background-color: white;width: 100%;margin-top: 5%;">
            <br>
            <h3>Product Management</h3>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1">
                    <br>
                    <button onclick="location.href = 'add.php'" class="form-control" style="width: 100%;" data-toggle="modal" data-target="#addModal">Add</button>
                </div>
                <div class="col-md-11 ">
                    <form class="" action="index.php">
                        <div class="row pull-right">
                            <input type="hidden" name="search1" value="search">
                            <div class="col-md-3">
                                <label for="search">Name:</label>
                                <input type="text" id="search" name="search" class="form-control" placeholder="Search">
                                <script>
                                    document.getElementById('search').value="<?=$_REQUEST['search']?>";
                                </script>
                            </div>
                            <div class="col-md-3">
                                <label for="sel1">Select type :</label>
                                <select class="form-control" class="" name="type" id="type">
                                    <option id="none" value="">Choose type</option>
                                    <option id="men" value="MEN">MEN</option>
                                    <option id="women" value="WOMEN">WOMEN</option>
                                    <option id="uni" value="UNISEX">UNISEX</option>
                                    <option id="hot" value="HOTPRODUCT">HOT PRODUCT</option>
                                    <option id="feat" value="FEATUREDPRODUCT">FEATURED PRODUCT</option>
                                </select>
                                <script>
                                    document.getElementById('type').value="<?=$_REQUEST['type']?>";
                                </script>
                            </div>
                            <div class="col-md-3">
                                <label for="sel1">Select price :</label>
                                <select class="form-control" class="" name="price" id="price">
                                    <option id="none" value="">Choose price</option>
                                    <option id="men" value="10-30">10$-30$</option>
                                    <option id="women" value="30-50">30$-50$</option>
                                    <option id="uni" value="50-60">50$-70$</option>
                                    <option id="hot" value="70-90">70$-90$</option>
                                    <option id="feat" value="90-1000">>=90$</option>
                                </select>
                                <script>
                                    document.getElementById('price').value="<?=$_REQUEST['price']?>";
                                </script>
                            </div>
                            <div class="col-md-2 pull-right">
                                <br>
                                <button type="submit"  class="btn btn-default">Search</button>
                            </div>
                            <div class="col-md-1 pull-right">
                                <br>
                                <button type="reset" class="btn btn-default">reset</button>
                            </div>  
                        </div>
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
                    function getSQL()
                    {
                        $sql = "";
                        if ($_REQUEST['search'] != '') {
                            $sql = sprintf("SELECT * FROM product WHERE NAME LIKE '%%%s%%'", $_REQUEST['search']);
                        }
                        if ($_REQUEST['type'] != '') {
                            if ($sql != "")
                                $sql = $sql . sprintf(" and TYPE='%s'", $_REQUEST['type']);
                            else
                                $sql = sprintf("SELECT * FROM product WHERE TYPE='%s'", $_REQUEST['type']);
                        }
                        if ($_REQUEST['price'] != '') {
                            $a = explode('-', $_REQUEST['price']);
                            if ($sql != "")
                                $sql = $sql . sprintf(" and PRICE BETWEEN '%s' and '%s'", $a[0], $a[1]);
                            else
                                $sql = sprintf("SELECT * FROM product WHERE PRICE BETWEEN '%s' and '%s'", $a[0], $a[1]);
                        }
                        if ($sql == "")
                            $sql = "SELECT * FROM product";
                        return $sql;
                    }
                    $sql = getSQL();
                    $sql = $sql . " Limit " . ($_REQUEST['Page'] * 4) . ",4";
                    $conn = connectDb();
                    $result = $conn->query($sql);
                    if ($result->num_rows == 0) {
                    ?>
                        <script>
                            alert('Cannot find product you need');
                        </script>
                    <?php
                    }
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
            <div class="pager">
                <?php
                $sql = getSQL();
                $result = $conn->query($sql);
                $row = $result->num_rows;
                $pages = $row % 4 == 0 ? intval($row / 4) : intval($row / 4) + 1;
                if (isset($_REQUEST['search1']))
                    $search = sprintf(
                        "?Page=%s&search1=search&search=%s&type=%s&price=%s",
                        ($_REQUEST['Page'] > 0) ? $_REQUEST['Page'] - 1 : $_REQUEST['Page'],
                        $_REQUEST['search'],
                        $_REQUEST['type'],
                        $_REQUEST['price']
                    );
                else
                    $search = '?Page=' . (($_REQUEST['Page'] > 0) ? $_REQUEST['Page'] - 1 : $_REQUEST['Page']);
                if ($pages != 0) {
                ?>
                    <ul class="pagination">

                        <li><a href="index.php<?= $search ?>">Previous</a></li>
                        <?php
                        for ($i = 0; $i < $pages; $i++) {
                            $search = "Page=" . $i . (isset($_REQUEST['search1']) ? ("&type=" . $_REQUEST['type'] . "&" . "search=" . $_REQUEST['search'] . "&" . "price=" . $_REQUEST['price'] . "&" . "search1=search") : "");
                            if ($i == $_REQUEST['Page']) {
                        ?>
                                <li><a href="index.php?<?= $search ?>" style="background-color: #eeeeee;" class="active">
                                        <?= ($i + 1) ?>
                                    </a></li>
                            <?php
                            } else {
                            ?>
                                <li><a href="index.php?<?= $search ?>" class="active">
                                        <?= ($i + 1) ?>
                                    </a></li>
                        <?php
                            }
                        }
                        closeDB($conn);
                        if (isset($_REQUEST['search1']))
                            $search = sprintf(
                                "?Page=%s&search1=search&search=%s&type=%s&price=%s",
                                ($_REQUEST['Page'] < $pages - 1) ? $_REQUEST['Page'] + 1 : $_REQUEST['Page'],
                                $_REQUEST['search'],
                                $_REQUEST['type'],
                                $_REQUEST['price']
                            );
                        else
                            $search = '?Page=' . (($_REQUEST['Page'] < $pages - 1) ? $_REQUEST['Page'] + 1 : $_REQUEST['Page']);
                        ?>
                        <li><a href="index.php<?= $search ?>">Next</a></li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>

    </div>

    </html>
<?php
} else
    header('location: login.php');
?>