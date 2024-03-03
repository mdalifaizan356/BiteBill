<?php
include("../connection.php");
include("RM_Dashboard.php"); 
if(isset($_REQUEST["addApproval"])){
    $Yes=$_REQUEST["yes"];
    $Date=Date("Y/m/d");
    
    $fetchRMData="select * from expenses_desc where status=1";	
    $tbl=mysqli_query($con,$fetchRMData);
    while($row=mysqli_fetch_array($tbl)){
    $Expense_id= $row["Expense_id"];
    $Date=$row["Date"];
    $Buyer_id=$row["Buyer_id"];
    $Buyer= $row["Buyer"];
    $Product_name= $row["Product_name"];
    $Price= $row["Price"];
    $Description= $row["Description"];
    $Status= $row["Status"];
    }
    $insertdetails="INSERT INTO expenses_approvals (Buyer_Id, Buyer_name,Expense_id, Product, Price, Id_Approved_by, Name_Approved_by, Approval_status)VALUES('".$Buyer_id."','".$Buyer."', '".$Expense_id."','".$Product_name."', '".$Price."', '".$_SESSION["LoginId"]."','".$_SESSION["Name"]."', '".$Yes."')";
    $run=mysqli_query($con,$insertdetails);
      
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Roommate</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        header{
            border: 2px solid red;
            width: 100%;
            height:10vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* font-size: 50px; */
            position: fixed;
            z-index: 2;
        }
        .Container{
            border:2px solid red;   
            width:100%;
            height:auto;
            position:relative;
            top:12%;
            display:flex;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap:wrap;
        }
        .Requestbox{
            border:2px solid green;   
            width:60%;
            height:200px;
            margin:20px;
            font-size:large; 
        }
        
        .data{
            border:2px solid red;
            width:100%;
            height:150px;
        }
        .form{
            border:2px solid red;
            width:100%;
            margin:auto;
            height:50px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
    <header>
        <?php
        
        
        ?>
    </header>
    <div class="Container">
    <?php
                $fetchRMData="select * from expenses_desc where status=1";	
			    $tbl=mysqli_query($con,$fetchRMData);
                while($row=mysqli_fetch_array($tbl)){
            ?>
        <div class="Requestbox">
            <div class="data">
                <p>Date:<?php echo $row["Date"];?></p>
                <p>Buyer<?php echo $row["Buyer"];?></p>
                <p>Product<?php echo $row["Product_name"];?></p>
                <p>Price<?php echo $row["Price"];?></p>
                <p><?php echo $row["Status"];?></p>
            </div>
            <div class="form">
                <form method="post">
                    <label for="yes">Agree</label>
                    <input type="checkbox" id="yes" name="yes" value="1">
                    <input type="submit" name="addApproval">
                </form>
            </div>
        </div>
        <?php
            }
            ?>
    </div>
</body>
</html>