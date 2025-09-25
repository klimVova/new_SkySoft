<?php
/* Template Name: Blog page Template */
get_header();
$prewiev = get_field('news');

?>
<main class="news-page">
    <section class="news">
        <h1 class="news__title animate-fade-in-up"><?php the_title(); ?></h1>
        <?php
        $load_more_args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'paged' => 1,
        );
        $load_more_posts = new WP_Query($load_more_args);
        if ($load_more_posts->have_posts()): ?>
            <?php while ($load_more_posts->have_posts()):
                $load_more_posts->the_post(); ?>
                <a href="<?php the_permalink(get_the_ID()); ?>" class="news-card animate-slide-in-right delay-200">
                    <div class="news-card__container">
                        <?php echo get_the_post_thumbnail(); ?>
                        <div class="news-card__header">
                            <h2 class="news-card__title">
                                <?php the_title(); ?>
                                <svg width="33" height="9" viewBox="0 0 33 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M32.3536 4.85355C32.5488 4.65829 32.5488 4.34171 32.3536 4.14645L29.1716 0.964466C28.9763 0.769204 28.6597 0.769204 28.4645 0.964466C28.2692 1.15973 28.2692 1.47631 28.4645 1.67157L31.2929 4.5L28.4645 7.32843C28.2692 7.52369 28.2692 7.84027 28.4645 8.03553C28.6597 8.2308 28.9763 8.2308 29.1716 8.03553L32.3536 4.85355ZM0 5H32V4H0V5Z"
                                        fill="white" />
                                </svg>
                            </h2>
                            <p class="news-card__description">
                                <?= get_the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                    <time class="news-card__date"><?= get_the_date('j F Y'); ?></time>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>


<main class="blog-page">
    <h1 class="blog-page__title animate-fade-in-up">Блог</h1>

    <div class="blog-page__content">
        <section class="blogs-wrapper">
            <div class="blogs-item blogs-item--blog1 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    E-commerce для автодилеров. Насколько он полезен
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog2 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Оптимизация бизнес процесса на примере внедрения CRM
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog3 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Бизнес в интернете. Нужно ли создавать сайт
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog4 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Как правильно выбрать хостинг для своего проекта
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog5 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Что такое финтех-стартапы и как они работают
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog6 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Автоматизация бизнеса компании по оказанию услуг
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog7 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Как нефтегазовую промышленность в России может затронуть
                    цифровизация
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog8 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">Цифровизация городов. Умный город</h2>
            </div>
            <div class="blogs-item blogs-item--blog9 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Как правильно выбрать технологию для создания проекта
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog10 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Автоматизация коммуникаций в бизнесе
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog11 animate-slide-in-left delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Внедрение системы упрощения коммуникациями в отелях
                </h2>
            </div>
            <div class="blogs-item blogs-item--blog12 animate-slide-in-right delay-200">
                <time class="blogs-item__time" datetime="24-09-2024">24.09.2024</time>
                <h2 class="blogs-item__title">
                    Как правильно выбрать партнера в IT – сфере
                </h2>
            </div>
        </section>

        <section class="articles-wrapper">
            <div class="articles-wrapper__heading animate-fade-in-up">
                <img class="articles-wrapper__polygon-logo" src="../../img/polygon.png" alt="polygon" />
                <h2 class="articles-wrapper__title">Все статьи</h2>
            </div>
            <div class="articles-wrapper__content">
                <a class="articles-item animate-slide-in-left delay-200" href="#">E-commerce для автодилеров. Насколько
                    он полезен</a>
                <a class="articles-item animate-slide-in-left delay-200" href="#">Оптимизация бизнес процесса на примере
                    внедрения CRM</a>
                <a class="articles-item animate-slide-in-left delay-400" href="#">Бизнес в интернете. Нужно ли создавать
                    сайт</a>
                <a class="articles-item animate-slide-in-left delay-400" href="#">Как правильно выбрать хостинг для
                    своего проекта</a>
                <a class="articles-item animate-slide-in-left delay-600" href="#">Что такое финтех-стартапы и как они
                    работают</a>
                <a class="articles-item animate-slide-in-left delay-600" href="#">Автоматизация бизнеса компании по
                    оказанию услуг</a>
                <a class="articles-item animate-slide-in-left delay-800" href="#">Как нефтегазовую промышленность в
                    России может затронуть
                    цифровизация</a>
                <a class="articles-item animate-slide-in-left delay-800" href="#">Цифровизация городов. Умный город</a>
                <a class="articles-item animate-slide-in-left delay-1000" href="#">Как правильно выбрать технологию для
                    создания проекта</a>
                <a class="articles-item animate-slide-in-left delay-1000" href="#">Автоматизация коммуникаций в
                    бизнесе</a>
                <a class="articles-item animate-slide-in-left delay-1200" href="#">Внедрение системы упрощения
                    коммуникациями в отелях</a>
                <a class="articles-item animate-slide-in-left delay-1200" href="#">Как правильно выбрать партнера в IT –
                    сфере</a>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
?>