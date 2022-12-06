<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.jaticker_1.0.0.js" type="text/javascript"></script>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/jquery.jaticker_1.0.0.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/index.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div id="wrapper" style="display: block;">

        <header id="head" class="bigger" style="display:none;">
            <div>
                <a href="<?php echo esc_url(home_url()); ?>" class="logo">
                    <h1 href="">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/yuru-logo3.png" alt="<?php bloginfo('name'); ?>" class="big-logo">
                    </h1>
                </a>
                <span class="header-Tagline"><?php bloginfo('description'); ?></span>
            </div>
            <div class="inner relative">
                <nav id="global-navi">
                    <ul id="main-menu">
                        <li><a href="">TOP</a></li>
                        <li><a href="">当院について</a></li>
                        <li><a href="">メニュー一覧</a></li>
                        <li><a href="">お客様の声</a></li>
                        <li><a href="">よくあるご質問</a></li>
                        <li><a href="">084-919-0663</a></li>
                        <li><a href="">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </header>