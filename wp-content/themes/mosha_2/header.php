<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body class="main-body">
    <header>
        <div class="logo"><a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')) ?>" alt=""></a></div>
        <ul class="category">
            <li><a href="<?php echo esc_url(home_url('/category/news')) ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url()) ?>#about">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url()) ?>#business">BUSINESS</a></li>
            <li><a href="<?php echo esc_url(home_url()) ?>#company">COMPANY</a></li>
        </ul>
        <div class="contact-link"><a href="<?php esc_url(home_url('/contact')) ?>">お問い合わせ</a></div>

    </header>