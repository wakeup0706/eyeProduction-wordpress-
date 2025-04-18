<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/eyeGlossary.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> 目の用語辞典 </span></div>
            <div class="categoryName"><p>目の用語辞典 </p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">閲覧の多い用語</p></div>
            </div>
            <div class="popularArticle">
                <?php
                $popular_posts_args = array(
                    'posts_per_page' => 6,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'post_type' => "all_terms"
                );

                $popular_posts = new WP_Query( $popular_posts_args );
                if ( $popular_posts->have_posts() ) {
                    while ( $popular_posts->have_posts() ) {
                        $popular_posts->the_post();
                        echo '<div class="seeMoreArticle" onclick="location.href=\'' . get_permalink() . '\';">
                                ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                                <div class="articleContent">
                                    <div class="articleType">
                                        <div class="articleType-text"><p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p></div>
                                        <div class="articleType-mark"><img src="'.get_stylesheet_directory_uri().'/assets/img/Icons/mark.png" alt="mark"></div>
                                    </div>
                                    <div class="articleContent-date"><p>'. get_the_date('Y.m.d', $post->ID) .'</p></div>
                                    <div class="articleContent-text">
                                        <p>' . get_the_title() . '</p>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </section>
        <section class="allVision inConteiner">
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eyeGlossary.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">すべての用語</p></div>
                <div class="sortButton">
                    <div id="newest" class="selected">新しい順</div>
                    <div>|</div>
                    <div id="popular" class="selected">人気順</div>
                    <div>|</div>
                    <div id="oldest" class="selected">古い順</div>
                    <div>|</div>
                    <div id="alphabeta" class="selected">50音順</a>
                </div>
            </div>
            <div class="allVisionArticles">
                <script type="text/javascript">
                    $(document).ready(function($) {
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        let sort = "post_date DESC";
                        let category = "all";
                        let initials = "";
                        $('#newest').click(function(){
                            sort = "post_date DESC";
                            initials = "";
                            cvf_load_all_posts(1);
                        });
                        $('#oldest').click(function(){
                            sort = "post_date ASC";
                            initials = "";
                            cvf_load_all_posts(1);
                        });
                        $('#popular').click(function(){
                            sort = "post_title";
                            initials = "";
                            cvf_load_all_posts(1);
                        });
                        $('#alphabeta').click(function(){
                            sort = "post_title";
                            initials = "";
                            cvf_load_all_posts(1);
                        });
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: page,
                                action: "demo-pagination-load-posts",
                                post_type: "all_terms",
                                sort: sort,
                                category: category,
                                per_page: 9,
                                search_key: "",
                                initials : initials,
                            };
                            $.post(ajaxurl, data, function(response) {
                                $(".cvf_universal_container").html(response);
                                $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                            });
                        }
                        cvf_load_all_posts(1);
                        $(document).on('click', '.cvf_universal_container .cvf-universal-pagination li.active', function(){ 
                            var page = $(this).attr('p');
                            cvf_load_all_posts(page);
                        });
                        $(".byInitial .categoryLists .row .row-list div").on('click', function(){
                            initials = $(this).text().trim();
                            cvf_load_all_posts(1);
                        });
                    });
                </script>
                <div class = "cvf_pag_loading">
                    <div class = "cvf_universal_container">
                        <div class="cvf-universal-all_articles-content"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="searchByCategory inConteiner">
            <div class="eyeTestTitle">
                <div class="testResultIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/testResult.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">分類や頭文字から探す</p></div>
            </div>
            <div class="byCategory SBC">
                <div class="categoryName"><p>分類から探す</p></div>
                <div class="categoryLists">
                <div>お金</div>
                    <div>カードゲーム</div>
                    <div>かず</div>
                    <div>カタカナ</div>
                    <div>クイズ</div>
                    <div>ゲーム</div>
                    <div>こうさく</div>
                    <div>シール</div>
                    <div>ちえ</div>
                    <div>なぞなぞ</div>
                    <div>パズル</div>
                    <div>ひらがな</div>
                    <div>図鑑</div>
                    <div>好奇心</div>
                    <div>実験</div>
                    <div>工作</div>
                    <div>文字</div>
                    <div>科学遊び</div>
                    <div>算数</div>
                    <div>色彩感覚</div>
                    <div>言葉</div>
                    <div>語彙力</div>
                    <div>遊び</div>
                </div>
            </div>
            <div class="byInitial SBC">
                <div class="categoryName"><p>頭文字から探す</p></div>
                <div class="categoryLists">
                    <div class="row">
                        <div class="row-info">あ行</div>
                        <div class="row-list">
                            <div>あ</div><div>い</div><div>う</div><div>え</div><div>お</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">か行</div>
                        <div class="row-list">
                            <div>か</div><div>き</div><div>く</div><div>け</div><div>こ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">さ行</div>
                        <div class="row-list">
                            <div>さ</div><div>し</div><div>す</div><div>せ</div><div>そ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">た行</div>
                        <div class="row-list">
                            <div>た</div><div>ち</div><div>つ</div><div>て</div><div>と</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">な行</div>
                        <div class="row-list">
                            <div>な</div><div>に</div><div>ぬ</div><div>ね</div><div>の</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">は行</div>
                        <div class="row-list">
                            <div>は</div><div>ひ</div><div>ふ</div><div>へ</div><div>ほ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">ま行</div>
                        <div class="row-list">
                            <div>ま</div><div>み</div><div>む</div><div>め</div><div>も</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">や行</div>
                        <div class="row-list">
                            <div>や</div><div>ゆ</div><div>よ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">ら行</div>
                        <div class="row-list">
                            <div>ら</div><div>り</div><div>る</div><div>れ</div><div>ろ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-info">わ行</div>
                        <div class="row-list">
                            <div>わ</div><div>を</div><div>ん</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="visionImproment">
            <div class="backgroundImg"></div>
            <div class="baners flex space-between">
                <div class="baner leftBaner" onclick="javascript:window.open('https://www.heallite.com/c/desklight/gentlite/M0002', '_blank');"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></div>
                <div class="baner rightBaner" onclick="location.href='<?php echo site_url();?>/visionpossibility';"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner2.jpg" alt=""></div>
            </div>
        </section>
        <section class="endBanner">
            <div class="container"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyetest_baner.jpg" alt="eyetest_baner"></div>
        </section>
    </main>
    <?php get_footer(); ?>