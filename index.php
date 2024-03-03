<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css?v=<?php echo time(); ?>" />
    <title>Home</title>
</head>
<body>
<!--Header start-->
    <header class="header">
        <h3>BiteBill</h3>
        <button><a href="RoomMate/RM_Login.php">Login</a></button>
    </header>
<!--Header End-->

<!-- Start Table -->
    <main>
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
                $fetchRMData="select * from final_expenses";	
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
</main>
<!-- End Table -->
</body>
</html>