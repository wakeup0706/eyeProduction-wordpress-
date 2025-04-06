<?php 
    get_header();
?>
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
                <div class="year-input">
                  <input type="text">
                </div>
                <div class="bnbutton">
                  <button id="button-1">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-2">
                <div class="description">裸眼視力</div>
                <div class="naVision">
                  <div class="year-input right-eye"><input type="text"></div>
                  <div class="year-input left-eye"><input type="text"></div>
                </div>
                <div class="bnbutton">
                  <button id="button-2">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-3">
                <div class="description">近 視 / 遠 視</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">近視</div>
                  <div><input type="radio" name="statuse">遠視</div>
                  <div><input type="radio" name="statuse">不明</div>
                </div>
                <div class="bnbutton">
                  <button id="button-3">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-4">
                <div class="description">近 視 / 遠 視</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">近視</div>
                  <div><input type="radio" name="statuse">遠視</div>
                  <div><input type="radio" name="statuse">不明</div>
                </div>
                <div class="bnbutton">
                  <button id="button-4">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-5">
                <div class="description">乱 視</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">あり</div>
                  <div><input type="radio" name="statuse">なし</div>
                </div>
                <div class="bnbutton">
                  <button id="button-5">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-6">
                <div class="description">乱 視</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">あり</div>
                  <div><input type="radio" name="statuse">なし</div>
                </div>
                <div class="bnbutton">
                  <button id="button-6">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-7">
                <div class="description">近視/遠視が始まった時期はいつですか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">1年以内</div>
                  <div><input type="radio" name="statuse">1年以上～2年以下</div>
                  <div><input type="radio" name="statuse">3年以上</div>
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
                  <div><input type="radio" name="statuse">あり</div>
                  <div><input type="radio" name="statuse">なし</div>
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
                  <div><input type="checkbox" name="statuse">ゲームが好き</div>
                  <div><input type="checkbox" name="statuse">マンガなど読書が好き</div>
                  <div><input type="checkbox" name="statuse">お絵書きが好き</div>
                  <div><input type="checkbox" name="statuse">テレビやDVDを良く見る</div>
                  <div><input type="checkbox" name="statuse">姿勢が悪い</div>
                  <div><input type="checkbox" name="statuse">塾や習い事が多い</div>
                  <div><input type="checkbox" name="statuse">外であまり遊ばない</div>
                  <div><input type="checkbox" name="statuse">遺伝が気になる</div>
                </div>
                <div class="bnbutton">
                  <button id="button-9">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-10">
                <div class="description">目を細める癖は出ていますか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">はい</div>
                  <div><input type="radio" name="statuse">いいえ</div>
                </div>
                <div class="bnbutton">
                  <button id="button-10">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-11">
                <div class="description">メガネを使用していますか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">はい</div>
                  <div><input type="radio" name="statuse">いいえ</div>
                </div>
                <div class="bnbutton">
                  <button id="button-11">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-12">
                <div class="description">気質は、どちらにあてはまりますか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">集中力が強く、興味のあることに没頭するタイプ</div>
                  <div><input type="radio" name="statuse">どちらかというと、注意力散漫なタイプ</div>
                </div>
                <div class="bnbutton">
                  <button id="button-12">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-13">
                <div class="description">視力低下の始まった時期に、引越しなど大きく環境が変わったり、時間的な余裕が無いなど、ストレスに感じるような状況はありますか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">あり</div>
                  <div><input type="radio" name="statuse">なし</div>
                  <div><input type="radio" name="statuse">わからない</div>
                </div>
                <div class="bnbutton">
                  <button id="button-13">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-14">
                <div class="description">ご両親は近視ですか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">両親とも</div>
                  <div><input type="radio" name="statuse">片親のみ</div>
                  <div><input type="radio" name="statuse">近視ではない</div>
                </div>
                <div class="bnbutton">
                  <button id="button-14">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-15">
                <div class="description">上記で「両親とも」「片親のみ」をお選び頂いた方は、ご両親の近視が始まった時期を教えてください。</div>
                <div class="note">※「ご両親とも」をお選び頂いてご両親の視力低下の時期がそれぞれ違う場合は、先に近視が始まった方の時期をお選び下さい。</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">小学生</div>
                  <div><input type="radio" name="statuse">中学生</div>
                  <div><input type="radio" name="statuse">高校生</div>
                  <div><input type="radio" name="statuse">大学生</div>
                  <div><input type="radio" name="statuse">成人後</div>
                  <div><input type="radio" name="statuse">不 明</div>
                </div>
                <div class="bnbutton">
                  <button id="button-before3" class="beforeButton">スキップ</button>
                  <button id="button-15">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-16">
                <div class="description">眼科で屈折検査をした際の値はご存じでしょうか？</div>
                <div class="statuses">
                  <div><input type="radio" name="statuse">知っている</div>
                  <div><input type="radio" name="statuse">知らない</div>
                </div>
                <div class="bnbutton">
                  <button id="button-before4" class="beforeButton">スキップ</button>
                  <button id="button-16">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-17">
                <div class="description">上記で「両親とも」「片親のみ」をお選び頂いた方は、ご両親の近視が始まった時期を教えてください。</div>
                <div class="note">■&nbsp;屈折度数（球面レンズ・Sph）<br/>&nbsp;&nbsp;&nbsp;&nbsp;
                  屈折度数の数値は、近視の方はマイナス（-）、遠視の方はプラス（+）となります。<br/>&nbsp;&nbsp;&nbsp;&nbsp;入力例）近視の方：-1.25、遠視の方：1.0</div>
                <div class="statuses">
                  <div class="statuse right-eye"><input type="text"></div>
                  <div class="statuse"><input type="text"></div>
                </div>
                <div class="note">■&nbsp;乱視度数（円柱レンズ・Cyl)</div>
                <div class="statuses">
                  <div class="statuse right-eye"><input type="text"></div>
                  <div class="statuse"><input type="text"></div>
                </div>
                <div class="note">■&nbsp;矯正視力</div>
                <div class="statuses">
                  <div class="statuse right-eye"><input type="text"></div>
                  <div class="statuse"><input type="text"></div>
                </div>
                <div class="bnbutton">
                  <button id="button-before5" class="beforeButton">スキップ</button>
                  <button id="button-17">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-18">
                <div class="description">お名前(フルネーム)</div>
                <div class="year-input">
                  <input type="text">
                </div>
                <div class="bnbutton">
                  <button id="button-18">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-19">
                <div class="description">メールアドレス</div>
                <div class="year-input">
                  <input type="text">
                </div>
                <div class="bnbutton">
                  <button id="button-19">次  へ</button>
                </div>
              </div>
              <div class="content__box  step-20 ">
                <div class="description">あなたに合ったサービスの厳選が完了しました！</div>
                <div class="note">登録していただいたアドレス宛に厳選したサービスをお送り致します。以下からご確認お願いいたします。</div>
                <div class="year-input">
                  <input type="text">
                </div>
                <div class="bnbutton">
                  <div class="confirm"><input type="checkbox">メールの配信に同意する</div>
                  <button id="myBtn">確認画面へ</button>
                </div>
              </div>
              <div id="myModal" class="modal">
                <div class="modal-content">
                  <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>視力向上可能性判定</h2>
                  </div>
                  <div class="modal-body">
                    <div class="row1">
                      <div>年齢&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" value="18">&nbsp;歳</div>
                      <div>裸眼視力&nbsp;&nbsp;:&nbsp;&nbsp;右 <input type="text" value="0.3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;左  <input type="text" value="0.9"></div>
                    </div>
                    <div class="row2">
                      <div>近視 / 遠視&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="不明">
                          <option value="近視">近視</option>
                          <option value="遠視">遠視</option>
                          <option value="不明">不明</option>
                        </select>
                      </div>
                      <div>近視 / 遠視&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="不明">
                          <option value="近視">近視</option>
                          <option value="遠視">遠視</option>
                          <option value="不明">不明</option>
                        </select>
                      </div>
                    </div>
                    <div class="row3">
                      <div>乱視&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="あり">
                          <option value="あり">あり</option>
                          <option value="なし">なし</option>
                        </select>
                      </div>
                      <div>乱視&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="あり">
                          <option value="あり">あり</option>
                          <option value="なし">なし</option>
                        </select>
                      </div>
                    </div>
                    <div class="row4">
                      <div>近視/遠視が始まった時期はいつですか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="1年以内">
                          <option value="1年以内">1年以内</option>
                          <option value="1年以上～2年以下">1年以上～2年以下</option>
                          <option value="3年以上">3年以上</option>
                        </select>
                      </div>
                      <div>視力の良かった時期は確認されていますか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="はい">
                          <option value="はい">はい</option>
                          <option value="いいえ">いいえ</option>
                        </select>
                      </div>
                    </div>
                    <div class="row5">
                      <div>近視/視力低下の原因となる事で、何かお心当たりはございますか？</div>
                      <div class="causes">
                        <div><input type="checkbox" checked>ゲームが好き</div>
                        <div><input type="checkbox">マンガなど読書が好き</div>
                        <div><input type="checkbox"checked>お絵書きが好き</div>
                        <div><input type="checkbox" checked>テレビやDVDを良く見る</div>
                        <div><input type="checkbox">姿勢が悪い</div>
                        <div><input type="checkbox">塾や習い事が多い</div>
                        <div><input type="checkbox" checked>外であまり遊ばない</div>
                        <div><input type="checkbox">遺伝が気になる</div>
                      </div>
                    </div>
                    <div class="row4">
                      <div>気質は、どちらにあてはまりますか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="はい">
                          <option value="はい">はい</option>
                          <option value="いいえ">いいえ</option>
                        </select>
                      </div>
                      <div>メガネを使用していますか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="はい">
                          <option value="はい">はい</option>
                          <option value="いいえ">いいえ</option>
                        </select>
                      </div>
                      <div>気質は、どちらにあてはまりますか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="集中力が強く、興味のあることに没頭するタイプ">
                          <option value="集中力が強く、興味のあることに没頭するタイプ">集中力が強く、興味のあることに没頭するタイプ</option>
                          <option value="どちらかというと、注意力散漫なタイプ">どちらかというと、注意力散漫なタイプ</option>
                        </select>
                      </div>
                      <div>視力低下の始まった時期に、引越しなど大きく環境が変わったり、<br/>
                        時間的な余裕が無いなど、ストレスに感じるような状況はありますか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="あり">
                          <option value="あり">あり</option>
                          <option value="なし">なし</option>
                          <option value="わからない">わからない</option>
                        </select>
                      </div>
                      <div>ご両親は近視ですか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="両親とも">
                          <option value="両親とも">両親とも</option>
                          <option value="片親のみ">片親のみ</option>
                          <option value="近視ではない">近視ではない</option>
                        </select>
                      </div>
                      <div>上記で「両親とも」「片親のみ」をお選び頂いた方は、<br/>ご両親の近視が始まった時期を教えてください。&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="小学生">
                          <option value="小学生">小学生</option>
                          <option value="中学生">中学生</option>
                          <option value="高校生">高校生</option>
                          <option value="大学生">大学生</option>
                          <option value="成人後">成人後</option>
                          <option value="不明">不明</option>
                        </select>
                      </div>
                      <div>眼科で屈折検査をした際の値はご存じでしょうか？&nbsp;&nbsp;:&nbsp;&nbsp;
                        <select name="" id="" vlaue="知っている">
                          <option value="知っている">知っている</option>
                          <option value="知らない">知らない</option>
                        </select>
                      </div>
                      <div>屈折度数（球面レンズ・Sph）&nbsp;&nbsp;:&nbsp;&nbsp;右 <input type="text" value="0.3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;左  <input type="text" value="0.9"></div>
                      <div>乱視度数（円柱レンズ・Cyl）&nbsp;&nbsp;:&nbsp;&nbsp;右 <input type="text" value="0.3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;左  <input type="text" value="0.9"></div>
                      <div>矯正視力&nbsp;&nbsp;:&nbsp;&nbsp;右 <input type="text" value="0.3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;左  <input type="text" value="0.9"></div>
                    </div>
                    <div class="row1">
                      <div>お名前(フルネーム)&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" value="松本 直樹"></div>
                      <div class="mailForm">メールアドレス&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" value="test@gmail.com"></div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="bnbutton">
                      <button id="button-before3" class="beforeButton">スキップ</button>
                      <button id="button-15">次  へ</button>
                    </div>
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
  </main>
  <?php
  get_footer(); 
?>