<?php 
$item = get_field('footer' , 'option');?>
<footer class="footer">
      <div class="footer__container">
        <div class="footer__social-links">
          <?php
           $elems = $item['footer_socials'];  
          foreach($elems  as $el):?>
          <a href="<?= $el['footer_link'] ? $el['footer_link'] : ''; ?>" class="footer__social-link">
            <img
              src="<?= $el['footer_icons'] ? $el['footer_icons'] : ''; ?>"
              alt="Social icon"
              class="footer__social-icon"
            />
          </a>
          <?php endforeach;?>
        </div>
        <?php
         foreach($item['footer_logo'] as $el):?>
        <a href="<?= $el['link'] ? $el['link'] : ''; ?>"
          ><img src="<?= $el['logo'] ? $el['logo'] : ''; ?>" alt="Logo" class="footer__logo"
        /></a>
        <?php endforeach;?>
      </div>

      <p class="footer__copyright"><?= $item['copy'] ? $item['copy'] : '';?></p>
    </footer>
<?php wp_footer(); ?>
</body>

</html>