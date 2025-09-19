<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <title>SkySoft</title>
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="header__contacts contacts">
        <?php the_custom_logo();?>
        <div class="contacts__info">
          <?php
          if (is_active_sidebar('soft_email-header')) {
            dynamic_sidebar('soft_email-header');
          }
          ;
          if (is_active_sidebar('soft_phone-header')) {
            dynamic_sidebar('soft_phone-header');
          }
          ; ?>
        </div>
      </div>

      <button class="header__burger">
        <span></span>
      </button>

      <div class="header__burger-menu">
        <nav class="header__burger-nav burger-nav">
          <ul class="burger-nav__list">
            <li class="burger-nav__item burger-nav__item--has-popover">
            <?php
                  if (is_active_sidebar('soft_menu-about')) {
                    dynamic_sidebar('soft_menu-about');
                  }
                  ;?>
              <div class="burger-nav__popover">
                <div class="popover__content">
                  <?php
                  if (is_active_sidebar('soft_about')) {
                    dynamic_sidebar('soft_about');
                  }
                  ;
                  wp_nav_menu([
                    'theme_location' => 'menu-about',
                    'container' => 'div',
                    'container_class' => 'popover__links',
                    'a_class' => 'popover__link',
                  ]);
                  ?>
                </div>
              </div>
            </li>
            <?php
        wp_nav_menu([
          'theme_location' => 'menu-header',
          'container' => false,
          'container_callback' => false,
          'menu_class' => 'burger-nav__list',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'li_class' => 'burger-nav__item',
          'a_class' => 'burger-nav__link',
        ]);
        ?>
          </ul>
        </nav>
        
        <div class="header__lang lang">
          <?php pll_the_languages(); ?>
        </div>
      </div>


      <nav class="header__nav nav">
        <ul class="nav__list">
          <li class="nav__item nav__item--has-popover">
          <?php
                  if (is_active_sidebar('soft_menu-about')) {
                    dynamic_sidebar('soft_menu-about');
                  }
                  ;?>
            <div class="nav__popover">
              <div class="popover__content">
                <?php
                if (is_active_sidebar('soft_about')) {
                  dynamic_sidebar('soft_about');
                }
                ;
                wp_nav_menu([
                  'theme_location' => 'menu-about',
                  'container' => 'div',
                  'container_class' => 'popover__links',
                  'a_class' => 'popover__link',
                ]);
                ?>
              </div>
            </div>
          </li>
        </ul>
      </nav>

      <?php
      wp_nav_menu([
        'theme_location' => 'menu-header',
        'container' => 'nav',
        'container_class' => 'header__nav nav',
        'menu_class' => 'nav__list',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'li_class' => 'nav__item',
        'a_class' => 'nav__link',
      ]);
      ?>

      <div class="header__lang lang">
        <?php pll_the_languages(); ?>
      </div>
    </div>
  </header>
</body>