<?php
 session_start();
//$institution="";
$account="";
$accountno="";
//$username="";
$withdraw="";


$db = mysqli_connect('localhost', 'root', 'finch', 'db_bank');
if(!$db){
  die("connection failed:" . mysql_connect_error());
}
if (isset($_POST['btn_with'])) {
  // receive all input values from the form
  
  //$institution = mysqli_real_escape_string($db, $_POST['institution']);
  $account = mysqli_real_escape_string($db, $_POST['account']);
  $accountno = mysqli_real_escape_string($db, $_POST['accountno']);
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $withdraw1 = mysqli_real_escape_string($db, $_POST['withdraw']);

$username=$_SESSION['username'];



$sql = "SELECT Amount, Account_No FROM customer WHERE username='$username'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$accountno1=$row['Account_No'];
$balance=$row['Amount'];
$withdraw=$balance-$withdraw1;

if($withdraw1>$balance){
   echo"<script>alert('you are not allowed to withdraw your balance is')</script>";
}else{

if ($accountno1==$accountno) {
$sql2="UPDATE customer SET Account='$account',Account_No='$accountno',Amount='$withdraw' WHERE Account_No='$accountno' && Username='$username'";
  
      if(mysqli_query($db, $sql2))
      {  
       echo"<script>alert('Amount Withdrawn successfully')</script>";  
    }  
  

    }else{
      echo"<script>alert('Invalid account number')</script>";
      echo"<script>window.open('customerwelcome.php','_self')</script>";  

}}}
?>