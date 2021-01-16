<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | INKO2</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <meta name="keywords" content="INKO, INKO2, inko, inko2, inko2.com, inkotwo, inko two, coding, lessons, classes, websites, web development">
    <meta name="description" content="We are the two brothers that teach everyone coding and other life skills made easy for everyone to undestand. Learn the future of the world. We also create websites for those who want to establish their business. STOP. GO INKO!">
</head>

<body>
    <?php 
        require_once 'sections/header.php';
    ?>
    <?php 
        require_once 'sections/testimonials.php';
    ?>
    <!-- <div class="testimonial-nav">
        <h1 class="active" id="test-pg-one">.</h1>
        <h1 id="test-pg-two">.</h1>
        <h1 id="test-pg-three">.</h1>
    </div> -->
    <div class="testimonials">
        <h1>Best Selling Course</h1>
        <div class="border"></div>
    </div>
    <style>
        /* for scroll effects for the featured image */
        
        .featured-image .fea-sec {
            opacity: 0;
            transform: translateX(-1000px);
            transition: 1s ease;
        }
        
        .featured-image img {
            opacity: 0;
            transform: translateX(1000px);
            transition: 1s ease;
        }
        
        .intro-txt-appear {
            opacity: 1 !important;
            transform: translateX(0px) !important;
            transition: 2s ease;
        }
    </style>
    <div class="featured-image">
        <img class="appear-img" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/lJAPkWPDTk4QwHMTAoyn">
        <div class="fea-sec">
            <h2>Web Development Course</h2>
            <p>Our best selling and most demanded course is our <a href="courses/course?c=6">Web Development</a> course. The course includes everything you need to know to build an interactive and responsive website. In this course you will learn how to
                code in HTML, CSS, and JavaScript, you will also learn how to operate git and you will learn the things you need to about a terminal.</p>
        </div>
    </div>
    <div class="second-banner">
        <img src="images/bg.jpg">
    </div>
    <div class="deals">
        <div class="testimonials">
            <h1 class="deal-header">Deals and Offers</h1>
            <div class="border"></div>
        </div>
        <div class="deal-row">
            <div class="deal">
                <h3>2 Person Deal</h3>
                <p>Thinking about having two people join the INKO2 classes, then this is the time because if you do the second person will get a 10% off on all their classes!</p>
                <a href="#">Go to courses --></a>
            </div>
            <div class="deal">
                <h3>3 Person Deal</h3>
                <p>Thinking about having three people join the INKO2 classes, then this is the time because if you do the second and third person will get a 20% off on all their classes!</p>
                <a href="#">Go to courses --></a>
            </div>
            <div class="deal">
                <h3>4 Person Deal</h3>
                <p>Thinking about having four people join the INKO2 classes, then this is the time because if you do the second, third and fourth person will get a 35% off on all their classes!</p>
                <a href="#">Go to courses --></a>
            </div>
        </div>
    </div>
    <?php 
        require_once 'sections/footer.php';
    ?>
    <script type="text/javascript">

        // Scroll Appear Effects

        function scrollAppearTxt() {
            var txt = document.querySelector('.fea-sec');
            var introPosition = txt.getBoundingClientRect().top;
            var screenPosition = window.innerHeight / 1.5;

            if (introPosition < screenPosition) {
                txt.classList.add('intro-txt-appear');
            }
        }

        function scrollAppearImg() {
            var txt = document.querySelector('.appear-img');
            var introPosition = txt.getBoundingClientRect().top;
            var screenPosition = window.innerHeight / 1.5;

            if (introPosition < screenPosition) {
                txt.classList.add('intro-txt-appear');
            }
        }

        window.addEventListener('scroll', scrollAppearTxt);
        window.addEventListener('scroll', scrollAppearImg);
    </script>
    
</body>

</html>