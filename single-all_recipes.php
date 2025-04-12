<?php  get_header();?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Common/like-button.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/recipesDetail.css" />
    <main class="single-all_recipes">
        <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> <a href="<?php echo site_url();?>/recipes">目に優しいレシピ</a></span><span>> <?php the_title(); ?></span></div>
            <div class="kindleBooksDetail-content flex space-between">
                <div class="flex-left">
                    <div class="title flex space-between">
                        <div class="text"><?php the_title(); ?></div>
                        <div class="sns-content flex">
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns1.png" alt=""></div>
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns2.png" alt=""></div>
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns3.png" alt=""></div>
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns4.png" alt=""></div>
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns5.png" alt=""></div>
                        </div>
                    </div>
                    <div class="releaseDate">
                        <div class="like">
                            <div class="tag">❤お役立ち度：</div>
                            <div class="name">80％</div>
                        </div>
                        <div class="view">
                            <span>👁</span>
                            <div class="tag">閲覧数：</div>
                            <div class="date">22021</div>
                        </div>
                    </div>
                    <div class="banner"><?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?></div>
                    <div class="properties">
                        <div class="during">
                            <span>🕑 調理時間</span>&nbsp;&nbsp;&nbsp;
                            <span>10分</span>
                        </div>
                        <div class="keep">
                            <span class="keepButton">🔖 保存</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <span>1023</span>
                        </div>
                        <button class="like-button">
                            <div class="like-wrapper">
                                <div class="ripple"></div>
                                <svg class="heart" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
                                </svg>
                                <div class="particles" style="--total-particles: 6">
                                <div class="particle" style="--i: 1; --color: #7642F0"></div>
                                <div class="particle" style="--i: 2; --color: #AFD27F"></div>
                                <div class="particle" style="--i: 3; --color: #DE8F4F"></div>
                                <div class="particle" style="--i: 4; --color: #D0516B"></div>
                                <div class="particle" style="--i: 5; --color: #5686F2"></div>
                                <div class="particle" style="--i: 6; --color: #D53EF3"></div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                   
                    <div class="under-button">
                    <?php
                        $prev_post = get_adjacent_post(false, '', true);
                        if (!empty($prev_post)) {
                            echo '<a href=\'' . get_permalink($prev_post) . '\'>
                                    <div class="buttons beforeButton">
                                        <div class="button-img">'. get_the_post_thumbnail($prev_post) .'</div>
                                        <div class="button-text">' . get_the_title($prev_post) . '</div>
                                    </div>
                                </a>';
                        }
                        $next_post = get_adjacent_post(false, '', false);
                        if (!empty($next_post)) {
                            echo '<a href=\'' .get_permalink($next_post). '\'>
                                    <div class="buttons nextButton">
                                        <div class="button-img">'. get_the_post_thumbnail($next_post) .'</div>
                                    <div class="button-text">' . get_the_title($next_post) . '</div>
                                    </div>
                                </a>';
                        }
                    ?>
                    </div>
                </div>
                <div class="flex-right">
                    <div class="title"><p>目に優しいレシピ</p></div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></a></div>
                    <div class="otherCategory">
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/visionPossibility">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconResult.png" alt=""></div>
                                <div class="otherCategory-item-text">視力向上可能性判定</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/visionDictionary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconMdic.png" alt=""></div>
                                <div class="otherCategory-item-text">視力回復辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/eyeGlossary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconDic.png" alt=""></div>
                                <div class="otherCategory-item-text">目の用語辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/notice">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconNotice.png" alt=""></div>
                                <div class="otherCategory-item-text">お知らせ</div>
                            </a>
                        </div>
                    </div>
                    <div class="searchBox">
                        <div class="search-Button">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit">検 索</button>
                        </div>
                    </div>
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
                    <div class="popularArticles">
                        <p>人気レシピ</p>
                        <?php
                        $args = array(
                            'post_type' => 'all_recipes',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        
                        $featured_query = new WP_Query($args);
                        $i = 1;
                        if ($featured_query->have_posts()) :
                            while ($featured_query->have_posts()) : $featured_query->the_post();
                                $category = get_the_category();
                        ?>
                            <div class="item" onclick="location.href='<?php the_permalink(); ?>';">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php endif; ?>
                                <div class="item-title"><p><?php echo get_the_title(); ?></p></div>
                                <div class="populerOrder"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/Icons/order<?php echo $i++?>.png" alt=""></div>
                            </div>
                        <?php
                        endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                    <div class="relativeArticles">
                        <p>関連記事</p>
                        <?php
                        $args = array(
                            'post_type' => 'all_articles',
                            'posts_per_page' => 8,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        
                        $featured_query = new WP_Query($args);
                        $i = 1;
                        if ($featured_query->have_posts()) :
                            while ($featured_query->have_posts()) : $featured_query->the_post();
                                $category = get_the_category();
                        ?>
                        <div class="item" onclick="location.href='<?php the_permalink(); ?>';">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/articles/default-article.jpg" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div class="item-title"><p><?php echo get_the_title(); ?></p></div>
                        </div>
                        <?php
                        endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/like-button.js"></script>
    <?php get_footer(); ?>