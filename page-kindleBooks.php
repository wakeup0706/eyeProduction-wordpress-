<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/kindleBooks.css" />
    <main>
        <section class="popularArticles inConteiner">
            <div class="bg vector3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector3.png" alt=""></div>
            <div class="bg vector4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
            <div class="bg vector5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector5.png" alt=""></div>
            <div class="bg vector6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
            <div class="bg vector7"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
            <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector8.png" alt=""></div>
            <div class="breadcrumb"><span><a href="">TOP</a></span><span>> Kindleブックス </span></div>
            <div class="categoryName"><p>Kindleブックス</p></div>
            <div class="popularTitle">
                <div class="popularTitleIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/popular.png" alt="testResult"></div>
                <div class="section-title"><p class="text-top">人気の書籍</p></div>
            </div>
            <div class="popularArticle">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'all_kindlebooks',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'category_name' => 'Kindleブックス', // Add your category slug here
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
            </div>
        </section>
        <section class="notice">
            <div class="allVision inConteiner">
                <div class="bg vector15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector6.png" alt=""></div>
                <div class="bg vector8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector7.png" alt=""></div>
                <div class="bg vector2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector4.png" alt=""></div>
                <div class="bg vector1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgrounds/Vector10.png" alt=""></div>
                <div class="noticeTitle">
                    <div class="noticeIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/kindlBooks.png" alt="testResult"></div>
                    <div class="section-title"><p class="text-top">すべての書籍</p></div>
                </div>
                
                <div class="navtabs">
                    <div class="navtab active" data-target="newest" >新しい順</div>
                    <div class="navtab" data-target="oldest" >古い順</div>
                    <div class="underline"></div>
                </div>

                <div id="newest" class="vision_articles card-wrapper active">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        // Set up query arguments based on sort
                        $args = array(
                        'post_type' => 'all_kindlebooks',
                        'posts_per_page' => 8,
                        'paged' => $paged,
                        'category_name' => 'Kindleブックス', // Add your category slug here
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $category = get_the_category();
                            ?>
                        <div class="card" onclick="location.href='<?php echo get_permalink(); ?>';">
                            <div class="card-front">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            </div>
                            <div class="card-back">
                                <h3><?php echo the_title(); ?></h3>
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
                <div id="oldest" class="vision_articles card-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        // Set up query arguments based on sort
                        $args = array(
                        'post_type' => 'all_kindlebooks',
                        'posts_per_page' => 8,
                        'paged' => $paged,
                        'category_name' => 'Kindleブックス', // Add your category slug here
                        'orderby' => 'date',
                        'order' => 'ASC'
                        );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $category = get_the_category();
                            ?>
                        <div class="card" onclick="location.href='<?php echo get_permalink(); ?>';">
                            <div class="card-front">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            </div>
                            <div class="card-back">
                                <h3><?php echo the_title(); ?></h3>
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