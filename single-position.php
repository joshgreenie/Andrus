<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Firetoss_Theme
 */

get_header();

$sidebar_content = get_field('sidebar_content', 'option');
$license_required = get_field('license_required');
$type = get_field('type');
$state = get_field('state');
$city = get_field('city');
$benefits = get_field('benefits');
$requirements = get_field('requirements');
?>
    <div class="hero-header-wrapper" style="background-image:url('/wp-content/uploads/2017/05/E29_6147-e1499059998683.jpg')">
        <div class="container">
            <div class="hero-ribbon-wrapper" style="background-image: url('/wp-content/themes/firetoss_seed-andrus/img/Small-Hero-Ribbon.svg')">
                <div class="hero-ribbon-content">
                    <h1 class="hero-title"><?php the_title(); ?></h1>
                    <h2 class="hero-subtitle">
                        <?= $license_required ? "<span class='license'>$license_required</span>" : "";?>
                        <?= $type ? "<span class='type'>$type</span>" : "";?>
                        <?= $state ? "<span class='state'>$state</span>" : "";?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-flex-wrapper padded" >
        <div class="content-flex">
            <div class="border-box">
                <div class="container">

                    <div class="main-content-wrapper">
                        <div class="main-content">
                            <main id="main" class="site-main position" role="main">

                                <?php
                                while (have_posts()) : the_post();

                                    get_template_part('template-parts/content', 'position');

//                                    the_post_navigation();

//                                    // If comments are open or we have at least one comment, load up the comment template.
//                                    if (comments_open() || get_comments_number()) :
//                                        comments_template();
//                                    endif;

                                endwhile; // End of the loop.
                                ?>

                            </main><!-- #main -->
                        </div>
                    </div>
                    <div class="ribbon-wrapper"
                         style="background-image: url('/wp-content/themes/firetoss_seed-andrus/img/med-tall-ribbon.svg')">
                        <div class="ribbon-container">
                            <div class="ribbon-content">
                                <!--                                --><?//= $sibebar_title ? "<h2 class='ribbon-title'>$sibebar_title</h2>" : ""; ?>
                                <?= $sidebar_content ?>

                                <!--                                --><?//= $cta_link ? "<div class='cta-wrapper'><a href='$cta_link'><h2>$cta_text</h2><img src='/wp-content/uploads/2017/05/white-arrow-right.png'></a></div>" : "" ?>
                            </div>
                        </div>
                    </div>
                </div><!-- #primary -->
            </div>
        </div>
        <div class="position-footer" style="background-image: url(/wp-content/uploads/2017/05/E29_5719.jpg);">
            <div class="container">
                <?=$benefits?"<div class='half'><h3>Benefits</h3>$benefits</div>":"";?>
                <?=$requirements?"<div class='half'><h3>Requirements</h3>$requirements</div>":"";?>
            </div>
        </div>
    </div>





<?php
//get_sidebar();
get_footer();
