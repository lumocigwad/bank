

    <?php
session_start();
    // Include config file

    

     

    // Define variables and initialize with empty values

    $username = $password = "";


     
$db = mysqli_connect('localhost', 'root', 'finch', 'db_bank');
if(!$db){
  die("connection failed:" . mysql_connect_error());
}
    // Processing form data when form is submitted

    if(isset($_POST['login-submit'])){
$username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
    
     $query = "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
  	$results = mysqli_query($db, $query);
if(mysqli_num_rows($results)==1){
 $_SESSION['username'] = $username;
header('location: admin.php');
}
else{
	echo "account invalid";
}}
    ?>

     

  