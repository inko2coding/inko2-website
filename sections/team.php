<div id="our-team" class="our-team">
    <div class="testimonials">
        <h1>Our Team</h1>
        <div class="border"></div>
    </div>
    <div class="team-cont">
        
    </div>
</div>
<div class="team-bio">

</div>
<script src="../js/team.js"></script>
<script>
    if (team.length <= 3) {
        var teamLen = team.length;
    } else {
        var teamLen = 3;
    }

    function insertBtnAll() {
        if (teamLen = 3) {
            return '<div class="btn-cont" style="margin-top: 20px;"><a class="btn" href="../about/team">All Testimonials</a><br><br></div>'
        }
    }
    // iterate the team cards
    for (let t = 0; t < teamLen; t++) {
        var member = team[t];
        document.querySelector('.team-cont').innerHTML += `
        <div onclick="openBio(${t})" class="team-card">
            <div class="img">
                <div class="overlay">
                    <p>Read Bio</p>
                </div>
                <img src="../images/${member.img}" alt="${member.name}">
            </div>
            <h3>${member.name}</h3>
            <p>${member.position}</p>
        </div>
        `;

        document.querySelector('.team-bio').innerHTML += `
            <div class="main" id="member-${t}">
                <div class="sticky-close">
                    <i class="fas fa-times team-close" id="close-${t}" onclick="closeCard(${t})"></i>
                </div>
                <div class="body">
                    <div class="flex">
                        <div class="img"><img src="../images/${member.img}" alt="${member.name}"></div>
                        <div class="info">
                            <h3>${member.name}</h3>
                            <p>${member.position}</p>
                        </div>
                    </div>
                    <div class="bio">
                        <p>${member.description}</p>
                    </div>
                    <div class="stick-bottom">
                        <p>The INKO2 Team</p>
                    </div>
                </div>
            </div>
        `;
    }
    function closeCard(index) {
        var card = document.getElementById('member-' + index);
        card.style.display = 'none';
        document.body.style.overflow = 'initial';
        document.querySelector('.team-bio').style.display = 'none';
    }

    function openBio(index) {
        document.getElementById('member-' + index).style.display = 'initial';
        document.querySelector('.team-bio').style.display = 'flex';
        document.body.style.overflow = 'hidden';
        teamClickInit(index);
    }

    function teamClickInit(index) {
        document.querySelector('.team-bio').onclick = function() {
            closeCard(index);
        }
    }
</script>