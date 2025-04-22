<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Common/notification.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/visionPossibility.css" />
  <main>
    <section class="visionPossibility container">
      <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
      <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
      <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
      <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
      <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
      <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
      <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> 視力向上可能性判定</span></div>
      <div class="categoryName"><p>視力向上可能性判定</p></div>
      
      <div class="visionPossibiliting">
          <div class="content">
            <div class="content__box  step-1 visible__no-animation">
              <div class="description">年齢</div>
              <div class="presentment">半角数字で入力してください。</div>
              <div class="year-input">
                <input id="year" type="text">
              </div>
              <div class="bnbutton">
                <button id="button-1">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-2">
              <div class="description">裸眼視力</div>
              <div class="presentment">1.0や0.05など小数点を含めて半角で入力と追記</div>
              <div class="naVision">
                <div class="year-input right-eye">
                  <input type="text" id="shiryuku-right">
                </div>
                <div class="year-input left-eye">
                  <input type="text" id="shiryuku-left">
                </div>
              </div>
              <div class="bnbutton">
                <button id="button-2">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-3">
              <div class="description">近 視 / 遠 視</div>
              <div class="statuses">
                <div><input type="radio" name="nearsightedRight" id="nearsightedRight1" value="近視"><label for="nearsightedRight1">近視</label></div>
                <div><input type="radio" name="nearsightedRight" id="nearsightedRight2" value="遠視"><label for="nearsightedRight2">遠視</label></div>
                <div><input type="radio" name="nearsightedRight" id="nearsightedRight3" value="不明"><label for="nearsightedRight3">不明</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-3">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-4">
              <div class="description">近 視 / 遠 視</div>
              <div class="statuses">
                <div><input type="radio" name="nearsightedLeft" id="nearsightedLeft1" value="近視"><label for="nearsightedLeft1">近視</label></div>
                <div><input type="radio" name="nearsightedLeft" id="nearsightedLeft2" value="遠視"><label for="nearsightedLeft2">遠視</label></div>
                <div><input type="radio" name="nearsightedLeft" id="nearsightedLeft3" value="不明"><label for="nearsightedLeft3">不明</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-4">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-5">
              <div class="description">乱 視</div>
              <div class="statuses">
                <div><input type="radio" name="astigmatismRight" id="astigmatismRight1" value="あり"><label for="astigmatismRight1">あり</label></div>
                <div><input type="radio" name="astigmatismRight" id="astigmatismRight2" value="なし"><label for="astigmatismRight2">なし</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-5">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-6">
              <div class="description">乱 視</div>
              <div class="statuses">
                <div><input type="radio" name="astigmatismLeft" id="astigmatismLeft1" value="あり"><label for="astigmatismLeft1">あり</label></div>
                <div><input type="radio" name="astigmatismLeft" id="astigmatismLeft2" value="なし"><label for="astigmatismLeft2">なし</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-6">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-7">
              <div class="description">近視/遠視が始まった時期はいつですか？</div>
              <div class="statuses">
                <div><input type="radio" name="begin" id="begin1" value="1年以内"><label for="begin1">1年以内</label></div>
                <div><input type="radio" name="begin" id="begin2" value="1年以上～2年以下"><label for="begin2">1年以上～2年以下</label></div>
                <div><input type="radio" name="begin" id="begin3" value="3年以上"><label for="begin3">3年以上</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-before" class="beforeButton">スキップ</button>
                <button id="button-7">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-8">
              <div class="description">視力の良かった時期は確認されていますか？<br/>
                （左右とも視力1.0以上の時期）</div>
              <div class="statuses">
                <div><input type="radio" name="confirmed" id="confirmed1" value="あり"><label for="confirmed1">あり</label></div>
                <div><input type="radio" name="confirmed" id="confirmed2" value="いいえ"><label for="confirmed2">いいえ</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-before2" class="beforeButton">スキップ</button>
                <button id="button-8">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-9">
              <div class="description">視力低下の原因となる事で、何かお心当たりはございますか？<br/>
                （複数選択可）</div>
              <div class="statuses">
                <div><input type="checkbox" name="causing" id="causing1" value="ゲームが好き"><label for="causing1">ゲームが好き</label></div>
                <div><input type="checkbox" name="causing" id="causing2" value="マンガなど読書が好き"><label for="causing2">マンガなど読書が好き</label></div>
                <div><input type="checkbox" name="causing" id="causing3" value="お絵書きが好き"><label for="causing3">お絵書きが好き</div>
                <div><input type="checkbox" name="causing" id="causing4" value="テレビやDVDを良く見る"><label for="causing4">テレビやDVDを良く見る</label></div>
                <div><input type="checkbox" name="causing" id="causing5" value="姿勢が悪い"><label for="causing5">姿勢が悪い</div>
                <div><input type="checkbox" name="causing" id="causing6" value="塾や習い事が多い"><label for="causing6">塾や習い事が多い</label></div>
                <div><input type="checkbox" name="causing" id="causing7" value="外であまり遊ばない"><label for="causing7">外であまり遊ばない</label></div>
                <div><input type="checkbox" name="causing" id="causing8" value="遺伝が気になる"><label for="causing8">遺伝が気になる</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-9">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-10">
              <div class="description">目を細める癖は出ていますか？</div>
              <div class="statuses">
                <div><input type="radio" name="squinting" id="squinting1" value="はい"><label for="squinting1">はい</label></div>
                <div><input type="radio" name="squinting" id="squinting2" value="いいえ"><label for="squinting2">いいえ</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-10">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-11">
              <div class="description">メガネを使用していますか？</div>
              <div class="statuses">
                <div><input type="radio" name="glasses" id="glasses1" value="はい"><label for="glasses1">はい</label></div>
                <div><input type="radio" name="glasses" id="glasses2" value="いいえ"><label for="glasses2">いいえ</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-11">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-12">
              <div class="description">気質は、どちらにあてはまりますか？</div>
              <div class="statuses">
                <div><input type="radio" name="temperament" id="temperament1" value="集中力が強く、興味のあることに没頭するタイプ"><label for="temperament1">集中力が強く、興味のあることに没頭するタイプ</label></div>
                <div><input type="radio" name="temperament" id="temperament2" value="どちらかというと、注意力散漫なタイプ"><label for="temperament2">どちらかというと、注意力散漫なタイプ</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-12">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-13">
              <div class="description">視力低下の始まった時期に、引越しなど大きく環境が変わったり、時間的な余裕が無いなど、ストレスに感じるような状況はありますか？</div>
              <div class="statuses">
                <div><input type="radio" name="deteriorate" id="deteriorate1" value="あり"><label for="deteriorate1">あり</label></div>
                <div><input type="radio" name="deteriorate" id="deteriorate2" value="なし"><label for="deteriorate2">なし</label></div>
                <div><input type="radio" name="deteriorate" id="deteriorate3" value="わからない"><label for="deteriorate3">わからない</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-13">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-14">
              <div class="description">ご両親は近視ですか？</div>
              <div class="statuses">
                <div><input type="radio" name="parents" id="parents1" value="両親とも"><label for="parents1">両親とも</label></div>
                <div><input type="radio" name="parents" id="parents2" value="片親のみ"><label for="parents2">片親のみ</label></div>
                <div><input type="radio" name="parents" id="parents3" value="近視ではない"><label for="parents3">近視ではない</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-14">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-15">
              <div class="description">上記で「両親とも」「片親のみ」をお選び頂いた方は、ご両親の近視が始まった時期を教えてください。</div>
              <div class="note">※「ご両親とも」「片親のみ」をお選び頂いてご両親の視力低下の時期がそれぞれ違う場合は、先に近視が始まった方の時期をお選び下さい。</div>
              <div class="statuses">
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia1" value="小学生"><label for="parentsMyopia1">小学生</label></div>
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia2" value="中学生"><label for="parentsMyopia2">中学生</label></div>
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia3" value="高校生"><label for="parentsMyopia3">高校生</label></div>
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia4" value="大学生"><label for="parentsMyopia4">大学生</label></div>
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia5" value="成人後"><label for="parentsMyopia5">成人後</label></div>
                <div><input type="radio" name="parentsMyopia" id="parentsMyopia6" value="不 明"><label for="parentsMyopia6">不 明</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-before3" class="beforeButton">スキップ</button>
                <button id="button-15">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-16">
              <div class="description">眼科で屈折検査をした際の値はご存じでしょうか？</div>
              <div class="statuses">
                <div><input type="radio" name="refraction" id="refraction1" value="知っている"><label for="refraction1">知っている</label></div>
                <div><input type="radio" name="refraction" id="refraction2" value="知らない"><label for="refraction2">知らない</label></div>
              </div>
              <div class="bnbutton">
                <button id="button-16">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-17">
              <div class="description">前項の質問で「知っている」をお選び頂いた方は、データをご入力頂けますと、より詳しいアドバイスができます。</div>
              <div class="note">■&nbsp;屈折度数（球面レンズ・Sph）<br/>&nbsp;&nbsp;&nbsp;&nbsp;
                屈折度数の数値は、近視の方はマイナス（-）、遠視の方はプラス（+）となります。<br/>&nbsp;&nbsp;&nbsp;&nbsp;入力例）近視の方：-1.25、遠視の方：1.0</div>
              <div class="statuses">
                <div class="statuse right-eye"><input type="text" id="refractiveRight"></div>
                <div class="statuse"><input type="text" id="RefractiveLeft"></div>
              </div>
              <div class="note">■&nbsp;乱視度数（円柱レンズ・Cyl）</div>
              <div class="statuses">
                <div class="statuse right-eye"><input type="text" id="AstigmatismRight"></div>
                <div class="statuse"><input type="text" id="AstigmatismLeft"></div>
              </div>
              <div class="note">■&nbsp;矯正視力</div>
              <div class="statuses">
                <div class="statuse right-eye"><input type="text" id="CorrectedRight"></div>
                <div class="statuse"><input type="text" id="CorrectedLeft"></div>
              </div>
              <div class="bnbutton">
                <button id="button-before5" class="beforeButton">スキップ</button>
                <button id="button-17">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-18">
              <div class="description">お名前(フルネーム)</div>
              <div class="year-input">
                <input type="text" id="fullName">
              </div>
              <div class="bnbutton">
                <button id="button-18">次  へ</button>
              </div>
            </div>
            <div class="content__box  step-19 ">
              <div class="description">入力が完了しました。</div>
              <div class="presentment">メールアドレスを入力いただきますと、判定結果をメールでお送りいたします。</div>
              <div class="year-input">
                <p>フォームの上にメールアドレスと記載</p>
                <input type="text" id="emailAdress">
              </div>
              <div class="bnbutton">
                <button id="myBtn">確認画面へ</button>
              </div>
            </div>
            <div id="myModal" class="modal">
              <?php echo do_shortcode('[contact-form-7 id="9154a3b" title="contact testresult"]'); ?>
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
            <span class="indicator"></span>
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
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/visionPossibility.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/notification.js"></script>
<?php get_footer(); ?>