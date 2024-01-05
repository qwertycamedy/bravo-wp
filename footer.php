<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__top">
        <a class="footer__logo logo" href="index.html">
          <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="bravo company logo" width="41" height="45.65" />
          <div class="logo__text">
            <span class="logo__text-title">Bravo Company</span>
            <span class="logo__text-subtitle">Юридическая фирма</span>
          </div>
        </a>
        <nav class="footer__list-outer">
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="#about" class="footer__list-link navlink link"> О нас </a>
            </li>
            <li class="footer__list-item">
              <a href="#services" class="footer__list-link navlink link"> Услуги </a>
            </li>
            <li class="footer__list-item">
              <a href="#faq" class="footer__list-link navlink link"> F.A.Q </a>
            </li>
          </ul>
        </nav>
        <a class="footer__wh btn btn-wh" href="<?php echo the_field('wh_link', 101) ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/wh.svg" alt="img" class="footer__wh-img" width="20" height="20" />
          <span class="footer__wh-num"><?php the_field('wh_num', 101) ?></span>
        </a>
      </div>
      <div class="footer__bot">
        <p class="footer__copyright"><?php the_field('copyright', 101) ?></p>
        <p class="footer__contacts">
        <?php the_field('city', 101) ?> <br /><?php the_field('address', 101) ?> <br /><?php the_field('tel', 101) ?>
        </p>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>