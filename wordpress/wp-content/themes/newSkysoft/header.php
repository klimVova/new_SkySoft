<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
    <title>SkySoft</title>
</head>
<body>
    <header class="header">
      <div class="header__wrapper">
        <div class="header__contacts contacts">
          <a href="#"
            ><img src="../../img/logo.png" alt="" class="contacts__logo"
          /></a>
          <div class="contacts__info">
            <a
              href="mailto:info@sky-soft.su"
              class="contacts__link contacts__link_email"
              >info@sky-soft.su</a
            >
            <a
              href="tel:+375297678871"
              class="contacts__link contacts__link_phone"
              >+375 29 767-88-71</a
            >
          </div>
        </div>

        <button class="header__burger">
          <span></span>
        </button>

        <div class="header__burger-menu">
          <nav class="header__burger-nav burger-nav">
            <ul class="burger-nav__list">
              <li class="burger-nav__item burger-nav__item--has-popover">
                <a href="#" class="burger-nav__link">О НАС</a>
                <div class="burger-nav__popover">
                  <div class="popover__content">
                    <p>
                      Команда профессионалов своего дела. Мы любим свою работу,
                      постоянно совершенствуемся и готовы оказать помощь любому
                      клиенту, делая это на самом высоком уровне.
                    </p>
                    <hr />
                    <div class="popover__links">
                      <a href="#" class="popover__link">ДОКУМЕНТЫ</a>
                      <a href="#" class="popover__link">ДОСТИЖЕНИЯ</a>
                      <a href="#" class="popover__link">МЫ В СМИ</a>
                      <a href="#" class="popover__link">БЛОГ</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="burger-nav__item">
                <a href="#" class="burger-nav__link">НОВОСТИ</a>
              </li>
              <li class="burger-nav__item">
                <a href="#" class="burger-nav__link">ПОРТФОЛИО</a>
              </li>
              <li class="burger-nav__item">
                <a href="#" class="burger-nav__link">КОНТАКТЫ</a>
              </li>
            </ul>
          </nav>

          <div class="header__lang lang">
            <a href="#" class="lang__link lang__link_left lang__link_activate"
              >Рус</a
            >
            <a href="#" class="lang__link lang__link_right">Eng</a>
          </div>
        </div>

        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item nav__item--has-popover">
              <a href="#" class="nav__link">О НАС</a>
              <div class="nav__popover">
                <div class="popover__content">
                  <h2>О НАС</h2>
                  <p>
                    Команда профессионалов своего дела. Мы любим свою работу,
                    постоянно совершенствуемся и готовы оказать помощь любому
                    клиенту, делая это на самом высоком уровне.
                  </p>
                  <hr />
                  <div class="popover__links">
                    <a href="#" class="popover__link">ДОКУМЕНТЫ</a>
                    <a href="#" class="popover__link">ДОСТИЖЕНИЯ</a>
                    <a href="#" class="popover__link">МЫ В СМИ</a>
                    <a href="#" class="popover__link">БЛОГ</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">НОВОСТИ</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">ПОРТФОЛИО</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">КОНТАКТЫ</a>
            </li>
          </ul>
        </nav>

        <div class="header__lang lang">
          <a href="#" class="lang__link lang__link_left lang__link_activate"
            >Рус</a
          >
          <a href="#" class="lang__link lang__link_right">Eng</a>
        </div>
      </div>
    </header>
</body>
