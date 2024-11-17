const mongoose = require("mongoose");

const expenseSchema = new mongoose.Schema({
    userName:{
        type:String,
        required:true,
        trim:true,
        lowercase:true,
    },
    email:{
        type:String,
        required:true,
        unique:true,
        trim:true,
        lowercase:true,
    },
    dob:{
        type:Date,
        // required:true,
    },
    password:{
        type:String,
        require:true,
        // field:user_password
    },
},
{versionKey:false, timestamps:true}
);

module.exports = mongoose.model("expense", expenseSchema);