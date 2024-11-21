const e = require("express");
const express = require("express");
const mongoose = require("mongoose");
const dotenv = require("dotenv").config();

// Access Express in a variable
const app = express();

// Define port
const port = process.env.PORT||3000;

// Default middleware
app.use(express.json())
app.use(express.urlencoded({extended:true}));

// Define Mongo URL and Connect MongoDB
const mongo_url=process.env.MONGO_URL;
mongoose.connect(mongo_url)
.then(()=>{
    console.log("Connection successful with mongoDB");
})
.catch((e)=>{
    console.log(`Connection Failed ${e}`);
});

app.listen(port, ()=>{
    console.log(`Server is running on ${port}`);
})

