<?php  get_header();?>
<?php set_post_views( get_the_ID() ); ?>
<?php 
    $search_key = $_GET["search_key"];
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/recent.css" />   
    <main>
        <section class="allVision inConteiner">
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> すべてのカテゴリ</span></div>
            <div class="categoryTag">
                <p>おすすめタグ</p>
                <div>
                    <a href="#" class="side-tag-list-trick">#お金</a>
                    <a href="#" class="side-tag-list-trick">#カードゲーム</a>
                    <a href="#" class="side-tag-list-trick">#かず</a>
                    <a href="#" class="side-tag-list-trick">#カタカナ</a>
                    <a href="#" class="side-tag-list-trick">#クイズ</a>
                    <a href="#" class="side-tag-list-trick">#ゲーム</a>
                    <a href="#" class="side-tag-list-trick">#こうさく</a>
                    <a href="#" class="side-tag-list-trick">#シール</a>
                    <a href="#" class="side-tag-list-trick">#ちえ</a>
                    <a href="#" class="side-tag-list-trick">#なぞなぞ</a>
                    <a href="#" class="side-tag-list-trick">#パズル</a>
                    <a href="#" class="side-tag-list-trick">#ひらがな</a>
                    <a href="#" class="side-tag-list-trick">#図鑑</a>
                    <a href="#" class="side-tag-list-trick">#好奇心</a>
                    <a href="#" class="side-tag-list-trick">#実験</a>
                    <a href="#" class="side-tag-list-trick">#工作</a>
                    <a href="#" class="side-tag-list-trick">#文字</a>
                    <a href="#" class="side-tag-list-trick">#科学遊び</a>
                    <a href="#" class="side-tag-list-trick">#算数</a>
                    <a href="#" class="side-tag-list-trick">#色彩感覚</a>
                    <a href="#" class="side-tag-list-trick">#言葉</a>
                    <a href="#" class="side-tag-list-trick">#語彙力</a>
                    <a href="#" class="side-tag-list-trick">#遊び</a>
                </div>
            </div>
            <div class="space"></div>
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/testResult.png" alt="testResult"></div>
                <div class="section-title"><div id="searchID"><p class='text-top'>検索結果 : <span style='font-size:14px'>"<?php echo $search_key ?>"</span><span style='font-size:18px'>の検索結果</span></p></div></div>
            </div>
            <div>
                <script type="text/javascript">
                    $(document).ready(function($) {
                        const url = new URL(window.location.href);
                        const params = new URLSearchParams(url.search);
                        const search_key = params.get('search_key');

                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                        let sort = "post_date DESC";
                        function cvf_load_all_posts(page){
                            $(".cvf_pag_loading").fadeIn().css('background','#ccc');// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                            var data = {
                                page: page,
                                action: "demo-all-load-posts",
                                sort: sort,
                                per_page: 15,
                                search_key: search_key,
                            };
                            $.post(ajaxurl, data, function(response) {
                                $(".cvf_all_universal_container").html(response);
                                $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                            });
                        }
                        $(document).on('click', '.cvf_all_universal_container .cvf-universal-pagination li.active', function(){ 
                            var page = $(this).attr('p');
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
                <div class="baner leftBaner" onclick="location.href='#';"></div>
                <div class="baner rightBaner" onclick="location.href='#';"></div>
            </div>
        </section>
        <section class="endBanner">
            <div class="container"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyetest_baner.jpg" alt="eyetest_baner"></div>
        </section>
    </main>
    <?php get_footer(); ?>