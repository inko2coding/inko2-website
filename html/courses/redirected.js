var url = new URLSearchParams(window.location.search);
var i = url.get('c');

var courseName = courses[i].name;
var title = courseName + ' | INKO2 Inc.';
var description = courses[i].actText;
var themeColor = courses[i].theme;
var languages = courses[i].languages;
var otherApps = courses[i].otherApps;
var path = courses[i].path;
var duration = courses[i].duration;

const freeTrial = document.getElementById('freeTrial');
if (i == 0) {
    freeTrial.style.display = 'none';
}

document.title = title;
document.getElementById('course-name').innerHTML = courseName;
document.getElementById('description').innerHTML = description;
document.querySelector('section').style.background = themeColor;
document.getElementById('languages').innerHTML = languages;
document.getElementById('other').innerHTML = otherApps;
for (let j = 0; j < courses[i].learn.length; j++) {
    document.querySelector('.learn-li').innerHTML += `
        <li><i class="fas fa-check"></i>&nbsp;${courses[i].learn[j]}</li>
    `;

}

if (path == 'Career') {
    document.getElementById('path').innerHTML = '<i class="fas fa-trophy"></i>Career Path';
} else {
    document.getElementById('path').innerHTML = '<i class="fas fa-medal"></i>Skill Path';
}
document.getElementById('duration-time').innerHTML = duration;