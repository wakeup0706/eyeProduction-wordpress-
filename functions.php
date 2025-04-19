<?php

add_theme_support( 'post-thumbnails' );


// Receive the Request post that came from AJAX
add_action( 'wp_ajax_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' );
// We allow non-logged in users to access our pagination
add_action( 'wp_ajax_nopriv_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' );
function cvf_demo_pagination_load_posts() {
   
    global $wpdb;
    // Set default variables
    $msg = '';
    if(isset($_POST['page'])){
        // Sanitize the received page  
        $page = sanitize_text_field($_POST['page']);
        $post_type = sanitize_text_field($_POST['post_type']);
        $order = sanitize_text_field($_POST['sort']);
        $category = sanitize_text_field($_POST['category']);
        $per_page = sanitize_text_field($_POST['per_page']);
        $search_key = sanitize_text_field($_POST['search_key']);
        $initials = sanitize_text_field($_POST['initials']);
        $cur_page = $page;
        $page -= 1;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
       
        // Set the table where we will be querying data
        $table_name = $wpdb->prefix . "posts";

        if($category != 'all'){
            if($initials){
                $all_blog_posts = $wpdb->get_results($wpdb->prepare("
                    SELECT p.* FROM wp_posts p JOIN wp_term_relationships tr ON p.ID = tr.object_id JOIN wp_term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id JOIN wp_terms t ON tt.term_id = t.term_id WHERE t.name = '$category' AND `post_title` LIKE '$initials%' ORDER BY $order LIMIT %d, %d;", $start, $per_page));
                $count = $wpdb->get_var($wpdb->prepare("
                    SELECT COUNT(ID) FROM wp_posts p JOIN wp_term_relationships tr ON p.ID = tr.object_id JOIN wp_term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id JOIN wp_terms t ON tt.term_id = t.term_id WHERE t.name = '$category' AND `post_title` LIKE '$initials%')", array() ) );
            } else{
                $all_blog_posts = $wpdb->get_results($wpdb->prepare("
                    SELECT p.* FROM wp_posts p JOIN wp_term_relationships tr ON p.ID = tr.object_id JOIN wp_term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id JOIN wp_terms t ON tt.term_id = t.term_id WHERE t.name = '$category' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%') ORDER BY $order LIMIT %d, %d;", $start, $per_page));
                $count = $wpdb->get_var($wpdb->prepare("
                    SELECT COUNT(ID) FROM wp_posts p JOIN wp_term_relationships tr ON p.ID = tr.object_id JOIN wp_term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id JOIN wp_terms t ON tt.term_id = t.term_id WHERE t.name = '$category' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%')", array() ) );
            }
        } else {
            if($initials){
                $all_blog_posts = $wpdb->get_results($wpdb->prepare("
                    SELECT * FROM " . $table_name . " WHERE post_type = '$post_type' AND post_status = 'publish' AND `post_title` LIKE '$initials%' ORDER BY $order LIMIT %d, %d", $start, $per_page ) );
                $count = $wpdb->get_var($wpdb->prepare("
                    SELECT COUNT(ID) FROM " . $table_name . " WHERE post_type = '$post_type' AND post_status = 'publish' AND `post_title` LIKE '$initials%'", array() ) );
            } else {
                $all_blog_posts = $wpdb->get_results($wpdb->prepare("
                    SELECT * FROM " . $table_name . " WHERE post_type = '$post_type' AND post_status = 'publish' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%') ORDER BY $order LIMIT %d, %d", $start, $per_page ) );
                $count = $wpdb->get_var($wpdb->prepare("
                    SELECT COUNT(ID) FROM " . $table_name . " WHERE post_type = '$post_type' AND post_status = 'publish' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%')", array() ) );
            }
        }
        
        // Loop into all the posts
        foreach($all_blog_posts as $key => $post):
           
            if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "Kindleブックス"){
                $msg .= '
                <div class="card" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    <div class="card-front">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    </div>
                    <div class="card-back">
                        <h3>'. esc_html($post->post_title) .'</h3>
                    </div>
                </div>';
            }else if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "すべてのお知らせ" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "お知らせ" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "プレスリリース" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "メディア掲載"){
                $msg .= '
                <div class="content" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="contentDate">'. get_the_date('Y.m.d', $post->ID) .'</div>
                    <div class="contentText">
                        <p>' . esc_html($post->post_title) . '</p>
                    </div> 
                </div>';
            }else if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "アイケア商品"){
                $msg .= '
                <div class="seeMoreArticle" onClick="javascript:window.open(\''.get_post_meta($post->ID, "url", true).'\', \'_blank\');" >
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent">
                        <div class="articleType">
                            <div class="articleType-text"><p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p></div>
                            <div class="articleType-mark"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/mark.png" alt="mark"></div>
                        </div>
                        <div class="articleContent-date"><p>' . get_the_date('Y.m.d', $post->ID) . '</p></div>
                        <div class="articleContent-text">
                        <p>' . esc_html($post->post_title) . '</p>
                        </div>
                    </div>
                </div>';
            }else{
                $msg .= '
                <div class="seeMoreArticle" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent">
                        <div class="articleType">
                            <div class="articleType-text">
                                <p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p>
                            </div>
                            <div class="articleType-mark">
                                <img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/mark.png" alt="mark">
                            </div>
                        </div>
                        <div class="articleContent-date">
                            <p>' . get_the_date('Y.m.d', $post->ID) . '</p>
                        </div>
                        <div class="articleContent-text">
                            <p>' . esc_html($post->post_title) . '</p>
                        </div>
                    </div>
                </div>';
            }
           
        endforeach;
       
        // Optional, wrap the output into a container
        $msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";
       
        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
       
        // Pagination Buttons logic    
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/before.png'><span>«</span></li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/before.png'><span>«</span></li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }
       
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/after.png'><span>»</span></li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/after.png'><span>»</span></li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";
       
        // We echo the final output
        echo
        '<div class = "cvf-pagination-content">' . $msg . '</div>' .
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';
       
    }
    // Always exit to avoid further execution
    exit();
}


// Receive the Request post that came from AJAX
add_action( 'wp_ajax_demo-popular-load-posts', 'cvf_demo_popular_load_posts' );
// We allow non-logged in users to access our pagination
add_action( 'wp_ajax_nopriv_demo-popular-load-posts', 'cvf_demo_popular_load_posts' );
function cvf_demo_popular_load_posts() {
   
    global $wpdb;
    // Set default variables
    $msg = '';
    if(isset($_POST['page'])){
        // Sanitize the received page  
        $page = sanitize_text_field($_POST['page']);
        $post_type = sanitize_text_field($_POST['post_type']);
        $order = sanitize_text_field($_POST['sort']);
        $per_page = sanitize_text_field($_POST['per_page']);
        $search_key = sanitize_text_field($_POST['search_key']);
        $cur_page = $page;
        $page -= 1;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
       
        // Set the table where we will be querying data
        $table_name = $wpdb->prefix . "posts";
        $all_blog_posts = $wpdb->get_results($wpdb->prepare("
            SELECT * FROM " . $table_name . " WHERE post_type = '$post_type' AND post_status = 'publish' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%') ORDER BY $order LIMIT %d, %d", $start, $per_page ) );
        // Loop into all the posts
        foreach($all_blog_posts as $key => $post):
           
            if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "Kindleブックス"){
                $msg .= '
                <div class="card" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    <div class="card-front">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    </div>
                    <div class="card-back">
                        <h3>'. esc_html($post->post_title) .'</h3>
                    </div>
                </div>';
            }else if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "すべてのお知らせ" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "お知らせ" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "プレスリリース" || wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "メディア掲載"){
                $msg .= '
                <div class="seeMoreArticle" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent-date">'. get_the_date('Y.m.d', $post->ID) .'</div>
                    <div class="contentText">
                        <p>' . esc_html($post->post_title) . '</p>
                    </div> 
                </div>';
            }else if(wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] == "アイケア商品"){
                $msg .= '
                <div class="seeMoreArticle" onClick="javascript:window.open(\''.get_post_meta($post->ID, "url", true).'\', \'_blank\');">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent">
                        <div class="articleType">
                            <div class="articleType-text"><p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p></div>
                            <div class="articleType-mark"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/mark.png" alt="mark"></div>
                        </div>
                        <div class="articleContent-date"><p>' . get_the_date('Y.m.d', $post->ID) . '</p></div>
                        <div class="articleContent-text">
                        <p>' . esc_html($post->post_title) . '</p>
                        </div>
                    </div>
                </div>';
            }else{
                $msg .= '
                <div class="seeMoreArticle" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent">
                        <div class="articleType">
                            <div class="articleType-text"><p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p></div>
                            <div class="articleType-mark"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/mark.png" alt="mark"></div>
                        </div>
                        <div class="articleContent-date"><p>' . get_the_date('Y.m.d', $post->ID) . '</p></div>
                        <div class="articleContent-text">
                        <p>' . esc_html($post->post_title) . '</p>
                        </div>
                    </div>
                </div>';
            }
           
        endforeach;
        echo
        '<div class = "popularArticle">' . $msg . '</div><br class = "clear" />';
    }
    exit();
}

// Receive the Request post that came from AJAX
add_action( 'wp_ajax_demo-all-load-posts', 'cvf_demo_all_load_posts' );
// We allow non-logged in users to access our pagination
add_action( 'wp_ajax_nopriv_demo-all-load-posts', 'cvf_demo_all_load_posts' );
function cvf_demo_all_load_posts() {
   
    global $wpdb;
    // Set default variables
    $msg = '';
    if(isset($_POST['page'])){
        // Sanitize the received page  
        $page = sanitize_text_field($_POST['page']);
        $order = sanitize_text_field($_POST['sort']);
        $per_page = sanitize_text_field($_POST['per_page']);
        $search_key = sanitize_text_field($_POST['search_key']);
        $cur_page = $page;
        $page -= 1;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
       
        // Set the table where we will be querying data
        $table_name = $wpdb->prefix . "posts";
        $all_blog_posts = $wpdb->get_results($wpdb->prepare("
            SELECT * FROM " . $table_name . " WHERE (post_type = 'all_articles' OR post_type = 'all_terms' OR post_type = 'all_recipes') AND post_status = 'publish' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%') ORDER BY $order LIMIT %d, %d", $start, $per_page ) );
        $count = $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(ID) FROM " . $table_name . " WHERE (post_type = 'all_articles' OR post_type = 'all_terms' OR post_type = 'all_recipes') AND post_status = 'publish' AND (`post_content` LIKE '%$search_key%' OR `post_title` LIKE '%$search_key%')", array() ) );
        foreach($all_blog_posts as $key => $post):
            $msg .= '
                <div class="seeMoreArticle" onclick="location.href=\'' . get_permalink($post->ID) . '\';">
                    ' . (has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('class' => 'article-thumbnail')) : '<img src="' . get_stylesheet_directory_uri() . '/assets/img/articles/default-article.jpg" alt="' . esc_attr(get_the_title($post->ID)) . '">') . '
                    <div class="articleContent">
                        <div class="articleType">
                            <div class="articleType-text"><p>' . wp_get_post_terms($post->ID, 'category', array('fields' => 'names'))[0] . '</p></div>
                            <div class="articleType-mark"><img src="' . get_stylesheet_directory_uri() . '/assets/img/Icons/mark.png" alt="mark"></div>
                        </div>
                        <div class="articleContent-date"><p>' . get_the_date('Y.m.d', $post->ID) . '</p></div>
                        <div class="articleContent-text">
                        <p>' . esc_html($post->post_title) . '</p>
                        </div>
                    </div>
                </div>';
        endforeach;

        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
       
        // Pagination Buttons logic    
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/before.png'><span>«</span></li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/before.png'><span>«</span></li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }
       
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/after.png'><span>»</span></li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'><img src='" . get_stylesheet_directory_uri() ."/assets/img/Icons/after.png'><span>»</span></li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";

        echo
        '<div class = "popularArticle">' . $msg . '</div><br class = "clear" />'.
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';
    }
    exit();
}


// Function to get post views
function get_post_views( $postID ) {
    $count_key = 'post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '1' );
        return 1;
    }
    return $count;
}

// Function to set/increment post views
function set_post_views( $postID ) {
    $count_key = 'post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        $count = 1;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '1' );
    } else {
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
}

/////////////////////////////
function initialize_vote_meta($post_id) {
    if (!get_post_meta($post_id, '_good_votes', true)) {
        update_post_meta($post_id, '_good_votes', 0);
    }
}
add_action('save_post', 'initialize_vote_meta');

function render_like_button($post_id = null) {
    if (!$post_id) $post_id = get_the_ID();
    $count = get_post_meta($post_id, '_good_votes', true);

    echo '
    <div class="like-container" data-postid="' . esc_attr($post_id) . '" like-count="' . esc_html($count) . '">
        <button type="button" class="like-button">
            <div class="like-wrapper">
                <div class="ripple"></div>
                <svg class="heart" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5
                    C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08
                    C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5
                    C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
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
    </div>';
}

function handle_good_vote_ajax() {
    check_ajax_referer('vote_nonce', 'nonce');

    $post_id = intval($_POST['post_id']);
    $count = (int) get_post_meta($post_id, '_good_votes', true);
    $count++;
    update_post_meta($post_id, '_good_votes', $count);

    wp_send_json_success(['new_count' => $count]);
}

add_action('wp_ajax_nopriv_vote_good', 'handle_good_vote_ajax');
add_action('wp_ajax_vote_good', 'handle_good_vote_ajax');

function enqueue_vote_script() {
    wp_enqueue_script('vote-js', get_template_directory_uri() . '/assets/js/vote.js', array('jquery'), null, true);
    wp_localize_script('vote-js', 'voteData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('vote_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_vote_script');
//////////////////

function enqueue_keep_button_script() {
    wp_enqueue_script(
        'qrcode-keep',
        get_stylesheet_directory_uri() . '/assets/js/qrcode_keep.js',
        array('jquery'),
        null,
        true
    );

    wp_localize_script('qrcode-keep', 'keep_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'post_id'  => get_the_ID(),
        'nonce'    => wp_create_nonce('keep_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_keep_button_script');

function handle_keep_button_click() {
    check_ajax_referer('keep_nonce', 'nonce');
    
    $post_id = intval($_POST['post_id']);
    if (!$post_id) {
        wp_send_json_error('Invalid post ID');
    }

    $count = get_post_meta($post_id, '_keep_count', true);
    $count = $count ? intval($count) + 1 : 1;

    update_post_meta($post_id, '_keep_count', $count);

    wp_send_json_success(array('new_count' => $count));
}
add_action('wp_ajax_increment_keep_count', 'handle_keep_button_click');
add_action('wp_ajax_nopriv_increment_keep_count', 'handle_keep_button_click');