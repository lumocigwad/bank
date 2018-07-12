<?php
$connect = mysqli_connect("localhost", "root", "finch", "db_bank");
$query = "SELECT * FROM customer_details ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="container">  
	<div class="container">
		<?php
session_start();
echo "welcome".$_SESSION['username'];

//echo "hcgvdbjk vkdfln slk bdflf bsdl,ksd bf,edfnsm";

?>
   <br />  
   <br />  
   <br /> 
   <div class="table-wrapper"> 
            
       <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Customer</span></a>
												
					</div>
                </div>
            </div>
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>AC/NO</th>
	    <th>Gender</th>
                        <th>Email</th>
                        <th>Username</th>
                          <th>Password</th>
      </tr>
     </thead>
     <tbody>
     <?php 
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	
?>
                    <tr>			
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['First_Name'];?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
						<td><?php echo $row['Account_Number']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                                              
                    </tr>
                   <?php
                    }
                        ?>
     </tbody>
    </table>
</div>
   </div>  
  </div> 


<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="saveadm.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Add Customer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group ">
                    <input type="first_name" name="name1" id="name1" tabindex="1" class="form-control" placeholder="First Name" value="" required="">
                                    
                  </div>
                  <div class="form-group ">
                    <input type="first_name" name="name2" id="name2" tabindex="1" class="form-control" placeholder="Last Name" value="" required="">
                                    
                  </div>
                  <div class="form-group ">
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
                  <div class="form-group ">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="">
                                   
                  </div>

                  <div class="form-group ">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
                                    
                  </div>
                  <div class="form-group ">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
                                    
                  </div>			
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add" name="add">
					</div>
				</form>
			</div>
		</div>
	</div>

 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "ID"],
       editable:[[1, 'First_Name'], [2, 'Last_Name'],[3, 'Account_Number'], [4, 'Gender'],[5, 'Email'], [6, 'Username'],[7, 'Password']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
</body>
</html>