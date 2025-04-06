<?php 
    get_header();
?>
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
                      <li>左右、片方の目から順番に測定して下さい。</li>
                      <li>ランドルト環（Cマーク）の隙間の開いている方向の矢印をクリックして下さい。</li>
                      <li>力まず、肩の力を抜いてリラックスして測定して下さい。</li>
                      <li>同じ数値を2回成功すると次に進みます。 2回失敗すると測定終了になります。</li>
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
              <div class="description">お使いの環境（PC、スマホ/タブレット）により表示サイズが異なります。<br/>
                画面の100円硬貨画像と、実物の100円硬貨を照らし合わせて、同じ縮尺になるように拡大/縮小バーで調整してください。</div>
              <div class="range-slider">
                <div class="range-slider__input">
                  <input class="input-range" orient="vertical" type="range" step="0.1" value="5" min="10" max="100" id="coin">
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
              <div class="description">測定を開始する視力を選択してください。<br/>
                選択したら、最下段の「次へ」ボタンから測定を開始してください。<br/>
                ※可能性として考えられる最も悪い視力からスタートすると、効率良く検査ができます。</div>
              <select name="" id="" class="select-vision">
                <option value="">0.01</option>
                <option value="">0.02</option>
                <option value="">0.04</option>
                <option value="">0.1</option>
                <option value="">0.5</option>
                <option value="">0.8</option>
              </select>
              <div class="direction-eye">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest4.png" alt="">
                <p>右目から測定してください。左の目を左手で隠すかつぶって下さい。</p>
              </div>
              <div class="direction-eye">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest5.png" alt="" id="desktop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest6.png" alt="" id="mobile">
                <p>ランドルト環（Ｃマーク）の開いている方向（8方向）を、画面にある方向ボタンでタップもしくはマウスでクリックして下さい。</p>
              </div>
              <p>※測定は右目から行ってください。</p>
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
              <div class="description">右目の測定を行います。<br/>
                ランドルト環（Ｃマーク）の開いている方向（8方向）を、<br/>
                画面にある方向ボタンでタップもしくはマウスでクリックして下さい。</div>
              <div class="vision-number"><p>1.0</p></div>
              <div class="vision-mark">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/Vector.png" alt="">
              </div>
              <div class="directionButtons">
                <div class="groub">
                  <div>🢄</div>
                  <div>🢁</div>
                  <div>🢅</div>
                </div>
                <div class="groub">
                  <div>🢀</div>
                  <div>🢂</div>
                </div>
                <div class="groub">
                  <div>🢇</div>
                  <div>🢃</div>
                  <div>🢆</div>
                </div>
              </div>
              <div class="bnbutton">
                <button id="button-4">次  へ</button>
              </div>
            </div>

            <div class="content__box step-5">
              <div class="subject">
                <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
                <div class="subjectTitle"><p class="subjectText">レッド・グリーンテスト</p></div>
              </div>
              <div class="description">この検査は、必ず裸眼で行ってください。<br/>
                まずは右目から、視力検査と同じ距離で下の画像を見てください。<br/>
                赤い背景と緑の背景に書かれた指標のうち、どちらがはっきりと濃く見えますか？<br/>
                濃く見える画像をクリックしてください。<br/>
                どちらとも言えない場合は、下のボタンを押してください。</div>
              <div class="visionTestTitle"><p>右目測定中</p></div>
              <div class="vision-test">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test1.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test2.png" alt="">
              </div>
              
              <div class="bnbutton">
                <button id="button-5">次  へ</button>
              </div>
            </div>

            <div class="content__box step-6">
              <div class="subject">
                <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
                <div class="subjectTitle"><p class="subjectText">レッド・グリーンテスト</p></div>
              </div>
              <div class="description">この検査は、必ず裸眼で行ってください。<br/>
                まずは右目から、視力検査と同じ距離で下の画像を見てください。<br/>
                赤い背景と緑の背景に書かれた指標のうち、どちらがはっきりと濃く見えますか？<br/>
                濃く見える画像をクリックしてください。<br/>
                どちらとも言えない場合は、下のボタンを押してください。</div>
              <div class="visionTestTitle"><p>左目測定中</p></div>
              <div class="vision-test">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test1.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/vision-test2.png" alt="">
              </div>
              
              <div class="bnbutton">
                <button id="button-6">次  へ</button>
              </div>
            </div>

            <div class="content__box step-7">
              <div class="subject">
                <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
                <div class="subjectTitle"><p class="subjectText">乱視検査</p></div>
              </div>
              <div class="description">まずは、右目から始めてください。<br/>
                視力検査と同じ距離で下の画像を正面から見てください。<br/>
                下図の放射状に伸びる各線は同じ太さ、濃度で描かれています。<br/>
                乱視がある場合は線に濃淡や太さのばらつきが見られます。</div>
              <div class="visionTestTitle"><p>右目測定中</p></div>
              <div class="vision-test7">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest7.png" alt="">
              </div>
              <div class="visionTestResult">
                <input type="radio" name="result">放射状に伸びる各線は同じ太さ、濃度に見える<br/><br/>
                <input type="radio" name="result">放射状に伸びる各線の太さ、濃度にばらつきがある
              </div>
              <div class="bnbutton">
                <button id="button-7">次  へ</button>
              </div>
            </div>

            <div class="content__box step-8">
              <div class="subject">
                <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
                <div class="subjectTitle"><p class="subjectText">乱視検査</p></div>
              </div>
              <div class="description">まずは、右目から始めてください。<br/>
                視力検査と同じ距離で下の画像を正面から見てください。<br/>
                下図の放射状に伸びる各線は同じ太さ、濃度で描かれています。<br/>
                乱視がある場合は線に濃淡や太さのばらつきが見られます。</div>
              <div class="visionTestTitle"><p>左目測定中</p></div>
              <div class="vision-test7">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visionTest/visionTest7.png" alt="">
              </div>
              <div class="visionTestResult">
                <input type="radio" name="result">放射状に伸びる各線は同じ太さ、濃度に見える<br/><br/>
                <input type="radio" name="result">放射状に伸びる各線の太さ、濃度にばらつきがある
              </div>
              <div class="bnbutton">
                <button id="button-8">次  へ</button>
              </div>
            </div>

            <div class="content__box step-9">
              <div class="subject">
                <div class="subjectIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionTest4.png" alt="testResult"></div>
                <div class="subjectTitle"><p class="subjectText">総合検査結果</p></div>
              </div>
              <div class="description">メガネやコンタクトの使用が必要なレベルです。<br/>
                両眼とも0.1以下で乱視もあるようですので、目を細める癖が出ているのではないでしょうか。<br/>
                今すぐ眼科等で検査を受けることをお勧めします。<br/>
                すでにメガネやコンタクトをご利用されている方も、視力の値としては大きな変化はないかもしれませんが、近視の数値としては進行し続けますので、生活改善と何かしらのケアは必要です。<br/>
                まずは、眼科等で詳しい検査をして、視力向上可能性判定を行ってみてください。</div>
              <div class="result flex space-around">
                <div class="nearsighted">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye" style="width: 36px;"><p>視 力</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div>0.08</div>
                        <div>0.08</div>
                    </div>
                </div>
                <div class="farsighted">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye" style="width: 36px;"><p>近 視 / 遠 視</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div>不明</div>
                        <div>不明</div>
                    </div>
                </div>
                <div class="astigmatism">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye" style="width: 36px;"><p>乱 視</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div>乱視あり</div>
                        <div>乱視あり</div>
                    </div>
                </div>
              </div>
              <div class="description">※ディスプレイの輝度や解像度により結果が左右される恐れがあります。あくまで参考値とお考えください。<br/>
                詳細な検査は、眼科を受診されることをお勧めします。</div>
            </div>

            <div class="content__box step-9">
              <div class="title"><h5>Step 9</h5></div>
              <div class="description">THE FINAL STEP OMG</div>
              <div class="body">OMG!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                <div>
                  <button type="submit" id="button-9" class="submit-button btn btn-primary">Done</button>
                </div>
              </div>
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
          </div>
        </div>
      </section>
      <div class="sectionBack"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/visionImproment.png" alt=""></div>
    </main>
    <?php
    get_footer(); 
?>