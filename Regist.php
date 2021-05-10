<!DOCTYPE html>
<html>

<head>
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

<body id="home">
  <div class="container rounded" style="width: 40%; margin-top: 3%;">
    <form action="Regist.php" method="GET">
      <br>
      <h1 style="text-align: center;color: white;">Customer register</h1>
      <br>
      <br>
      <label class="" style="width: 100%;color: white;" for="">
        <h4>FULL NAME:</h4>
      </label>
      <br>
      <br>
      <input class="" style="width: 100%;" type="text" id="name" name="Name" placeholder="Full name">
      <br>
      <br>
      <div class="row">
        <div class="col-md-6">
          <label class="" style="width: 100%;color: white;" for="">
            <h4>USERNAME:</h4>
          </label>
          <br>
          <br>
          <input id="username" class="" style="width: 100%;" type="text" name="Username" placeholder="Username">
        </div>
        <div class="col-md-6">
          <label class="" style="width: 100%;color: white;" for="">
            <h4>PASSWORD:</h4>
          </label>
          <br>
          <br>
          <input class="" style="width: 100%;" type="text" name="Password" id="password" placeholder="Password">
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
          <input type="date" style="font-size: 1.3rem;width: 100%;" name="Birthday" id="birthday">
        </div>
        <div class="col-md-6">
          <label class="" style="width: 100%;color: white;" for="">
            <h4>SEX:</h4>
          </label>
          <br>
          <div class="row">
            <div class="col-md-6">
              <input type="radio" name="Sex" id="sex" value="MEN">
              <h5>MEN</h5>
            </div>
            <div class="col-md-6">
              <input type="radio" name="Sex" id="sex" value="WOMEN">
              <h5>WOMEN</h5>
            </div>
          </div>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="" style="width: 100%;color: white;" for="">
            <h4>PHONE:</h4>
          </label>
          <br>
          <br>
          <input class="" style="width: 100%;" type="text" id="phone" name="Phone" placeholder="Phone">
          <br>
          <br>
        </div>
        <div class="col-md-6">
          <label class="" style="width: 100%;color: white;" for="">
            <h4>EMAIL:</h4>
          </label>
          <br>
          <br>
          <input class="" style="width: 100%;" type="text" name="Email" id="email" placeholder="Email">
          <br>
          <br>
        </div>
      </div>
      <label class="" style="width: 100%;color: white;" for="">
        <h4>ADDRESS:</h4>
      </label>
      <br>
      <br>
      <input class="" style="width: 100%;" type="text" name="Address" id="address" placeholder="Address">
      <br>
      <br>
      <button type="submit" onclick="return check()" class="large btn btn-default" style="width: 100%;">
        <h5>Register</h5>
      </button>
      <br><br>
      <button type="button" class="large btn btn-default" onclick="document.location.href='Login.php'" style="width: 100%;">
        <h5>Login</h5>
      </button>
  </div>
  </form>
  </div>
</body>
<script>
  function check() {
    var array = [
      document.getElementById('name'),
      document.getElementById('username'),
      document.getElementById('password'),
      document.getElementById('phone'),
      document.getElementById('email'),
      document.getElementById('sex'),
      document.getElementById('address'),
      document.getElementById('birthday')
    ];
    array.every(element => {
      if(element.value.trim()==""){
        alert("Please fill in "+element.id);
        return false;
      }
    });
    return true;
  }
</script>

</html>