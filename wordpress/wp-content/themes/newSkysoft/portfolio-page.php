<?php
/* Template Name: Portfolio page Template */
get_header();
?>
<main class="portfolio-page">
    <h1 class="portfolio-page__title animate-fade-in-up"><?php the_title(); ?></h1>

    <section class="portfolio-content">
        <?php
        $load_more_args = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'paged' => 1,
        );
        $load_more_posts = new WP_Query($load_more_args);
        if ($load_more_posts->have_posts()): ?>
            <?php while ($load_more_posts->have_posts()):
                $load_more_posts->the_post(); ?>
                <a href="<?php the_permalink(get_the_ID()); ?>"
                    class="portfolio-content__wrapper animate-slide-in-left delay-200">
                    <?php 
                    $custom_class  ="portfolio-content__image";
                    echo get_the_post_thumbnail( null, 'thumbnail', array( 'class' => $custom_class ) ); ?>
                    <div class="portfolio-content__text-box">
                        <h2 class="portfolio-content__title">
                            <?php the_title(); ?>
                            <svg width="33" height="8" viewBox="0 0 33 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.3536 4.47355C32.5488 4.27829 32.5488 3.9617 32.3536 3.76644L29.1716 0.584461C28.9763 0.389199 28.6597 0.389199 28.4645 0.584461C28.2692 0.779723 28.2692 1.09631 28.4645 1.29157L31.2929 4.12L28.4645 6.94842C28.2692 7.14368 28.2692 7.46027 28.4645 7.65553C28.6597 7.85079 28.9763 7.85079 29.1716 7.65553L32.3536 4.47355ZM0 4.62H32V3.62H0V4.62Z"
                                    fill="white" />
                            </svg>
                        </h2>
                        <p class="portfolio-content__text">
                            <?= get_the_excerpt(); ?>
                        </p>
                        <img class="portfolio-content__logo" src="<?= get_field('logo_site') ? get_field('logo_site') : ''; ?>"
                            alt="cerprize" />

                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
?>