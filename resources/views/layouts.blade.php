<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel--模板继承 @yield('title') </title>
    <style>
        .header{
            width: 800px;
            height: 150px;
            margin: 0 auto;
            background: #0AA699;
        }
        .main{
            width: 800px;
            height: 300px;
            margin: 0 auto;

        }
        .left{
            width: 290px;
            height: 300px;
            margin: 0 auto;
            float: left;
            background:greenyellow;
        }
        .right{
            width: 500px;
            height: 300px;
            background: #00d95a;
            float: right;
        }
        .footer{
            width: 800px;
            height: 100px;
            margin: 0 auto;
            background: gold;
        }
    </style>
</head>
<body>
<div class="header">
    @section('header')
    我是头部
    @show
</div>
<div class="main">
    <div class="left">
        @section('left')
        我是左侧边栏
        @show
    </div>
    <div class="right">
        @yield('right','我是右侧边栏')
    </div>
</div>
<div class="footer">
    @section('footer')
    我是底部
    @show
</div>
</body>
</html>