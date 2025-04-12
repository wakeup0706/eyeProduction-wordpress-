<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/visionDictionary.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> 視力回復辞典</span></div>
            <div class="categoryName"><p>視力回復辞典</p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">人気記事</p></div>
            </div>
            <div>
                <script type="text/javascript">
                    $(document).ready(function($) {
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        function cvf_load_all_posts(){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: 1,
                                action: "demo-popular-load-posts",
                                post_type: "all_articles",
                                sort: "post_date DESC",
                                per_page: 6,
                                search_key: "",
                            };
                            $.post(ajaxurl, data, function(response) {
                                $(".cvf_universal_container1").html(response);
                                $(".cvf_pag_loading1").css({'background':'none', 'transition':'all 1s ease-out'});
                            });
                        }
                        cvf_load_all_posts();
                    });
                </script>
                <div class = "cvf_pag_loading1">
                    <div class = "cvf_universal_container1">
                    </div>
                </div>
            </div>
        </section>
        <section class="allVision inConteiner">
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionDic.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">すべての記事</p></div>
                <div class="sortButton">
                    <div id="newest" class="selected">新しい順</div>
                    <div>|</div>
                    <div id="popular" class="selected">人気順</div>
                    <div>|</div>
                    <div id="oldest" class="selected">古い順</div>
                </div>
            </div>
            <div class="allVisionArticles">
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
                        $('#popular').click(function(){
                            sort = "post_title";
                            cvf_load_all_posts(1);
                        });
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: page,
                                action: "demo-pagination-load-posts",
                                post_type: "all_articles",
                                sort: sort,
                                category: category,
                                per_page: 9,
                                search_key: $("#hot_search").val(),
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
                        $("#btn_hot_search").on('click', function() {
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
        <section class="visionImproment">
            <div class="backgroundImg"></div>
            <div class="baners flex space-between">
                <div class="baner leftBaner" onclick="location.href='#';"></div>
                <div class="baner rightBaner" onclick="location.href='#';"></div>
            </div>
        </section>
        <section class="endBanner">
            <div class="container"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyetest_baner.jpg" alt="eyetest_baner"></div>
        </section>
    </main>
    <?php get_footer(); ?>