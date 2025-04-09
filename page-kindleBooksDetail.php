<?php  get_header();?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/kindleBooksDetail.css" />
    <main>
        <div class="container">
            <div class="breadcrumb"><span><a href=".<?php echo home_url(); ?>">TOP</a></span><span>> <a href=".<?php echo site_url();?>/kindleBooks">関連書籍</a></span><span>> 視力回復への道　第九歩目「自宅でできる視力回復方法」 </span></div>
            <div class="kindleBooksDetail-content flex space-between">
                <div class="flex-left">
                    <div class="bookData">
                        <div class="book-top">
                            <div class="book-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook1.png" alt=""></div>
                            <div class="book-menu">
                                <div class="book-menu-title"><p>豚肉 （バラ、ロース、モモなどお好きな部位）</p></div>
                                <div class="book-menu-author"><p>'' はる香（著）</p></div>
                                <div class="line"></div>
                                <div class="book-menu-price">1,760円（本体1,600円＋税10％）</div>
                                <div class="book-menu-publisher"><p>ページ数 : 244 <br/>発売日 : 2023年4月28日 <br/>ISBN : 978-4909044440</p></div>
                                <a href="https://www.amazon.co.jp/dp/9784909044440" class="amazon-button" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/amazon.svg" class="amazon-logo" alt="9784909044440">
                                    で詳細を見る
                                </a>
                            </div>
                        </div>
                        <div class="book-content">
                            <p>30,000人以上の近視に悩む子供達の視力回復をさせるお手伝いをし、また大人の方に対しても、眼精疲労、ドライアイ、老眼などの対策方法を研究・指導・普及を行う眼育総研がお届けする電子書籍の新シリーズ「視力回復への道」
                                第9回目はズバリ！“自宅でできる視力回復方法”</p>
                        </div>
                    </div>
                </div>
                <div class="flex-right">
                    <div class="title"><p>関連書籍</p></div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></a></div>
                    <div class="otherCategory">
                        <div class="otherCategory-item">
                            <a href=".<?php echo site_url();?>/visionDictionary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconMdic.png" alt=""></div>
                                <div class="otherCategory-item-text">視力回復辞書</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href=".<?php echo site_url();?>/eyeGlossary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconDic.png" alt=""></div>
                                <div class="otherCategory-item-text">目の用語辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href=".<?php echo site_url();?>/recipes">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconFood.png" alt=""></div>
                                <div class="otherCategory-item-text">目に優しいレシピ</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href=".<?php echo site_url();?>/notice">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconNotice.png" alt=""></div>
                                <div class="otherCategory-item-text">お知らせ</div>
                            </a>
                        </div>
                    </div>
                    <div class="banner"><a href="#"><img src=".<?php echo site_url();?>/<?php echo site_url();?>/assets/img/line-registration.jpg" alt=""></a></div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner2.jpg" alt=""></a></div>
                </div>
            </div>
            <div class="allVision inConteiner">
                <div class="noticeTitle">
                    <div class="noticeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/kindlBooks.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">すべての書籍</p></div>
                </div>
                
                <div class="navtabs">
                    <div class="navtab active" data-target="newest">新しい順</div>
                    <div class="navtab" data-target="oldest">古い順</div>
                    <div class="underline"></div>
                </div>

                <div id="newest" class="vision_articles card-wrapper active">
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook1.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>第十歩目「ライフスタイルを見直す</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook2.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>
                                第五歩目「とっておきの疲れ目解消法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook3.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>xバイブルシリーズ第三弾</h3>
                            <br>
                            <p>知って納得！明かりの秘密」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook4.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>
                                第九歩目「自宅でできる視力回復方法」
                            </p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook5.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>第七歩目「眼科で近視は治る？」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook6.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視第九歩目</h3>
                            <br>
                            <p>自宅でできる視力回復方法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook6.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視第九歩目</h3>
                            <br>
                            <p>自宅でできる視力回復方法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook6.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視第九歩目</h3>
                            <br>
                            <p>自宅でできる視力回復方法」</p>
                        </div>
                    </div>
                </div>
                <div id="oldest" class="vision_articles card-wrapper">
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook6.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視第九歩目</h3>
                            <br>
                            <p>自宅でできる視力回復方法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook7.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>第六歩目「近視とアレルギーは関係ある！？」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook8.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>第九歩目</h3>
                            <br>
                            <p>「自宅でできる視力回復方法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook1.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>第十歩目「ライフスタイルを見直す</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook2.png" alt="dune part 2 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>視力回復への道</h3>
                            <br>
                            <p>
                                第五歩目「とっておきの疲れ目解消法」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook3.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>xバイブルシリーズ第三弾</h3>
                            <br>
                            <p>知って納得！明かりの秘密」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook3.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>xバイブルシリーズ第三弾</h3>
                            <br>
                            <p>知って納得！明かりの秘密」</p>
                        </div>
                    </div>
                    <div class="card" onclick="location.href='<?php echo site_url();?>/kindleBooksDetail';">
                        <div class="card-front">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook3.png" alt="dune part 1 movie poster">
                        </div>
                        <div class="card-back">
                            <h3>xバイブルシリーズ第三弾</h3>
                            <br>
                            <p>知って納得！明かりの秘密」</p>
                        </div>
                    </div>
                </div>
                <div class="pagenation flex">
                    <div class="before"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/before.png" alt="«"><span>«</span></div>
                    <div class="action">1</div>
                    <div>2</div>
                    <div>3</div>
                    <div class="after"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/after.png" alt="»"><span>»</span></div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tabs.js"></script>
    <?php get_footer(); ?>