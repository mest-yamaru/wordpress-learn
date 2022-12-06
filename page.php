<?php get_header(); ?>
<div class="notice">
        <div class="notice-box">
            <p class="notice-title">
                <span>新着情報</span>
                <span><a href="" class=""><button class="notice-btn">詳しく見る</button></a></span>
            </p>
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post()
                    ?>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">美容エステ始めました</li>
            </ul>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">新着情報のタイトルが⼊りますニュースのタイトルが⼊ります</li>
            </ul>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">新着情報のタイトルが⼊りますニュースのタイトルが⼊ります</li>
            </ul>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">新着情報のタイトルが⼊りますニュースのタイトルが⼊ります</li>
            </ul>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">新着情報のタイトルが⼊りますニュースのタイトルが⼊ります</li>
            </ul>
            <ul class="notice-list">
                <li class="notice-date">yyyy/mm/dd</li>
                <li class="notice-text">新着情報のタイトルが⼊りますニュースのタイトルが⼊ります</li>
            </ul>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
