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
    if (step > 10) {
      step = 10;
    }
    indicator[step-1].classList.add('active');
    stepClass = `.step-${step}`;
    stepElm = document.querySelector(stepClass);
    stepElm.classList.remove('slide-out');
    stepElm.classList.add('slide-in');
  },100);
}

function markSize(){
  handleSubmit();
}

button1.addEventListener('click', handleSubmit);
button2.addEventListener('click', markSize);
button3.addEventListener('click', chk3);
button4.addEventListener('click', chk4);
button5.addEventListener('click', handleSubmit);
button6.addEventListener('click', handleSubmit);
button7.addEventListener('click', handleSubmit);
button8.addEventListener('click', chk8);
button9.addEventListener('click', chk9);
button1.addEventListener('click', ()=>{
  let title = document.querySelector(".categoryName");
  title.classList.remove("show");
  title.classList.add("show-none");
});
//////////////////////////////////////////////////////////////
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
// rang scroll setting
const coinInput = document.getElementById('coin');
const imgElement = document.querySelector('#img img');
updateImageSize(coinInput.value);
coinInput.addEventListener('input', function() {
  updateImageSize(this.value);
});

function updateImageSize(value) {
  const size = 80 + value * 10 / 10;
  imgElement.style.width = `${size}px`;
  imgElement.style.height = `${size}px`;
}
//-----------------------------------------------
// page3の視力検査開始時の視力のoptionの設定
//-----------------------------------------------
function setMovileViewClass(){
	var zoom = coinInput.value;
	if(zoom == 140){
		document.getElementById("pobject_v2").className = "pobject_mvalue";
	} else{
		document.getElementById("pobject_v3").className = "pobject_mvalue";
	}
}
//-----------------------------------------------
var errmsg = "選択して下さい。";

// 視力 日本語表示用
var siryoku = new Object();
siryoku[1] = "0.01";
siryoku[2] = "0.02";
siryoku[3] = "0.04";
siryoku[4] = "0.06";
siryoku[5] = "0.08";
siryoku[6] = "0.1";
siryoku[7] = "0.2";
siryoku[8] = "0.3";
siryoku[9] = "0.4";
siryoku[10] = "0.5";
siryoku[11] = "0.6";
siryoku[12] = "0.7";
siryoku[13] = "0.8";
siryoku[14] = "0.9";
siryoku[15] = "1.0";
siryoku[16] = "1.5";
siryoku[17] = "2.0";

// 視力 視力計算用(100倍)
var siryoku_int = new Object();
siryoku_int[1]  = 1;
siryoku_int[2]  = 2;
siryoku_int[3]  = 4;
siryoku_int[4]  = 6;
siryoku_int[5]  = 8;
siryoku_int[6]  = 10;
siryoku_int[7]  = 20;
siryoku_int[8]  = 30;
siryoku_int[9]  = 40;
siryoku_int[10] = 50;
siryoku_int[11] = 60;
siryoku_int[12] = 70;
siryoku_int[13] = 80;
siryoku_int[14] = 90;
siryoku_int[15] = 100;
siryoku_int[16] = 150;
siryoku_int[17] = 200;

// 視力 視力画像サイズ
var siryoku_img = new Object();
siryoku_img[1]  = 550;
siryoku_img[2]  = 275;
siryoku_img[3]  = 137.5;
siryoku_img[4]  = 91.64;
siryoku_img[5]  = 68.76;
siryoku_img[6]  = 55;
siryoku_img[7]  = 27.5;
siryoku_img[8]  = 18.32;
siryoku_img[9]  = 13.74;
siryoku_img[10] = 11;
siryoku_img[11] = 9.16;
siryoku_img[12] = 7.06;
siryoku_img[13] = 6.86;
siryoku_img[14] = 6.1;
siryoku_img[15] = 5.5;
siryoku_img[16] = 3.66;
siryoku_img[17] = 2.75;

//-----------------------------------------------
let test_ok = 0;  // if
let test_ng = 0;  // if
let test_no;      // direction
let now  = document.getElementById("pobject").value;  // now value
let l_result = 1.0; // left result
let r_result = 1.0; // right result
let start; //start value
//-----------------------------------------------
function imgset(now, rl) {
  let ran = Math.round(Math.random()*7)+1;
  test_no = ran;
  // 縮小率の計算
  let zoom = coinInput.value;
  let z = (260 - zoom) / 165;
  let w = parseInt(siryoku_img[now] * z);
  let h = parseInt(siryoku_img[now] * 1.011 * z);
  // 画像描画
  if (rl == 1) {
    document.getElementById("view_r_now").innerHTML = siryoku[now];
    l_result = siryoku[now];
    landolt(1,(w/2), ran);
  } else {
    document.getElementById("view_l_now").innerHTML = siryoku[now];
    r_result = siryoku[now];
    landolt(2,(w/2), ran);
  }
}
//-----------------------------------------------
function ans(ans, rl) {
  if (ans == test_no) {
    test_ok = test_ok + 1;
    if (test_ok >= 2) {
      if (rl == 1) {
        r_result = siryoku[now];
      } else {
        l_result = siryoku[now];
      }
      now = Number(now) + 1;
      test_ok = 0;
      test_ng = 0;
      if (now == 18) {
        handleSubmit();
      }
      showToast("正確です。", "success");
    } else {
      showToast("正確です。", "success");
    }
  } else {
      test_ng = test_ng + 1;
      if (test_ng >= 2 || ans == 0) {
        test_ng = 0;
        if (rl == 1) {
          test_ok = 0;
          now = start;
          rl = 2;
          handleSubmit();
        } else {
          handleSubmit();
        }
      } else {
        showToast("正確ではありません。", "warning");
      }
  }
  imgset(now, rl);
}
//////////////////////////////////////////////////////////////
function landolt(rl,r, ran){
	var canvas;
	var angle;
	var width = (r*2)+20;
	var height = (r*2)+20;
	if(height < 300){
		height = 300;
	}
	if(rl==1){
		canvas = document.getElementById("img_1");
		canvas.width = width;
		canvas.height = height;
	}else{
		canvas = document.getElementById("img_2");
		canvas.width = width;
		canvas.height = height;
	}
	if(ran==1){
		angle=225;
	}else if(ran==2){
		angle=270;
	}else if(ran==3){
		angle=315;
	}else if(ran==4){
		angle=180;
	}else if(ran==5){
		angle=0;
	}else if(ran==6){
		angle=135;
	}else if(ran==7){
		angle=90; 
	}else if(ran==8){
		angle=45; 
	}
   if(canvas.getContext){
		angle = (angle%360)*Math.PI/180;
		var x = canvas.width/2;
		var y = canvas.height/2;
		var ctx = canvas.getContext('2d');
		ctx.beginPath();
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		ctx.arc(x, y, r, angle-Math.asin(1/5)
		             , angle+Math.asin(1/5), true);
		ctx.arc(x, y, 3*r/5, angle+Math.asin(1/3)
		             , angle-Math.asin(1/3), false);
		ctx.closePath();
		ctx.fill();
	}
}

//  step-3
function chk3() {
  let idx = parseInt(document.getElementById("pobject").selectedIndex);
  let chk = parseInt(document.getElementById("pobject").options[idx].value);
  
  start = chk;
  if (chk == 1) {
    r_result = 1.0;
    l_result = 1.0;
  } else {
    r_result = chk-1;
    l_result = chk-1;
  }
  now = chk;
  test_no = 0;
  test_ok = 0;
  test_ng = 0;
  imgset(chk, 1);
  handleSubmit();
}
function chk4() {
  ans(0,1);
}
///////////////////
let r_rg = 0;
let l_rg = 0;
function chk6(r) {
  r_rg = r;
  if (r_rg) {
    handleSubmit();
  } else {
    showToast(errmsg, "error")
  }
}
function chk7(r) {
  l_rg = r;
  if (l_rg) {
    handleSubmit();
  } else {
    showToast(errmsg, "error")
  }
}
////////////////////
function chk8() {
  let chk = $("input[name='r_ran']:checked").val();
  if (chk) {
    handleSubmit();
  } else {
    showToast(errmsg, "error")
  }
}
function chk9() {
  let chk = $("input[name='l_ran']:checked").val();
  if (chk) {
      var r_ran = parseInt($("input[name='r_ran']:checked").val());
      var l_ran = parseInt($("input[name='l_ran']:checked").val());

      document.getElementById("view_r_result").innerHTML = r_result;
      document.getElementById("view_l_result").innerHTML = l_result;
      localStorage.setItem('siryoku_r_result', r_result);
      localStorage.setItem('siryoku_l_result', l_result);

      if (r_rg == 1) {
          document.getElementById("view_r_kinshi").innerHTML = "近視傾向";
          localStorage.setItem('siryoku_r_rg', "近視傾向");
      } else if (r_rg == 2) {
          document.getElementById("view_r_kinshi").innerHTML = "遠視傾向";
          localStorage.setItem('siryoku_r_rg', "遠視傾向");
      } else {
          document.getElementById("view_r_kinshi").innerHTML = "不明";
          localStorage.setItem('siryoku_r_rg', "不明");
      }
      if (l_rg == 1) {
          document.getElementById("view_l_kinshi").innerHTML = "近視傾向";
          localStorage.setItem('siryoku_l_rg', "近視傾向");
      } else if (l_rg == 2) {
          document.getElementById("view_l_kinshi").innerHTML = "遠視傾向";
          localStorage.setItem('siryoku_l_rg', "遠視傾向");
      } else {
          document.getElementById("view_l_kinshi").innerHTML = "不明";
          localStorage.setItem('siryoku_l_rg', "不明");
      }
      if (r_ran == 1) {
          document.getElementById("view_r_ranshi").innerHTML = "乱視あり";
          localStorage.setItem('siryoku_r_ran', "乱視あり");
      } else {
          document.getElementById("view_r_ranshi").innerHTML = "乱視なし";
          localStorage.setItem('siryoku_r_ran', "乱視なし");
      }
      if (l_ran == 1) {
          document.getElementById("view_l_ranshi").innerHTML = "乱視あり";
          localStorage.setItem('siryoku_l_ran', "乱視あり");
      } else {
          document.getElementById("view_l_ranshi").innerHTML = "乱視なし";
          localStorage.setItem('siryoku_l_ran', "乱視なし");
      }
      // 結果をlocalstorageに保存
      var kinshi = 0;
//        if ((r_rg == 2 && l_rg == 2) || (r_rg == 2 && l_rg == 3) || (r_rg == 3 && l_rg == 2)) kinshi = 1;
//        if ((r_rg == 1 && l_rg == 1) || (r_rg == 1 && l_rg == 3) || (r_rg == 3 && l_rg == 1)) kinshi = 1;
      // 左右いずれかが近視、もしくは両目とも不明な場合は 近視
      if ((r_rg == 1 || l_rg == 1) || (r_rg == 3 && l_rg == 3)) kinshi = 1;

      var ranshi = 0;
      if (r_ran == 1 || l_ran == 1) ranshi = 1;

      // 視力の結果に応じたパターン分岐番号
      var pattern = eyes2pattern(Number(siryoku_int[l_result]), Number(siryoku_int[r_result]));
      var ekr_pat = 0;

      // 遠視で乱視がある場合
      if (kinshi == 0 && ranshi == 1) {
          ekr_pat = 3;                // ④
      // 遠視で乱視がない場合
      } else if (kinshi == 0 && ranshi == 0) {
          ekr_pat = 2;                // ③
      // 近視で乱視がある場合
      } else if (kinshi == 1 && ranshi == 1) {
          ekr_pat = 1;                // ②
      // 近視で乱視がない場合
      } else {
          ekr_pat = 0;                // ①
      }
      resultview(pattern + ekr_pat*15);
      handleSubmit();
  } else{
    alert(errmsg);
  }
}

function eyes2pattern(left, right) {
  var eye = (right + left) / 2,
      eye_max = Math.max(left,right),
      eye_min = Math.min(left,right);
  var pattern = 0;

  // 両目とも1.0以上
  if (eye_max >= 100 && eye_min >= 100) {
      pattern = 1;
  // 1,0 & 0.7～0.9
  } else if (eye_max >= 100 && eye_min >= 70 && eye_min <= 90) {
      pattern = 2;
  // 1.0 & 0.3～0.6
  } else if (eye_max >= 100 && eye_min >= 30 && eye_min <= 60) {
      pattern = 3;
  // 1.0 & 0.1～0.2
  } else if (eye_max >= 100 && eye_min > 10  && eye_min <= 20) {
      pattern = 4;
  // 1.0 & 0.1以下
  } else if (eye_max >= 100) {
      pattern = 5;
  // 両目とも0.7～0.9
  } else if (eye_max >= 70 && eye_max <= 90 && eye_min >= 70 && eye_min <= 90) {
      pattern = 6;
  // 0.7～0.9 & 0.3～0.6
  } else if (eye_max >= 70 && eye_max <= 90 && eye_min >= 30) {
      pattern = 7;
  // 0.7～0.9 & 0.1～0.2
  } else if (eye_max >= 70 && eye_max <= 90 && eye_min > 10 && eye_min <= 20) {
      pattern = 8;
  // 0.7～0.9 & 0.1以下
  } else if (eye_max >= 70 && eye_max <= 90 && eye_min <= 10) {
      pattern = 9;
  // 両目とも0.3～0.6
  } else if (eye_max >= 30 && eye_max <= 60 && eye_min >= 30 && eye_min <= 70) {
      pattern = 10;
  // 0.3～0.6 & 0.1～0.2
  } else if (eye_max >= 30 && eye_max <= 60 && eye_min > 10 && eye_min <= 20) {
      pattern = 11;
  // 0.3～0.6 & 0.1以下
  } else if (eye_max >= 30 && eye_max <= 60 && eye_min <= 10) {
      pattern = 12;
  // 両目とも0.1～0.2
  } else if (eye_max > 10 && eye_max <= 20 && eye_min > 10 && eye_min <= 20) {
      pattern = 13;
  // 0.1～0.2 & 0.1以下
  } else if (eye_max > 10 && eye_max <= 20 && eye_min <= 10) {
      pattern = 14;
  // 両目とも0.1以下
  } else if (eye_max <= 10 && eye_min <= 10) {
      pattern = 15;
  }

  return pattern;
}
function resultview(id) {
  var i;
  for (i=1; i<=60; i=i+1){
      if (i == id) {
          document.getElementById("result_text"+i).style.display = "block";
      } else {
          document.getElementById("result_text"+i).style.display = "none";
      }
  }
}