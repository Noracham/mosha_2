<?php get_header(); ?>
<main class="wrapper">
    <h1 class="c-sub">News & Press</h1>
    <div class="n-p">
        <ul class="n-p-change">
            <li><a href="<?php echo esc_url(home_url('/category/news')) ?>"></a>ニュース</li>
            <li class="active"><a href="<?php echo esc_url(home_url('/category/press')) ?>"></a>プレスリリース</li>
        </ul>
        <ul class="n-p-list">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if (in_category('press')) { ?>
                        <li class="n-p-lists">
                            <ul class="np-row1">
                                <li><?php the_date(); ?></li>
                                <li class="np-category"><?php $category = get_the_category();
                                                        echo $category[0]->cat_name; ?></li>
                            </ul>
                            <div class="np-row2"><?php the_title(); ?></div>
                        </li>
            <?php }
                }
            }; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>