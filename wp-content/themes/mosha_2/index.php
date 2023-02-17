<?php get_header(); ?>
<section class="main-visu"><img src="<?php echo esc_url(get_theme_file_uri('/img/office-visu.jpg')) ?>" alt="main"></section>

<section id="news" class="wrapper">
    <h1 class="sub-title">NEWS<br><span>ニュース</span></h1>
    <ul class="news-list">
        <?php query_posts('posts_per_page=3'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                <li>
                    <div class="list-row">
                        <p class="list-date"><?php the_date('Y.m.d'); ?></p>
                        <p class="list-category"><?php $category = get_the_category();
                                                    echo $category[0]->cat_name; ?></p>
                    </div>
                    <p class="list-title"><?php the_title(); ?></p>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>
</section>
<section id="about">
    <div class="about-img"><img src="<?php echo esc_url(get_theme_file_uri('img/yoav-hornung-Qg6lPXJ6IL4-unsplash.jpg')) ?>" alt=""></div>
    <div class="about-txt">
        <h1 class="sub-title">ABOUT<br><span>私たちについて</span></h1>
        <p>テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト</p>
    </div>
</section>
<section class="business wrapper">
    <h1 class="sub-title">BUSINESS<br><span>事業内容</span></h1>
    <div class="business-contents">
        <div class="contents1 contents">
            <div class="content">
                <h3>Web制作・マーケティング</h3>
                <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('img/web.jpg')) ?>" alt="web"></div>
            </div>
            <div class="content">
                <h3>インターネットメディア事業</h3>
                <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('img/movie.jpg')) ?>" alt="movie"></div>
            </div>
        </div>
        <div class="contents2 contents">
            <div class="content">
                <h3>プロモーション企画・制作</h3>
                <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('img/camera.jpg')) ?>" alt="web"></div>
            </div>
            <div class="content">
                <h3>ソーシャル企画・運営</h3>
                <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('img/sns.jpg')) ?>" alt="movie"></div>
            </div>
        </div>


    </div>
</section>
<?php get_footer(); ?>