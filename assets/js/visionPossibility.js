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
buttonBefore4.addEventListener('click', handleSubmit);
buttonBefore5.addEventListener('click', handleSubmit);

//////////////////////////////////////////////////////////////

let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");

btn.onclick = function() {
  emailAdress = $("#emailAdress").val();
  let isChecked = $("#okay").is(":checked")
  if(emailAdress && isChecked){
    if(isValidEmail(emailAdress)){
      $("#re_age").val(age);
      $("#re_shiryukuRight").val(shiryukuRight);
      $("#re_shiryukuLeft").val(shiryukuLeft);
      $("#re_nearsightedRight").val(nearsightedRight);
      $("#re_nearsightedLeft").val(nearsightedLeft);
      $("#re_astigmatismRight").val(astigmatismRight);
      $("#re_astigmatismLeft").val(astigmatismLeft);
      $("#re_begin").val(begin);
      $("#re_confirmed").val(confirmed);

      $('input[name="re_causing"]').each(function() { // Iterate through each checkbox
        if (checkedValues.includes($(this).val())) { // Check if the checkbox value is in the array
          $(this).prop('checked', true); // If it is, check the box
        }
      });
      $("#re_squinting").val(squinting);
      $("#re_glasses").val(glasses);
      $("#re_temperament").val(temperament);
      $("#re_deteriorate").val(deteriorate);
      $("#re_parents").val(parents);
      $("#re_refraction").val(refraction);
      $("#re_refractiveRight").val(refractiveRight);
      $("#re_refractiveLeft").val(refractiveLeft);
      $("#re_AstigmatismRight").val(AstigmatismRight);
      $("#re_AstigmatismLeft").val(AstigmatismLeft);
      $("#re_CorrectedRight").val(CorrectedRight);
      $("#re_CorrectedLeft").val(CorrectedLeft);
      $("#re_fullName").val(fullName);
      $("#re_emailAdress").val(emailAdress);
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
$('#button-before3').click(()=>{
  age = $("#re_age").val();
  shiryukuRight = $("#re_shiryukuRight").val();
  shiryukuLeft = $("#re_shiryukuLeft").val();
  nearsightedRight = $("#re_nearsightedRight").val();
  nearsightedLeft = $("#re_nearsightedLeft").val();
  astigmatismRight = $("#re_astigmatismRight").val();
  astigmatismLeft = $("#re_astigmatismLeft").val();
  begin = $("#re_begin").val();
  confirmed = $("#re_confirmed").val();
  checkedValues = getCheckedCheckboxesValues('re_causing');
  squinting = $("#re_squinting").val();
  glasses = $("#re_glasses").val();
  temperament = $("#re_temperament").val();
  deteriorate = $("#re_deteriorate").val();
  parents = $("#re_parents").val();
  parentsMyopia = $("#re_parentsMyopia").val();
  refraction = $("#re_refraction").val();
  refractiveRight = $("#re_refractiveRight").val();
  refractiveLeft = $("#re_refractiveLeft").val();
  AstigmatismRight = $("#re_AstigmatismRight").val();
  AstigmatismLeft = $("#re_AstigmatismLeft").val();
  CorrectedRight = $("#re_CorrectedRight").val();
  CorrectedLeft = $("#re_CorrectedLeft").val();
  fullName = $("#re_fullName").val();
  emailAdress = $("#re_emailAdress").val(); 
})