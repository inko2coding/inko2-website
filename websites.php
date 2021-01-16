<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites | INKO2</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body id="body_tag">
    <?php
        require_once 'sections/header-other.php';
    ?>
    <h1 style="text-align: center; margin-top: 30px;">Our Work</h1>
    <div class="border"></div>
    <div class="showcase-web">

    </div>
    <!-- <h1 style="text-align: center; margin-top: 30px;">Website Themes</h1>
    <div class="border"></div>
    <div class="web-iframe">

    </div> -->
    <?php 
        require_once 'sections/footer.php';
    ?>
    <script>
    const themeSpace = document.querySelector('.web-iframe');
    const showSpace = document.querySelector('.showcase-web');
    var webs = [{
        url: 'http://wlats.inko2.com/home.html',
        reurl: 'http://wlats.inko2.com/index.html',
        name: 'West Los Angeles Tamil School',
    }, {
        url: 'https://www.colorsinbloomdesign.com/index2.html',
        reurl: 'https://www.colorsinbloomdesign.com/index.html',
        name: 'Colors In Bloom Design',
    }, {
        url: 'http://gsmusic.inko2.com/index.html?i=1',
        reurl: 'http://gsmusic.inko2.com/',
        name: 'GS Music',
    }]

    // var themes = [{
    //     url: 'http://inko2.com',
    //     name: 'code',
    // }, {
    //     url: 'http://inko2.com',
    //     name: 'code',
    // }, {
    //     url: 'http://inko2.com',
    //     name: 'code',
    // }, {
    //     url: 'http://inko2.com',
    //     name: 'code',
    // }]



    for (let i = 0; i < webs.length; i++) {
        showSpace.innerHTML += `
            <div class="iframe-show"  >
                <h3 class="title">${webs[i].name}</h3>
                <iframe width="450px" scrolling="no" height="380px" src="${webs[i].url}" ></iframe>
                <a target="_blank" class="show-btn" href="${webs[i].reurl}">Veiw Website</a>
            </div>
        `;

    }

    // for (let i = 0; i < themes.length; i++) {
    //     themeSpace.innerHTML += `
    //         <div class="iframe-theme" >
    //             <h3 class="title">${themes[i].name}</h3>
    //             <a target="_blank" href="${themes[i].url}"><iframe width="450px" scrolling="no" height="380px" src="${themes[i].url}" frameborder="1"></iframe></a>
    //             <a target="_blank" class="demo-btn" href="${themes[i].url}">Veiw Website</a>
    //         </div>
    //     `;

    // }
</script>

</html>