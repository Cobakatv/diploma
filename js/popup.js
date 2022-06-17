const formPoputs = document.forms["poputs"];
const formArr = Array.from(poputs);
const validFormArr = [];
const popupBtn = poputs.elements["popup-btn"];
formArr.forEach((el) => {
    if (el.hasAttribute("patterng")) {
        el.setAttribute("is-valid", "0");
        validFormArr.push(el);
    }
})
formPoputs.addEventListener("input", inputPoputs);
popupBtn.addEventListener('click', popupHandler);
// popupBtn.addEventListener("click", popupHandler);


function inputPoputs({target}) {
    if (target.hasAttribute("pattern")) {
        inputCheck(target);
    }
}
function inputCheck(el) {
    const inputValue = el.value;
    const inputReg = el.getAttribute("pattern");
    const reg = new RegExp(inputReg);
    if (reg.test(inputValue)) {
        el.style.border = "2px solid rgb(0, 196, 0)";
        el.setAttribute("is-valid", "1");

    } else {
        el.style.border = "2px solid rgb(255, 0, 0)";
        el.setAttribute("is-valid", "0");

    }
}
function popupHandler(e) {

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