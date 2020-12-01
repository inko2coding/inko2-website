function redirect(index) {
    document.getElementById('course-' + index).onclick = function() {
        location.href = 'index.html?c=' + index;
    }
}

// for (let i = 0; i < courses.length; i++) {
//     document.querySelector('.courses-cont').innerHTML += `
//         <div onmouseover="redirect(${i})" id="course-${i}" class="card">
//             <div class="imgBx">
//                 <img src="${courses[i].image}">
//             </div>
//             <div class="course-content">
//                 <h2>${courses[i].name}</h2>
//                 <p>${courses[i].text}</p>
//             </div>
//         </div>
//     `;
// }