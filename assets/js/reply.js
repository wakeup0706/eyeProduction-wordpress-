  let CheckData_year = localStorage.getItem("year");
  let CheckData_ragan_R = localStorage.getItem("ragan_R");
  let CheckData_ragan_L = localStorage.getItem("ragan_L");
  let CheckData_kinshi_R = localStorage.getItem("kinshi_R");
  let CheckData_kinshi_L = localStorage.getItem("kinshi_L");
  let CheckData_ranshi_R = localStorage.getItem("ranshi_R");
  let CheckData_ranshi_L = localStorage.getItem("ranshi_L");
  let CheckData_q1 = localStorage.getItem("q1");
  let CheckData_q2 = localStorage.getItem("q2");
  let CheckData_q3 = localStorage.getItem("q3");
  let CheckData_q4 = localStorage.getItem("q4");
  let CheckData_q5 = localStorage.getItem("q5");
  let CheckData_q6 = localStorage.getItem("q6");
  let CheckData_q7 = localStorage.getItem("q7");
  let CheckData_q8 = localStorage.getItem("q8");
  let CheckData_q9 = localStorage.getItem("q9");
  let CheckData_q10 = localStorage.getItem("q10");
  let CheckData_sph_R = localStorage.getItem("sph_R");
  let CheckData_sph_L = localStorage.getItem("sph_L");
  let CheckData_cyl_R = localStorage.getItem("cyl_R");
  let CheckData_cyl_L = localStorage.getItem("cyl_L");
  let CheckData_kyousei_R = localStorage.getItem("kyousei_R");
  let CheckData_kyousei_L = localStorage.getItem("kyousei_L");
  let CheckData_name = localStorage.getItem("name");
  let CheckData_email = localStorage.getItem("email");

  
  $(document).ready(function() {

    function cyl(r, l) {
      if (r < 0 && l < 0) {
        return Math.min(digit(r), digit(l));
      } else if (r > 0 && l > 0) {
        return Math.max(digit(r), digit(l));
      } else {
        const ar = Math.abs(r);
        const al = Math.abs(l);
        return ar >= al ? r : l;
      }
    }

    function sph(r, l) {
      return Math.max(digit(r), digit(l));
    }

    function digit(val) {
      return parseInt(val, 10);
    }

    function convMatrixGroup(ragan, sph, offset = 0, kinshi = 1) {
      let x = 1;
      let y = 1;
  
      // 裸眼視力によるX軸値の算出
      if (ragan >= 100) {
        x = 6;
      } else if (ragan >= 80) {
        x = 5;
      } else if (ragan >= 60) {
        x = 4;
      } else if (ragan >= 30) {
        x = 3;
      } else if (ragan >= 10) {
        x = 2;
      } else {
        x = 1;
      }
  
      // 屈折度数によるY軸値の算出
      if (kinshi === 2) {
        if (sph >= 300) {
          y = 6;
        } else if (sph >= 230) {
          y = 5;
        } else if (sph >= 200) {
          y = 4;
        } else if (sph >= 150) {
          y = 3;
        } else if (sph >= 100) {
          y = 2;
        } else {
          y = 1;
        }
      } else {
        if (sph < -300) {
          y = 6;
        } else if (sph < -230) {
          y = 5;
        } else if (sph < -200) {
          y = 4;
        } else if (sph < -150) {
          y = 3;
        } else if (sph < -100) {
          y = 2;
        } else {
          y = 1;
        }
      }
      return [x, y + offset];
    }

    let ragan_R = Number(CheckData_ragan_R) * 100;
    let ragan_L = Number(CheckData_ragan_L) * 100;
    let ragan = (ragan_R + ragan_L) / 2;
    
    let yearOfAge = Math.floor(Number(CheckData_year));

    let sph_R = Number(CheckData_sph_R) * 100;
    let sph_L = Number(CheckData_sph_L) * 100;

    let cyl_R = Number(CheckData_cyl_R) * 100;
    let cyl_L = Number(CheckData_cyl_L) * 100;

    let kyousei_R = Number(CheckData_kyousei_R) * 100;
    let kyousei_L = Number(CheckData_kyousei_L) * 100;

    let kinshi_R = (CheckData_kinshi_R == "近視" || (CheckData_kinshi_R == "不明" && sph_R == 0)) ? true : false;
    let kinshi_L = (CheckData_kinshi_L == "近視" || (CheckData_kinshi_L == "不明" && sph_L == 0)) ? true : false;

    let enshi_R = (CheckData_kinshi_R == "遠視") ? true : false;
    let enshi_L = (CheckData_kinshi_L == "遠視") ? true : false;


    let CheckData_adviceR = "";
    let CheckData_adviceL = "";
    let CheckData_adviceRanshi = "";
    let CheckData_adviceEnshi = "";
    let CheckData_adviceHanteiLow = "";

    var result_r;
    var result_l;

    if (CheckData_q10 == "知っている") {
      if (enshi_R && yearOfAge < 8){
        result_r = convMatrixGroup(ragan_R, sph_R, 9, 2);
      } else if (enshi_r && yearOfAge >= 8) {
        result_r = convMatrixGroup(ragan_R, sph_R, 19, 2);
      } else {
        result_r = convMatrixGroup(ragan_R, sph_R, 0, 1);
      }

      if (enshi_L && yearOfAge < 8){
        result_l = convMatrixGroup(ragan_L, sph_L, 9, 2);
      } else if (enshi_l && yearOfAge >= 8) {
        result_l = convMatrixGroup(ragan_L, sph_L, 19, 2);
      } else {
        result_l = convMatrixGroup(ragan_L, sph_L, 0, 1);
      }

      let CheckData_adviceR = "";
      let CheckData_adviceL = "";

      let xR = result_r[0];
      let yR = result_r[1];

      let xL = result_l[0];
      let yL = result_l[1];

      if (xR > 0 && yR > 0 && xL > 0 && yL > 0) {
        if (xR == xL && yR == yL) {
          fetch(php_var_uri + yR + "-" + xR + "_RL.txt").then((res) => res.text())
          .then((text) => {
            CheckData_adviceR = text;
            CheckData_adviceL = "";
            $("#adviceR").html(text);
            $("#adviceL").html("");
          })
          .catch((e) => console.log(e));
        }else {
          fetch(php_var_uri + "/assets/matrix/" + yR + "-" + xR + "_R.txt").then((res) => res.text())
          .then((text) => {
            CheckData_adviceR = text;
            $("#adviceR").html(text);
          })
          .catch((e) => console.log(e));

          fetch(php_var_uri + "/assets/matrix/" + yL + "-" + xL + "_L.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceL = text;
            $("#adviceL").html(text);
          })
          .catch((e) => console.log(e));
        }
      }
      if (yR == yL && xR == xL) {
        if (CheckData_adviceR != "" && CheckData_adviceL != "") {
          CheckData_adviceL = "";
        }
      }
      
      let ranshi_R = CheckData_adviceR == "あり" ? cyl_R : 0;
		  let ranshi_L = CheckData_adviceL == "あり" ? cyl_L : 0;
		  let cyl_Hi = cyl(ranshi_R, ranshi_L);

      let ranshiCode;
      if(cyl_Hi != 0){
        // 乱視ありで、左右いずれかに乱視度数が0.1以上0.75以下もしくは-0.1以上-0.75以下の場合⇒回答Ｊ
        if ((cyl_Hi >= 10 && cyl_Hi <= 75) || (cyl_Hi <= -10 && cyl_Hi >= -75)) {
          ranshiCode = 'J';
        }
        // 乱視ありで、左右いずれかに乱視度数が0.76以上～1.0未満もしくは-0.76以上～-1.0未満の場合⇒回答Ｋ
        else if ((cyl_Hi >= 76 && cyl_Hi < 100) || (cyl_Hi <= -76 && cyl_Hi > -100)) {
          ranshiCode = 'K';
        }
        // 乱視ありで、左右いずれかに乱視度数が1.0以上もしくは-1.0以上の場合⇒回答Ｌ
        else if (cyl_Hi >= 100 || cyl_Hi <= -100) {
          ranshiCode = 'L';
        }
      } else {
        ranshiCode = NULL;
      }
  
      if(ranshiCode != NULL) {
        fetch(php_var_uri + "/assets/matrix/" + ranshiCode + ".txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceRanshi = text;
            $("#adviceRanshi").html(text);
          })
          .catch((e) => console.log(e));
        } else {
          CheckData_adviceRanshi = "";
          $("#adviceRanshi").html("");
      }
    }else{
      let advice_R;
      if (ragan_R < 20) {
        advice_R = 'A';
      }
      // 0.2以上ー0.3未満
      else if (ragan_R < 30) {
        advice_R = 'B';
      }
      // 0.3以上ー0.6未満
      else if (ragan_R < 60) {
        advice_R = 'C';
      }
      // 0.6以上ー0.8未満
      else if (ragan_R < 80) {
        advice_R = 'D';
      }
      // 0.8以上ー1.0未満
      else if (ragan_R < 100) {
        advice_R = 'E';
      }
      // 1.0以上
      else {
        advice_R = 'F';
      }
  
      let advice_L;
      if (ragan_L < 20) {
        advice_L = 'A';
      }
      // 0.2以上ー0.3未満
      else if (ragan_L < 30) {
        advice_L = 'B';
      }
      // 0.3以上ー0.6未満
      else if (ragan_L < 60) {
        advice_L = 'C';
      }
      // 0.6以上ー0.8未満
      else if (ragan_L < 80) {
        advice_L = 'D';
      }
      // 0.8以上ー1.0未満
      else if (ragan_L < 100) {
        advice_L = 'E';
      }
      // 1.0以上
      else {
        advice_L = 'F';
      }

      if (advice_R == advice_L) {
        fetch(php_var_uri + "/assets/matrix/" + advice_R + "_RL.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceR = text;
            $("#adviceR").html(text);
          })
          .catch((e) => console.log(e));
        } else {
          fetch(php_var_uri + "/assets/matrix/" + advice_R + "_R.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceR = text;
            $("#adviceR").html(text);
          })
          .catch((e) => console.log(e));
          
          fetch(php_var_uri + "/assets/matrix/" + advice_L + "_L.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceL = text;
            $("#adviceL").html(text);
          })
          .catch((e) => console.log(e));
      }

      if (enshi_R || enshi_L) {
        if (yearOfAge < 8) {
          fetch(php_var_uri + "/assets/matrix/M.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceEnshi = text;
            $("#adviceEnshi").html(text);
          })
          .catch((e) => console.log(e));
        }
        else {
          fetch(php_var_uri + "/assets/matrix/N.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_adviceEnshi = text;
            $("#adviceEnshi").html(text);
            })
            .catch((e) => console.log(e));
        }
      }
    }

    if ((CheckData_kyousei_R != "" && kyousei_R < 100) || (CheckData_kyousei_L != "" && kyousei_L < 100)) {
      fetch(php_var_uri + "/assets/matrix/hanteiLow.txt")
        .then((res) => res.text())
        .then((text) => {
          CheckData_adviceHanteiLow = text;
          $("#adviceHanteiLow").html(text);
        })
        .catch((e) => console.log(e));
    }

    let CheckData_advice01 = "";
    let CheckData_advice02 = "";
    let CheckData_advice03 = "";
    let CheckData_advice04 = "";
    let CheckData_advice05 = "";
    let CheckData_advice06 = "";
    let CheckData_advice07 = "";
    let CheckData_advice08 = "";
    let CheckData_advice09 = "";
    let CheckData_advice10 = "";
    let CheckData_advice11 = "";
    let CheckData_advice12 = "";
    let CheckData_advice13 = "";
    let CheckData_advice14 = "";
    let CheckData_advice15 = "";
    let CheckData_advice16 = "";
    let CheckData_advice17 = "";
    let CheckData_advice18 = "";
    let CheckData_advice19 = "";
    let CheckData_advice20 = "";
    let CheckData_advice21 = "";
    let CheckData_advice22 = "";
    let CheckData_advice23 = "";
    let CheckData_advice24 = "";
    let CheckData_advice25 = "";

    if (CheckData_kinshi_R == "なし" ||
      CheckData_kinshi_L == "なし") {
      // advice01 遠視で8歳以上
      if (yearOfAge >= 8) {
        fetch(php_var_uri + "/assets/advice/advice01.txt")
        .then((res) => res.text())
        .then((text) => {
          CheckData_advice01 = text;
        })
        .catch((e) => console.log(e));
      // advice02 遠視で8歳未満
      } else {
        fetch(php_var_uri + "/assets/advice/advice02.txt")
        .then((res) => res.text())
        .then((text) => {
          CheckData_advice02 = text;
        })
        .catch((e) => console.log(e));
      }
    }
    // advice03 左右とも視力1.0の時期不明で5歳未満
    if (CheckData_q2 == "いいえ" && yearOfAge < 5) {
      fetch(php_var_uri + "/assets/advice/advice03.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice03").html(text);
        })
        .catch((e) => console.log(e));
    }
    // advice04 左右とも視力1.0の時期不明で5歳未満
    if (CheckData_q4 == "はい") {
      fetch(php_var_uri + "/assets/advice/advice04.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice04").html(text);
        })
        .catch((e) => console.log(e));
    }
    // advice05 左右とも視力1.0の時期不明で5歳未満
    if (CheckData_q5 == "はい") {
      fetch(php_var_uri + "/assets/advice/advice05.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice05").html(text);
        })
        .catch((e) => console.log(e));
    }
    // advice06 左右とも視力1.0の時期不明で5歳未満
    if (CheckData_q6 == "集中力が強く、興味のあることに没頭するタイプ") {
      fetch(php_var_uri + "/assets/advice/advice06.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice06").html(text);
        })
        .catch((e) => console.log(e));
    } else {
      fetch(php_var_uri + "/assets/advice/advice07.txt")
      .then((res) => res.text())
      .then((text) => {
        $("#advice07").html(text);
      })
      .catch((e) => console.log(e));
    }
    // advice08 
    if (CheckData_q7 == "ある") {
      fetch(php_var_uri + "/assets/advice/advice08.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice08").html(text);
        })
        .catch((e) => console.log(e));
    }
    // advice09 
    if (((CheckData_q8 == "両親とも" || CheckData_q8 == "片親のみ") && CheckData_q9 == "小学生" ) || CheckData_q3 == "遺伝が気になる") {
      fetch(php_var_uri + "/assets/advice/advice09.txt")
        .then((res) => res.text())
        .then((text) => {
          $("#advice09").html(text);
        })
        .catch((e) => console.log(e));
    }
    // advice10 ~ 14
    if (CheckData_q10 == "知らない") {
      if(ragan >= 100) {
        fetch(php_var_uri + "/assets/advice/advice10.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice10 = text;
          })
          .catch((e) => console.log(e));
      }else if(ragan >= 70) {
        fetch(php_var_uri + "/assets/advice/advice11.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice11 = text;
          })
          .catch((e) => console.log(e));

      }else if(ragan >= 30) {
        fetch(php_var_uri + "/assets/advice/advice12.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice12 = tmp;
          })
          .catch((e) => console.log(e));
      } else if(ragan <= 10 || ragan >= 20) {
        fetch(php_var_uri + "/assets/advice/advice14.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice14 = text;
          })
          .catch((e) => console.log(e));
      } else{
        fetch(php_var_uri + "/assets/advice/advice13.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice13 = text;
          })
          .catch((e) => console.log(e));
      }
    }else {
      if((sph_R <= -300 || (CheckData_kinshi_R == "あり" && sph_R >= 300)) || (sph_L <= -300 ||(CheckData_kinshi_L == "あり" && sph_L >= 300))){
        if((sph_R <= -300 && ragan_R > 40) || (sph_L <= -300 && ragan_L >40)){
          fetch(php_var_uri + "/assets/advice/advice16.txt")
            .then((res) => res.text())
            .then((text) => {
              CheckData_advice16 = text;
            })
            .catch((e) => console.log(e));
        }else {
          fetch(php_var_uri + "/assets/advice/advice15.txt")
            .then((res) => res.text())
            .then((text) => {
              CheckData_advice15 = text;
            })
            .catch((e) => console.log(e));
        }
      }

      if (
        (sph_R <= -200 || (CheckData_kinshi_R == "近視" && sph_R >= 200)) ||
        (sph_L <= -200 || (CheckData_kinshi_L == "近視" && sph_L >= 200)) ||
        (kyousei_R == 90 && (sph_R <= -175 || (CheckData_kinshi_R == "近視" && sph_R >= 175))) ||
        (kyousei_L == 90 && (sph_L <= -175 || (CheckData_kinshi_L == "近視" && sph_L >= 175))) ||
        (kyousei_R == 80 && (sph_R <= -150 || (CheckData_kinshi_R == "近視" && sph_R >= 150))) ||
        (kyousei_L == 80 && (sph_L <= -150 || (CheckData_kinshi_L == "近視" && sph_L >= 150))) ||
        (kyousei_R == 70 && (sph_R <= -125 || (CheckData_kinshi_R == "近視" && sph_R >= 125))) ||
        (kyousei_L == 70 && (sph_L <= -125 || (CheckData_kinshi_L == "近視" && sph_L >= 125))) ||
        (kyousei_R == 60 && (sph_R <= -100 || (CheckData_kinshi_R == "近視" && sph_R >= 100))) ||
        (kyousei_L == 60 && (sph_L <= -100 || (CheckData_kinshi_L == "近視" && sph_L >= 100)))
        ) {
          // advice18 13歳以上で近視歴が３年以上、裸眼視力が0.2以下の場合
          if (yearOfAge >= 13 && CheckData_q1 == "3年以上" && ragan <= 20) {
            fetch(php_var_uri + "/assets/advice/advice18.txt")
              .then((res) => res.text())
              .then((text) => {
                CheckData_advice18 = text;
              })
              .catch((e) => console.log(e));
          } else {
            fetch(php_var_uri + "/assets/advice/advice17.txt")
              .then((res) => res.text())
              .then((text) => {
                CheckData_advice17 = text;
              })
              .catch((e) => console.log(e));
          }
      }
      // advice19 屈折度数が-1.0以上～-2.0未満、もしくは近視で1.0以上～2.0未満の場合
      if ((sph_R <= -100 || (CheckData_kinshi_R == "近視" && sph_R >= 100)) ||
      (sph_L <= -100 || (CheckData_kinshi_L == "近視" && sph_L >= 100))) {
        // advice20 13歳以上で近視歴が３年以上、裸眼視力が0.2以下の場合
        if (yearOfAge >= 13 && CheckData_q1 == "3年以上" && ragan <= 20) {
          fetch(php_var_uri + "/assets/advice/advice20.txt")
            .then((res) => res.text())
            .then((text) => {
              CheckData_advice20 = text;
            })
            .catch((e) => console.log(e));
        } else {
          fetch(php_var_uri + "/assets/advice/advice19.txt")
            .then((res) => res.text())
            .then((text) => {
              CheckData_advice19 = text;
            })
            .catch((e) => console.log(e));
        }
      }
      // advice21 屈折度数が0～-1.0未満、もしくは近視で0～1.0未満の場合
      if ((sph_R <= 0 || (CheckData_kinshi_R == "近視" && sph_R >= 0)) ||
        (sph_L <= 0 || (CheckData_kinshi_L == "近視" && sph_L >= 0))) {
        fetch(php_var_uri + "/assets/advice/advice21.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice21 = text;
          })
          .catch((e) => console.log(e));
      }
      // advice22 8歳未満で屈折度数が0.75～1.0未満で遠視の場合
      if (yearOfAge < 8 && 
        ((sph_R >= 75 && sph_R < 100 && CheckData_kinshi_R == "遠視") || 
        (sph_L >= 75 && sph_L < 100 && CheckData_kinshi_L == "遠視"))) {
        fetch(php_var_uri + "/assets/advice/advice22.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice22 = text;
          })
          .catch((e) => console.log(e));
      }
      // advice23 屈折度数1.0以上で遠視の場合
      if ((sph_R >= 100 && CheckData_kinshi_R == "遠視") || 
        (sph_L >= 100 && CheckData_kinshi_L == "遠視")) {
        fetch(php_var_uri + "/assets/advice/advice23.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice23 = text;
          })
          .catch((e) => console.log(e));
      }
    }
    // advice24 乱視ありで、乱視度数が0.1以上0.75以下もしくは-0.1以上-0.75以下の場合
    // advice25 乱視ありで、乱視度数が0.76以上もしくは-0.76以上の場合
    if (CheckData_ranshi_R == "あり") {
      if ((cyl_R >= 10 && cyl_R <= 75) || (cyl_R <= -10 && cyl_R >= -75)) {
        fetch(php_var_uri + "/assets/advice/advice24.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice24 = text;
          })
          .catch((e) => console.log(e));
      } else if (cyl_R >= 76 || cyl_R <= -76) {
        fetch(php_var_uri + "/assets/advice/advice25.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice25 = text;
          })
          .catch((e) => console.log(e));
      }
    }
    if (CheckData_ranshi_L == "あり") {
      if ((cyl_L >= 10 && cyl_L <= 75) || (cyl_L <= -10 && cyl_L >= -75)) {
        fetch(php_var_uri + "/assets/advice/advice24.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice24 = text;
          })
          .catch((e) => console.log(e));
      } else if (cyl_L >= 76 || cyl_L <= -76) {	
        fetch(php_var_uri + "/assets/advice/advice25.txt")
          .then((res) => res.text())
          .then((text) => {
            CheckData_advice25 = text;
          })
          .catch((e) => console.log(e));
      }
    }
    /**************************************************
    エラー出力
    **************************************************/
    // if (count(ErrInfo)) {
    //   header("Location: index.php?ts=" . time());
    //   exit();
    // }

    /**************************************************
    メール送信
    **************************************************/
    // メールテンプレートデータの取得
    
    fetch(php_var_uri+'/assets/mail/adm_mail.txt')
      .then((res) => res.text())
      .then((text) => {
        tmp = text;
      })
      .catch((e) => console.log(e));

    fetch(php_var_uri+'/assets/mail/user_mail.txt')
      .then((res) => res.text())
      .then((text) => {
        tmp = text;
      })
      .catch((e) => console.log(e));

  })
  