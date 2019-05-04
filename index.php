

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <!-- Required meta tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- custom css-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Font Awesome CSS -->
<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>
<body>

  
<!--navigation bar 
  <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav-1" >
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand logo" >CUSTOMER SERVICE DESK</a>
    </div>
    <div class="collapse navbar-collapse" id="mynav-1">
      <ul class="nav navbar-nav navbar-left">
        <li ><a href="index.html" >Home</a></li>
        <li><a href="#" >About</a></li>
        <li><a href=""  >Contact</a></li>

        
  </div>      
      </ul>
      
    </div>
  </div>
  </nav>-->

  <!--end of navigation bar -->



  <!--select user to login -->
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h1 class="panel-heading">Welcome</h1>
<div id="hdall"><h1 style="text-align: center" >KINDLY SELECT USER TO PROCEED</h1></div>
<div id="hdad"><h1 style="text-align: center" >ADMIN</h1></div>
<div id="hdcus"><h1 style="text-align: center" >CUSTOMER</h1></div>
<!-- Select Basic -->

<div class="form-group selectop">
  
  <div class="col-md-4 pull-right">
    
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1" id="selu">Select User</option>
      <option value="2" id="adm">ADMIN</option>
      <option value="1" id="cus">CUSTOMER</option>
        </select>
  </div>
</div>

</fieldset>
</form>
<div id="hd">
<!--registration and login form for user-->

<div class="container form-frame" id="customer">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                <h2>CUSTOMER LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <p class="forgot-password"><a href="">Forgot password?</a></p>
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
              </form>
              <form id="register-form" action="save.php" method="POST" role="form" style="display: block;">
                <h2>REGISTER</h2>
                <div class="form-group">
                    <input type="first_name" name="name1" id="name1" tabindex="1" class="form-control" placeholder="First Name" value="" required="">
                  </div>
                  <div class="form-group">
                    <input type="first_name" name="name2" id="name2" tabindex="1" class="form-control" placeholder="Last Name" value="" required="">
                  </div>
                  <div class="form-group">
                    <input type="number" name="accountno" id="accoumtno" tabindex="1" class="form-control" placeholder="Account No" value="" required="">
                  </div>
                  <div class="form-group radiobtn">
    <label>Gender</label><br>
    <label>
      <input type="radio" name="gender" value="male" >
      Male
    </label>
    <label>
      <input type="radio" name="gender" value="female" >
      Female
    </label>
    
 </div>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
            <div class="login"></div>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#register-form" id="register-form-link"><div class="register">REGISTER</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--admin login-->

<div class="container form-frame" id="adminlogin-form">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="loginadmin.php" method="post" role="form" style="display: block;">
                <h2>ADMIN LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <p class="forgot-password"><a href="">Forgot password?</a></p>
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
              </form>
          </div></div></div></div></div></div></div>



<!-- javascript files -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="chat.js"></script>
</body>
</html>
