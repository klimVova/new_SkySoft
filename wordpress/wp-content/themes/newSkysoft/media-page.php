<?php
/* Template Name: Media page Template */
get_header();
?>
<main class="media-page">
    <section class="media">
        <h1 class="media__title animate-fade-in-up"><?php the_title(); ?></h1>
        <div class="media__list">
            <?php
            $load_more_args = array(
                'post_type' => 'media',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'paged' => 1,
            );
            $load_more_posts = new WP_Query($load_more_args);
            if ($load_more_posts->have_posts()): ?>
                <?php while ($load_more_posts->have_posts()):
                    $load_more_posts->the_post(); ?>
                    <article class="media-card animate-slide-in-right delay-200">
                        <div class="media-card__container">
                            <img class="media-card__image" src="<?= get_field('media_logo') ? get_field('media_logo') : ''; ?>"
                                alt="<?php the_title(); ?>" />
                            <div class="media-card__header">
                                <h2 class="media-card__title">
                                    <?php the_excerpt(); ?>
                                </h2>
                                <a href="<?= get_field('media_link') ? get_field('media_link') : '#'; ?>" class="media-card__description">
                                    Читать
                                    <svg width="33" height="9" viewBox="0 0 33 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.3536 4.85355C32.5488 4.65829 32.5488 4.34171 32.3536 4.14645L29.1716 0.964466C28.9763 0.769204 28.6597 0.769204 28.4645 0.964466C28.2692 1.15973 28.2692 1.47631 28.4645 1.67157L31.2929 4.5L28.4645 7.32843C28.2692 7.52369 28.2692 7.84027 28.4645 8.03553C28.6597 8.2308 28.9763 8.2308 29.1716 8.03553L32.3536 4.85355ZM0 5H32V4H0V5Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <time class="media-card__date"
                            datetime="<?= get_the_date('j F Y'); ?>"><?= get_the_date('j F Y'); ?></time>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>