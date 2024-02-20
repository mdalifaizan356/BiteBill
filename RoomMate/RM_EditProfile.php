<?php
    include 'RM_Dashboard.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            width:100%;
            height:100vh;
            border:2px solid black;
            display:flex;
            float:right;
            justify-content: center;
            align-items: center;
        }
        .form-wrapper{
            width:80%;
            height:80vh;
            margin:auto;
            background-color:gray;
            border:2px solid green;
        }
        .dp{
            /* border:2px solid red; */
            /* border-radius:100%; */
            width:100%;
            height:30vh;
        }
        .dp form img{
            /* border:2px solid black; */
            border-radius:20%;
            width:100%;
            height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .detail-form form{
            /* border:2px solid red; */
            width:100%;
            height:50vh;
            display: flex;
            flex-direction: column;
        }
        .detail-form input{
            padding: 5px;
            margin: 5px;
        }
        .detail-form label{
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="dp">
                <form action="">
                    <img src="" alt="">
                </form>
            </div>
            <div class="detail-form">
                <form>
                    <label for="">Name</label>
                    <input type="text">
                    <label for="">Mobile Number</label>
                    <input type="text">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

</body>
</html>