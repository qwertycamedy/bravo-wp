<?php get_header('other'); ?>

<main class="main main-other">
    <section class="auth section section-other">
        <div class="container">
            <div class="auth__inner section-other__inner">
                <svg class="logo-bg section-other__logo fill">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#logo"></use>
                </svg>
                <form action="#" class="auth__form form">
                    <h1 class="auth__form-title form-title">Вход</h1>
                    <input type="password" class="auth__code visually-hidden" hidden value="<?php echo the_field('auth_code') ?>" />
                    <input type="password" class="auth__path visually-hidden" hidden value="<?php echo get_page_link(12); ?>" />
                    <label class="input-label w-full">
                        <input class="auth__input input" placeholder="Код для входа" type="password" required />
                        <span class="input-placeholder">Код для входа</span>
                    </label>
                    <button class="auth__btn btn btn-accent w-full">Войти</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer('other'); ?>