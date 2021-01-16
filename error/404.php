<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found | INKO2</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: cursive;
        }
        
        .header {
            background-color: #071d35;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sub-header {
            background-color: #777;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .e-error {
            display: flex;
            height: 400px;
            justify-content: center;
            align-items: center;
        }
        
        .e-cont {
            width: 450px;
            padding: 30px;
            background: #40c3ff;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .title {
            line-height: 70px;
            font-size: 28px;
            color: #fff;
            font-family: cursive;
            font-weight: 600;
        }
        
        .url-error {
            font-size: 16px;
            font-family: cursive;
        }
        
        .url {
            color: wheat;
            font-weight: 900;
        }
        
        .a {
            background: #071d35;
            text-decoration: none;
            font-family: cursive;
            display: block;
            width: fit-content;
            margin-top: 40px;
            padding: 13px 15px;
            color: white;
        }
    </style>
</head>

<body>
    <?php 
        require_once '../sections/header-other.php';
    ?>
    <div class="header">
        <h1 class="title">Page Not Found</h1>
    </div>
    <div class="e-error">
        <div class="e-cont">
            <p class="url-error">The URL that you requested was not found.</p>
            <p>The page you were looking for may have been removed or moved to another location. Make sure you have typed in the correct address to the page you were trying to reach.</p>
            <a class="a" href="../home">Back to INKO2</a>
        </div>
    </div>
    <?php 
        require_once '../sections/footer.php';
    ?>
</body>

</html>