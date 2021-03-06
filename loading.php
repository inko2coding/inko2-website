<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INKO2</title>
    <meta name="description" content="The two INKO2 brothers teaching anyone who wants to learn life-skills like coding, editing, cooking and much more that is good to know. Join the two brothers Koshik and Inesh ...">
    <meta name="autjor" content="">
    <meta http-equiv="refresh" content="7;URL='html/home.html'">
</head>

<body>
    <style>
        body {
            background: #121212;
        }
        
        h1 {
            font-size: 300px;
            display: absolute;
            color: #ffffff11;
            width: 100%;
            text-align: center;
        }
        
        h3 {
            position: relative;
            display: block;
            margin-top: -400px;
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 48px;
            color: #fff;
            line-height: 10px;
            font-family: 'Poppins', sans-serif;
            animation: INKO2 3s ease 1s forwards;
            opacity: 0;
        }
        
        h3 b {
            color: #40c3ff;
            animation: INKO2 3s ease 2s forwards;
            opacity: 0;
        }
        
        h5 {
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 24px;
            color: #40c3ff;
            line-height: 0;
            font-family: 'Poppins', sans-serif;
            animation: INKO2-tag 4s ease 4s forwards;
            opacity: 0;
        }
        
        hr {
            width: 100px;
            line-height: 0;
            position: relative;
            transform: translateX(-200px);
            animation: INKO2-hr 1s ease 5s forwards;
            opacity: 0;
            margin-top: -15px;
        }
        
        @keyframes INKO2 {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        
        @keyframes INKO2-tag {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @keyframes INKO2-hr {
            0% {
                opacity: 0;
                transform: translateX(-200px);
            }
            80% {
                opacity: 1;
                transform: translateX(30px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @media only screen and (max-width: 800px) {
            h1 {
                display: none;
            }
            h3 {
                margin-top: 300px;
            }
        }
    </style>
    <h1>INKO2</h1>
    <h3>INKO<b>2</b></h3>
    <h5>STOP. GO INKO</h5>
    <hr>
</body>

</html>