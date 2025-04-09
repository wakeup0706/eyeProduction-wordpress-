<?php  get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Layout/main.css" />
    <main>
        <section class="first container">
            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyetest_baner.jpg" alt="eyetest_baner"></div>
        </section>
        <section class="testResult inConteiner">
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector1.png" alt=""></div>
            <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector2.png" alt=""></div>
            <div class="eyeTestTitle">
                <div class="testResultIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/testResult.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">あなたの視力検査結果</p></div>
            </div>
            <div class="result flex space-around">
                <div class="nearsighted">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>視 力</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div id="view_r_result">測定中</div>
                        <div id="view_l_result">測定中</div>
                    </div>
                </div>
                <div class="farsighted">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>近 視 / 遠 視</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div id="view_r_kinshi">測定中</div>
                        <div id="view_l_kinshi">測定中</div>
                    </div>
                </div>
                <div class="astigmatism">
                    <div class="flex result-title space-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eye.png" alt="eye"><p>乱 視</p>
                    </div>
                    <div class="flex eyes space-center">
                        <div>左</div>
                        <div>右</div>
                    </div>
                    <div class="flex result-value space-around">
                        <div id="view_r_ranshi">測定中</div>
                        <div id="view_l_ranshi">測定中</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="articles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="articleTitle">
                <div class="articleTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/lastArticle.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">最新記事</p></div>
            </div>
            
            <div class="bestLastArticle flex">
                <?php
                $args = array(
                    'post_type' => 'all_articles',
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                
                $featured_query = new WP_Query($args);
                
                if ($featured_query->have_posts()) :
                    while ($featured_query->have_posts()) : $featured_query->the_post();
                        $category = get_the_category();
                ?>
                    <div class="baner">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <div class="articleType"><?php echo esc_html($category[0]->name); ?></div>
                        <div class="articleSubject"><p><?php echo get_the_title(); ?></p></div>
                        <div class="articleContent"><p><?php echo get_the_content(); ?></p></div>
                        <div class="articleDate"><p><?php echo get_the_date('Y/m/d'); ?></p></div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="seeMore">
                <div class="seeMoreTitle"><p>最 新 記 事</p></div>
                <div class="seeMoreArticles">
                    <?php
                    // Get the latest 3 posts
                    $args = array(
                        'post_type' => 'all_articles',
                        'posts_per_page' => 3,
                        'offset' => 1, // Skip the featured post
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    
                    $latest_query = new WP_Query($args);
                    
                    if ($latest_query->have_posts()) :
                        while ($latest_query->have_posts()) : $latest_query->the_post();
                            $category = get_the_category();
                    ?>
                        <div class="seeMoreArticle">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div class="articleContent">
                                <div class="articleType">
                                    <div class="articleType-text"><p><?php echo esc_html($category[0]->name); ?></p></div>
                                    <div class="articleType-mark"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark"></div>
                                </div>
                                <div class="articleContent-date"><p><?php echo get_the_date('Y.m.d'); ?></p></div>
                                <div class="articleContent-text">
                                    <p><?php echo get_the_title(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="no-posts">
                            <p>記事が見つかりませんでした。</p>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/visionDictionary"><span>最新記事をもっと見る</span></a>
            </div>
        </section>
        <section class="youtube inConteiner">
            <div class="bg vector9"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector9.png" alt=""></div>
            <div class="articleTitle">
                <div class="articleTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/Youtobe.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">視力回復相談室</p></div>
            </div>
            <div class="youtube-iframe">
                <iframe 
                src="https://www.youtube.com/embed/kaKXJQZZa9w?autoplay=1&mute=1&controls=0&loop=1&playlist=kaKXJQZZa9w" 
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
            </div>
            <div class="seeMoreButton">
                <a href="#"><span>視力回復相談室の動画を見る</span></a>
            </div>
        </section>
        <section class="visionDictionary container">
            <div class="inConteiner">
                <div class="visionDictionaryTitle">
                    <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/visionDic.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">視力回復辞典</p></div>
                    <div class="pushButtons">
                        <div class="toLeft"><div class="to">«</div></div>
                        <div class="toRight"><div class="to">»</div></div>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                <?php
                // Get current page number
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                // Get sort parameter from URL
                $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                
                // Set up query arguments based on sort
                $args = array(
                    'post_type' => 'all_articles',
                    'posts_per_page' => 7,
                    'paged' => $paged,
                    'category_name' => '視力回復辞典(視力回復の真実)' // Add your category slug here
                );
                
                switch($sort) {
                    case 'popular':
                        $args['meta_key'] = 'post_views';
                        $args['orderby'] = 'meta_value_num';
                        $args['order'] = 'DESC';
                        break;
                    case 'oldest':
                        $args['orderby'] = 'date';
                        $args['order'] = 'ASC';
                        break;
                    default: // newest
                        $args['orderby'] = 'date';
                        $args['order'] = 'DESC';
                }
                
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $category = get_the_category();
                        ?>
                    <li class="card-item swiper-slide">
                        <a href="<?php echo get_permalink(); ?>" class="card-link">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div class="flex space-between"><p class="badge"><?php echo esc_html($category[0]->name); ?></p><p class="date"><?php echo get_the_date('Y/m/d'); ?></p></div>
                            <h2 class="card-title"><?php echo the_title(); ?></h2>
                            <button class="card-button"></button>
                        </a>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-articles">
                        <p>記事が見つかりませんでした。</p>
                    </div>
                <?php
                endif;
                ?>
                </ul>
                <div class="swiper-pagination swiper-pagination-vision"></div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/visionDictionary"><span>視力回復辞典をもっと見る</span></a>
            </div>
        </section>
        <section class="visionImproment">
            <div class="backgroundImg"></div>
            <div class="baners flex space-between">
                <div class="baner leftBaner"></div>
                <div class="baner rightBaner"></div>
            </div>
        </section>
        <section class="eyeGlossary container">
            <div class="bg vector11"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector11.png" alt=""></div>
            <div class="bg vector12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector12.png" alt=""></div>
            <div class="bg vector13"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector13.png" alt=""></div>
            <div class="inConteiner">
                <div class="eyeGlossaryTitle">
                    <div class="eyeGlossaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eyeGlossary.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">目の用語辞典 </p></div>
                    <div class="pushButtons">
                        <div class="toLeft"><div class="to">«</div></div>
                        <div class="toRight"><div class="to">»</div></div>
                    </div>
                </div>
            </div>
            <div class="eyeGlossaryCard-wrapper">
                <ul class="card-list swiper-wrapper">
                <?php
                // Get current page number
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                // Get sort parameter from URL
                $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                
                // Set up query arguments based on sort
                $args = array(
                    'post_type' => 'all_terms',
                    'posts_per_page' => 7,
                    'paged' => $paged,
                    'category_name' => '目の用語辞典' // Add your category slug here
                );
                
                switch($sort) {
                    case 'popular':
                        $args['meta_key'] = 'post_views';
                        $args['orderby'] = 'meta_value_num';
                        $args['order'] = 'DESC';
                        break;
                    case 'oldest':
                        $args['orderby'] = 'date';
                        $args['order'] = 'ASC';
                        break;
                    default: // newest
                        $args['orderby'] = 'date';
                        $args['order'] = 'DESC';
                }
                
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $category = get_the_category();
                        ?>

                    <li class="card-item swiper-slide">
                        <a href="<?php echo site_url();?>/detailPages/eyeGlossaryDetail" class="card-link">
                        <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div class="flex space-between"><p class="badge"><?php echo esc_html($category[0]->name); ?></p><p class="date"><?php echo get_the_date('Y/m/d'); ?></p></div>
                            <h2 class="card-title"><?php echo the_title(); ?></h2>
                            <button class="card-button"></button>
                        </a>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-articles">
                        <p>記事が見つかりませんでした。</p>
                    </div>
                <?php
                endif;
                ?>
                </ul>
                <div class="swiper-pagination swiper-pagination-vision"></div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/eyeGlossary"><span>目の用語辞典をもっと見る</span></a>
            </div>
        </section>
        <section class="recipes container">
            <div class="bg vector14"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector14.png" alt=""></div>
            <div class="bg vector15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector15.png" alt=""></div>
            <div class="bg vector16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector16.png" alt=""></div>
            <div class="inConteiner">
                <div class="visionDictionaryTitle">
                    <div class="recipeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/recipe.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">目に優しいレシピ</p></div>
                    <div class="pushButtons">
                        <div class="toLeft"><div class="to">«</div></div>
                        <div class="toRight"><div class="to">»</div></div>
                    </div>
                </div>
            </div>
            <div class="recipesCard-wrapper">
            <ul class="card-list swiper-wrapper">
                <?php
                // Get current page number
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                // Get sort parameter from URL
                $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                
                // Set up query arguments based on sort
                $args = array(
                    'post_type' => 'all_recipes',
                    'posts_per_page' => 7,
                    'paged' => $paged,
                    'category_name' => '目に優しいレシピ' // Add your category slug here
                );
                
                switch($sort) {
                    case 'popular':
                        $args['meta_key'] = 'post_views';
                        $args['orderby'] = 'meta_value_num';
                        $args['order'] = 'DESC';
                        break;
                    case 'oldest':
                        $args['orderby'] = 'date';
                        $args['order'] = 'ASC';
                        break;
                    default: // newest
                        $args['orderby'] = 'date';
                        $args['order'] = 'DESC';
                }
                
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $category = get_the_category();
                        ?>

                    <li class="card-item swiper-slide">
                        <a href="<?php echo site_url();?>/detailPages/eyeGlossaryDetail" class="card-link">
                        <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div class="flex space-between"><p class="badge"><?php echo esc_html($category[0]->name); ?></p><p class="date"><?php echo get_the_date('Y/m/d'); ?></p></div>
                            <h2 class="card-title"><?php echo the_title(); ?></h2>
                            <button class="card-button"></button>
                        </a>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-articles">
                        <p>記事が見つかりませんでした。</p>
                    </div>
                <?php
                endif;
                ?>
                </ul>
                <div class="swiper-pagination swiper-pagination-vision"></div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/recipes"><span>目に優しいレシピをもっと見る</span></a>
            </div>
        </section>
        <section class="eyeProducts inConteiner">
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector9.png" alt=""></div>
            <div class="bg vector11"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector14.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector16.png" alt=""></div>
            <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector10.png" alt=""></div>
            <div class="visionDictionaryTitle">
                <div class="recipeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/eyeProduct.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">アイケア商品</p></div>
            </div>
            <div class="eyeProductsCareds">
                <div class="topEyeProductCard">
                    <div class="eyeProductCard">
                        <div class="corner top left"></div>
                        <div class="corner top right"></div>
                        <div class="corner bottom left"></div>
                        <div class="corner bottom right"></div>
                        <div class="corner-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProdect-top.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="eyeProductCardRow">
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct1.jpg" alt=""></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct2.jpg" alt=""></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct3.jpg" alt=""></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct4.jpg" alt=""></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct5.jpg" alt=""></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyeProducts/eyeProduct6.jpg" alt=""></div>
                </div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/products"><span>アイケア商品をもっと見る</span></a>
            </div>
        </section>
        <section class="aboutHomework container">
            <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector1.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector15.png" alt=""></div>
            <div class="title Homework-kindle"><p>ホームワックとは?</p></div>
            <div class="content">
                <p>テレビを見ながら簡単に使える視力回復トレーニングデバイスです。
                    「クリア」と「ぼかし」の画面切り替えで目のピント調節機能を養い、近視の進行を抑えます。
                    子供から大人まで利用可能で、目のケアに最適です。</p>
            </div>
            <div class="banners">
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aboutHomework1.jpg" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aboutHomework2.jpg" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aboutHomework3.jpg" alt=""></div>
            </div>
        </section>
        <section class="kindleBooks inConteiner">
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector15.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector1.png" alt=""></div>
            <div class="title Homework-kindle"><p>Kindleブックス</p></div>
            <div class="books">
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook1.png" alt="kindleBook1"></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook2.png" alt="kindleBook2"></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kindleBooks/kindleBook3.png" alt="kindleBook3"></div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/kindleBooks"><span>Kindleブックスをもっと見る</span></a>
            </div>
        </section>
        <section class="line-youtube-registration">
            <div class="inConteiner">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-registration.jpg" alt="line-youtube-registration">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/youtube-registration.jpg" alt="line-youtube-registration">
            </div>
        </section>
        <section class="staffRecommended inConteiner">
            <div class="bg vector15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector10.png" alt=""></div>
            <div class="staffRecommendedTitle">
                <div class="staffRecommendedIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/staffRecommended.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">スタッフのおすすめ記事</p></div>
            </div>
            <div class="contents">
                <?php
                // Set up query arguments for staff recommended posts
                $args = array(
                    'post_type' => 'staff_recommended',
                    'posts_per_page' => 3,
                    'category_name' => 'スタッフのおすすめ記事', // Make sure this category exists
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                
                $query = new WP_Query($args);
                $counter = 1;

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $category = get_the_category();
                ?>
                    <div class="content">
                        <div class="contentNumber"><p><?php echo $counter; ?></p></div>
                        <div class="contnetImage">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/staffRecommended/default.png" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="contentText">
                            <div class="contentTitle"><p><?php echo get_the_title(); ?></p></div>
                            <div class="contentText-content"><p><?php echo get_the_content(); ?></p></div>
                            <div class="contentDate"><p>&#9201; <?php echo get_the_date('Y.m.d'); ?></p></div>
                        </div>
                    </div>
                <?php
                        $counter++;
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="no-posts">
                        <p>記事が見つかりませんでした。</p>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </section>
        <section class="subscriptionGuide">
            <div class="container">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt="line-youtube-registration"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner2.jpg" alt="line-youtube-registration"></a>
            </div>
        </section>
        <section class="notice">
            <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector15.png" alt=""></div>
            <div class="bg vector9"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector11"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector10.png" alt=""></div>
            <div class="inConteiner">
                <div class="notice-title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/notice1.png" alt=""><p>お知らせ</p></div>
                <div class="notice-content">
                    <div class="notice-content-title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/notice1.png" alt=""><p>お知らせ</p></div>
                    <div class="notice-content-texts">
                    <?php
                    // Set up query arguments for staff recommended posts
                    $args = array(
                        'post_type' => 'all_notice',
                        'posts_per_page' => 5,
                        'category_name' => 'お知らせ', // Make sure this category exists
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    
                    $query = new WP_Query($args);
                    $counter = 1;

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $category = get_the_category();
                    ?>
                        <div class="notice-content-text">
                            <div><p><?php echo get_the_title(); ?></p></div>
                            <div class="notice-content-text-date"><p>&#9201; <?php echo get_the_date('Y.m.d'); ?></p></div>
                        </div>
                    <?php
                        $counter++;
                    endwhile;
                    wp_reset_postdata();
                    else :
                    ?>
                        <div class="no-posts">
                            <p>記事が見つかりませんでした。</p>
                        </div>
                    <?php
                    endif;
                    ?>
                    </div>
                </div>
            </div>
            <div class="seeMoreButton">
                <a href="<?php echo site_url();?>/notice"><span>お知らせをもっと見る</span></a>
            </div>
        </section>
    </main>
    <script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>
    <script src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/cardWrapper.js'></script>
    <?php get_footer(); ?>