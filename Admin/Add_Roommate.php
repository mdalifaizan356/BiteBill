<?php
include("../connection.php");
if(isset($_REQUEST["deletereq"]))
	{
		$sql="DELETE FROM rm_details WHERE id=".$_REQUEST["deletereq"];
		mysqli_query($con,$sql);
	}
if(isset($_REQUEST["acceptid"]))
	{
		if($_REQUEST["status"]==0)
		{
	$sql="Update rm_details set status=1 WHERE id=".$_REQUEST["acceptid"];
		mysqli_query($con,$sql);
		
		}
		if($_REQUEST["status"]==1)
		{
	$sql="Update rm_details set Status=0 WHERE id=".$_REQUEST["acceptid"];
		mysqli_query($con,$sql);
		}
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
        .Container{
            border:2px solid red;   
            width:100%;
            height:150vh;
            position:relative;
            top:10%;
            
        }
        .Requestbox{
            border:2px solid green;   
            width:100%;
            height:20%;
            display:flex;
            flex-direction:column;
            /* justify-content:center; */
            align-items:center;
        }
        .Requestbox table{
        }
        .Requestbox th, td{
            weidth:50%;
            height:auto;
            padding:10px

        }
        .Requestbox button{
        }
        .Registration-form{
            /* border:2px solid yellow;    */
            width:100vw;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .Registration-form form{
            /* border:2px solid yellow;    */
            background-color:pink;
            width:100%;
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .Registration-form form label, input{
            width:100%;
            padding:5px;
            display:flex;
            flex-direction:column;
        }
        .Registration-form form button{
            width:30%;
            border-radius:20px;
            padding:1%;
            margin-top:5px;
            display:flex;
            /* background-color:green; */
            flex-direction:column;
            align-items:center;
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
        <?php
    include("Admin_Dashboard.php");
    ?>
    </header>
    <div class="Container">
        <div class="Requestbox">
            <div class="Request-heading">
                <h3>Request</h3>
            </div>
            <div class="Request-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Accept</th>
                    <th>Reject</th>
                </tr>   
                <?php
                $fetchRMData="select * from rm_details where status=0";	
			    $tbl=mysqli_query($con,$fetchRMData);
                while($row=mysqli_fetch_array($tbl)){
            ?>
                <tr>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["Email"];?></td>
                    <td><?php if($row["status"]==1) echo "Enable"; else echo "Disable"; ?></td>
                    <td><a href="Add_Roommate.php?acceptid=<?php echo $row["id"];?>&status=<?php echo $row["status"];?>">Accept Request</a></td>
                    <td><a href="Add_Roommate.php?deletereq=<?php echo $row["id"];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
        <hr><hr>    
        <div class=Registration-form>
            <form method="post">
                <h3>Registration</h3>
                <p>Please fill in this form to add new roommate.</p>
                <hr>
                <label for="RM_Name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="RM_Name" required>
                <label for="RM_Email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="RM_Email" required>
                <label for="RM_Password"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="RM_Password" required>
                <button type="submit" name="submit" class="signupbtn">Add Roommate</button>
            </form>
        </div>
    </div>
</body>
</html>