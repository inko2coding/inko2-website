<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | INKO2</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body id="body_tag">
    <?php 
        require_once '../sections/header-other.php';
    ?>
    <div class="testimonials">
        <h1>INKO2</h1>
        <div class="border"></div>
    </div>
    <div class="icon-nav-cont">
        <div id="icon-one">
            <a href="#our-team"><i class="fas fa-abt fa-users"></i><p class="abt-nav-icon-txt">Our Team</p></a>
        </div>
        <div id="icon-two">
            <a href="#founded"><i class='fas fa-globe'></i><p class="abt-nav-icon-txt">Founded</p></a>
        </div>
        <div id="icon-three">
            <a href="#testimonials"><i class="fas fa-abt fa-quote-left"></i><p class="abt-nav-icon-txt">Reviews</p></a>
        </div>
    </div>
    <div class="about-cont">
        <div class="text-abt-cont">
            <div class="intro-text" id="founded">
                <h2>We are <b class="ora-txt">experienced</b> web developers that help our clients with our <b class="gre-txt">first priority</b>.</h2>
                <!-- <h3 class="names inesh"><b class="inko2-letters">In</b>esh</h3>
                <h3 class="names"><b class="inko2-letters">Ko</b>shik</h3> -->
            </div>
        </div>
        <div class="featured-image abt-txt-img">
            <img src="../images/bg.jpg">
            <div class="fea-sec">
                <h2>Established In...</h2>
                <p>INKO2 was established in March 2020, during COVID-19. When COVID started we wanted to learn coding so we started learning and we became proficient in coding. Then we started teaching others because we wanted to teach others. We then found
                    interest in baking and cooking and then we started a bake sale. Then we thought why not combine the two and start a company. Then we started making websites for others. Thus we created INKO2. STOP. GO INKO2.
                </p>
            </div>
        </div>
        <div class="featured-image featured-image1">
            <div class="fea-sec fea-sec1">
                <h2>INKO2??</h2>
                <p>Where did the name <b class="blu-txt">INKO2</b> come from? Good Question. Both Co-founders <b class="ora-txt">Koshik</b> and <b class="ora-txt">Inesh</b> wanted their company name to be something unique, but yet something that represented
                    the two of them. Therefor they chose <b class="blu-txt">IN</b> for Inesh, and <b class="blu-txt">KO</b> for Koshik. The <b class="blu-txt">2</b> comes from 2 brothers together, joining their forces. Isn't that cool? Well that's the
                    origin behind INKO2. <b class="blu-txt">STOP. GO INKO2!</b> </p>
            </div>
            <img class="img1" src="../images/bg.jpg">
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
        <?php 
            require_once '../sections/testimonials.php';
        ?>

    </div>
    <?php 
        require_once '../sections/team.php';
    ?>
    <?php 
        require_once '../sections/footer.php';
    ?>
</body>
<script type="text/javascript">

    function scrollAppear() {
        var introText = document.querySelector('.intro-text');
        var introPosition = introText.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.3;

        if (introPosition < screenPosition) {
            introText.classList.add('intro-appear');
        }
    }

    function scrollAppearTxt() {
        var txt = document.querySelector('.fea-sec');
        var introPosition = txt.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.5;

        if (introPosition < screenPosition) {
            txt.classList.add('intro-txt-appear');
        }
    }

    function scrollAppearImg() {
        var txt = document.querySelector('img');
        var introPosition = txt.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.5;

        if (introPosition < screenPosition) {
            txt.classList.add('intro-txt-appear');
        }
    }

    function scrollAppearTxt1() {
        var txt = document.querySelector('.fea-sec1');
        var introPosition = txt.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.5;

        if (introPosition < screenPosition) {
            txt.classList.add('intro-txt-appear');
        }
    }

    function scrollAppearImg1() {
        var txt = document.querySelector('.img1');
        var introPosition = txt.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.5;

        if (introPosition < screenPosition) {
            txt.classList.add('intro-txt-appear');
        }
    }

    window.addEventListener('scroll', scrollAppear);
    window.addEventListener('scroll', scrollAppearTxt);
    window.addEventListener('scroll', scrollAppearTxt1);
    window.addEventListener('scroll', scrollAppearImg);
    window.addEventListener('scroll', scrollAppearImg1);

    // Testimonials Javascript

    // const pageOne = document.getElementById('test-one');
    // const pageTwo = document.getElementById('test-two');
    // const pageThree = document.getElementById('test-three');
    // const navPageOne = document.getElementById('test-pg-one');
    // const navPageTwo = document.getElementById('test-pg-two');
    // const navPageThree = document.getElementById('test-pg-three');

    // navPageOne.onclick = function() {
    //     pageOne.style.display = 'flex';
    //     pageTwo.style.display = 'none';
    //     pageThree.style.display = 'none';
    //     navPageOne.classList.add('active');
    //     navPageTwo.classList.remove('active');
    //     navPageThree.classList.remove('active');
    // }

    // navPageTwo.onclick = function() {
    //     pageTwo.style.display = 'flex';
    //     pageOne.style.display = 'none';
    //     pageThree.style.display = 'none';
    //     navPageTwo.classList.add('active');
    //     navPageOne.classList.remove('active');
    //     navPageThree.classList.remove('active');
    // }

    // navPageThree.onclick = function() {
    //     pageThree.style.display = 'flex';
    //     pageOne.style.display = 'none';
    //     pageTwo.style.display = 'none';
    //     navPageThree.classList.add('active');
    //     navPageOne.classList.remove('active');
    //     navPageTwo.classList.remove('active');
    // }

    // Review Page Transitions

    const iconThree = document.getElementById('icon-three');

    iconThree.onclick = function() {
        document.getElementById('body_tag').style.transform = 'traslateY(1000px)';
    }

    
</script>

</html>