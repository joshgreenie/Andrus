<?php //echo 'TEST' ?>
<?php //$background_left = $background_left_mobile?>
<?php  $mobileCheck = '';
            $i = 1;
?>

<?php if (have_rows('hero_slider_slide')): ?>
    <div class="hero-wrapper">
        <div class="owl-carousel owl-carousel-hero">
            <?php
            while (have_rows('hero_slider_slide')) : the_row();
                $header = get_sub_field('header');
                $header_small = get_sub_field('header_small');
                $subheader = get_sub_field('subheader');
                $background_left = get_sub_field('background_left');
                $background_left_mobile = get_sub_field('background_left_mobile');
                $background_right = get_sub_field('background_right');
                $cta_link = get_sub_field('cta_link');
                $cta_text = get_sub_field('cta_text');
                ?>


                <div class="item">
                    <div class="slide-image-left mobile-image-<?=$i;?>" style="background-image: url(<?= $background_right ?>)"></div>
                    <div class="container">
                        <div class="slide-content"
                             style="background-image: url('<? echo esc_url(get_template_directory_uri()); ?>/img/Header-1.svg')">
                            <div class="slide-icon">
                                <div class="slider-text">

                                    <?= $header ? "<h1>$header</h1>" : ""; ?>
                                    <?= $header_small ? "<h1>$header_small</h1>" : ""; ?>
                                    <?= $subheader ? "<h2>$subheader</h2>" : ""; ?>
                                    <?= $cta_link ? "<div class='cta-wrapper hero-desktop  white-arrow'><a href='$cta_link '><h2>$cta_text</h2></a></div>" : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $cta_link ? "<div class='cta-wrapper hero-mobile  white-arrow'><a href='$cta_link'><h2>$cta_text</h2></a></div>" : "" ?>
                    <div class="slide-image-right" style="background-image: url(<?= $background_right ?>)"></div>
                    <style>  
                        @media screen and (max-width:980px) {

                            .mobile-image-<?=$i;?> {
                                background-image: url( <?= $background_left_mobile ?>) !important;
                            }
                        }
                        @media screen and (min-width:980px) {
                            .mobile-image-<?=$i;?> {
                                background-image: url( <?= $background_left ?>) !important;
                            }
                        }
                    </style>
                </div>
                    <?php $i++ ?>
            <?php endwhile ?>
        </div>
    </div>
<?php endif ?>