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
<section id="company" class="wrapper">
    <div class="company_info">
        <h1 class="sub-title">COMPANY<br><span>会社情報</span></h1>
        <dl class="info-list">
            <dt>会社名</dt>
            <dd>ウェブエンターテイメントデザイン株式会社</dd>
            <dt>所在地</dt>
            <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
            <dt>代表</dt>
            <dd>田中　太郎</dd>
            <dt>資本金</dt>
            <dd>3,000,000円</dd>
            <dt>事業内容</dt>
            <dd>Web制作・マーケティング</dd>
            <dd class="plus">インターネットメディア事業</dd>
            <dd class="plus">プロモーション企画・制作</dd>
            <dd class="plus">ソーシャル企画・運営</dd>
        </dl>
    </div>
</section>
<?php get_footer(); ?>