<?php get_header(); ?>

<main class="main">
    <section class="hero section first-screen">
        <div class="hero__bg">
            <span class="hero__bg-grad"></span>
            <img class="hero__bg-img" src="<?php echo get_field('hero_bg'); ?>" alt="hero background" />
        </div>
        <div class="container">
            <div class="hero__inner section__inner first-screen__inner">
                <div class="hero__info">
                    <h1 class="hero__title title-main">
                        <?php the_field('hero_title'); ?>
                    </h1>

                    <?php if (have_rows('hero_list')): ?>
                        <ul class="hero__list list">
                            <?php while (have_rows('hero_list')):
                                the_row();

                                $item = get_sub_field('hero_list_item');

                                ?>
                                <li class="hero__list-item list__item">
                                    <?php echo $item ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                    <a class="hero__btn btn btn-accent" href="<?php the_field('hero_btn_link'); ?>" target="_blank">
                        <?php the_field('hero_btn'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about section" id="about">
        <div class="container">
            <div class="about__inner section-inner">
                <div class="about__top">
                    <div class="about__info">
                        <div class="about__head section-head">
                            <p class="about__suptitle suptitle-section">
                                <?php the_field('about_suptitle') ?>
                            </p>
                            <h3 class="about__title title-section">
                                <?php the_field('about_title') ?>
                            </h3>
                        </div>
                        <p class="about__text">
                            <?php the_field('about_text') ?>
                        </p>
                    </div>
                    <img src="<?php echo get_field('about_img'); ?>" alt="img" class="about__img" width="632"
                        height="436" />
                </div>
                <div class="about__bot">
                    <div class="about__card-outer">
                        <?php
                        $about_adv = get_field('about_adv');
                        foreach ($about_adv as $item) {
                            ?>
                            <div class="about__card">
                                <img class="about__card-ico" src="<?php echo $item['about_adv_bg'] ?>" alt="about ico"
                                    width="297" height="297" />
                                <h5 class="about__card-title">
                                    <?php
                                    echo $item['about_adv_title'];
                                    ?>
                                </h5>

                                <ul class="about__card-list list">
                                    <?php
                                    foreach ($item['about_adv_list'] as $subitem) {

                                        ?>
                                        <li class="about__card-list-item list__item">
                                            <?php echo $subitem['about_adv_list_item'] ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services section" id="services">
        <div class="container">
            <div class="services__inner section-inner">
                <div class="services__head section-head">
                    <p class="services__suptitle suptitle-section">
                        <?php the_field('services_suptitle') ?>
                    </p>
                    <h3 class="services__title title-section">
                        <?php the_field('services_title') ?>
                    </h3>
                </div>
                <div class="services__card-outer">
                    <?php
                    $services_card = get_field('services_card');
                    foreach ($services_card as $item) {
                        ?>
                        <div class="services__card">
                            <h5 class="services__card-title">
                                <?php echo $item['services_card_title'] ?>
                            </h5>
                            <p class="services__card-text">
                                <?php echo $item['services_card_text'] ?>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="faq section" id="faq">
        <div class="container">
            <div class="faq__inner section-inner">
                <div class="services__head section-head">
                    <p class="services__suptitle suptitle-section">
                        <?php the_field('faq_suptitle') ?>
                    </p>
                    <h3 class="services__title title-section">
                        <?php the_field('faq_title') ?>
                    </h3>
                </div>
                <ul class="faq__acc-list">
                    <?php
                    $faq_acc = get_field('faq_acc');
                    foreach ($faq_acc as $item) {
                        ?>
                        <li class="faq__acc">
                            <button class="faq__acc-control" aria-expanded="false">
                                <span class="faq__acc-title">
                                    <?php echo $item['faq_acc_title'] ?>
                                </span><svg class="faq__acc-ico ico-40 stroke" xmlns="http://www.w3.org/2000/svg" width="40"
                                    height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M20 8.3335L20 31.6668" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8.33594 19.9998L31.6693 19.9998" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="faq__acc-content" aria-hidden="true">
                                <p>
                                    <?php echo $item['faq_acc_content'] ?>
                                </p>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>