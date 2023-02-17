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
<?php get_footer(); ?>