<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', 'finch', 'db_bank');

$input = filter_input_array(INPUT_POST);

$First_Name = mysqli_real_escape_string($connect, $input["First_Name"]);
$Last_Name = mysqli_real_escape_string($connect, $input["Last_Name"]);
$Account_Number = mysqli_real_escape_string($connect, $input["Account_Number"]);
$Gender = mysqli_real_escape_string($connect, $input["Gender"]);
$Email = mysqli_real_escape_string($connect, $input["Email"]);
$Username = mysqli_real_escape_string($connect, $input["Username"]);
$Password = mysqli_real_escape_string($connect, $input["Password"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE customer_details 
 SET First_name = '".$First_Name."', Last_Name = '".$Last_Name."', Account_Number = '".$Account_Number."', Gender = '".$Gender."', Email = '".$Email."', Username = '".$Username."', Password = '".$Password."' WHERE ID = '".$input["ID"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM customer_details 
 WHERE ID = '".$input["ID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
