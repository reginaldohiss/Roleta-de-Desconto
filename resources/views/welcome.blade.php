<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                outline: none;
            }
            body{
                font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                overflow: hidden;
                background: #F44336 ;
                background-size: cover;
            }

            .mainbox{
                position: relative;
                width: 500px;
                height: 500px;
            }
            .mainbox:after{
                position: absolute;
                content: '';
                width: 32px;
                height: 32px;
                background: url("public/arrow-pointing.png") no-repeat;
                background-size: 32px;
                right: -30px;
                top: 50%;
                transform: translateY(-50%);
            }
            .box{
                width: 100%;
                height: 100%;
                position: relative;
                border-radius: 50%;
                border: 10px solid #ece7e7;
                overflow: hidden;
                transition: all ease 5s;

            }
            span{
                width: 50%;
                height: 50%;
                display: inline-block;
                position: absolute;
            }
            .span1{
                clip-path: polygon(0 92%, 100% 50%, 0 8%);
                background-color: #ffeb3b;
                top: 120px;
                left: 0;
            }
            .span2{
                clip-path: polygon(100% 92%, 0 50%, 100% 8%);
                background-color: #d215c8;
                top: 120px;
                right: 0;
            }
            .span3{
                clip-path: polygon(50% 0%, 8% 100%, 92% 100%);
                background-color: #e76d2c;
                bottom: 0;
                left: 120px;
            }
            .span4{
                clip-path: polygon(50% 100%, 92% 0, 8% 0);
                background-color: #51caca;
                top: 0;
                left: 120px;
            }

            /*Little bit adjust the value*/
            .box1 .span3 b{
                transform: translate(-50%, -50%) rotate(-270deg);
            }
            .box1 .span1 b,
            .box2 .span1 b{
                transform: translate(-50%, -50%) rotate(185deg);
            }
            .box2 .span3 b{
                transform: translate(-50%, -50%) rotate(90deg);
            }
            .box1 .span4 b,
            .box2 .span4 b{
                transform: translate(-50%, -50%) rotate(-85deg);
            }

            .box2{
                width: 100%;
                height: 100%;
                transform: rotate(-135deg);
            }
            span b{
                width: 105px;
                height: 55px;
                line-height: 65px;
                border-radius: 10%;
                font-size: 26px;
                text-align: center;
                background-color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                box-shadow: inset 0 3px 3px 0 #717171;
            }
            .spin{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 105px;
                height: 105px;
                border-radius: 50%;
                border: 4px solid #fff;
                background-color: #a5d637;
                color: #fff;
                box-shadow: 0 5px 20px #000;
                font-weight: bold;
                font-size: 22px;
                cursor: pointer;
            }
            .spin:active{
                width: 70px;
                height: 70px;
                font-size: 20px;
            }

            .mainbox.animate:after{
                animation: animateArrow 0.7s ease infinite;
            }
            @keyframes animateArrow{
                50%{
                    right: -40px;
                }
            }

        </style>
    </head>
    <body>
    <div id="app">
      <example-component></example-component>
      <script src="{{ asset("js/app.js") }}"></script>
    </div>

    <script>
        function myfunction(){


            var x = 1024; //min value
            var y = 9999; // max value

            var deg = Math.floor(Math.random() * (x - y)) + y;

            document.getElementById('box').style.transform = "rotate("+deg+"deg)";

            var element = document.getElementById('mainbox');
            element.classList.remove('animate');
            setTimeout(function(){
                element.classList.add('animate');
            }, 5000); //5000 = 5 second
        }
    </script>
    </body>
</html>
