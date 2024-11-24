const userModel = require("../Models/userModel");
const bcrypt = require("bcrypt");
const { json } = require("express");

// Create User
exports.createUser = async(req, res)=>{
    try{
        // console.log(req.body);
    let {Name, Email, PhNo, Password } =req.body;

    if(!(Name&&Email&&PhNo&&Password)){
        return res.status(404).json({message:"All fields are required"});
    }

    const checkEmail = await userModel.findOne({Email});
    if(checkEmail){
        return res.status(404).json({message:"Email Already Registered"})
    }

    const checkPhNo = await userModel.findOne({PhNo});
    if(checkPhNo){
        return res.status(404).json({message:"Phone Number Already Registered"})
    }

    const salt = bcrypt.genSaltSync(10);
    const hash = bcrypt.hashSync(Password, salt);

    const finalData = {
        Name, Email, PhNo, Password:hash
    }
    
    const user = new userModel(finalData);
    await user.save()
    res.status(200).json(user);
    }
    catch(err){
        return res.status(404).json({message:"Internal Server Error"});
    }
};


// Login User
exports.loginUser = async(req, res)=>{
    const {Email, Password} = req.body;
    const userByEmail = await userModel.findOne({Email});
    // console.log(userByEmail.Email, userByEmail.Password );
    const dbPassword = bcrypt.compareSync(Password, userByEmail.Password);
    // console.log(dbPassword);
    if(Email===userByEmail.Email && dbPassword ===true){
        console.log("Login");
    }
    else{
        console.log("Invalid Details");
    }

};


// Change Password
exports.loginUser = async(req, res)=>{
    const {Email, Password} = req.body;
    const userByEmail = await userModel.findOne({Email});
    // console.log(userByEmail.Email, userByEmail.Password );
    const dbPassword = bcrypt.compareSync(Password, userByEmail.Password);
    // console.log(dbPassword);
    if(Email===userByEmail.Email && dbPassword ===true){
        console.log("Login");
    }
    else{
        console.log("Invalid Details");
    }
};
