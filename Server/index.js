//import all materials
const express = require('express');
const mongoose = require('mongoose');
require('dotenv').config();


//Accsess express in app
const app = express();


//Define Port 
const port = process.env.PORT;
// const port = 6080;

// Connect Database
const MONGO_URL= process.env.MONGO_URL
console.log(MONGO_URL)
// const MONGO_URL = "mongodb://localhost:27017/bitebill   "


app.use(express.json());
app.use(express.urlencoded({extended:true}))


const userRouter = require('./Routes/userRoute')
app.use('/newuser', userRouter);

//Connect with mongoDB
mongoose.connect(process.env.MONGO_URL)
    // mongoose.connect(MONGO_URL)
    .then(() => {
        console.log("Successefully Connected With Mongo Db", MONGO_URL);
    })
    .catch((err) => {
        console.log("Error on connection with mongo", err);
    });


app.listen(port, () => {
    console.log(`Server is runnig on port number ${port}`);
})