<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/notice.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span>TOP</span><span>> お知らせ </span></div>
            <div class="categoryName"><p>お知らせ</p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">閲覧の多いお知らせ</p></div>
            </div>
            <div class="popularArticle">
                <?php
                $popular_posts_args = array(
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'post_type' => "all_notice"
                );

                $popular_posts = new WP_Query( $popular_posts_args );
                if ( $popular_posts->have_posts() ) {
                    while ( $popular_posts->have_posts() ) {
                        $popular_posts->the_post();
                        echo '<div class="seeMoreArticle" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                                ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                                <div class="articleContent-date">'. get_the_date('Y.m.d', $post->ID) .'</div>
                                <div class="contentText">
                                    <p>' . esc_html($post->post_title) . '</p>
                                </div> 
                            </div>';
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </section>
        <section class="notice">
            <div class="allVision inConteiner">
                <div class="bg vector15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
                <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
                <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
                <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector10.png" alt=""></div>
                <div class="noticeTitle">
                    <div class="noticeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/notice.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">すべてのお知らせ</p></div>
                </div>
                
                <div class="navtabs">
                    <div class="navtab active" id="all">すべて</div>
                    <div class="navtab" id="cate1">お知らせ</div>
                    <div class="navtab" id="cate2">プレスリリース</div>
                    <div class="navtab" id="cate3">メディア掲載</div>
                    <div class="underline"></div>
                </div>
                <div id="all" class="vision_articles active">
                    <script type="text/javascript">
                        $(document).ready(function($) {
                            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                            let sort = "post_date DESC";
                            let category = "all";
                            $('#all').click(function(){
                                category = "all";
                                cvf_load_all_posts(1);
                            });
                            $('#cate1').click(function(){
                                category = "お知らせ";
                                cvf_load_all_posts(1);
                            });
                            $('#cate2').click(function(){
                                category = "プレスリリース";
                                cvf_load_all_posts(1);
                            });
                            $('#cate3').click(function(){
                                category = "メディア掲載";
                                cvf_load_all_posts(1);
                            });
                            function cvf_load_all_posts(page){
                                $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                                var data = {
                                    page: page,
                                    action: "demo-pagination-load-posts",
                                    post_type: "all_notice",
                                    sort: sort,
                                    category: category,
                                    per_page: 6,
                                    search_key: "",
                                };
                                $.post(ajaxurl, data, function(response) {
                                    console.log(response)
                                    $(".cvf_universal_container").html(response);
                                    $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                                });
                            }
                            cvf_load_all_posts(1);
                            $(document).on('click', '.cvf_universal_container .cvf-universal-pagination li.active', function(){ 
                                var page = $(this).attr('p');
                                cvf_load_all_posts(page);
                            });
                        });
                    </script>
                    <div class = "cvf_pag_loading">
                        <div class = "cvf_universal_container">
                            <div class="cvf-universal-all_articles-content"></div>
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
    <!-- tabs -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tabs.js"></script>
<?php get_footer(); ?>