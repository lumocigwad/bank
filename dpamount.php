<?php
 session_start();
//$institution="";
$account="";
$accountno="";
//$username="";
$deposit="";


$db = mysqli_connect('localhost', 'root', 'finch', 'db_bank');
if(!$db){
  die("connection failed:" . mysql_connect_error());
}
if (isset($_POST['btn_dep'])) {
  // receive all input values from the form
  
  //$institution = mysqli_real_escape_string($db, $_POST['institution']);
  $account = mysqli_real_escape_string($db, $_POST['account']);
  $accountno = mysqli_real_escape_string($db, $_POST['accountno']);
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $deposit = mysqli_real_escape_string($db, $_POST['deposit']);

$username=$_SESSION['username'];



$sql = "SELECT Amount FROM customer WHERE username='$username'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$balance=$row['Amount'];
$_SESSION['balance'] = $balance;
$deposit=$deposit+$balance;


$sql2="UPDATE customer SET Account='$account',Account_No='$accountno',Amount='$deposit' WHERE Account_No='$accountno' && Username='$username'";
  
      if(mysqli_query($db, $sql2))
      {  
       echo"<script>alert('money deposited successfully')</script>";  
    }  
  

    else{
      echo"<script>alert('Enter your account number correctly')</script>";
      echo"<script>window.open('customerwelcome.php','_self')</script>";  

}}
?>