<?php
/**
 * The template for displaying all single news
 */

get_header();
$news = get_field('news');
?>
<main class="news-details">
    <article class="news-article">
        <h1 class="news-article__title animate-fade-in-up">
            <?php the_title(); ?>
        </h1>
        <div class="news-article__content">
            <div class="news-article__heading">
                <img class="news-article__logo animate-scale-in delay-200"
                    src="<?= $news['logo'] ? $news['logo'] : ''; ?>" alt=" <?php the_title(); ?>" />
                <p class="news-article__description animate-fade-in delay-400">
                    <?= $news['desc'] ? $news['desc'] : ' '; ?>
                </p>
            </div>
            <div class="news-article__gallery">
                <img class="news-article__photo animate-slide-in-left delay-600"
                    src="<?= $news['photo-1'] ? $news['photo-1'] : ''; ?>" alt=" <?php the_title(); ?>" />
                <img class="news-article__photo animate-fade-in delay-800"
                    src="<?= $news['photo-2'] ? $news['photo-2'] : ''; ?>" alt=" <?php the_title(); ?>" />
                <img class="news-article__photo animate-slide-in-right delay-1000"
                    src="<?= $news['photo-3'] ? $news['photo-3'] : ''; ?>" alt=" <?php the_title(); ?>" />
            </div>
            <p class="news-article__text animate-fade-in">
                <?= $news['text'] ? $news['text'] : ''; ?>
            </p>
            <img class="news-article__main-photo animate-scale-in"
                src=" <?= $news['main_photo'] ? $news['main_photo'] : ''; ?>" alt=" <?php the_title(); ?>" />
        </div>
    </article>
</main>

<?php
get_footer();
?>