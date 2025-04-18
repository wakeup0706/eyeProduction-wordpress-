<?php  get_header();?>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Common/notification.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/visionTest.css" />
<main>
  <section class="visionTest container">
    <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
    <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
    <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
    <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
    <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
    <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
    <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> 視力検査</span></div>
    <div class="categoryName show"><p>まずは視力検査をしてみよう！</p></div>
    
    <div class="visionTesting">
      <div class="content">
        <div class="content__box  step-1 visible__no-animation">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">視力検査のご説明</p></div>
          </div>
          <div class="description pc">パソコン画面で、簡単に視力検査、レッド・グリーンテスト、乱視検査ができます。 まずは、現状把握から始めましょう！</div>
          <div class="description mobile">スマホ/タブレットの画面で、簡単に視力検査、レッド・グリーンテスト、乱視検査ができます。 まずは、現状把握から始めましょう！</div>
          <div class="description">視力検査を行う前に
            <ul>
              <li>測定距離は、下のイラストを参考にしてください。</li>
              <li>基本的には裸眼で行ってください。</li>
              <li>片目ずつ、左右の順に測定を行ってください。</li>
              <li class="pc-list">ランドルト環（Cマーク）の切れ目の方向に合わせて、該当する矢印をクリックしてください。</li>
              <li class="mobile-list">ランドルト環（Cマーク）の切れ目の方向に合わせて、該当する矢印をタップしてください。</li>
              <li>力まず、肩の力を抜いてリラックスした状態で測定しましょう。</li>
              <li>同じ視力の問題に2回連続で正解すると次に進みます。逆に、2回続けて間違えるとその目の測定は終了となります。</li>
            </ul>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest1.jpg" alt="" class="visionTest-img1">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest2.jpg" alt="" class="visionTest-img2">
          <div class="seeMoreButton">
            <a type="submit" id="button-1" class="submit-button btn btn-primary"><span>視力検査をする</span></a>
          </div>
        </div>
      
        <div class="content__box step-2">
          <div class="subject">
            <div class="subjectIcon2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest2.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">画面サイズの調整</p></div>
          </div>
          <div class="description pc">お使いのパソコン環境によって、表示されるサイズに差が生じる場合があります。<br/>
          画面に表示されている100円硬貨の画像と、実際の100円硬貨を見比べて、サイズが一致するように拡大・縮小バーで調整してください。</div>
          <div class="description mobile">お使いのスマホ/タブレットによって、表示されるサイズに差が生じる場合があります。<br/>
          画面に表示されている100円硬貨の画像と、実際の100円硬貨を見比べて、サイズが一致するように拡大・縮小バーで調整してください。</div>
          <div class="range-slider">
            <div class="range-slider__input">
              <input class="input-range" orient="vertical" type="range" step="0.1" value="140" min="0" max="140" id="coin">
            </div>
            <div class="range-slider__img">
              <span class="range-value" id="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/coin.png" alt=""></span>
            </div>
          </div>
          <div class="bnbutton">
            <button id="button-before" class="beforeButton">戻  る</button>
            <button id="button-2">次  へ</button>
          </div>
        </div>

        <div class="content__box step-3">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest3.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">視力の設定</p></div>
          </div>
          <div class="description">測定を開始する視力を選んでください。<br/>
          選択後、画面下部の「次へ」ボタンをクリックすると測定が始まります。<br/>
          ※検査は、見える範囲で最も低い視力から始めると、効率よく進めることができます。
          </div>
          <select name="pobject" id="pobject" class="select-vision">
            <option id="pobject_v1" value="1">0.01</option>
            <option id="pobject_v2" value="2">0.02</option>
            <option id="pobject_v3" value="3">0.04</option>
            <option id="pobject_v6" value="6" selected>0.1</option>
            <option id="pobject_v10" value="10">0.5</option>
            <option id="pobject_v13" value="13">0.8</option>
          </select>
          <div class="direction-eye">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest4.png" alt="">
            <p>まずは右目から測定を行います。左目は左手で軽く隠すか、そっとつぶってください。</p>
          </div>
          <div class="direction-eye">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest5.png" alt="" id="desktop">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest6.png" alt="" id="mobile">
            <p class="pc">画面に表示されるランドルト環（Cマーク）の切れ目の方向を見て、対応する方向のボタンをマウスでクリックしてください。</p>
            <p class="mobile">画面に表示されるランドルト環（Cマーク）の切れ目の方向を見て、対応する方向のボタンをタップしてください。</p>
          </div>
          <p>※切れ目の方向は全部で8方向あります</p>
          <div class="bnbutton">
            <button id="button-before2" class="beforeButton">戻  る</button>
            <button id="button-3">次  へ</button>
          </div>
        </div>

        <div class="content__box step-4">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">視力の測定</p></div>
          </div>
          <div class="description pc">これから右目の測定を行います。<br/>
          表示されるランドルト環（Cの形をしたマーク）の開いている方向（8方向）を見て、画面上の対応する方向ボタンをマウスでクリックしてください。<br/>
          </div>
          <div class="description mobile">これから右目の測定を行います。<br/>
          表示されるランドルト環（Cの形をしたマーク）の開いている方向（8方向）を見て、画面上の対応する方向ボタンをタップしてください。<br/>
          </div>
          <div class="vision-number"><p id="view_r_now">1.0</p></div>
          <div class="vision-mark">
            <canvas id="img_1" />
          </div>
          <div class="directionButtons">
            <div class="groub">
              <div onclick="ans(1,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow1.png" alt=""></div>
              <div onclick="ans(2,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow2.png" alt=""></div>
              <div onclick="ans(3,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow3.png" alt=""></div>
            </div>
            <div class="groub">
              <div onclick="ans(4,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow4.png" alt=""></div>
              <div onclick="ans(5,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow5.png" alt=""></div>
            </div>
            <div class="groub">
              <div onclick="ans(6,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow6.png" alt=""></div>
              <div onclick="ans(7,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow7.png" alt=""></div>
              <div onclick="ans(8,1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow8.png" alt=""></div>
            </div>
          </div>
          <p>※方向が分からない場合は、「次へ」ボタンを押してください。</p>
          <div class="bnbutton">
            <button id="button-4">次  へ</button>
          </div>
        </div>

        <div class="content__box step-5">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">視力の測定</p></div>
          </div>
          <div class="description pc">続いて、左目の測定を行います。<br/>
          今度は右目を手で隠して、同じように表示されるランドルト環（Cの形をしたマーク）を見てください。<br/>
          開いている方向（8方向）を確認し、画面上の対応する方向ボタンをマウスでクリックしてください。</div>
          <div class="description mobile">続いて、左目の測定を行います。<br/>
          今度は右目を手で隠して、同じように表示されるランドルト環（Cの形をしたマーク）を見てください。<br/>
          開いている方向（8方向）を確認し、画面上の対応する方向ボタンをタップしてください。</div>
          <div class="vision-number"><p id="view_l_now">1.0</p></div>
          <div class="vision-mark">
            <canvas id="img_2" />
          </div>
          <div class="directionButtons">
            <div class="groub">
              <div onclick="ans(1,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow1.png" alt=""></div>
              <div onclick="ans(2,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow2.png" alt=""></div>
              <div onclick="ans(3,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow3.png" alt=""></div>
            </div>
            <div class="groub">
              <div onclick="ans(4,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow4.png" alt=""></div>
              <div onclick="ans(5,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow5.png" alt=""></div>
            </div>
            <div class="groub">
              <div onclick="ans(6,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow6.png" alt=""></div>
              <div onclick="ans(7,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow7.png" alt=""></div>
              <div onclick="ans(8,2)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/arrow8.png" alt=""></div>
            </div>
          </div>
          <p>※方向が分からない場合は、「次へ」ボタンを押してください。</p>
          <div class="bnbutton">
            <button id="button-5">次  へ</button>
          </div>
        </div>

        <div class="content__box step-6">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">レッド・グリーンテスト</p></div>
          </div>
          <div class="description pc">この検査は必ず裸眼で行ってください。<br/>
          まずは右目を使って、視力検査と同じ距離から下の画像を見てください。<br/>
          赤い背景と緑の背景、それぞれに表示された指標のうち、どちらがよりはっきり濃く見えますか？<br/>
          濃く見える方の画像をクリックしてください。<br/>
          </div>
          <div class="description mobile">この検査は必ず裸眼で行ってください。<br/>
          まずは右目を使って、視力検査と同じ距離から下の画像を見てください。<br/>
          赤い背景と緑の背景、それぞれに表示された指標のうち、どちらがよりはっきり濃く見えますか？<br/>
          濃く見える方の画像をタップしてください。<br/>
          </div>
          <div class="visionTestTitle"><p>右目測定中</p></div>
          <div class="vision-test">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test1.png" alt="" onclick="chk6(1)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test2.png" alt="" onclick="chk6(2)">
          </div>
          <p>※どちらとも判断できない場合は、下の「次へ」ボタンを押してください。</p>
          <div class="bnbutton">
            <button id="button-6">次  へ</button>
          </div>
        </div>

        <div class="content__box step-7">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">レッド・グリーンテスト</p></div>
          </div>
          <div class="description pc">次は左目でも同じように検査を行います。<br/>
          今度は右目を手で隠し、先ほどと同じ距離から画像を見てください。<br/>
          赤い背景と緑の背景、それぞれの指標のうち、どちらがよりはっきり濃く見えますか？<br/>
          濃く見える方の画像をクリックしてください。<br/></div>
          <div class="description mobile">次は左目でも同じように検査を行います。<br/>
          今度は右目を手で隠し、先ほどと同じ距離から画像を見てください。<br/>
          赤い背景と緑の背景、それぞれの指標のうち、どちらがよりはっきり濃く見えますか？<br/>
          濃く見える方の画像をタップしてください。<br/></div>
          <div class="visionTestTitle"><p>左目測定中</p></div>
          <div class="vision-test">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test1.png" alt="" onclick="chk7(1)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test2.png" alt="" onclick="chk7(2)">
          </div>
          <p>※判断がつかない場合は、「次へ」ボタンを押してください。</p>
          <div class="bnbutton">
            <button id="button-7">次  へ</button>
          </div>
        </div>

        <div class="content__box step-8">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">乱視検査</p></div>
          </div>
          <div class="description">まずは右目から検査を始めてください。<br/>
          視力検査と同じ距離で、下の画像を正面から見てください。<br/>
          画像内の放射状の線は、すべて同じ太さ・濃さで描かれています。<br/>
          もし特定の線だけが濃く見えたり、太さが違って見える場合は、乱視の可能性があります。</div>
          <div class="visionTestTitle"><p>右目測定中</p></div>
          <div class="vision-test8">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest7.png" alt="">
          </div>
          <div class="visionTestResult">
            <input type="radio" name="r_ran" value="2" id="r_ran_2"><label for="r_ran_2">放射状に伸びる各線は同じ太さ、濃度に見える</label><br/><br/>
            <input type="radio" name="r_ran" value="1" id="r_ran_1"><label for="r_ran_1">放射状に伸びる各線の太さ、濃度にばらつきがある</label>
          </div>
          <div class="bnbutton">
            <button id="button-8">次  へ</button>
          </div>
        </div>

        <div class="content__box step-9">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">乱視検査</p></div>
          </div>
          <div class="description">続いて、左目でも同様に検査を行います。<br/>
          今度は右目を手で隠し、視力検査と同じ距離から下の画像を正面から見てください。<br/>
          放射状に伸びる線はすべて同じ太さ・濃さで描かれています。<br/>
          もし一部の線だけが濃く見えたり、太さが違って見える場合は、乱視の可能性があります。</div>
          <div class="visionTestTitle"><p>左目測定中</p></div>
          <div class="vision-test8">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest7.png" alt="">
          </div>
          <div class="visionTestResult">
            <input type="radio" name="l_ran" value="2" id="l_ran_2"><label for="l_ran_2">放射状に伸びる各線は同じ太さ、濃度に見える</label><br/><br/>
            <input type="radio" name="l_ran" value="1" id="l_ran_1"><label for="l_ran_1">放射状に伸びる各線の太さ、濃度にばらつきがある</label>
          </div>
          <div class="bnbutton">
            <button id="button-9">次  へ</button>
          </div>
        </div>

        <div class="content__box step-10">
          <div class="subject">
            <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
            <div class="subjectTitle"><p class="subjectText">総合検査結果</p></div>
          </div>
          <div id="result_text1" style="display:none;">素晴らしい！現時点では全く問題がありません。<br>
            ただし、日常生活で近くを凝視する事が多い場合は、あっと言う間に近視が進行する恐れがありますので、定期的な検査をお忘れなく！</div>
          <div id="result_text2" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            ですが、片目は近視が進行しつつあります。<br>
            まずは、日常生活の中から近視の原因となることを、取り除くことが重要です。</div>
          <div id="result_text3" style="display:none;">左右に視力差があるのが気になります。<br>
            このまま放っておくと、ますます差が広がり、やがて良い方の視力も落ちてくる可能性が高いです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text4" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            不自由があれば、メガネやコンタクトで矯正を行う必要が出てくるかもしれません。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text5" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            不自由があれば、メガネやコンタクトで矯正を行う必要が出てくるかもしれません。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text6" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            近くを見る事が多い現代では、最も過ごしやすい視力と言えます。<br>
            ただし、近視が進行していますので、生活改善はとても重要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text7" style="display:none;">致命的ではないですが、視力差が出始めています。<br>
            両眼とも近視がある程度進行してきていますので、生活改善やトレーニングで近視を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text8" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            ただし、良い方の目を酷使する状態にあり、一気に視力が低下する可能性があります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text9" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            ただし、良い方の目を酷使する状態にあり、一気に視力が低下する可能性があります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text10" style="display:none;">運転免許を取る際の眼鏡不要のギリギリレベル、もしくは下回っている状態です。<br>
            日常生活に大きな不自由はありませんので、即メガネの必要はありませんが、ここで食い止めないと、裸眼での生活が難しくなります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text11" style="display:none;">だんだんと、日常生活で不自由を感じてくるレベルです。<br>
            両眼とも近視が進行していますので、生活改善やトレーニングでこれ以上の近視を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text12" style="display:none;">遠くを見る時以外は、一応裸眼でも生活できるレベルです。<br>
            ただし、良い方の目を酷使する事で、一気に視力が落ちる可能性があります。<br>
            両眼とも近視が進行していますので、生活改善やトレーニングで近視進行を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text13" style="display:none;">視力向上が可能なギリギリのレベルです。<br>
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text14" style="display:none;">視力向上が難しくなるレベルです。<br>	
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。
          </div>
          <div id="result_text15" style="display:none;">メガネやコンタクトの使用が必要なレベルです。<br>
            今すぐ眼科等で検査を受けることをお勧めします。<br>
            すでにメガネやコンタクトをご利用されている方も、視力の値としては大きな変化はないかもしれませんが、近視の数値としては進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text16" style="display:none;">素晴らしい！現時点では全く問題がありません。<br>
            ただし、日常生活で近くを凝視する事が多い場合は、あっと言う間に近視が進行する恐れがありますので、定期的な検査をお忘れなく！<br>
            乱視があるようですので、目を細める癖などに注意してください。</div>
          <div id="result_text17" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            ですが、片目は近視が進行しつつあります。<br>
            まずは、日常生活の中から近視の原因となることを、取り除くことが重要です。<br>
            乱視があるようですので、目を細める癖などに注意してください。</div>
          <div id="result_text18" style="display:none;">左右に視力差があるのが気になります。<br>
            このまま放っておくと、ますます差が広がり、やがて良い方の視力も落ちてくる可能性が高いです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text19" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            不自由があれば、メガネやコンタクトで矯正を行う必要が出てくるかもしれません。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text20" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            不自由があれば、メガネやコンタクトでの矯正を行う必要が出てくるかもしれません。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text21" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            近くを見る事が多い現代では、最も過ごしやすい視力と言えます。<br>
            ただし、近視が進行していますので、生活改善はとても重要です。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。
          </div>
          <div id="result_text22" style="display:none;">致命的ではないですが、視力差が出始めています。<br>
            両眼とも近視がある程度進行してきていますので、生活改善やトレーニングで近視を食い止めたいところです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text23" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            ただし、良い方の目を酷使する状態にあり、一気に視力が低下する可能性があります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text24" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            ただし、良い方の目を酷使する状態にあり、一気に視力が低下する可能性があります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text25" style="display:none;">運転免許を取る際の眼鏡不要のギリギリレベル、もしくは下回っている状態です。<br>
            日常生活に大きな不自由はありませんので、即メガネの必要はありませんが、ここで食い止めないと、裸眼での生活が難しくなります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text26" style="display:none;">だんだんと、日常生活で不自由を感じてくるレベルです。<br>
            両眼とも近視が進行していますので、生活改善やトレーニングでこれ以上の近視を食い止めたいところです。<br>
            また、乱視があるようですので、もしかしますと遠くを見る際などに目を細めていないでしょうか。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text27" style="display:none;">遠くを見る時以外は、一応裸眼でも生活できるレベルです。<br>
            ただし、良い方の目を酷使する事で、一気に視力が落ちる可能性があります。<br>
            両眼とも近視が進行していますので、生活改善やトレーニングで近視進行を食い止めたいところです。<br>
            また、乱視があるようですので、もしかしますと遠くを見る際などに目を細めていないでしょうか。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text28" style="display:none;">視力向上が可能なギリギリのレベルです。<br>
            また、乱視があるようですので、もしかしますと遠くを見る際などに目を細めていないでしょうか。<br>
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text29" style="display:none;">視力向上が難しくなるレベルです。<br>
            また、乱視があるようですので、もしかしますと遠くを見る際などに目を細めていないでしょうか。<br>	
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text30" style="display: block;">メガネやコンタクトの使用が必要なレベルです。<br>
            両眼とも0.1以下で乱視もあるようですので、目を細める癖が出ているのではないでしょうか。<br>
            今すぐ眼科等で検査を受けることをお勧めします。<br>
            すでにメガネやコンタクトをご利用されている方も、視力の値としては大きな変化はないかもしれませんが、近視の数値としては進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            まずは、眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text31" style="display:none;">素晴らしい！現時点では全く問題がありません。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、正視を通り越して近視になる場合がありますので、定期的な検査をお忘れなく！
            </div>
          <div id="result_text32" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、正視を通り越して近視になる場合がありますので、定期的な検査をお忘れなく！</div>
          <div id="result_text33" style="display:none;">左右に視力差があるのが気になります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            このまま放っておくと、ますます差が広がり、やがて良い方の視力も落ちてくる可能性が高いです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text34" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            不自由があれば、メガネやコンタクトで矯正を行う必要が出てくるかもしれません。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text35" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            不自由があれば、メガネやコンタクトでの矯正を行う必要が出てくるかもしれません。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text36" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            近くを見る事が多い現代では、最も過ごしやすい視力と言えます。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、一気に近視になる場合がありますので、定期的な検査をお忘れなく！</div>
          <div id="result_text37" style="display:none;">致命的ではないですが、視力差が出始めています。<br>
            左右いずれかの近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、近視がある程度進行してきていますので、生活改善やトレーニングで近視を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text38" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            この場合、良い方の目を酷使する状態にあり、一気に視力が低下する恐れがあります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text39" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            この場合、良い方の目を酷使する状態にあり、一気に視力が低下する恐れがあります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text40" style="display:none;">運転免許を取る際の眼鏡不要のギリギリレベル、もしくは下回っている状態です。<br>
            左右いずれかの近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            日常生活に大きな不自由はありませんので、即メガネの必要はありませんが、ここで食い止めないと、裸眼での生活が難しくなります。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text41" style="display:none;">だんだんと、日常生活で不自由を感じてくるレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、近視が進行していますので、生活改善やトレーニングでこれ以上の近視を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text42" style="display:none;">遠くを見る時以外は、一応裸眼でも生活できるレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、良い方の目を酷使する事で、一気に視力が落ちる恐れがあります。<br>
            今すぐ、生活改善やトレーニングで近視進行を食い止めたいところです。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text43" style="display:none;">視力向上が可能なギリギリのレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text44" style="display:none;">視力向上が難しくなるレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>	
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text45" style="display:none;">メガネやコンタクトの使用が必要なレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>
            今すぐ眼科等で検査を受けることをお勧めします。<br>
            すでにメガネやコンタクトをご利用されている方も、視力の値としては大きな変化はないかもしれませんが、近視の数値としては進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text46" style="display:none;">素晴らしい！現時点では全く問題がありません。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、正視を通り越して近視になる場合がありますので、定期的な検査をお忘れなく！<br>
            また、乱視があるようですので、目を細める癖などに注意してください。
            </div>
          <div id="result_text47" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、正視を通り越して近視になる場合がありますので、定期的な検査をお忘れなく！<br>
            また、乱視があるようですので、目を細める癖などに注意してください。</div>
          <div id="result_text48" style="display:none;">左右に視力差があるのが気になります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            このまま放っておくと、ますます差が広がり、やがて良い方の視力も落ちてくる可能性が高いです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text49" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            不自由があれば、メガネやコンタクトで矯正を行う必要が出てくるかもしれません。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text50" style="display:none;">距離感や遠近感が取りづらくなる、大きな視力差があります。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            不自由があれば、メガネやコンタクトでの矯正を行う必要が出てくるかもしれません。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。
          </div>
          <div id="result_text51" style="display:none;">現時点で日常生活に不自由はないでしょう。<br>
            近くを見る事が多い現代では、最も過ごしやすい視力と言えます。<br>
            現在は遠視傾向のようですが、現在の生活環境で軽い遠視の場合は、一気に近視になる場合がありますので、定期的な検査をお忘れなく！<br>
            また、乱視があるようですので、目を細める癖などに注意してください。</div>
          <div id="result_text52" style="display:none;">致命的ではないですが、視力差が出始めています。<br>
            左右いずれかの近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、近視がある程度進行してきていますので、生活改善やトレーニングで近視を食い止めたいところです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text53" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            この場合、良い方の目を酷使する状態にあり、一気に視力が低下する恐れがあります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text54" style="display:none;">片目はある程度、視力が出ていますので、日常生活でそれほど不自由は感じないレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            この場合、良い方の目を酷使する状態にあり、一気に視力が低下する恐れがあります。<br>
            また、視力差が大きいため距離感が取りづらく、スポーツや運転に支障が出る場合があります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text55" style="display:none;">運転免許を取る際の眼鏡不要のギリギリレベル、もしくは下回っている状態です。<br>
            左右いずれかの近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            日常生活に大きな不自由はありませんので、即メガネの必要はありませんが、ここで食い止めないと、裸眼での生活が難しくなります。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text56" style="display:none;">だんだんと、日常生活で不自由を感じてくるレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、近視が進行していますので、生活改善やトレーニングでこれ以上の近視を食い止めたいところです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text57" style="display:none;">遠くを見る時以外は、一応裸眼でも生活できるレベルです。<br>
            低い方の視力の近視/遠視結果が「不明」の場合は、近視の可能性があります。<br>
            その場合、良い方の目を酷使する事で、一気に視力が落ちる恐れがあります。<br>
            今すぐ、生活改善やトレーニングで近視進行を食い止めたいところです。<br>
            また、乱視があるようですので、目を細める癖などに注意してください。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text58" style="display:none;">視力向上が可能なギリギリのレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            また、両眼とも0.2以下で乱視もあるようですので、目を細める癖が出ているのではないでしょうか。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text59" style="display:none;">視力向上が難しくなるレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>	
            視力が0.1以下に落ちる方のほとんどは、成長期の間に落ちます。<br>
            そこから言えることは、20歳までに維持（向上）した視力は、財産だということです。<br>
            全く何もせずに、視力が0.1以下まで落ちるリスクを追うことを考えると、たとえ視力1.0以上になることが無理だとしても、可能な限りの視力になることを目指すことが、得策と言えます。<br>
            20歳を超えている方も、裸眼視力の大きな変化はありませんが、近視自体は進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            また、乱視があるようですので、もしかしますと遠くを見る際などに目を細めていないでしょうか。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。</div>
          <div id="result_text60" style="display:none;">メガネやコンタクトの使用が必要なレベルです。<br>
            おそらく両眼とも近視の可能性が高いです。<br>
            近視/遠視テストを裸眼で行っていないのではないでしょうか。<br>
            今すぐ眼科等で検査を受けることをお勧めします。<br>
            すでにメガネやコンタクトをご利用されている方も、視力の値としては大きな変化はないかもしれませんが、近視の数値としては進行し続けますので、生活改善と何かしらのケアは必要です。<br>
            また、両眼とも0.1以下で乱視もあるようですので、目を細める癖が出ているのではないでしょうか。<br>
            眼科等で詳しい検査をして、<a href="<?php echo site_url();?>/visionpossibility">視力向上可能性判定</a>を行ってみてください。
            </div>
          <div class="result flex space-around">
            <div class="nearsighted">
                <div class="flex result-title space-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>視 力</p>
                </div>
                <div class="flex eyes space-center">
                    <div>左</div>
                    <div>右</div>
                </div>
                <div class="flex result-value space-around">
                    <div id="view_r_result">0.08</div>
                    <div id="view_l_result">0.08</div>
                </div>
            </div>
            <div class="farsighted">
                <div class="flex result-title space-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>近 視 / 遠 視</p>
                </div>
                <div class="flex eyes space-center">
                    <div>左</div>
                    <div>右</div>
                </div>
                <div class="flex result-value space-around">
                    <div id="view_r_kinshi">不明</div>
                    <div id="view_l_kinshi">不明</div>
                </div>
            </div>
            <div class="astigmatism">
                <div class="flex result-title space-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>乱 視</p>
                </div>
                <div class="flex eyes space-center">
                    <div>左</div>
                    <div>右</div>
                </div>
                <div class="flex result-value space-around">
                    <div id="view_r_ranshi">乱視あり</div>
                    <div id="view_l_ranshi">乱視あり</div>
                </div>
            </div>
          </div>
          <p>※ご使用のディスプレイの輝度や解像度によって、結果に誤差が生じる可能性があります。<br/>
          この検査はあくまで簡易的な参考値としてご利用ください。<br/> より正確な視力の測定をご希望の場合は、眼科やメガネ店での検査をおすすめします。</p>
        </div>
      </div>
      <div class="indicatorFooter">
        <span class="indicator active"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
      </div>
    </div>
  </section>
  <div class="sectionBack"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/visionImproment.png" alt=""></div>
  <div class="toast-container"></div>
</main>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/visionTest.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/notification.js"></script>
<?php get_footer(); ?>