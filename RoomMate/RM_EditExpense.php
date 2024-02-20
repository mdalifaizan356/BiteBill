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
            <div class="detail-form">
                <form>
                    <label for="">Product Name</label>
                    <input type="text">
                    <label for="">Price</label>
                    <input type="text">
                    <label for="">Why Update details for this expanse?</label>
                    <textarea name="Description" id="" cols="1" rows="5"></textarea>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>