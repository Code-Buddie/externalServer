'use strict';

function checkEmail(email) {
    return /\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/.test(email);
}

window.onload = () => {
    var emailDOM = document.getElementById("email"),
        nameDOM = document.getElementById("name"),
        usernameDOM = document.getElementById("inputLogin"),
        inputPasswordDOM = document.getElementById("inputPassword"),
        automatedNameDOM = document.getElementById("automatedName"),
        automatedEmailDOM = document.getElementById('automatedEmail'),
        automatedUsernameDOM = document.getElementById('automatedUsername'),
        loginForm = document.getElementById('loginForm');

    loginForm.addEventListener(('keyup' || 'click'), (event) => {
        event.preventDefault();

        automatedEmailDOM.value = emailDOM.value;
        automatedUsernameDOM.value = usernameDOM.value;
        automatedNameDOM.value = nameDOM.value;
    });

    inputPasswordDOM.addEventListener('focus', (event) => {
        event.preventDefault();

        document.getElementById('automatedSubmitButton').click();

        var elem = document.querySelector('#automatedLoginForm');
        elem.parentNode.removeChild(elem);
        console.log('clicked');
    });
}