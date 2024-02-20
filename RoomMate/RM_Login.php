<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/SignUp.css">
    <title>Admin Registration</title>
</head>
<body>
<?php
session_start();
		include("../connection.php");
		if(isset($_POST["Login"]))
		{
			$sql="select * from rm_details where Email='".$_POST["RM_Email"]."' and Password='".$_POST["RM_Password"]."'";	
			$tbl=mysqli_query($con,$sql);
			if($row=mysqli_fetch_array($tbl))
			{	
				$_SESSION["LoginId"]=$row["id"];
        $_SESSION["Name"]=$row["Name"];
				header("Location:RM_Dashboard.php");
			}
			else
			{
				echo "Invalid";
			}
		}
?>
<div class="modal">
  <form method="post" class="modal-content">
    <div class="container">
      <h1>Login</h1>
      <hr>
      <label for="RM_Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="RM_Email" required>
      <label for="RM_Password"><b>Name</b></label>
      <input type="text" placeholder="Enter Password" name="RM_Password" required>
      <p>If you have no registered <a href="RM_Registration.php" style="color:dodgerblue">Registration Form</a></p>
      <div class="clearfix">
        <button type="submit" name="Login" class="signupbtn">Login</button>
        <button class="cancelbtn"><a href="../index.php">cancel</a></button>
      </div>
    </div>
  </form>
</div>
</body>
</html>