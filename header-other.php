<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg" type="image/svg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title>Bravo Company</title>

  <?php wp_head(); ?>
</head>

<body class="page__body">
  <div class="site-container">
    <header class="header fixed-block">
      <div class="container">
        <div class="header__inner">
          <a class="header__logo logo" href="<?php bloginfo('url'); ?>">
            <img class="header__logo-img logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg"
              alt="bravo company logo" width="41" height="45.65" />
            <div class="header__logo-text logo__text">
              <span class="header__logo-title logo__text-title">Bravo Company</span>
              <span class="header__logo-subtitle logo__text-subtitle">Юридическая фирма</span>
            </div>
          </a>
          <div class="header__menu" data-menu>
            <nav class="header__list-outer">
            </nav>
            <div class="header__btn-outer">
              <a class="header__emp btn btn-accent" href="<?php echo get_page_link(10); ?>"
                data-menu-item>Сотрудникам</a>
              <a class="header__wh btn btn-wh" href="<?php echo the_field('wh_link', 101) ?>" target="_blank"
                data-menu-item>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/wh.svg" alt="img" class="header__wh-img"
                  width="20" height="20" />
                <span class="header__wh-num">
                  <?php the_field('wh_num', 101) ?>
                </span>
              </a>
            </div>
          </div>
          <button class="header__burger" data-burger>
          </button>
        </div>
      </div>
    </header>