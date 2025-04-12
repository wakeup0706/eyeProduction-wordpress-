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

?>