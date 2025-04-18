<?php  get_header();?>
<?php set_post_views( get_the_ID() ); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/kindleBooksDetail.css" />
    <main>
        <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="breadcrumb"><span><a href=".<?php echo home_url(); ?>">TOP</a></span><span>> <a href=".<?php echo site_url();?>/kindleBooks">関連書籍</a></span><span>> <?php the_title(); ?></span></div>
            <div class="kindleBooksDetail-content flex space-between">
                <div class="flex-left">
                    <div class="bookData">
                        <div class="book-top">
                            <div class="book-img"><?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?></div>
                            <div class="book-menu">
                                <div class="book-menu-title"><p><?php the_title();?></p></div>
                                <div class="book-menu-author"><p><?php echo get_post_meta(get_the_ID(), "author", true); ?>（著）</p></div>
                                <div class="line"></div>
                                <div class="book-menu-price"><?php echo get_post_meta(get_the_ID(), "price", true) + get_post_meta(get_the_ID(), "price", true)*(get_post_meta(get_the_ID(), "tax", true)/100); ?>円（本体<?php echo get_post_meta(get_the_ID(), "price", true); ?>円＋税<?php echo get_post_meta(get_the_ID(), "tax", true); ?>％）</div>
                                <div class="book-menu-publisher"><p>ページ数 : <?php echo get_post_meta(get_the_ID(), "pages", true); ?> <br/>発売日 : <?php echo (DateTime::createFromFormat('Ymd', strval(get_post_meta(get_the_ID(), "publish_date", true))))->format(get_option( "date_format" ))  ; ?> <br/>ISBN : <?php echo get_post_meta(get_the_ID(), "isbn", true); ?></p></div>
                                <a href="https://www.amazon.co.jp/dp/9784909044440" class="amazon-button" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/amazon.svg" class="amazon-logo" alt="9784909044440">で詳細を見る
                                </a>
                            </div>
                        </div>
                        <div class="book-content">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="flex-right">
                    <div class="title"><p>関連書籍</p></div>
                    <div class="banner"><a href="https://www.heallite.com/c/desklight/gentlite/M0002" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></a></div>
                    <div class="otherCategory">
                        <div class="otherCategory-item">
                            <a href=".<?php echo site_url();?>/visiondictionary">
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
                    <div class="banner"><a href="https://line.me/ti/p/@959ejwxf" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-registration.jpg" alt=""></a></div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner2.jpg" alt=""></a></div>
                </div>
            </div>
            <div class="allVision inConteiner">
                <div class="noticeTitle">
                    <div class="noticeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/kindlBooks.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">すべての書籍</p></div>
                </div>
                
                <div class="navtabs">
                    <div class="navtab active" data-target="newest" id="newest">新しい順</div>
                    <div class="navtab" data-target="oldest" id="oldest">古い順</div>
                    <div class="underline"></div>
                </div>

                <div id="newest" class="vision_articles card-wrapper active">
                    <script type="text/javascript">
                    $(document).ready(function($) {
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        let sort = "post_date DESC";
                        let category = "all";
                        $('#newest').click(function(){
                            sort = "post_date DESC";
                            cvf_load_all_posts(1);
                        });
                        $('#oldest').click(function(){
                            sort = "post_date ASC";
                            cvf_load_all_posts(1);
                        });
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: page,
                                action: "demo-pagination-load-posts",
                                post_type: "all_kindlebooks",
                                sort: sort,
                                category: category,
                                per_page: 8,
                                search_key: "",
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
                    });
                    </script>
                    <div class = "cvf_pag_loading">
                        <div class = "cvf_universal_container">
                            <div class="cvf-universal-all_articles-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tabs.js"></script>
    <?php get_footer(); ?>