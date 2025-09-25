<?php
/* Template Name: Main page Template */
get_header();
$intro = get_field('intro');
$intro_button = $intro['intro_button'];
$services = get_field('services');
$advantages = get_field('advantages');
$partners = get_field('partners');
$achievements = get_field('achievements');
?>

<body>
  <main class="main-page">
    <section class="intro">
      <video class="intro__video-bg" autoplay muted loop playsinline>
        <source src=" <?= $intro['intro_video'] ? $intro['intro_video'] : ''; ?>" type="video/mp4" />
      </video>
      <div class="intro__container">
        <h1 class="intro__title animate-fade-in-up"><?= $intro['intro_title'] ? $intro['intro_title'] : ''; ?></h1>
        <p class="intro__description animate-fade-in-up delay-200">
          <?= $intro['intro_subtitle'] ? $intro['intro_subtitle'] : ''; ?>
        </p>
        <a href="<?= $intro_button['intro_button-link'] ? $intro_button['intro_button-link'] : ''; ?>"
          class="intro__button animate-fade-in-up delay-400"><?= $intro_button['intro_button-text'] ? $intro_button['intro_button-text'] : ''; ?></a>
      </div>
    </section>

    <div class="main-page__wrapper">
      <section class="services scroll-animate">
        <div class="services__container">
          <div class="services__heading animate-slide-in-left">
            <img src="<?= $services['services_logo'] ? $services['services_logo'] : ''; ?>" alt="polygon"
              class="services__logo" />
            <h2 class="services__title"><?= $services['services_title'] ? $services['services_title'] : ''; ?></h2>
          </div>

          <div class="services__wrapper">
            <?php
            $services_blocks = $services['services_blocks'];
            foreach ($services_blocks as $item): ?>
              <article class="service-card animate-scale-in delay-200">
                <?= $item['services_icon'] ? $item['services_icon'] : ''; ?>
                <div class="service-card__heading">
                  <h3 class="service-card__title">
                    <?= $item['services_title'] ? $item['services_title'] : ''; ?>
                    <?= $item['services_arrow'] ? $item['services_arrow'] : ''; ?>
                  </h3>
                </div>
                <p class="service-card__description">
                  <?= $item['services_desc'] ? $item['services_desc'] : ''; ?>

                </p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="advantages scroll-animate">
        <div class="advantages__container">
          <div class="advantages__heading animate-slide-in-left">
            <img src="<?= $advantages['advantages_icon'] ? $advantages['advantages_icon'] : ''; ?>" alt="polygon"
              class="advantages__logo" />
            <h2 class="advantages__title"><?= $advantages['advantages_title'] ? $advantages['advantages_title'] : ''; ?>
            </h2>
          </div>

          <div class="advantages__wrapper">
            <?php
            $advantages_blocks = $advantages['advantages_blocks'];
            foreach ($advantages_blocks as $item): ?>
              <article class="advantages-card animate-scale-in delay-200">
                <?= $item['advantages_icon'] ? $item['advantages_icon'] : ''; ?>
                <h3 class="advantages-card__title"><?= $item['advantages_title'] ? $item['advantages_title'] : ''; ?></h3>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="partners scroll-animate">
        <div class="partners__container">
          <div class="partners__heading animate-slide-in-left">
            <img src="<?= $partners['partners_logo'] ? $partners['partners_logo'] : ''; ?>" alt="polygon"
              class="partners__logo" />
            <h2 class="partners__title"><?= $partners['partners_title'] ? $partners['partners_title'] : ''; ?></h2>
          </div>

          <div class="partners__content">
            <p class="partners__text animate-fade-in delay-400">
              <?= $partners['partners_desc'] ? $partners['partners_desc'] : ''; ?>
            </p>
            <div class="partners__wrapper animate-fade-in delay-600">
              <?php
              $partners_blocks = $partners['partners_blocks'];
              foreach ($partners_blocks as $item): ?>
                <img src="<?= $item['partners_icon'] ? $item['partners_icon'] : ''; ?>" alt="activecloud" />
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="achievements scroll-animate">
        <div class="achievements__container">
          <div class="achievements__heading">
            <div class="achievements__heading-section heading-section animate-slide-in-left">
              <img src="<?= $achievements['achievements_logo'] ? $achievements['achievements_logo'] : ''; ?>"
                alt="polygon" class="heading-section__logo" />
              <h2 class="heading-section__title">
                <?= $achievements['achievements_title'] ? $achievements['achievements_title'] : ''; ?></h2>
            </div>
            <a href="#" class="achievements__heading-section heading-section animate-slide-in-right">
              <h2 class="heading-section__link">
                <?= $achievements['achievements_subtitle'] ? $achievements['achievements_subtitle'] : ''; ?>
                <?= $achievements['achievements_arrow'] ? $achievements['achievements_arrow'] : ''; ?>
              </h2>
            </a>
          </div>

          <div class="achievements__wrapper">
            <?php
            $achievements_blocks = $achievements['achievements_blocks'];
            foreach ($achievements_blocks as $item): ?>
              <article class="achievements__card animate-scale-in delay-200">
                <img src=" <?= $item['achievements_icon'] ? $item['achievements_icon'] : ''; ?>"
                  alt="DrVerfifedAgency" class="achievements__logo" />
                <p class="achievements__description">
                  <?= $item['achievements_desc'] ? $item['achievements_desc'] : ''; ?>
                </p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    </div>
  </main>
</body>
<?php
get_footer();
?>