<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/inquiry.css" />
    <main>
        <div class="container">
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> お問合せ </span></div>
            <div class="inquiry-content flex space-between">
                <div class="flex-left">
                    <div class="title flex space-between">
                        <div class="text">お問い合わせ</div>
                        <div class="sns-content flex">
                            <div><a href="https://twitter.com/meikusouken2001" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns1.png" alt=""></a></div>
                            <div><a href="https://www.instagram.com/dreamteam2001.12.17/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns2.png" alt=""></a></div>
                            <div><a href="https://www.youtube.com/channel/UCN0xlurLZi2E3m2_Nl5DT8Qhttps://www.youtube.com/channel/UCN0xlurLZi2E3m2_Nl5DT8Q" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns3.png" alt=""></a></div>
                            <div><a href="https://www.facebook.com/Dreamteam-Inc-988153384589165/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns4.png" alt=""></a></div>
                        </div>
                    </div>
                    <div class="banner"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/inquiry.png" alt=""></div>
                    <div class="infor">
                        <p class="infor-title">お問い合わせ受付内容</p>
                        <div class="infor-content">
                            <p><span>⚈</span>  近視に関するご相談</p>
                            <p><span>⚈</span>  電話での視力向上可能性判定をご希望の方</p>
                            <p><span>⚈</span>  すでに弊社のトレーニングを行っている方</p>
                        </div>
                    </div>
                    <div class="infor">
                        <p class="infor-title">お電話でのお問い合わせ</p>
                        <div class="infor-content">
                            <p><span>⚈</span>  045-988-5124</p>
                            <p><span>⚈</span>  受付時間：平日11：00～14：00/土日祝休</p>
                        </div>
                    </div>
                    <div class="infor">
                        <p class="infor-title">FAXでのお問い合わせ</p>
                        <div class="infor-content">
                            <p><span>⚈</span>  045-988-5304</p>
                            <p><span>⚈</span>  24時間受付中。回答は翌々営業日までにいたします。</p>
                        </div>
                    </div>
                    <div class="infor">
                        <p class="infor-title">メールでのご相談・お問い合わせ</p>
                        <div class="infor-content">
                            <p>24時間受付中。回答は翌々営業日までにいたします。<br/>
                                メールアドレスの入力間違いがありますと、お問い合わせに対する回答のメールが届きません。<br/>
                                メールアドレスのご入力は、慎重にお願い致します。<br/>
                                視力向上可能性判定をメールでご希望の場合は、下記より判定をご利用ください。</p>
                        </div>
                    </div>
                    <div class="under-banner"><a href="<?php echo site_url();?>/visionpossibility"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner2.jpg" alt="" class="sp-banner" /></a></div>
                    <div class="now">お問い合わせフォーム
                        <?php echo do_shortcode('[contact-form-7 id="c0b9871" title="contact inquiry_copy"]'); ?>
                    </div>
                    <div class="line-youtube">
                        <div>
                            <a href="https://line.me/ti/p/@959ejwxf" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-registration.jpg" alt="line-youtube-registration">
                            </a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/channel/UCN0xlurLZi2E3m2_Nl5DT8Q">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/youtube-registration.jpg" alt="line-youtube-registration">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-right">
                    <div class="title"><p>お問合せ</p></div>
                    <div class="banner"><a href="https://www.heallite.com/c/desklight/gentlite/M0002" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></a></div>
                    <div class="otherCategory">
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/visiondictionary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconMdic.png" alt=""></div>
                                <div class="otherCategory-item-text">視力回復辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/eyeglossary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconDic.png" alt=""></div>
                                <div class="otherCategory-item-text">目の用語辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/recipes">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconFood.png" alt=""></div>
                                <div class="otherCategory-item-text">目に優しいレシピ</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/visionpossibility">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconResult.png" alt=""></div>
                                <div class="otherCategory-item-text">視力向上可能性判定 </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner"><a href="https://line.me/ti/p/@959ejwxf" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-registration.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>