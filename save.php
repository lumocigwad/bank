<?php
 
// initializing variables
$fname="";
$lname="";
$accountno="";
$gender="";
$username="";
$email="";
$password="";
$confirm_password="";

// connect to the database
$db = mysqli_connect('localhost', 'root', 'finch', 'db_bank');
if(!$db){
  die("connection failed:" . mysql_connect_error());
}

// REGISTER USER
if (isset($_POST['register-submit'])) {
  // receive all input values from the form
  
  $fname = mysqli_real_escape_string($db, $_POST['name1']);
  $lname = mysqli_real_escape_string($db, $_POST['name2']);
  $accountno = mysqli_real_escape_string($db, $_POST['accountno']);
  $gender = mysqli_real_escape_string($db, @$_POST['gender']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm-password']);


   if(empty(trim($fname))){

        echo"<script>alert('Please enter your first name')</script>";  
exit();  

    }
    if(empty(trim($lname))){

        echo"<script>alert('Please enter your last name')</script>";  
exit();  
    }
    if(empty(trim($accountno))){

       echo"<script>alert('Please enter your account number')</script>";  
exit();  

    }
    if(empty(trim($username))){

        echo"<script>alert('Please enter your username')</script>";  
exit();  
    }
    if(empty(trim($email))){

        echo"<script>alert('Please enter your email')</script>";  
exit();  

    }
    if(empty(trim($password))){

        echo"<script>alert('Please enter your password')</script>";  
exit();  

    }
    if(empty(trim($confirm_password))){

        echo"<script>alert('Please confirm password')</script>";  
exit();  

    }
    elseif($password !=$confirm_password){

       echo"<script>alert('password do not match')</script>";  
exit();  

    }
//$check_user_query="select * from users WHERE Account_Number='$accountno'";  
    //$run_query=mysqli_query($db,$check_user_query);  
  
    //if(mysqli_num_rows($run_query)>1)  
   // {  
//echo "<script>alert('account Number $accountno is already exist in our database, Please try another one!')</script>";  
//exit();  
  //  }  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
    # code...
  
    $sql= "INSERT INTO customer_details(First_Name,Last_Name,Account_Number,Gender,Username,Email,Password) 
          VALUES('$fname', '$lname', '$accountno','$gender', '$username', '$email','$password')";
          $sql2="INSERT INTO customer(Account,Account_No,Username,Amount) VALUES('default','$accountno','$username','0')";
            if (mysqli_query($db, $sql) && mysqli_query($db,$sql2))
      {  

        echo"<script>window.open('customerlog.php','_self')</script>";  
    }  
  

    else{
      echo "not allnb";
    
   

}}

?>