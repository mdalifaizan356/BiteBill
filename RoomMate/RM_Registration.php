<?php
include "../connection.php";
if(isset($_REQUEST["submit"])){
  $checkEmail="select * from rm_details where Email ='".$_REQUEST["RM_Email"]."'";	
  $run=mysqli_query($con,$checkEmail);
  $count=mysqli_num_rows($run);
  if($count>0){
    echo "<script>window.location.href='RM_Registration.php?Email already ragister';</script>";
  }
  else{
    $RM_Name=$_REQUEST["RM_Name"];
    $RM_Email=$_REQUEST["RM_Email"];
    $RM_Password=$_REQUEST["RM_Password"];
    $insertdetails="insert into rm_details(Name, Email, Password, status) values('".$RM_Name."', '".$RM_Email."', '".$RM_Password."',0)";
    $run=mysqli_query($con,$insertdetails);
    if($run){
      echo "<script>window.location.href='RM_Login.php?Regitration is successfully';</script>";
    }    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/SignUp.css">
    <title>Admin Registration</title>
</head>
<body>
<div class="modal">
  <form method="post" class="modal-content">
    <div class="container">
      <h1>Registration</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="RM_Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="RM_Name" required>
      <label for="RM_Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="RM_Email" required>
      <label for="RM_Password"><b>Name</b></label>
      <input type="text" placeholder="Enter Password" name="RM_Password" required>
      <p>Already have an account <a href="RM_Login.php" style="color:dodgerblue">Log In</a>.</p>
      <div class="clearfix">
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        <button class="cancelbtn"><a href="../index.php">Cancel</a></button>
      </div>
    </div>
  </form>
</div>
</body>
</html>