<?php
    include("../connection.php");
    include("RM_Dashboard.php");
    if(!isset($_SESSION["LoginId"])){
        header("LOCATION:RM_Login.php");
        die();
    }
    $buyername=$_SESSION["Name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Expenses</title>
    <style>
        .table-Container{
    /* border: 2px solid red; */
    /* margin-top: 50px; */
    width: 100%;
    height: auto;
    box-shadow: 2px 2px gray;
    top: 45vh;
}
.table-Container table{
    width: 100%;    
    padding: 2px;
    border: 1px solid black;
    border-collapse: collapse;
}
.table-Container th{
    /* position: fixed; */
    width: 20%;    
    padding: 8px;
    border: 1px solid black;
    border-collapse: collapse;
    color:red;
}
.table-Container td{
    width: 20%;    
    padding: 8px;
    border: 1px solid black;
    border-collapse: collapse;
}
    </style>
</head>
<body>
<div class="table-Container">
        <table>
            <caption>All Data</caption>
            <tr>
              <th>Date</th>
              <th>Buyer</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Status</th>
            </tr>
            <?php
                $fetchRMData="select * from expenses where Buyer='".$_SESSION["Name"]."'";	
			          $tbl=mysqli_query($con,$fetchRMData);
                while($row=mysqli_fetch_array($tbl)){
            ?>
            <tr>
              <td><?php echo $row["Date"];?></td>
              <td><?php echo $row["Buyer"];?></td>
              <td><?php echo $row["Product"];?></td>
              <td><?php echo $row["Price"];?></td>
              <td><?php echo $row["status"];?></td>
            </tr>
            <?php
                }
            ?>
</table>
</div>
</body>
</html>