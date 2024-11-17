import React from 'react'
import "./Navbar.css"

const Navbar = () => {
  return (
   <div className="nav">
  <h1>Hii Faizan</h1>
  <div className="dropdown">
    <span>Your Profile</span>
    <div className="dropdown-content">
      <a href="AdminEditProfile.php">Edit Profile</a>
      <a href="AdminChangePass.php">Change Password</a>
      <a href="../Common/Logout.php">Logout</a>
    </div>
  </div>
  <div className="dropdown">
    <span>Manage Expenditure</span>
    <div className="dropdown-content">
      <a href="adminAddteacher.php">Add Expense</a>
      <a href="adminRequestedT.php">Requested Expense</a>
      <a href="adminManageTeacher.php">Edit Expense</a>
      <a href="adminManageTeacher.php">View All Expense</a>
    </div>
  </div>
</div>

  )
}

export default Navbar