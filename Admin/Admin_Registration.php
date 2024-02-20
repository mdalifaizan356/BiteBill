<?php
include ("../connection.php");
if(isset($_REQUEST["submit"]))
      {
          $Admin_Name=$_REQUEST["Admin_Name"];
          $Admin_Email=$_REQUEST["Admin_Email"];
          $Admin_Password=$_REQUEST["Admin_Password"];

          $qry="insert into admin_details(Name, Email, Password) values('".$Admin_Name."', '".$Admin_Email."', '".$Admin_Password."')";
          mysqli_query($con,$qry);
          header("location:Admin_Login.php");
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
      <label for="Admin_Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="Admin_Name" required>
      <label for="Admin_Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Admin_Email" required>
      <label for="Admin_Password"><b>Name</b></label>
      <input type="text" placeholder="Enter Password" name="Admin_Password" required>
      <p>Already have an account <a href="Admin_Login.php" style="color:dodgerblue">Log In</a>.</p>
      <div class="clearfix">
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        <button class="cancelbtn"><a href="../index.php">Cancel</a></button>
      </div>
    </div>
  </form>
</div>
</body>
</html>