<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 2/14/2017
 * Time: 10:31 AM
 */

$banner_text_left = get_sub_field('banner_text_left');
$banner_text_right = get_sub_field('banner_text_right');
?>


<div class="sixty-forty-wrapper">

    <?php if ($banner_text_left || $banner_text_right) { ?>

        <div class="ss-banner-wrapper">
            <div class="container">
                <div class="ss-banner">
                    <?= $banner_text_left ? "<h2>$banner_text_left</h2>" : "" ?>
                    <?= $banner_text_left ? "<h1>$banner_text_right</h1>" : "" ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="split-shelves">
        <?php

        if (have_rows('split_repeater')):
            while (have_rows('split_repeater')) :
                the_row();

                $large_image = get_sub_field('large_image');
                $small_image = get_sub_field('small_image');
                $split_title = get_sub_field('split_title');
                $split_content = get_sub_field('split_content');
                $cta_text = get_sub_field('cta_text');
                $cta_link = get_sub_field('cta_link');
                $testimonials = get_sub_field('testimonials');
                $large_testimonial_title = get_sub_field('large_testimonial_title');
                $large_testimonial_video = get_sub_field('large_testimonial_video'); ?>

                <?php $i = 1 ?>


                <div class="split-shelf-wrapper
                 <?php if(!$split_content && !$split_title && !$testimonials && !$testimonials && !$large_image ):?>
                 no-content
                 <?php endif;?>

">
                    <div class="large-image-wrapper"
                         style="background-image:url(<?= $large_image ? $large_image : "" ?>)">
                        <?php if ($testimonials) { ?>
                            <a href="#" data-featherlight="#largeVid">
                                <img src="/wp-content/uploads/2017/05/play-icon.png" alt="play">
                                <?= $large_testimonial_title ? "<h3>$large_testimonial_title</h3>" : "" ?>
                            </a>
                            <div id="largeVid">
                                <?= $large_testimonial_video; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="small-image-wrapper"
                         style="background-image:url(<?= $small_image ? $small_image : "" ?>)">
                        <?php if($split_content || $split_title || $testimonials):?>
                        <div class="ss-content-wrapper">

                            <?= $split_title ? "<h2>$split_title</h2>" : "" ?>
                            <?= $split_content ? $split_content : "" ?>

                            <?php if ($testimonials) { ?>
                            <?php if (have_rows('testimonials_vid_repeater')): ?>
                                <a href="/testimonials"><h3>View Other Andrus Stories:</h3></a>
                                <div class="small-vids-wrapper">
                                    <?php while (have_rows('testimonials_vid_repeater')) : the_row();

                                        $testimonial_video = get_sub_field('testimonial_video');
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        ?>

                                        <div class="small-vid">
                                            <div class="small-vid-bg"
                                                 style="background-image:url(<?= $image ? $image : "" ?>)">
                                                <a href="#" data-featherlight="#smallVid-<?= $i ?>">
                                                    <img src="/wp-content/uploads/2017/05/play-icon.png"
                                                         alt="play-icon">
                                                </a>
                                            </div>
                                            <?= $title ? "<h6>$title</h6>" : "" ?>
                                        </div>
                                        <div id="smallVid-<?= $i ?>" class="hide-small-vids">
                                            <?= $testimonial_video; ?>
                                        </div>
                                        <?php $i++ ?>
                                    <?php endwhile; ?>

                                </div>
                                <?php
                            endif; ?>
                            <?php } ?>


                            <?= $cta_link ? "<div class='cta-wrapper white-arrow'><a href='$cta_link'><h2>$cta_text</h2></a></div>" : "" ?>
                        </div>

                            <?php
                        endif; ?>
                    </div>
                </div>

            <?php endwhile;
        endif; ?>

    </div>
</div>
