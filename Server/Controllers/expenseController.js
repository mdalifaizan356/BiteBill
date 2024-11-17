const userModel = require("../Models/userModel"); 

//Create User
exports.createUser = async(req, res)=>{
    // console.log('>>>>>>>req.body', req.body )
    const user = new userModel(req.body)
    await user.save()
    res.status(200).json(user);    
};


//Fetch All User
exports.getAllUser = async(req, res)=>{
    const user = await userModel.find()
    res.status(200).json(user);
    
};


//Find one
exports.findOneUser = async(req,res)=>{
    console.log(req.params)
    const {id} = req.params
    const user=await user.findById(id)
    console.log(user);
};

//Update User
exports.updateUserById = async(req,res)=>{
    console.log(req.body)
    // return
    const {id} = req.body;
    const data = req.body
    const user = await userModel.findByIdAndUpdate(id, data)
    res.status(200).json(user);
};


