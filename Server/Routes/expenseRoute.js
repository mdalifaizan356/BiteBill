const express = require("express");
const router = express.Router();
const userController = require("../Controllers/userController");
 
 router.post("/createUser", userController.createUser);
 router.get("/getAllUser", userController.getAllUser);
 router.get("/findOneUser", userController.findOneUser);
 router.put("/updateUserById", userController.updateUserById);



module.exports=router; 