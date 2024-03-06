<?php
include("../connection.php");
$totalapprovel=0;
$fetchRMData="SELECT id, status, COUNT(*) AS frequency FROM rm_details GROUP BY status";	
			          $tbl=mysqli_query($con,$fetchRMData);
                      while($row=mysqli_fetch_array($tbl)){
                        $totaluser=$row["frequency"];
                      }

$fetchRMData="SELECT Expense_id,Approval_status, COUNT(*) AS frequency FROM expenses_approvals GROUP BY Expense_id";	
			          $tbl=mysqli_query($con,$fetchRMData);
                      while($row=mysqli_fetch_array($tbl)){
                        echo $row["Expense_id"];
                        echo $row["frequency"];
                        $totalapprovel=$row["frequency"]+$totalapprovel;
                      }       
                      echo $totalapprovel;
                      echo $totaluser;
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
        .Container{
            border:2px solid red;   
            width:98%;
            margin:auto;
            height:50vh;
            position:relative;
            top:5%;
            display:flex;
            flex-direction:column;
            /* justify-content:center; */
            align-items:center;
            
        }
        .Requestbox{
            border:2px solid green;   
            width:50%;
            height:inherit;
            display:flex;
            flex-direction:column;
            /* justify-content:center; */
            align-items:center;
        }
    </style>
</head>
<body>
    <header>
        <?php
    include("Admin_Dashboard.php");
    ?>
    </header>
    <div class="Container">
        <div class="Requestbox">
            <form method="post">
                <p>Add Expenses After Approved by All</p>
            </form>
        </div>
    </div>
</body>
</html>