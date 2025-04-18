<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/products.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span>TOP</span><span>> アイケア商品</span></div>
            <div class="categoryName"><p>アイケア商品</p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">人気のアイケア商品</p></div>
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
                                post_type: "all_products",
                                sort: "post_date DESC",
                                per_page: 3,
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
            <div class="fromShop">
                <p>商品の詳細は、同じ運営会社の<br class="space"/>「デスクライト名品館」でご覧いただけます。</p>
                <a href=""><div class="goProducts">→</div></a>
            </div>
        </section>
        <section class="allVision inConteiner">
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/products.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">すべてのアイケア商品</p></div>
            </div>
            <div class="allVisionArticles">
                <script type="text/javascript">
                    $(document).ready(function($) {
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');
                            var data = {
                                page: page,
                                action: "demo-pagination-load-posts",
                                post_type: "all_products",
                                sort: "post_date DESC",
                                category: "all",
                                per_page: 9,
                                search_key: "",
                            };
                        
                            // Send the data
                            $.post(ajaxurl, data, function(response) {
                                // If successful Append the data into our html container
                                $(".cvf_universal_container").html(response);
                                // End the transition
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
                        <div class="cvf-universal-all_products-content"></div>
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