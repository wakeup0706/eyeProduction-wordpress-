<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/recipes.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> 目に優しいレシピ </span></div>
            <div class="categoryName"><p>目に優しいレシピ </p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">人気のレシピ</p></div>
            </div>
            <div class="popularArticle">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'all_recipes',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'category_name' => '目に優しいレシピ', // Add your category slug here
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
        <section class="allVision inConteiner">
            <div class="visionDictionaryTitle">
                <div class="visionDictionaryIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/recipe.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">すべてのレシピ</p></div>
                <div class="sortButton">
                    <div onclick='location.href="<?php echo add_query_arg("sort", "newest", get_permalink()); ?>"' class="selected">新しい順</div>
                    <div>|</div>
                    <div onclick='location.href="<?php echo add_query_arg("sort", "popular", get_permalink()); ?>"' class="selected">人気順</div>
                    <div>|</div>
                    <div onclick='location.href="<?php echo add_query_arg("sort", "oldest", get_permalink()); ?>"' class="selected">古い順</div>
                    <div>|</div>
                    <div onclick='location.href="<?php echo add_query_arg("sort", "alphabetical", get_permalink()); ?>"' class="selected">50音順</a>
                </div>
            </div>
            
            <div class="navtabs">
                <div class="navtab active" data-target="all">すべて</div>
                <div class="navtab" data-target="dishes">おかず</div>
                <div class="navtab" data-target="snacks">おやつ</div>
                <div class="navtab" data-target="lunchboxes">お弁当</div>
                <div class="navtab" data-target="withKids">子供と作れる</div>
                <div class="underline"></div>
            </div>

            <div id="all" class="vision_articles active">
                <div id="all" class="allVisionArticles">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_recipes',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'category_name' => '目に優しいレシピ' // Add your category slug here
                    );
                    
                    switch($sort) {
                        case 'popular':
                            // $args['meta_key'] = 'post_views';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = 'DESC';
                            break;
                        case 'oldest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'ASC';
                            break;
                        case 'newest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'DESC';
                            break;
                        default: // alphabetical
                            $args['orderby'] = 'title';
                            $args['order'] = 'ASC';
                            break;
                    }
                    
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
                                        <div class="articleType-text">
                                            <p><?php echo esc_html($category[0]->name); ?></p>
                                        </div>
                                        <div class="articleType-mark">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark">
                                        </div>
                                    </div>
                                    <div class="articleContent-date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
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
                </div>
            </div>
            <div id="dishes" class="vision_articles">
                <div id="dishes" class="allVisionArticles">
                    <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_recipes',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'category_name' => 'おかず' // Add your category slug here
                    );
                    
                    switch($sort) {
                        case 'popular':
                            // $args['meta_key'] = 'post_views';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = 'DESC';
                            break;
                        case 'oldest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'ASC';
                            break;
                        case 'newest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'DESC';
                            break;
                        default: // alphabetical
                            $args['orderby'] = 'title';
                            $args['order'] = 'ASC';
                            break;
                    }
                    
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
                                        <div class="articleType-text">
                                            <p><?php echo esc_html($category[0]->name); ?></p>
                                        </div>
                                        <div class="articleType-mark">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark">
                                        </div>
                                    </div>
                                    <div class="articleContent-date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
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
                    <!-- </div> -->
                </div>
            </div>
            <div id="snacks" class="vision_articles">
                <div id="all" class="allVisionArticles">
                <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_recipes',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'category_name' => 'おやつ' // Add your category slug here
                    );
                    
                    switch($sort) {
                        case 'popular':
                            // $args['meta_key'] = 'post_views';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = 'DESC';
                            break;
                        case 'oldest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'ASC';
                            break;
                        case 'newest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'DESC';
                            break;
                        default: // alphabetical
                            $args['orderby'] = 'title';
                            $args['order'] = 'ASC';
                            break;
                    }
                    
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
                                        <div class="articleType-text">
                                            <p><?php echo esc_html($category[0]->name); ?></p>
                                        </div>
                                        <div class="articleType-mark">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark">
                                        </div>
                                    </div>
                                    <div class="articleContent-date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
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
            </div>
            <div id="lunchboxes" class="vision_articles">
                <div id="all" class="allVisionArticles">
                <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_recipes',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'category_name' => 'お弁当' // Add your category slug here
                    );
                    
                    switch($sort) {
                        case 'popular':
                            // $args['meta_key'] = 'post_views';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = 'DESC';
                            break;
                        case 'oldest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'ASC';
                            break;
                        case 'newest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'DESC';
                            break;
                        default: // alphabetical
                            $args['orderby'] = 'title';
                            $args['order'] = 'ASC';
                            break;
                    }
                    
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
                                        <div class="articleType-text">
                                            <p><?php echo esc_html($category[0]->name); ?></p>
                                        </div>
                                        <div class="articleType-mark">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark">
                                        </div>
                                    </div>
                                    <div class="articleContent-date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
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
            </div>
            <div id="withKids" class="vision_articles">
                <div id="all" class="allVisionArticles">
                <?php
                    // Get current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    // Get sort parameter from URL
                    $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                    
                    // Set up query arguments based on sort
                    $args = array(
                        'post_type' => 'all_recipes',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'category_name' => '子供と作れる' // Add your category slug here
                    );
                    
                    switch($sort) {
                        case 'popular':
                            // $args['meta_key'] = 'post_views';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = 'DESC';
                            break;
                        case 'oldest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'ASC';
                            break;
                        case 'newest':
                            $args['orderby'] = 'date';
                            $args['order'] = 'DESC';
                            break;
                        default: // alphabetical
                            $args['orderby'] = 'title';
                            $args['order'] = 'ASC';
                            break;
                    }
                    
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
                                        <div class="articleType-text">
                                            <p><?php echo esc_html($category[0]->name); ?></p>
                                        </div>
                                        <div class="articleType-mark">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/mark.png" alt="mark">
                                        </div>
                                    </div>
                                    <div class="articleContent-date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
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
            </div>
            <div class="pagenation flex">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '<div class="before"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/before.png" alt="«"><span>«</span></div>',
                    'next_text' => '<div class="after"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/after.png" alt="»"><span>»</span></div>',
                    'type' => 'list',
                    'before_page_number' => '<div>',
                    'after_page_number' => '</div>'
                ));
                ?>
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
    <!-- tabs -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tabs.js"></script>
<?php get_footer(); ?>