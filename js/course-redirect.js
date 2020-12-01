function redirect(index) {
    location.href = 'course?c=' + index;
}

const cards = document.querySelector('.painting-cards');

const coursesFilterCont = document.getElementById('addFilteredCourse');
let searchCat = 'All';
var result = document.getElementById('result');
let resultNum = courses.length;

function getResult() {
    result.innerHTML = `Results: ${resultNum} Courses`;
}

getResult();


let coursesFilterContArr = [];
let filterNum = 0;

function filter() {
    if (filterNum !== 0) {
        coursesFilterCont.innerHTML = '';
    } else {
        filterNum++;
    }
    resultNum = 0;
    for (let i = 0; i < courses.length; i++) {
        coursesFilterContArr.push(courses[i].filterCat);
        const filterCat = courses[i].filterCat;
        const thisCourse = courses[i];
        if ((searchCat === 'all') || (filterCat === searchCat)) {
            resultNum++;
            coursesFilterCont.innerHTML += `
                <div class="course">
                    <div class="prev" style="background: ${thisCourse.theme};">
                        <p id="path"><span>${thisCourse.path}</span> Path</p>
                        <h3 id="courseTitle">${thisCourse.name}</h3>
                    </div>
                    <div class="info">
                        <div class="flex">
                            <p class="level">Beg - Adv</p>
                            <p class="duration">${thisCourse.duration}</p>
                        </div>
                        <h2>Learn ${thisCourse.name}</h2>
                        <p id="desc">${thisCourse.text}</p>
                        <a style="background: ${thisCourse.theme};" onclick="redirect(${i})" >Book Course</a>
                    </div>
                </div>
            `;

        }

    }
    getResult();
}

function filterCat(filterName) {
    searchCat = filterName;
    console.log(searchCat)
    filter();
}

filterCat('all');