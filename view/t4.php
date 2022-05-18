<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        div {
            color: #ffffff;
            font-size: 50px;
            display: flex;
            border-radius: 5px;
            width: 100px;
            height: 50px;
            background-color:darkturquoise;
            position: relative;
            animation-name: example;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            box-shadow: 5px 10px lightblue;
        }
        
        @keyframes example {
            0%   {background-color:darkturquoise; left:0px; top:0px;}
            50%  {background-color:darkturquoise; left:0px; top:500px;}
            100% {background-color:darkturquoise; left:0px; top:0px;}
        }
    </style>
</head>
<body style="background-color: rgb(240, 242, 255);">
    <img src="https://kariselovuo.pro/ksprov1/wp-content/uploads/2018/02/css-logo.png" style="box-shadow: 5px 10px lightblue; border-radius: 5px;" width="100px" height="100px" alt="">
    <div>CSS</div>
</body>
</html>