<?php
/**
 * The template for displaying all single portfolio
 */
get_header();
$сustomer = get_field('portfolio_сustomer');
$target = get_field('portfolio_target');
$description = get_field('portfolio_description');
?>
<main class="project">
      <h1 class="project__title animate-fade-in-up">
      <?= get_field('portfolio_title') ? get_field('portfolio_title') : ''; ?>
      </h1>
      <section class="project-info">
        <div class="project-info__customer animate-slide-in-left delay-400">
          <div class="project-info__heading">
            <img
              class="project-info__logo"
              src="<?= $сustomer['portfolio_сustomer_icon'] ? $сustomer['portfolio_сustomer_icon'] : ''; ?>"
              alt="polygon"
            />
            <h2 class="project-info__title"><?= $сustomer['portfolio_сustomer_title'] ? $сustomer['portfolio_сustomer_title'] : ''; ?></h2>
          </div>
          <p class="project-info__text">
            <?= $сustomer['portfolio_сustomer_desc'] ? $сustomer['portfolio_сustomer_desc'] : ''; ?>
          </p>

          <a class="project-info__link" href="<?= $сustomer['portfolio_сustomer_link'] ? $сustomer['portfolio_сustomer_link'] : ''; ?>"
            ><?= $сustomer['portfolio_сustomer_link'] ? $сustomer['portfolio_сustomer_link'] : ''; ?></a
          >
        </div>

        <div class="project-info__purpose animate-slide-in-right delay-400">
          <div class="project-info__heading">
            <img
              class="project-info__logo"
              src="<?= $target['portfolio_target_icon'] ? $target['portfolio_target_icon'] : ''; ?>"
              alt="polygon"
            />
            <h2 class="project-info__title"><?= $target['portfolio_target_title'] ? $target['portfolio_target_title'] : ''; ?></h2>
          </div>
          <p class="project-info__text">
          <?= $target['portfolio_target_desc'] ? $target['portfolio_target_desc'] : ''; ?>
          </p>
        </div>
      </section>

      <section class="project-description">
        <div class="project-description__heading animate-fade-in-up delay-400">
          <img
            class="project-description__logo"
            src="<?= $description['portfolio_description_icon'] ? $description['portfolio_description_icon'] : ''; ?>"
            alt="polygon"
          />
          <h2 class="project-description__title"><?= $description['portfolio_description_title'] ? $description['portfolio_description_title'] : ''; ?></h2>
        </div>
        <?php 
        $blocks = $description['portfolio_description_blocks'];
        foreach($blocks as $block):?>
        <div class="primary-page scroll-animate delay-200">
          <h3 class="primary-page__title"><?= $block['title'] ? $block['title'] : ''; ?></h3>
          <p class="primary-page__text">
          <?= $block['desc'] ? $block['desc'] : ''; ?>
          </p>
          <img
            class="primary-page__image"
            src="<?= $block['image'] ? $block['image'] : ''; ?>"
            alt="<?= $block['title'] ? $block['title'] : ''; ?>"
          />
        </div>
        <?php endforeach;?>    
      </section>
    </main>

<?php
get_footer();
?>