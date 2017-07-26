<?php if (have_rows('columns_columns')): ?>
    <div class="column-wrapper count-three">
        <?php while (have_rows('columns_columns')) : the_row();

            $header = get_sub_field('header');
            $content = get_sub_field('content');
            $link = get_sub_field('link');
            $cta_text = get_sub_field('cta_text');
            $background_image = get_sub_field('background_image');

            ?>
            <div class="column" <?= $background_image ? "style='background-image:url($background_image)'" : "" ?>>
                    <div class="header-wrapper">
                        <?= $header ? "<h2>$header</h2><img src='/wp-content/uploads/2017/05/white-arrow-right.png' alt='icon'>" : ""; ?>
                    </div>
                <div class="column-dropdown">
                    <div class="column-content">
                        <?= $content; ?>
                        <?= $link ? "<span class=' white-arrow'><a href='$link'><p>$cta_text</p></a></span>" : "" ?>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php endif; ?>