<?php
/* Template Name: Achievements page Template */
get_header();
$achievements = get_field('achievements');
?>
    <main class="achievements-page">
      <h1 class="achievements-page__title animate-fade-in-up"><?= $achievements['achievements_title'] ? $achievements['achievements_title'] : ''; ?></h1>
      <p class="achievements-page__description animate-slide-in-left delay-200">
      <?= $achievements['achievements_desc'] ? $achievements['achievements_desc'] : ''; ?>
      </p>
      <?php 
        $blocks=$achievements['achievements_blocks'];
        foreach($blocks as $block):
      ?>  
      <p class="achievements-page__year animate-fade-in delay-400"><?= $block['achievements_year'] ? $block['achievements_year'] : ''; ?></p>
      <hr class="animate-fade-in delay-400" />
         
      <section class="achievements-wrapper">
      <?php 
        $items= $block['achievements_items'];
        foreach($items as $item):
      ?> 
        <div class="achievements-item animate-slide-in-left delay-600">
          <img
            class="achievements-item__logo"
            src="<?= $item['achievements_item_image'] ? $item['achievements_item_image'] : ''; ?>"
            alt="DR Verfifed Agency"
          />
          <h2 class="achievements-item__title">
          <?= $item['achievements_item_title'] ? $item['achievements_item_title'] : ''; ?>
          </h2>
        </div>
        <?php endforeach;?>  
      </section>
           
      <?php endforeach;?>      

    </main>
<?php
get_footer();
?>