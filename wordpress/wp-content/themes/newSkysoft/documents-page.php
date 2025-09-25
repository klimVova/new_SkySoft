<?php
/* Template Name: Documents page Template */
get_header();
$docs = get_field('documents_image');
?>
    <main class="documents-page">
      <h1 class="documents-page__title animate-fade-in-up"><?php the_title();?></h1>
      <section class="documents-page__wrapper animate-slide-in-left delay-400">
        <?php 
            foreach($docs as $image):
        ?>
        <img
          class="documents-page__image"
          src="<?= $image['image'] ? $image['image'] : ''; ?>"
          alt="document1"
        />
        <?php endforeach;?>
      </section>
    </main>
<?php
get_footer();
?>