const button1 = document.querySelector('#button-1');
const button2 = document.querySelector('#button-2');
const button3 = document.querySelector('#button-3');
const button4 = document.querySelector('#button-4');
const button5 = document.querySelector('#button-5');
const button6 = document.querySelector('#button-6');
const button7 = document.querySelector('#button-7');
const button8 = document.querySelector('#button-8');
const button9 = document.querySelector('#button-9');

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
    if (step > 9) {
      step = 9;
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
button1.addEventListener('click', ()=>{
  let title = document.querySelector(".categoryName");
  title.classList.remove("show");
  title.classList.add("show-none");
});

const buttonBefore = document.querySelector('#button-before');
const buttonBefore2 = document.querySelector('#button-before2');

buttonBefore.addEventListener('click', ()=>{
  let title = document.querySelector(".categoryName");
  title.classList.add("show");
  title.classList.remove("show-none");
});
function handleSubmit2(event) {  
  let stepClass = `.step-${step}`;
  let stepElm = document.querySelector(stepClass);
  stepElm.classList.remove('visible__no-animation');
  indicator[step-1].classList.remove('active');
  stepElm.classList.remove('slide-in');
  stepElm.classList.add('slide-out');
  setTimeout(() => {
    step -= 1;
    if (step < 1) {
      step = 1;
    }
    indicator[step-1].classList.add('active');
    stepClass = `.step-${step}`;
    stepElm = document.querySelector(stepClass);
    stepElm.classList.remove('slide-out');
    stepElm.classList.add('slide-in');
  },100)
}

buttonBefore.addEventListener('click', handleSubmit2);
buttonBefore2.addEventListener('click', handleSubmit2);

//////////////////////////////////////////////////////////////

const coinInput = document.getElementById('coin');
const imgElement = document.querySelector('#img img');

// Set initial image size
updateImageSize(coinInput.value);

// Update image size when slider changes
coinInput.addEventListener('input', function() {
  updateImageSize(this.value);
});

function updateImageSize(value) {
  // Scale image size between 20px and 40px based on slider value
  const size = 20 + (value - 1) * (40 - 20) / 9;
  imgElement.style.width = `${size}px`;
  imgElement.style.height = `${size}px`;
}
