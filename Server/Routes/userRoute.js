const express = require("express");
const router = express.Router();
const userController = require("../Controllers/userController");

router.post("/createUser", userController.createUser);
router.post("/loginUser", userController.loginUser);
router.get("/getAllUsers", userController.getAllUsers);
router.patch("/partiallyUpdateUser/:id", userController.partiallyUpdateUser);


module.exports =  router;