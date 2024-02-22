<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Roommate</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        .Container{
            border:2px solid red;   
            width:100%;
            height:100vh;
            position:relative;
            top:15%;
            
        }
        .Requestbox{
            border:2px solid green;   
            width:90%;
            margin: auto;
            height:400px;
        }
        header{
            border: 2px solid red;
            width: 100%;
            height:10vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* font-size: 50px; */
            position: fixed;
            z-index: 2;
        }
        .data{
            border:2px solid red;
            width:100%;
            height:300px;
        }
        .form{
            border:2px solid red;
            width:100%;
            height:100px;
            display:flex;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <header>
        <?php
        include("RM_Dashboard.php")
        ?>
    </header>
    <div class="Container">
        <div class="Requestbox">
            <div class="data"></div>
            <div class="form">
                <form method="post">
                    <label for="">Yes</label>
                    <input type="radio">
                    <label for="">No</label>
                    <input type="radio">
                </form>
            </div>
        </div>
    </div>
</body>
</html>