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

let age = 0;
let shiryukuRight = 0.0;
let shiryukuLeft = 0.0;
let nearsightedRight;
let nearsightedLeft;
let astigmatismRight;
let astigmatismLeft;
let begin;
let confirmed;
let causing;
let checkedValues;
let squinting;
let glasses;
let temperament;
let deteriorate;
let parents;
let parentsMyopia;
let refraction;
let refractiveRight;
let refractiveLeft;
let AstigmatismRight;
let AstigmatismLeft;
let CorrectedRight;
let CorrectedLeft;
let fullName;
let emailAdress;

function toStep2(){
  age = document.getElementById('year').value;
  if(age > 0 && age < 120)handleSubmit();
  else showToast("正確に入力してください！", "error");
}
function toStep3(){
  shiryukuRight = document.getElementById('shiryuku-right').value;
  shiryukuLeft = document.getElementById('shiryuku-left').value;
  if(shiryukuRight > 0 && shiryukuRight <= 2.0 && shiryukuLeft>0 && shiryukuLeft<= 2.0) handleSubmit();
  else showToast("正確に入力してください！", "error");
}
function toStep4(){
  nearsightedRight = $("input[name='nearsightedRight']:checked").val();
  if(nearsightedRight){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep5(){
  nearsightedLeft = $("input[name='nearsightedLeft']:checked").val();
  if(nearsightedLeft){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep6(){
  astigmatismRight = $("input[name='astigmatismRight']:checked").val();
  if(astigmatismRight){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep7(){
  astigmatismLeft = $("input[name='astigmatismLeft']:checked").val();
  if(astigmatismLeft){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep8(){
  begin = $("input[name='begin']:checked").val();
  if(begin){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep9(){
  confirmed = $("input[name='confirmed']:checked").val();
  if(confirmed){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep10(){
  causing = $("input[name='causing']:checked").val();
  if(causing){
    checkedValues = getCheckedCheckboxesValues('causing');
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function getCheckedCheckboxesValues(checkboxName) {
  const checkboxes = document.querySelectorAll(`input[name="${checkboxName}"]:checked`);
  const values = Array.from(checkboxes).map(checkbox => checkbox.value);
  return values;
}
function toStep11(){
  squinting = $("input[name='squinting']:checked").val();
  if(squinting){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep12(){
  glasses = $("input[name='glasses']:checked").val();
  if(glasses){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep13(){
  temperament = $("input[name='temperament']:checked").val();
  if(temperament){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep14(){
  deteriorate = $("input[name='deteriorate']:checked").val();
  if(deteriorate){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep15(){
  parents = $("input[name='parents']:checked").val();
  if(parents){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep16(){
  parentsMyopia = $("input[name='parentsMyopia']:checked").val();
  if(parentsMyopia){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep17(){
  refraction = $("input[name='refraction']:checked").val();
  if(refraction){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep18(){
  refractiveRight = $("#refractiveRight").val();
  refractiveLeft = $("#RefractiveLeft").val();
  AstigmatismRight = $("#AstigmatismRight").val();
  AstigmatismLeft = $("#AstigmatismLeft").val();
  CorrectedRight = $("#CorrectedRight").val();
  CorrectedLeft = $("#CorrectedLeft").val();
  if(refractiveRight && refractiveLeft && AstigmatismRight && AstigmatismLeft && CorrectedRight && CorrectedLeft){
    console.log(refractiveRight);
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}
function toStep19(){
  fullName = document.getElementById('fullName').value;
  if(fullName){
    handleSubmit();
  }else{
    showToast("正確に入力してください！", "error");
  }
}

button1.addEventListener('click', toStep2);
button2.addEventListener('click', toStep3);
button3.addEventListener('click', toStep4);
button4.addEventListener('click', toStep5);
button5.addEventListener('click', toStep6);
button6.addEventListener('click', toStep7);
button7.addEventListener('click', toStep8);
button8.addEventListener('click', toStep9);
button9.addEventListener('click', toStep10);
button10.addEventListener('click', toStep11);
button11.addEventListener('click', toStep12);
button12.addEventListener('click', toStep13);
button13.addEventListener('click', toStep14);
button14.addEventListener('click', toStep15);
button15.addEventListener('click', toStep16);
button16.addEventListener('click', toStep17);
button17.addEventListener('click', toStep18);
button18.addEventListener('click', toStep19);

buttonBefore.addEventListener('click', handleSubmit);
buttonBefore2.addEventListener('click', handleSubmit);
buttonBefore3.addEventListener('click', handleSubmit);
buttonBefore5.addEventListener('click', handleSubmit);

//////////////////////////////////////////////////////////////

let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");

btn.onclick = function() {
  emailAdress = $("#emailAdress").val();
  if(emailAdress){
    if(isValidEmail(emailAdress)){
      $("input[name='re_age']").val(age);
      $("input[name='re_shiryukuRight']").val(shiryukuRight);
      $("input[name='re_shiryukuLeft']").val(shiryukuLeft);
      $("select[name='re_nearsightedRight']").val(nearsightedRight);
      $("select[name='re_nearsightedLeft']").val(nearsightedLeft);
      $("select[name='re_astigmatismRight']").val(astigmatismRight);
      $("select[name='re_astigmatismLeft']").val(astigmatismLeft);
      $("select[name='re_begin']").val(begin);
      $("select[name='re_confirmed']").val(confirmed);

      $('input[name="re_causing[]"]').each(function() { // Iterate through each checkbox
        if (checkedValues.includes($(this).val())) { // Check if the checkbox value is in the array
          $(this).prop('checked', true); // If it is, check the box
        }
      });
      $("select[name='re_squinting']").val(squinting);
      $("select[name='re_glasses']").val(glasses);
      $("select[name='re_temperament']").val(temperament);
      $("select[name='re_deteriorate']").val(deteriorate);
      $("select[name='re_parents']").val(parents);
      $("select[name='re_parentsMyopia']").val(parentsMyopia);
      $("select[name='re_refraction']").val(refraction);
      $("input[name='re_refractiveRight']").val(refractiveRight);
      $("input[name='re_refractiveLeft']").val(refractiveLeft);
      $("input[name='re_AstigmatismRight']").val(AstigmatismRight);
      $("input[name='re_AstigmatismLeft']").val(AstigmatismLeft);
      $("input[name='re_CorrectedRight']").val(CorrectedRight);
      $("input[name='re_CorrectedLeft']").val(CorrectedLeft);
      $("input[name='re_fullName']").val(fullName);
      $("input[name='re_emailAddress']").val(emailAdress);
      modal.style.display = "block";
    }else{
      showToast("メールを正確に入力してください。", "error");
    }
  }else{
    showToast("正確に入力してください！", "error");
  }
}
let modalClose = document.getElementsByClassName("#modalClose");
$("#modalClose").click(()=>{
  modal.style.display = "none";
  e.stopPropagation();
});
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function isValidEmail(email) {
  const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return regex.test(email);
}

$("input[type='submit']").click(function(){
  setTimeout(() => {
    document.location.href="./visiontest";
  }, 2);
})