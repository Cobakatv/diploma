
const signInBtn = document.querySelector('.signin-btn');
const signUnBtn = document.querySelector('.signup-btn');
const formBox = document.querySelector('.form-box');
const body = document.body;

signInBtn.addEventListener('click', function () {
    formBox.classList.remove('active');
    body.classList.remove('active');
});
signUnBtn.addEventListener('click', function () {
    formBox.classList.add('active');
    body.classList.add('active');
});


// // registration


let registerUserPassword = document.querySelector(".registerUserPassword");
let repeatregisterUserPassword = document.querySelector(".repeatregisterUserPassword");

//     registerUserPassword.oninput = function() {
//         this.value = this.value.substr(0, 8);
// }
//     repeatregisterUserPassword.oninput = function() {
//     this.value = this.value.substr(0, 8);
// }


// registration
const formRegistration = document.forms["registration"];
const formArr = Array.from(registration);
const validFormArr = [];
const button = registration.elements["button"];

formArr.forEach((el) => {
    if (el.hasAttribute("data-reg")) {
        el.setAttribute("is-valid", "0");
        validFormArr.push(el);
    }
})
formRegistration.addEventListener("input", inputHandler);
button.addEventListener("click", buttonHandler);


function inputHandler({target}) {
    if (target.hasAttribute("data-reg")) {
        inputCheck(target);
    }
}
function inputCheck(el) {
    const inputValue = el.value;
    const inputReg = el.getAttribute("data-reg");
    const reg = new RegExp(inputReg);
    if (reg.test(inputValue)) {
        el.style.border = "2px solid rgb(0, 196, 0)";
        el.setAttribute("is-valid", "1");
    } else {
        el.style.border = "2px solid rgb(255, 0, 0)";
        el.setAttribute("is-valid", "0");
    }
}

function buttonHandler(e) {
  const allValid = [];
  validFormArr.forEach((el) => {
    allValid.push(el.getAttribute("is-valid"));
  });
  const isAllValid = allValid.reduce((acc, current) => {
    return acc && current;
  });
 
  if (!Boolean(Number(isAllValid))) {
    e.preventDefault();
  }
}




