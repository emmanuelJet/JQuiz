<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    

        <title>Jetech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="top-right links">
                <a href="<?php echo e(route('auth.login')); ?>">Login</a>
                <a href="<?php echo e(route('auth.register')); ?>">Register</a>
            </div>
                
            <div class="content">
                <div class="title">
                    <img src="<?php echo e(URL::asset('logo.png')); ?>" alt="jetech logo" height="350" width="350">
                </div>
                <div class="content">
                    <h1><?php echo app('translator')->getFromJson('quickadmin.quickadmin_title'); ?></h1>
                    <h3>Joseph Emmanuel Temitayo Welcomes To JQuiz. An App For You To Answer Quizzes</h3>
                </div>
            </div>
        </div>
    </body>
</html>
