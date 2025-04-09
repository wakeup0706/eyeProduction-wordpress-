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
            <div class="popularArticle">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'all_products',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'category_name' => 'アイケア商品', // Add your category slug here
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
            <?php
                // Get current page number
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                // Get sort parameter from URL
                $sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'newest';
                
                // Set up query arguments based on sort
                $args = array(
                    'post_type' => 'all_products',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'category_name' => 'アイケア商品' // Add your category slug here
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
    <?php get_footer(); ?>