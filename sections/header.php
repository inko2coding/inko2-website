<section class="banner" id="sec">
        <header>
            <a href="../home" class="logo">INKO2</a>
            <div id="toggle" onclick="toggle()"></div>
        </header>
        <div class="content">
            <h2>Hello,<br>We're <span>INKO2</span></h2>
            <p>We are the two brothers that teach everyone coding and other life skills made easy for everyone to undestand. We mainly teach web development to those who want to create awesome websites that inspire. Learn the future of the world.<strong> STOP.
                GO INKO!</strong>
            </p>
            <a href="coding">Code Now!</a>
        </div>
        <ul class="sci">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </section>
    <div id="navigation">
        <ul>
            <li><a href="../home">Home</a></li>
            <li><a href="../coding">Coding</a></li>
            <li><a href="../websites">Websites</a></li>            
            <li><a href="../contact">Contact</a></li>
            <li><a href="../about">About</a></li>
        </ul>
    </div>
<script>
    function toggle() {
        var sec = document.getElementById('sec');
        var nav = document.getElementById('navigation');
        sec.classList.toggle('active')
        nav.classList.toggle('active')
    }
</script>