<?php  get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Pages/visionDictionaryDetail.css" />
    <main class="single-all_articles">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="breadcrumb"><span><a href="<?php echo home_url(); ?>">TOP</a></span><span>> <a href="<?php echo site_url();?>/visionDictionary">視力回復辞典</a></span><span>> <?php the_title(); ?></span></div>
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
                        <div class="author">
                            <div class="tag"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/author.png" alt=""></div>
                            <div class="name">眼育総研事務局</div>
                        </div>
                        <div class="openingDay">
                            <div class="tag">🖍 公開日：</div>
                            <div class="date">2019.11.12</div>
                        </div>
                        <div class="update">
                            <div class="tag">↺ 更新日：</div>
                            <div class="date">2025.03.16</div>
                        </div>
                    </div>
                    <div class="banner"><?php the_post_thumbnail('full', array('class' => 'article-thumbnail')); ?></div>
                    <div class="index">
                        <div class="index-title"><img src="http://localhost/wordpress/wp-content/themes/eyeProtection/assets/img/Icons/index.png" alt="null" />目次</div>
                        <div class="index-content">
                            <div class="index-item"><a href="#first">息子が近視宣告されました!</a></div>
                            <div class="index-item"><a href="#second">恐る恐る眼科に行くと</a></div>
                            <div class="index-item"><a href="#third">さて、これからはどうすれば良いのか</a></div>
                        </div>
                    </div>
                    <div class="writer">
                        <div class="photo">
                            <?php
                                $image = get_field('author_mark');
                                if($image) {
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                    echo '<img src="' . $url . '" alt="' . $alt . '" />';
                                }
                            ?> 
                        </div>
                        <div class="name-job">
                            <div class="name"><span>執筆者</span><?php echo get_post_meta(get_the_ID(), "author", true); ?></div>
                            <div class="job"><?php echo get_post_meta(get_the_ID(), "author_content", true); ?></div>
                        </div>
                    </div>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php 
                        global $post;
                    ?>
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
                    ?>
                    <?php
                        $next_post = get_adjacent_post(false, '', false);
                        if (!empty($next_post)) {
                            echo '<a href=\''.get_permalink($next_post).'\'>
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
                    <div class="title"><p>視力回復辞典(視力回復の真実)</p></div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/land_banner1.jpg" alt=""></a></div>
                    <div class="otherCategory">
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/visionPossibility">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconResult.png" alt=""></div>
                                <div class="otherCategory-item-text">視力向上可能性判定</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/eyeGlossary">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconDic.png" alt=""></div>
                                <div class="otherCategory-item-text">目の用語辞典</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/recipes">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconFood.png" alt=""></div>
                                <div class="otherCategory-item-text">目に優しいレシピ</div>
                            </a>
                        </div>
                        <div class="otherCategory-item">
                            <a href="<?php echo site_url();?>/notice">
                                <div class="otherCategory-item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconNotice.png" alt=""></div>
                                <div class="otherCategory-item-text">お知らせ</div>
                            </a>
                        </div>
                    </div>
                    <div class="banner"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-registration.jpg" alt=""></a></div>
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
                        <p>人気記事ランキング</p>
                        <?php
                        $args = array(
                            'post_type' => 'all_articles',
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
    <?php get_footer(); ?>