<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>視力のお悩み解決サイトの決定版！</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Common/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Layout/header.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Layout/footer.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <?php wp_head(); ?> 
</head>
<body>
    <header id="navbar" class="nav-down">
        <div class="top-header flex container">
            <div class="hamburger">
                <div class="circle"><div></div></div>
            </div>
            <div class="logo-content">
                <div class="idea"><p>その目に、未来を。視力ケアの最前線</p></div>
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="logo" /></a>
                </div>
            </div>
            <div class="sns-content flex">
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns1.png" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns2.png" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns3.png" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns4.png" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/sns5.png" alt=""></div>
            </div>
        </div>
        <div class="menu">
            <div class="menuButtons flex space-between container">
                <div class="menuButton">
                    <a href="<?php echo home_url(); ?>">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconTop.png" alt="top"></div>
                        <p>TOP</p>
                    </a>
                </div>
                <div class="menuButton">
                    <a href="<?php echo site_url();?>/visionTest">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconTest.png" alt="test"></div>
                        <p>ウェブで視力検査</p>
                    </a>
                </div>
                <div class="menuButton">
                    <a href="<?php echo site_url();?>/visionPossibility">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconResult.png" alt="result"></div>
                        <p>視力向上可能性判定</p>
                    </a>
                </div>
                <div class="menuButton">
                    <a href="<?php echo site_url();?>/visionDictionary">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconMdic.png" alt="mdic"></div>
                        <p>視力回復辞典</p>
                    </a>
                </div>
                <div class="menuButton">
                    <a href="<?php echo site_url();?>/eyeGlossary">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconDic.png" alt="dic"></div>
                        <p>目の用語辞典</p>
                    </a>
                </div>
                <div class="menuButton">
                    <a href="<?php echo site_url();?>/recipes">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconFood.png" alt="food"></div>
                        <p>目に優しいレシピ</p>
                    </a>
                </div>
                <div class="searchButton">
                    <div class="button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Icons/iconSearch.png" alt=""></div>
                </div>
            </div>
        </div>
        <div id="searchDropdown" class="search-dropdown">
            <div class="searchmenu">
                <div class="container">
                    <div class="search-Button">
                        <input type="text" placeholder="Search.." name="search" id="hot_search">
                        <button class="btn_hot_search">検 索</button>
                    </div>
                </div>
            </div>
            <div class="latest-link">
                <div class="container">
                    <div class="latest-link-title flex">
                        <div class="hotKeyword">HOTワード</div>
                        <div id = "hot_word1" class="hot_word"><p>視力回復</p></div>
                        <div id = "hot_word2" class="hot_word"><p>視力検査</p></div>
                        <div id = "hot_word3" class="hot_word"><p>サプリ</p></div>
                        <div id = "hot_word4" class="hot_word"><p>ホームワーク</p></div>
                        <div id = "hot_word5" class="hot_word"><p>近視</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="close"><p>✖</p></div>
            <div class="category"><p>カテゴリ</p></div>
            <ul class="lists">
                <li class="list">
                  <a href="<?php echo site_url();?>/visionTest" class="nav-link">
                      <span class="link">webで視力検査</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/visionPossibility" class="nav-link">
                      <span class="link">視力向上可能性判定</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/visionDictionary" class="nav-link">
                      <span class="link">視力回復辞典</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/eyeGlossary" class="nav-link">
                      <span class="link">目の用語辞典</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/recipes" class="nav-link">
                      <span class="link">目に優しいレシピ </span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/kindleBooks" class="nav-link">
                      <span class="link">Kindleブックス</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/products" class="nav-link">
                      <span class="link">アイケア商品</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/notice" class="nav-link">
                      <span class="link">お知らせ</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/template-parts/inquiry" class="nav-link">
                      <span class="link">お問い合わせ</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
                <li class="list">
                  <a href="<?php echo site_url();?>/template-parts/company" class="nav-link">
                      <span class="link">会社概要</span>
                      <span class="icon">&#10095;</span>
                  </a>
                </li>
            </ul>
        </div>
        <section class="overlay"></section>
    </header>