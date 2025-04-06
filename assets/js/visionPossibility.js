const button1 = document.querySelector('#button-1');
const button2 = document.querySelector('#button-2');
const button3 = document.querySelector('#button-3');
const button4 = document.querySelector('#button-4');
const button5 = document.querySelector('#button-5');
const button6 = document.querySelector('#button-6');
const button7 = document.querySelector('#button-7');
const button8 = document.querySelector('#button-8');
const button9 = document.querySelector('#button-9');
const button10 = document.querySelector('#button-10');
const button11 = document.querySelector('#button-11');
const button12 = document.querySelector('#button-12');
const button13 = document.querySelector('#button-13');
const button14 = document.querySelector('#button-14');
const button15 = document.querySelector('#button-15');
const button16 = document.querySelector('#button-16');
const button17 = document.querySelector('#button-17');
const button18 = document.querySelector('#button-18');
const button19 = document.querySelector('#button-19');

const buttonBefore = document.querySelector('#button-before');
const buttonBefore2 = document.querySelector('#button-before2');
const buttonBefore3 = document.querySelector('#button-before3');
const buttonBefore4 = document.querySelector('#button-before4');
const buttonBefore5 = document.querySelector('#button-before5');

const indicator = document.querySelectorAll('.indicator');

let step = 1;

function handleSubmit(event) {  
  let stepClass = `.step-${step}`;
  let stepElm = document.querySelector(stepClass);
  stepElm.classList.remove('visible__no-animation');
  indicator[step-1].classList.remove('active');
  stepElm.classList.add('slide-out');
  setTimeout(() => {
    step += 1;
    if (step > 20) {
      step = 20;
    }
      indicator[step-1].classList.add('active');
      stepClass = `.step-${step}`;
     stepElm = document.querySelector(stepClass);
    stepElm.classList.remove('slide-out');
    stepElm.classList.add('slide-in');
  },100)
}

button1.addEventListener('click', handleSubmit);
button2.addEventListener('click', handleSubmit);
button3.addEventListener('click', handleSubmit);
button4.addEventListener('click', handleSubmit);
button5.addEventListener('click', handleSubmit);
button6.addEventListener('click', handleSubmit);
button7.addEventListener('click', handleSubmit);
button8.addEventListener('click', handleSubmit);
button9.addEventListener('click', handleSubmit);
button10.addEventListener('click', handleSubmit);
button11.addEventListener('click', handleSubmit);
button12.addEventListener('click', handleSubmit);
button13.addEventListener('click', handleSubmit);
button14.addEventListener('click', handleSubmit);
button15.addEventListener('click', handleSubmit);
button16.addEventListener('click', handleSubmit);
button17.addEventListener('click', handleSubmit);
button18.addEventListener('click', handleSubmit);
button19.addEventListener('click', handleSubmit);

buttonBefore.addEventListener('click', handleSubmit);
buttonBefore2.addEventListener('click', handleSubmit);
buttonBefore3.addEventListener('click', handleSubmit);
buttonBefore4.addEventListener('click', handleSubmit);
buttonBefore5.addEventListener('click', handleSubmit);

//////////////////////////////////////////////////////////////

let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");
let span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}