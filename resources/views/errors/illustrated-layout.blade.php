<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
            body {
            font-family: 'Open Sans';
            padding: 0;
            margin: 0;
            }

            a,
            a:visited {
            color: #87271d;
            outline: none;
            text-decoration: none;
            }

            a:hover,
            a:focus,
            a:visited:hover {
            color: #87271d;
            text-decoration: none;
            }

            * {
            paading: 0;
            margin: 0;
            }

            #oopss {
            /* background: #87271d; */
            text-align: center;
            margin-bottom: 50px;
            font-weight: 400;
            font-size: 20px;
            position: fixed;
            width: 100%;
            height: 100%;
            line-height: 1.5em;
            z-index: 9999;
            left: 0px;
            }

            #error-text {
            top: 30%;
            position: relative;
            font-size: 40px;
            color: #eee;
            }

            #error-text a {
            color: #87271d;
            background: #ffcb57;
            }

            #error-text a:hover {
            color: #fff;
            background: #e02511;
            }

            #error-text p {
            color: #eee;
            margin: 70px 0 0 0;
            }

            #error-text i {
            margin-left: 10px;
            }

            #error-text p.hmpg {
            margin: 40px 0 0 0;
            }

            #error-text span {
            /* position: relative; */
            background: #ffcb57;
            color: #87271d;
            font-size: 300%;
            padding: 0 20px;
            border-radius: 5px;
            font-weight: bolder;
            transition: all .5s;
            cursor: pointer;
            margin: 0 0 40px 0;
            }

            #error-text span:hover {
            background: #e02511;
            color: #fff;
            -webkit-animation: jelly .5s;
            -moz-animation: jelly .5s;
            -ms-animation: jelly .5s;
            -o-animation: jelly .5s;
            animation: jelly .5s;
            }

            #error-text span:after {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: '';
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(136, 183, 213, 0);
            border-top-color: #87271d;
            border-width: 7px;
            margin-left: -7px;
            }

            @-webkit-keyframes jelly {
            from, to {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            25% {
                -webkit-transform: scale(.9, 1.1);
                transform: scale(.9, 1.1);
            }
            50% {
                -webkit-transform: scale(1.1, .9);
                transform: scale(1.1, .9);
            }
            75% {
                -webkit-transform: scale(.95, 1.05);
                transform: scale(.95, 1.05);
            }
            }

            @keyframes jelly {
            from, to {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            25% {
                -webkit-transform: scale(.9, 1.1);
                transform: scale(.9, 1.1);
            }
            50% {
                -webkit-transform: scale(1.1, .9);
                transform: scale(1.1, .9);
            }
            75% {
                -webkit-transform: scale(.95, 1.05);
                transform: scale(.95, 1.05);
            }
            }
            /* CSS Error Page Responsive */

            @media only screen and (max-width:640px) {
            #error-text span {
                font-size: 200%;
            }
            #error-text a:hover {
                color: #fff;
            }
            }

            .back:active {
            -webkit-transform: scale(0.95);
            -moz-transform: scale(0.95);
            transform: scale(0.95);
            background: #f53b3b;
            color: #87271d;
            }

            .back:hover {
            background: #b51313;
            color: #87271d;
            }

            .back {
            text-decoration: none;
            background: #b51313;
            color: #87271d;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
            text-transform: uppercase;
            border-radius: 3px;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            transform: scale(1);
            transition: all 0.5s ease-out;
            }

            body.v{
                overflow: hidden;    
                -webkit-animation: v 10s infinite;
                animation: v 10s infinite;
            }

            @keyframes v{
            0% {background:#87271d;;}
            20%{background:#87271d;}
            40%{background:#ad3226;;}
            60%{background:#ad3226;}
            80%{background:#bc3123;;}
            100%{background:#87271d;}
            }

            @-webkit-keyframes v{
            0% {background:#87271d;;}
            20%{background:#87271d;}
            40%{background:#bc3123;;}
            60%{background:#ad3226;}
            80%{background:#87271d;}
            100%{background:#87271d;}
            }

        </style>
    </head>
    <body class="v">
        <div id='oopss'>
        <div id='error-text'>
            <span>@yield('code')</span>
            <p>@yield('message')</p>
            <p class='hmpg'><a href='{{ app('router')->has('home') ? route('home') : url('/') }}' class="back">GO HOME</a></p>
        </div>
        </div>
    </body>
</html>
