/**const signInBtn = document.querySelector('.signin-btn');
const signUnBtn = document.querySelector('.signup-btn');
const formBox = document.querySelector('.form-box');
const body = document.body;**/

signInBtn.addEventListener('click', function () {
    formBox.classList.remove('active');
    body.classList.remove('active');
});
signUnBtn.addEventListener('click', function () {
    formBox.classList.add('active');
    body.classList.add('active');
});