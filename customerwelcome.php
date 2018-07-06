
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


</head>
<body>

<fieldset>
<form class="form-horizontal">


<!-- Form Name -->
<?php
session_start();
echo "welcome".$_SESSION['username'];

//echo "hcgvdbjk vkdfln slk bdflf bsdl,ksd bf,edfnsm";

?>
<div class="container">
  <a href="logout.php">Logout</a>

</form>
</div>
<h1 class="panel-heading">Welcome</h1>

<div id="tile"><h1 style="text-align: center" >KINDLY SELECT ACTION TO PROCEED</h1></div>
<div id="deptile"><h1 style="text-align: center" >DEPOSIT</h1></div>
<div id="withtile"><h1 style="text-align: center" >WITHDRAW</h1></div>
<!-- Select Basic -->

<div class="form-group selectop">
  
  <div class="col-md-4 pull-right">
    
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1" id="selu">Select action</option>
      <option value="2" id="adm">DEPOSIT</option>
      <option value="3" id="cus">WITHDRAW</option>
      
    </select>
  </div>
</div></form></fieldset>







<!--withdraw--->

<fieldset id="showdep">
<!-- Form Name -->
<legend>DEPOSIT MONEY</legend>

<!-- Select Basic -->
<form id="register-form" action="dpamount.php" method="post" role="form" style="display: block;" class="form-horizontal">

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Account type">Account Type</label>
  <div class="col-md-5">
    <select id="Account type" name="account" class="form-control">
      <option value="Bank Account">Bank Account</option>
      
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="account no">Account No</label>  
  <div class="col-md-5">
  <input id="account no" name="accountno" type="nuber" placeholder="account no" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deposit">Deposit</label>  
  <div class="col-md-5">
  <input id="deposit" name="deposit" type="number" placeholder="enter amount to Deposit" class="form-control input-md">
    <input type="submit" name="btn_dep" id="register-submit"  class="form-control btn btn-register" value="DEPOSIT" required="">
  </div>
</div>


  


</form>
</fieldset>




<!--withdraw--->

<fieldset id="showwith">
<!-- Form Name -->
<legend>WITHDRAW MONEY</legend>

<!-- Select Basic -->
<form id="register-form" action="wamount.php" method="post" role="form" style="display: block;" class="form-horizontal">

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Account type">Account Type</label>
  <div class="col-md-5">
    <select id="Account type" name="account" class="form-control">
      <option value="Bank Account">Bank Account</option>
      
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="account no">Account No</label>  
  <div class="col-md-5">
  <input id="account no" name="accountno" type="number" placeholder="account no" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="withdraw">Withdraw</label>  
  <div class="col-md-5">
  <input id="withdraw" name="withdraw" type="number" placeholder="enter amount to withdraw" class="form-control input-md">
    <input type="submit" name="btn_with" id="register-submit"  class="form-control btn btn-register" value="WITHDRAW" required="">
  </div>
</div>


  


</form>
</fieldset>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="show.js"></script>
</body>
</html>