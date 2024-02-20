<?php
include("RM_Dashboard.php");
if(isset($_REQUEST["addproduct"])){
    $Pro_Name=$_REQUEST["ProductName"];
    $Pro_Price=$_REQUEST["Price"];
    $Pro_Description=$_REQUEST["Description"];

    $insertdetails="insert into expenses(Date,Buyer, Product, Price, Description, status) values(NOW(),'".$_SESSION["Name"]."','".$Pro_Name."', '".$Pro_Price."', '".$Pro_Description."',1)";
    $run=mysqli_query($con,$insertdetails);
    if($run){
      echo "<script>window.location.href='RM_AddExpense.php?Expense add is successfully';</script>";
    }    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            width:100%;
            height:100vh;
            border:2px solid black;
            display:flex;
            float:right;
            justify-content: center;
            align-items: center;
        }
        .form-wrapper{
            width:80%;
            height:80vh;
            margin:auto;
            background-color:gray;
            border:2px solid green;
        }
        .detail-form form{
            /* border:2px solid red; */
            width:100%;
            height:80vh;
            display: flex;
            flex-direction: column;
        }
        .detail-form input{
            padding: 5px;
            margin: 5px;
        }
        .detail-form label{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="detail-form">
                <form>
                    <label for="ProductName">Product Name</label>
                    <input type="text" name="ProductName">
                    <label for="Price">Price</label>
                    <input type="text" name="Price" >
                    <label for="Description">Description</label>
                    <textarea name="Description" id="" cols="1" rows="5"></textarea>
                    <input type="submit" name="addproduct">
                </form>
            </div>
        </div>
    </div>
</body>
</html>