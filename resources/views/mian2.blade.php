<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{margin: 0;padding: 0;}
        .container{margin: 20px}
        .group{position: relative}
        input{font-size: 18px;padding: 10px 10px 10px 5px;
        width: 300px;border: none;border-bottom: 1px solid #757575;}
        input:focus{outline: none}

        label{color: #999;font-size: 18px;
            position: absolute;left: 0;top: 10px;
        pointer-events: none;transition: 2s ease all;
        -webkit-transition: 2s ease all;}
        .bar{position: relative;display: block; width: 315px;}
        .bar::before,.bar::after{
            content: '';
            position: absolute;
            bottom: 1px;
            height: 2px;
            width: 0;
            background-color: #5264ae;
            -webkit-transition: 2s ease all;
        }
        .bar::before{left: 50%}
        input:focus ~ .bar::before,input:focus ~ .bar::after{width: 50%;}
        .bar::after{right: 50%}
        input:focus ~label{
            top: -20px;
            font-size: 14px;
            color: #5264ae;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="">
        <div class="group">
            <input type="text">
            <span class="bar"></span>
            <label for="">Name</label>
        </div>
    </form>

</div>

<div class="main">
    <div class="left">
        我是左侧边栏
    </div>
    <div class="right">
        我是右侧边栏
    </div>
</div>
<div class="foot">
    我是底部
</div>
</body>
</html>