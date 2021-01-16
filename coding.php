<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding | INKO2</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <?php 
        require_once 'sections/header-other.php';
    ?>
    <div class="testimonials">
        <h1>Courses</h1>
        <div class="border"></div>
    </div>
    <div class="courses-body">
        <div class="courses-cont">
            <div onclick="location.href='courses/course?c=0'" class="card">
                <div class="imgBx">
                    <img src="images/bg.jpg">
                </div>
                <div class="course-content">
                    <h2>Trial Lesson</h2>
                    <p>If you are interested in coding but not sure what type of coding then take this lesson. In this lesson we will explore what you could do with coding...
                    </p>
                </div>
            </div>
            <div onclick="location.href='courses/course?c=1'" class="card">
                <div class="imgBx">
                    <img src="images/bg.jpg">
                </div>
                <div class="course-content">
                    <h2>HTML Course</h2>
                    <p>In this course you will learn one of the easiest and needed coding languages for all websites: HTML. Most websites use it, from google to safari...

                    </p>
                </div>
            </div>
            <div onclick="location.href='courses/course?c=2'" class="card">
                <div class="imgBx">
                    <img src="images/bg.jpg">
                </div>
                <div class="course-content">
                    <h2>CSS Course</h2>
                    <p>In this course you will learn the most used styling language: CSS. CSS is what most websites use and if they don’t they use a version of CSS. CSS is...
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-cont">
        <a class="btn" href="courses/all">All Courses</a>
        <br><br>
    </div>
    <div class="featured-image">
        <img src="https://udemycoupons.me/wp-content/uploads/2020/10/100-OFF-Web-Development-Course-with-PHP-PDO-MySQL.jpg">
        <div class="fea-sec">
            <h2>Featured Course</h2>
            <p>Learn how to be a top tier developer by taking our <a href="courses/course?c=6">Web Development</a> course. It includes everything you need to know to build an interactive and responsive website. In this course you will learn how to code in
                HTML, CSS, and JavaScript, you will also learn how to use git and to operate the terminal.</div>
    </div>
    <div class="featured-image">
        <div class="fea-sec">
            <h2>Why Us??</h2>
            <p>We create websites and teach coding classes at our customers’ pace. We will walk you through the basics and in the end, you will be efficient in coding or website management. Guess what? You won’t be charged unless you like the website or
                the coding class. We have created websites for people in all fields, from restaurants to schools. Hurry up and be part of the INKO2 family. STOP. GO INKO!
            </p>
        </div>
        <img src="images/bg.jpg">
    </div>
<?php 
    require_once 'sections/footer.php';
?>
</html>