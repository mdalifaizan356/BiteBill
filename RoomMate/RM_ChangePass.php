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
            height:40vh;
            background-color:gray;
            border:2px solid black;
            box-shadow:2px 10px 10px blue;
        }

        .detail-form form{
            /* border:2px solid red; */
            width:100%;
            height:40vh;
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
            <div class="detail-form">
                <form>
                    <label for="">Enter old Password</label>
                    <input type="text">
                    <label for="">Enter New Password</label>
                    <input type="text">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

</body>
</html>