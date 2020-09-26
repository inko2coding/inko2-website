const name = document.getElementById('name');
const password = document.getElementById('password');
const logInForm = document.getElementById('log-in-form');
const nameError = document.getElementById('m-error');
const passwordError = document.getElementById('p-error');
const submitBtn = document.getElementById('log-in-btn');
const usernameName = 'INKO2';
const passwordName = 'inko2@0428';

logInForm.addEventListener('submit', (e) => {
    let errorMessages = [];
    let errorMessagesP = [];
    if (name.value !== usernameName) {
        errorMessages.push('Please enter a valid username');
    }

    if (name.value === usernameName) {
        errorMessages = [];
    }

    if (errorMessages.length > 0) {
        e.preventDefault();
        nameError.innerText = errorMessages.join(', ');
        name.style.border = '1px solid red';
    } else {
        name.style.border = '1px solid #000';
        nameError.innerText = '';
    }

    if (password.value !== passwordName) {
        errorMessagesP.push('Please enter a valid password');
    }

    if (password.value === passwordName) {
        errorMessagesP = [];
    }

    if (errorMessagesP.length > 0) {
        e.preventDefault();
        passwordError.innerText = errorMessagesP.join(', ');
        password.style.border = '1px solid red';
    } else {
        password.style.border = '1px solid #000';
        passwordError.innerText = '';
    }

})