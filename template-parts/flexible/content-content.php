<?php
/**
 * Content Block with BG image and blue ribbon content
 */


// vars


$sibebar_title = get_sub_field('sidebar_title');
$main_title = get_sub_field('main_title');
$sidebar_content = get_sub_field('sidebar_content');
$main_content = get_sub_field('main_content');
$cta_link = get_sub_field('cta_link');
$cta_text = get_sub_field('cta_text');

$ribbon_size = get_sub_field('ribbon_size');

$main_content_check = get_sub_field('main_content_check');


$map_check = get_sub_field('map_check');
$map_content = get_sub_field('map_content');
$extra_class = get_sub_field('extra_class');


$job_listings = get_sub_field('job_listings');

$gallery_check = get_sub_field('gallery_check');
$images = get_sub_field('gallery');

$background_image = get_sub_field('background_image');
$background_imageURL = $background_image['url'];
$background_imageStyle = "background-image:url($background_imageURL);";
?>

<div class="content-flex-wrapper <?=$extra_class?>">
    <div class="content-flex" <?= $background_image ? "style='$background_imageStyle'" : ""; ?>>
    <div class="border-box">
        <div class="container">

            <?php if (!(is_front_page()) && ($job_listings == TRUE)) { ?>
                <div class="main-content-wrapper">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'position',
                    'post_status' => array('publish'),
                    'posts_per_page' => '3',
//                    'orderby' => 'date',
//                    'order' => 'desc',
                    'paged' => $paged,
                );

                // The Query
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) :
                    $count = $wp_query->post_count;
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        $thumbnail = get_the_post_thumbnail_url();
                        $date = get_the_date();
                        $author = get_the_author_posts_link();

                        ?>
                        <div class="post-looped">
                            <?php if ($thumbnail): ?>
                                <div class="featured-image" style="background-image: url('<?= $thumbnail; ?>')"></div>
                            <?php endif; ?>
                            <div class="post-content left">
<!--                                <div class="post-meta">-->
<!--                                    --><?php //if ($date): ?>
<!--                                        <span class="post-date">--><?//= $date; ?><!--</span>-->
<!--                                    --><?php //endif; ?>
<!--                                    --><?php //if ($author): ?>
<!--                                        <span class="post-author">--><?//= $author; ?><!--</span>-->
<!--                                    --><?php //endif; ?>
<!--                                </div>-->
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="post-content right">

                            </div>
                        </div>
                        <?php

                    endwhile;
                endif;

                wp_pagenavi();
                wp_reset_query(); ?>
            </div>
            <?php } ?>

            <?php if (!(is_front_page()) && ($map_check == TRUE)) { ?>
                <div class="map-wrapper">
                    <?=$map_content;?>
                </div>
            <?php } ?>

            <?php if (!(is_front_page()) && ($main_content_check == TRUE)) { ?>

                <div class="main-content-wrapper">
                    <div class="main-content">
                        <?= $main_title ? "<h2>$main_title</h2>" : "" ?>
                        <?= $main_content ? $main_content : "" ?>
                    </div>

                    <?php if (!(is_front_page()) && ($gallery_check == TRUE)) { ?>
                        <div class="gallery-wrap">

                        <?php if( $images ): ?>
                        <div class="owl-carousel thumbs">
                        <?php foreach( $images as $image ): ?>
                            <div class="item"
                                 style="background-image: url(<?php echo $image['url']; ?>)"
                                 data-dot="<span style='background-image:url(<?php echo $image['url']; ?>)'></span>">
                               <h3><?php echo $image['caption']; ?></h3>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        </div>
                    <?php } ?>


                </div>
            <?php } ?>

            <div class="ribbon-wrapper" style="background-image: url('<?= $ribbon_size ?>')">
                <div class="ribbon-container">
                    <div class="ribbon-content">
                        <?= $sibebar_title ? "<h2 class='ribbon-title'>$sibebar_title</h2>" : ""; ?>
                        <?= $sidebar_content ?>
                        <?= $cta_link ? "<div class='cta-wrapper  white-arrow'><a href='$cta_link'><h2>$cta_text</h2></a></div>" : "" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php if($main_content_check == False) { echo "</div>";  }?>

        <?php if($main_content_check == True) { echo "</div>";  }?>
</div>



<? // echo esc_url(get_template_directory_uri()); ?><!--/img/med-tall-ribbon.svg-->

