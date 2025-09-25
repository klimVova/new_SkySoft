<?php
/* Template Name: News page Template */
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
           <?php echo get_the_post_thumbnail();?>
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
                <?= get_the_excerpt();?>
              </p>
            </div>
          </div>
          <time class="news-card__date"><?= get_the_date('j F Y'); ?></time>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<?php
get_footer();
?>