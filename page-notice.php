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
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'all_notice',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'category_name' => 'お知らせ', // Add your category slug here
                    // $args['meta_key'] = 'post_views';
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );
                
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $category = get_the_category();
                        ?>
                <div class="seeMoreArticle" onclick="location.href='<?php echo get_permalink(); ?>';">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
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
                            <p><?php echo the_title(); ?></p>
                        </div>
                    </div>
                </div>
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
                    <div class="navtab active" data-target="all">すべて</div>
                    <div class="navtab" data-target="naticeTab">お知らせ</div>
                    <div class="navtab" data-target="pressRelease">プレスリリース</div>
                    <div class="navtab" data-target="mediaCoverage">メディア掲載</div>
                    <div class="underline"></div>
                </div>
                <div id="all" class="vision_articles active">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_notice',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'category_name' => 'すべてのお知らせ' // Add your category slug here
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
                    <div class="content" onclick="location.href='<?php echo get_permalink(); ?>';">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="contentDate"><?php echo get_the_date('Y/m/d'); ?></div>
                        <div class="contentText">
                        <p><?php echo the_title(); ?></p>
                        </div>
                    </div>
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
                </div>
                <div id="naticeTab" class="vision_articles">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_notice',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'category_name' => 'お知らせ' // Add your category slug here
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
                    <div class="content" onclick="location.href='<?php echo get_permalink(); ?>';">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="contentDate"><?php echo get_the_date('Y/m/d'); ?></div>
                        <div class="contentText">
                        <p><?php echo the_title(); ?></p>
                        </div>
                    </div>
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
                </div>
                <div id="pressRelease" class="vision_articles">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_notice',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'category_name' => 'プレスリリース' // Add your category slug here
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
                    <div class="content" onclick="location.href='<?php echo get_permalink(); ?>';">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="contentDate"><?php echo get_the_date('Y/m/d'); ?></div>
                        <div class="contentText">
                        <p><?php echo the_title(); ?></p>
                        </div>
                    </div>
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
                </div>
                <div id="mediaCoverage" class="vision_articles">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_notice',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'category_name' => 'メディア掲載' // Add your category slug here
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
                    <div class="content" onclick="location.href='<?php echo get_permalink(); ?>';">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="contentDate"><?php echo get_the_date('Y/m/d'); ?></div>
                        <div class="contentText">
                        <p><?php echo the_title(); ?></p>
                        </div>
                    </div>
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
                </div>
            </div>
        </section>
        <section class="visionImproment">
            <div class="backgroundImg"></div>
            <div class="baners flex space-between">
                <div class="baner leftBaner"  onclick="location.href='#';"></div>
                <div class="baner rightBaner"  onclick="location.href='#';"></div>
            </div>
        </section>
        <section class="endBanner">
            <div class="container"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eyetest_baner.jpg" alt="eyetest_baner"></div>
        </section>
    </main>
    <!-- tabs -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tabs.js"></script>
<?php get_footer(); ?>