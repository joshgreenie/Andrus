<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/8/2017
 * Time: 4:46 PM
 */

/**
 *  Video Lightbox Setup
 */

$iframe = get_sub_field('featured_video');

// use preg_match to find iframe src
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

// add extra params to iframe src
$params = array(
    'rel' => 0,
    'hd' => 1,
    'autohide' => 1
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// add extra attributes to iframe html
$attributes = 'frameborder="0"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

/***
 * End
 */




$header = get_sub_field('header');
$featured_video_image = get_sub_field('featured_video_image');
$testimonial_blurb = get_sub_field('testimonial_blurb');
$testimonial_content = get_sub_field('testimonial_content');
$testimonial_link = get_sub_field('testimonial_link');
$testimonial_link_text = get_sub_field('testimonial_link_text');

?>

<div class="testimonials-wrapper">
    <div class="testimonials-header">
        <?= $header ? "<h2>$header</h2>" : "" ?>
    </div>
    <div class="large-wrapper">

            <?= $testimonial_link ? "<a href='$testimonial_link' class='mobile-testimonials'><h3>$testimonial_link_text</h3></a>" : "" ?>
        <div class="vid-bg" <?= $featured_video_image ? "style=background-image:url($featured_video_image)" : "" ?>>
            <a href="#" data-featherlight="#mylightbox">
                <img src="/wp-content/uploads/2017/05/play-icon.png" alt="play"></div>
        </a>
        <div class="testimonial-content">
            <img src="/wp-content/uploads/2017/05/quotes.png" alt="quotes">
            <?= $testimonial_blurb ? "<h2>$testimonial_blurb</h2>" : "" ?>
            <?= $testimonial_content ? $testimonial_content : "" ?>
            <?= $testimonial_link ? "<a href='$testimonial_link' class='desktop-testimonials'><h3>$testimonial_link_text</h3></a>" : "" ?>
        </div>
    </div>
    <div id="mylightbox">
        <?= $iframe; ?>
    </div>

  
    <?php if (have_rows('video_repeater')): ?>
        <div class="vid-list-wrapper">
            <?php while (have_rows('video_repeater')) : the_row();

                $image = get_sub_field('image');
                $video_title = get_sub_field('video_title');


                /**
                 *  Small Video Lightbox Setup
                 */

                $video_link = get_sub_field('video_link');

                // use preg_match to find iframe src
                preg_match('/src="(.+?)"/', $video_link, $matches_1);
                $src_1 = $matches_1[1];

                // add extra params to iframe src
                $params_1 = array(
                    'rel' => 0,
                    'hd' => 1,
                    'autohide' => 1
                );
                $new_src_1 = add_query_arg($params_1, $src_1);
                $video_link = str_replace($src_1, $new_src_1, $video_link);

                // add extra attributes to iframe html
                $attributes_1 = 'frameborder="0"';
                $video_link = str_replace('></iframe>', ' ' . $attributes_1 . '></iframe>', $video_link);

                /***
                 * End
                 */
                ?>

                <div class="vid-box">
                    <a href="#" data-featherlight="#smallVideo">
                        <div class="vid-wrapper" <?= $image ? "style=background-image:url($image)" : "" ?>>
                            <img src="/wp-content/uploads/2017/05/play-icon.png" alt="play">
                        </div>
                        <div
                            class="vid-title"><?= $video_title ? "<h3>$video_title</h3>" : "" ?></div>
                    </a>
                </div>
                <div id="smallVideo">
                    <?= $video_link; ?>
                </div>
            <?php endwhile ?>
        </div>
    <?php endif; ?>

</div>



