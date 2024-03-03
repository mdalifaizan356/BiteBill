<?php
    session_start();
    include ("../connection.php");
    if(!isset($_SESSION["LoginId"])){
        header("Admin_Login.php");
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
                        <dt>Manage Roommate</dt>
                        <dd><a href="Add_Roommate.php">Add Roommate</a></dd>
                        <dd><a href="RM_AllExpenses.php">View All Roommate </a></dd>
                        <dd><a href="RM_EditExpense.php">Edit Roommate</a></dd>
                        <dd><a href="RM_AddExpense.php">Delete Roommate</a></dd>
                        <dt>Manage Expense</dt>
                        <dd><a href="RM_ExpenseConsent.php">Expense Consent</a></dd>
                        <dd><a href="RM_AllExpenses.php">All Expenses</a></dd>
                        <dd><a href="RM_AddExpense.php">Add New Expense</a></dd>
                        <dd><a href="RM_EditExpense.php">Edit Expense</a></dd>
                        <dt>Manage Site</dt>
                        <dd><a href="Admin_Updateindex.php">Update Expenses Table</a></dd>
                   </dl>
                </div>
            </div>
        </div>
        <div class="header-content">
            <h3>Ohh<?php echo $_SESSION["Name"] ?>Bhai</h3>
        </div>
    </div>
    <div class="main-container">
        <!-- <div class="main"></div> -->
    </div>
</body>
</html>