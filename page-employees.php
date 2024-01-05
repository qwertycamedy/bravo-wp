<?php get_header('other'); ?>

<main class="main main-other">
    <section class="employees section section-other">
        <div class="container">
            <div class="employees__inner section-other__inner">
                <svg class="logo-bg section-other__logo fill">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#logo"></use>
                </svg>
                <div class="employees__user-outer">
                    <h3 class="employees__user-title employees__title suptitle-section">
                        Сотрудники:
                    </h3>
                    <ul class="employees__user-list">
                        <?php
                        $emps_list = get_field('emps_list');
                        foreach ($emps_list as $item) {
                            ?>
                            <li class="employees__user" data-emp="<?php echo $item['emps_list_id'] ?>">
                                <?php if ($item['emps_list_ico']): ?>
                                    <img class="employees__user-img" src="<?php echo $item['emps_list_ico'] ?>" width="50"
                                        height="50" alt="<?php $item['emps_list_name'] ?>" />
                                    <?php
                                else: ?>
                                    <img class="employees__user-img"
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/employee.png" width="50"
                                        height="50" alt="employee" />
                                    <?php
                                endif; ?>
                                <div class="employees__user-info">
                                    <h6 class="employees__user-name">
                                        <?php echo $item['emps_list_name'] ?>
                                    </h6>
                                    <p class="employees__user-pos">
                                        <?php echo $item['emps_list_pos'] ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="employees__info-outer">
                    <div class="employees__table-outer">
                        <h3 class="employees__info-title employees__title suptitle-section">
                            Задачи сотрудника:
                        </h3>
                        <table class="employees__table">
                            <thead class="employees__table-head">
                                <tr class="employees__table-row employees__table-head-row">
                                    <td
                                        class="employees__table-head-name employees__table-name employees__table-head-item">
                                        Задача
                                    </td>
                                    <td
                                        class="employees__table-head-type employees__table-type employees__table-head-item">
                                        Цель
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="employees__choise-body">
                                <tr class="employees__table-row employees__choise">
                                    <td>Выберите подходящего сотрудника. <br /> Если сотрудник уже выбран, но таблица не
                                        появилась, то обратитесь к админу для проверки корректности введенных данных
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                            $emp_tasks = get_field('emp_tasks');
                            foreach ($emp_tasks as $item) {
                                $item_id = $item['emp_id'];
                                ?>
                                <tbody class="employees__table-body visually-hidden" data-table='<?php echo $item_id ?>'>
                                    <?php
                                    foreach ($item['emp_task'] as $subitem) {
                                        ?>
                                        <tr class="employees__table-row">
                                            <td class="employees__table-name employees__table-name employees__table-item">
                                                <?php echo $subitem['emp_task_name'] ?>
                                            </td>
                                            <td class="employees__table-type employees__table-type employees__table-item">
                                                <label class="custom-checkbox">
                                                    <span class="custom-checkbox__placeholder">
                                                        <?php echo $subitem['emp_task_goal'] ?>
                                                    </span>
                                                    <input class="custom-checkbox__field" type="checkbox" />
                                                    <span class="custom-checkbox__content">
                                                        <svg class="custom-checkbox__content-ico ico-12 stroke"
                                                            xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                            viewBox="0 0 12 9" fill="none">
                                                            <path d="M10.3333 1L3.91667 7.41667L1 4.5" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                    </div>

                    <div class="employees__table-outer">
                        <h3 class="employees__info-title employees__title suptitle-section">
                            Статистика за месяц:
                        </h3>
                        <table class="employees__table employees__table-statistic">
                            <thead class="employees__table-head">
                                <tr class="employees__table-row employees__table-head-row">
                                    <td
                                        class="employees__table-head-rating employees__table-rating employees__table-head-item">
                                        Рейтинг
                                    </td>
                                    <td
                                        class="employees__table-head-emp employees__table-emp employees__table-head-item">
                                        Сотрудник
                                    </td>
                                    <td
                                        class="employees__table-head-result employees__table-result employees__table-head-item">
                                        Результат
                                    </td>
                                </tr>
                            </thead>

                            <tbody class="employees__table-body">
                                <?php
                                $rate = get_field('rate');
                                foreach ($rate as $item) {
                                    ?>
                                    <tr class="employees__table-row ">
                                        <td class="employees__table-rating employees__table-rating employees__table-item">
                                        </td>
                                        <td class="employees__table-emp employees__table-emp employees__table-item">
                                            <?php echo $item['rate_name'] ?>
                                        </td>
                                        <td class="employees__table-result employees__table-result employees__table-item">
                                            <?php echo $item['rate_result'] ?>
                                            <?php the_field('currency') ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('other'); ?>