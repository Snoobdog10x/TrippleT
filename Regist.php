<!DOCTYPE html>
<html>

<head>
  <script>
    function check() {
      if (document.getElementById('password').value.length <= 6) {
        alert('Password must longer 6 character');
        return false;
      }
      if (!document.getElementById('email').value.includes("@") || !document.getElementById('email').value.includes(".")) {
        alert('Email is not valid');
        return false;
      }
      if (!document.getElementById('address').value.includes("/")) {
        alert('Address is not valid');
        return false;
      }
      if (document.getElementById('password').value != document.getElementById('repassword').value) {
        alert('Password and retype password are not same');
        return false;
      }
      return true;
    }
  </script>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.png">
  <title>
    Welcome to FlatShop
  </title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>
<?php
if (!isset($_REQUEST['Username'])) {
?>

  <body id="home">
    <div class="container rounded" style="width: 40%; margin-top: 3%;">
      <form action="Regist.php" method="POST">
        <br>
        <h1 style="text-align: center;color: white;">Customer register</h1>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>USERNAME:</h4>
            </label>
            <br>
            <br>
            <input id="username" class="" style="width: 100%;" type="text" name="Username" placeholder="Username" required>
          </div>
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>FULL NAME:</h4>
            </label>
            <br>
            <br>
            <input class="" style="width: 100%;" type="text" id="name" name="Name" placeholder="Full name" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>PASSWORD:</h4>
            </label>
            <br>
            <br>
            <input class="" style="width: 100%;" type="password" name="Password" id="password" placeholder="Password" required>
          </div>
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>RETYPE PASSWORD:</h4>
            </label>
            <br>
            <br>
            <input class="" style="width: 100%;" type="password" name="repassword" id="repassword" placeholder="Retype password" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>BIRTHDAY:</h4>
            </label>
            <br>
            <br>
            <input type="date" style="font-size: 1.3rem;width: 100%;" name="Birthday" id="birthday" required>
          </div>
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>SEX:</h4>
            </label>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="radio" name="Sex" id="sex" value="MEN" required>
                <h5>MEN</h5>
              </div>
              <div class="col-md-6">
                <input type="radio" name="Sex" id="sex" value="WOMEN" required>
                <h5>WOMEN</h5>
              </div>
            </div>
            <br><br>
          </div>
        </div>
        <style>
          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
          }
        </style>
        <div class="row">
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="" required>
              <h4>PHONE:</h4>
            </label>
            <br>
            <br>
            <input class="" style="width: 100%;" type="number" min="0" id="phone" name="Phone" placeholder="Phone" required>
            <br>
            <br>
          </div>
          <div class="col-md-6">
            <label class="" style="width: 100%;color: white;" for="">
              <h4>EMAIL:</h4>
            </label>
            <br>
            <br>
            <input class="" style="width: 100%;" type="text" name="Email" id="email" placeholder="Email" required>
            <br>
            <br>
          </div>
        </div>
        <label class="" style="width: 100%;color: white;" for="">
          <h4>ADDRESS:</h4>
        </label>
        <br>
        <br>
        <input class="" style="width: 100%;" type="text" name="Address" id="address" placeholder="Address" required>
        <br>
        <br>
        <div class="">
          <div class="row center-block">
            <div class="col-md-6">
              <button type="submit" style="width: 100%;" onclick="return check();" class=" btn btn-default">
                <h5>Regist</h5>
              </button>
            </div>
            <div class="col-md-6">
              <button type="button" style="width: 100%;" class="btn btn-default col-md-4" onclick="document.location.href='Login.php'" ">
                <h5>Login</h5>
              </button>
            </div>
          </div>
          <br><br>
        </div>
              <button type=" button" class="btn btn-default center-block" onclick="document.location.href='index.php'" style="width: 50%;">
                <h5>Cancel</h5>
              </button>
      </form>
    </div>
  </body>

  <?php
} else {
  require_once('lib.php');
  $sql = sprintf(
    "INSERT INTO customer (USERNAME,PASSWORD,NAME,BIRTHDAY,PHONE,SEX,ADDRESS,EMAIL) VALUES ('%s', '%s', '%s','%s', '%s', '%s', '%s', '%s')",
    $_REQUEST['Username'],
    $_REQUEST['Password'],
    $_REQUEST['Name'],
    $_REQUEST['Birthday'],
    $_REQUEST['Phone'],
    $_REQUEST['Sex'],
    $_REQUEST['Address'],
    $_REQUEST['Email']
  );
  if ($conn->query($sql) === TRUE) {
  ?>
    <script>
      alert('Sign up success');
      window.location.href = "login.php";
    </script>
    <?php
  } else {
    if ($conn->errno == 1062) {
    ?>
      <script>
        alert('Your username is duplicated choose the other one');
      </script>

      <body id="home">
        <div class="container rounded" style="width: 40%; margin-top: 3%;">
          <form action="Regist.php" method="POST">
            <br>
            <h1 style="text-align: center;color: white;">Customer register</h1>
            <br>
            <br>

            <br>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>USERNAME:</h4>
                </label>
                <br>
                <br>
                <input id="username" class="" style="width: 100%;" type="text" name="Username" onblur="checkUsername()" placeholder="Username" required>
              </div>
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>FULL NAME:</h4>
                </label>
                <br>
                <br>
                <input class="" style="width: 100%;" value="<?= $_REQUEST['Name'] ?>" type="text" id="name" name="Name" placeholder="Full name" required>

              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>PASSWORD:</h4>
                </label>
                <br>
                <br>
                <input class="" style="width: 100%;" value="<?= $_REQUEST['Password'] ?>" type="password" name="Password" id="password" placeholder="Password" required>
              </div>
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>PASSWORD:</h4>
                </label>
                <br>
                <br>
                <input class="" style="width: 100%;" value="<?= $_REQUEST['repassword'] ?>" type="password" name="repassword" id="repassword" placeholder="Password" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>BIRTHDAY:</h4>
                </label>
                <br>
                <br>
                <input type="date" value="<?= $_REQUEST['Birthday'] ?>" style="font-size: 1.3rem;width: 100%;" name="Birthday" id="birthday" required>
              </div>
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>SEX:</h4>
                </label>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <input type="radio" name="Sex" id="MEN" value="MEN" required>
                    <h5>MEN</h5>
                  </div>
                  <div class="col-md-6">
                    <input type="radio" name="Sex" id="WOMEN" value="WOMEN" required>
                    <h5>WOMEN</h5>
                  </div>
                  <script>
                    if ("<?= $_REQUEST['Sex'] ?>" == "MEN")
                      document.getElementById("MEN").checked = true;
                    else
                      document.getElementById("WOMEN").checked = true;
                  </script>
                </div>
                <br><br>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="" required>
                  <h4>PHONE:</h4>
                </label>
                <br>
                <br>
                <input class="" value="<?= $_REQUEST['Phone'] ?>" style="width: 100%;" type="number" min="0" id="phone" name="Phone" placeholder="Phone" required>
                <br>
                <br>
              </div>
              <div class="col-md-6">
                <label class="" style="width: 100%;color: white;" for="">
                  <h4>EMAIL:</h4>
                </label>
                <br>
                <br>
                <input class="" value="<?= $_REQUEST['Email'] ?>" style="width: 100%;" type="text" name="Email" id="email" placeholder="Email" required>
                <br>
                <br>
              </div>
            </div>
            <label class="" style="width: 100%;color: white;" for="">
              <h4>ADDRESS:</h4>
            </label>
            <br>
            <br>
            <input class="" value="<?= $_REQUEST['Address'] ?>" style="width: 100%;" type="text" name="Address" id="address" placeholder="Address" required>
            <br>
            <br>
            <div class="">
              <div class="row center-block">
                <div class="col-md-6">
                  <button type="submit" style="width: 100%;" onclick="return check();" class=" btn btn-default">
                    <h5>Regist</h5>
                  </button>
                </div>
                <div class="col-md-6">
                  <button type="button" style="width: 100%;" class="btn btn-default col-md-4" onclick="document.location.href='Login.php'" ">
                <h5>Login</h5>
              </button>
            </div>
          </div>
          <br><br>
        </div>
              <button type=" button" class="btn btn-default center-block" onclick="document.location.href='index.php'" style="width: 50%;">
                    <h5>Cancel</h5>
                  </button>
          </form>
        </div>
      </body>
<?php
    }
  }
  $conn->close();
  //header('location: Login.php?Sign=Success');
}
?>

</html>