<?php
include("../connection.php");
// if(isset($_REQUEST["deletereq"]))
// 	{
// 		$sql="DELETE FROM rm_details WHERE id=".$_REQUEST["deletereq"];
// 		mysqli_query($con,$sql);
// 	}
// if(isset($_REQUEST["acceptid"]))
// 	{
// 		if($_REQUEST["status"]==0)
// 		{
// 	$sql="Update rm_details set status=1 WHERE id=".$_REQUEST["acceptid"];
// 		mysqli_query($con,$sql);
		
// 		}
// 		if($_REQUEST["status"]==1)
// 		{
// 	$sql="Update rm_details set Status=0 WHERE id=".$_REQUEST["acceptid"];
// 		mysqli_query($con,$sql);
// 		}
// 	}
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
            width:100%;
            height:100vh;
            position:relative;
            top:10%;
            
        }
        .Requestbox{
            /* border:2px solid green;    */
            width:100vw;
            height:auto;
            display:flex;
            flex-direction:column;
            /* justify-content:center; */
            align-items:center;
        }
        .Requestbox table{
            width:100vw;
        }
        .Requestbox th, td{
            weidth:50%;
            height:auto;
            padding:5px

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
    </style>
</head>
<body>
    <header>
        <!-- <?php
    include("RM_Dashboard.php");
    ?> -->
    </header>
    <div class="Container">
        <div class="Requestbox">
            <div class="Request-heading">
                <h3>Request</h3>
            </div>
            <div class="Request-table">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Buyer</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Agree</th>
                    <th>Disagree</th>
                </tr>   
                <?php
                $fetchRMData="select * from expenses_approvals where status=1";	
			    $tbl=mysqli_query($con,$fetchRMData);
                while($row=mysqli_fetch_array($tbl)){
            ?>
                <tr>
                    <td><?php echo $row["Date"];?></td>
                    <td><?php echo $row["Buyer_Name"];?></td>
                    <td><?php echo $row["Product"];?></td>
                    <td><?php echo $row["Price"];?></td>
                    <!-- <td><?php if($row["status"]==1) echo "Ok"; else echo "Agree"; ?></td> -->
                    <!-- <td><a href="Add_Roommate.php?acceptid=<?php echo $row["id"];?>&status=<?php echo $row["status"];?>">Accept Request</a></td>
                    <td><a href="Add_Roommate.php?deletereq=<?php echo $row["id"];?>">Delete</a></td> -->
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// INSERT INTO expenses_approvals(Date, Approval_id, Buyer_id, Buyer_Name, Product_id, 
// Product_name, Price, Description, Status) VALUES

// ('".$Date."','".$_SESSION["LoginId"]."','".$_SESSION["Name"]."','".$Pro_Name."', 
// '".$Pro_Price."', '".$Pro_Description."',0)";
?>