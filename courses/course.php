<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | INKO2</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        section {
            position: relative;
            width: 100%;
            height: 80vh;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        section .wave {
            position: absolute;
            width: 100%;
            height: 143px;
            bottom: 0;
            left: 0;
            background: url(../images/wave.png);
            background-position: 0;
            flex-grow: 1;
        }
        
        section .wave::before {
            content: '';
            width: 100%;
            height: 143px;
            background: url(../images/wave.png);
            position: absolute;
            top: 0;
            left: 0;
            background-position: 800px;
            opacity: 0.4;
        }
        
        section .wave::after {
            content: '';
            width: 100%;
            height: 143px;
            background: url(../images/wave.png);
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.7;
            background-position: 400px;
            animation-delay: -0.5s;
        }
        
        section .info {
            position: absolute;
            text-align: center;
            margin-top: -50px;
        }
        
        section .info h1 {
            font-size: 50px;
            color: #fff;
        }
        
        section .info p {
            margin-top: -20px;
            font-size: 24px;
            color: #eee;
        }
        
        section .info p i {
            margin-right: 10px;
        }
        
        .details .achieve ul {
            list-style: none;
            max-height: 200px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: space-between;
            max-width: 900px;
            padding: 0;
        }
        
        .details .achieve ul li {
            line-height: 25px;
        }
        
        .details .achieve ul li i {
            margin-right: 10px;
        }
        
        main {
            padding: 40px 80px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section {
            margin: 50px 0;
        }
        
        .lang-other p {
            line-height: 15px;
            font-weight: 600;
        }
        
        .lang-other p span {
            font-weight: normal;
        }
        
        @media (max-width: 700px) {
            main {
                padding: 40px 10px;
            }
        }
        
        .btn {
            padding: 12px 14px;
            border-radius: 22px;
            font-style: 18px;
            background: rgb(255, 219, 15);
            color: #222;
        }
        /* Nav Styles */
        
        a {
            text-decoration: none;
        }
        
        nav {
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 50px;
            position: absolute;
            z-index: 1;
        }
        
        .logo a {
            font-size: 20px;
            color: #222;
            font-weight: 600;
        }
        
        nav ul {
            list-style: none;
            display: flex;
        }
        
        nav ul li a {
            color: #444;
            margin: 0 10px;
        }
        /* Select Option */
        
        .timeOptions {
            display: flex;
            flex-wrap: wrap;
        }
        
        .priceBox {
            width: 100px;
            height: 100px;
            border: 1px solid #000;
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }
        
        .priceBox p {
            font-size: 14px;
            text-align: center;
        }
        
        .priceBox .price {
            font-size: 32px;
            line-height: 0px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="../home">INKO2</a>
            </div>
            <ul>
                <li><a href="all">All Courses</a></li>
            </ul>
        </nav>
        <section>
            <div class="wave"></div>
            <div class="info">
                <h1 id="course-name" class="title"></h1>
                <p id="path"></p>
            </div>
        </section>
    </header>
    <main>
        <div class="duration">
            <span>Course Duration: </span>
            <i class="far fa-clock"></i>
            <span id="duration-time"></span>
        </div>
        <div class="details">
            <div class="description section">
                <h2>Course Description</h2>
                <p id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolore dolores voluptates facilis? Eius id, maxime aperiam sit ducimus molestiae at! Officiis cum dicta voluptate, ab possimus voluptatum voluptatibus at similique aut doloribus
                    unde iure vel nihil eligendi ea maiores.</p>
            </div>
            <div class="free-trial" id="freeTrial">
                <a href="?c=0" class="btn">Try A Free Trial First</a>
            </div>
            <div class="achieve section">
                <h3>What You Will Learn</h3>
                <ul class="learn-li">
                    <!-- <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
                </ul>
                <div class="lang-other section">
                    <p>Languages: <span id="languages">HTML5, CSS3, Javascript, ReactJS, NodeJS, SQL.</span></p>
                    <p>Prequisites: <span id="prequisites"></span></p>
                    <p>Other: <span id="other">Git, Command Line, API Keys.</span></p>
                </div>
                <div class="prices" id="options">
                    <h3>Lesson Options</h3>
                    <div class="timeOptions" id="timeOptions">
                        <div class="time priceBox">
                            <p class="price">$10</p>
                            <p>30 minute lessons</p>
                        </div>
                        <div class="time priceBox">
                            <p class="price">$12</p>
                            <p>45 minute lessons</p>
                        </div>
                        <div class="time priceBox">
                            <p class="price">$15</p>
                            <p>1 hour lessons</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-now section"><a class="btn" href="../contact">Book Now</a></div>
            <p>Please contact us to book courses using the Book Now button or the Live Chat on the bottom right corner. Thank You, we look forward to working with you. Happy Coding!</p>
        </div>
    </main>
    <?php 
        require_once '../sections/footer.php';
    ?>

    <!-- ++++++++++++++++++++++++++ JS +++++++++++++++++++++ -->
    <script src="../js/courses.js"></script>
    <script src="../js/redirected.js"></script>
</body>

</html>