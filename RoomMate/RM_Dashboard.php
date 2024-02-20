<?php
    include("../connection.php");
    session_start();
    if(!isset($_SESSION["LoginId"])){
        header("LOCATION:RM_Login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Dashboard.css?v=<?php echo time(); ?>"/>
    <title>Dashboard</title>
</head>
<body>
    <div class="header">
        <div class="sidebaricon">
            <input type="checkbox" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner top"></div>
            <div class="spinner middle"></div>
            <div class="spinner bottom"></div>
            </label>
            <div id="sidebarMenu">
                <div id="menu">
                   <dl>
                        <dt>Manage Profile</dt>
                        <dd><a href="RM_Dashboard.php">EditProfile</a></dd>
                        <dd><a href="RM_ChangePass.php">Change Password</a></dd>
                        <dd><a href="../logout.php">Logout</a></dd>
                        <dt>Manage Expense</dt>
                        <dd><a href="RM_ExpenseConsent.php">Expense Consent</a></dd>
                        <dd><a href="RM_AllExpenses.php">All Expenses</a></dd>
                        <dd><a href="RM_AddExpense.php">Add New Expense</a></dd>
                        <dd><a href="RM_EditExpense.php">Edit Expense</a></dd>
                   </dl>
                </div>
            </div>
        </div>
        <div class="header-content">
            <h3>Well-Come <?php echo $_SESSION["Name"];?></h3>
        </div>
    </div>
    <div class="main-container">
        <!-- <div class="main"></div> -->
    </div>
</body>
</html>