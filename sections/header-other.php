<section class="banner-other" id="sec">
    <header>
        <a href="../home" class="logo">INKO2</a>
        <h2 id="page-name" ></h2>
        <div id="toggle" onclick="toggle()"></div>
    </header>
</section>
<div id="navigation-other">
    <ul>
        <li><a href="../home">Home</a></li>
        <li><a href="../coding">Coding</a></li>
        <li><a href="../websites">Websites</a></li>
        <li><a href="../contact">Contact</a></li>
        <li><a href="../about">About</a></li>
    </ul>
</div>
<script type="text/javascript">
    function toggle() {
        var sec = document.getElementById('sec');
        var nav = document.getElementById('navigation-other');
        sec.classList.toggle('active')
        nav.classList.toggle('active')
    }

    // getting the page name

    function createPageName() {
        var title = document.title;
        var titleArr = title.split(' | ');
        var pageName = titleArr[0];
        return pageName;
    } 

    document.getElementById('page-name').innerText = createPageName();
</script>