<?php //Full Width Background Image
$background_image = get_sub_field('full_width_background_image');
$header = get_sub_field('full_width_header');
$sub_header = get_sub_field('full_width_sub_header');
$icon = get_sub_field('full_width_icon');
$wysiwyg = get_sub_field('full_width_wysiwyg');
$content_position = get_sub_field('full_width_content_position');
$white_overlay = get_sub_field('full_width_white_overlay');

//Owl Carousel Slider

?>


<div class="full-width-wrapper <? echo $white_overlay?"white-overlay":"";?>" style="background-image: url('<?= $background_image ?>')">
    <?php if ($header): ?>
        <div class="blue-bg">
            <div class="container">
                <h2 class="full-width-header"><?= $header ?></h2>
            </div>
        </div>

    <?php endif; ?>
    <div class="container">
        <div class="full-width-content content-position-<?= $content_position ?>">
            <?php if ($icon): ?><img src="<?= $icon ?>" class="full-width-icon"><?php endif; ?>

            <?php if ($sub_header): ?> <h2 class="full-width-subheader"><?= $sub_header ?></h2><?php endif; ?>
            <?php if ($wysiwyg): ?>
                <div class="full-width-wysiwyg"><?= $wysiwyg ?></div><?php endif; ?>
        </div>
    </div>
</div>