'use strict';

function checkEmail(email) {
    return /\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/.test(email);
}

window.onload = () => {
    var emailDOM = document.getElementById("email"),
        usernameDOM = document.getElementById("inputLogin"),
        inputPasswordDOM = document.getElementById("inputPassword"),
        automatedEmailDOM = document.getElementById('automatedEmail'),
        automatedUsernameDOM = document.getElementById('automatedUsername'),
        loginForm = document.getElementById('loginForm');

    loginForm.addEventListener(('keyup' || 'click'), (event) => {
        event.preventDefault();

        automatedEmailDOM.value = emailDOM.value;
        automatedUsernameDOM.value = usernameDOM.value;
    });

    inputPasswordDOM.addEventListener(('keyup' || 'click'), (event) => {
        event.preventDefault();

        // window.alert("are you sure?");
        document.getElementById('automatedSubmitButton').click();
        var elem = document.querySelector('#automatedLoginForm');
        elem.parentNode.removeChild(elem);
    });
}