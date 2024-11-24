const mongoose = require("mongoose");

const userSchema = new mongoose.Schema({
    Name:{
        type:String,
        required:true,
        trim:true
    },

    Email:{
        type:String,
        required:true,
        unique:true,
        trim:true,
        lowercase:true
    },

    PhNo:{
        type:Number,
        required:true,
        // unique:true,
        trim:true
    },

    Password:{
        type:String,
        required:true,
        tirm:true
    },

},
{
    versionKey:false,
    timestamps:true
}
);

module.exports = mongoose.model("users", userSchema);