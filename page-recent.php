<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/recent.css" />   
    <main>
        <section class="allVision inConteiner">
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> すべてのカテゴリ</span></div>
            <div class="space"></div>
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/Allrecent.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">すべてのカテゴリ</p></div>
            </div>
            <div>
                <script type="text/javascript">
                    $(document).ready(function($) {
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        let sort = "post_date DESC";
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: page,
                                action: "demo-all-load-posts",
                                sort: sort,
                                per_page: 15,
                                search_key: "",
                            };
                            $.post(ajaxurl, data, function(response) {
                                $(".cvf_all_universal_container").html(response);
                                $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                            });
                        }
                        $(document).on('click', '.cvf_all_universal_container .cvf-universal-pagination li.active', function(){ 
                            var page = $(this).attr('p');
                            console.log(page);
                            cvf_load_all_posts(page);
                        });
                        cvf_load_all_posts(1);
                    });
                </script>
                <div class = "cvf_all_pag_loading">
                    <div class = "cvf_all_universal_container">
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