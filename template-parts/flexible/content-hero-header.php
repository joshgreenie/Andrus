<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 4/5/2017
 * Time: 10:35 AM
 */


$title      = get_sub_field('title');
$subtitle   = get_sub_field('subtitle');
$image  = get_sub_field('image');
$cta_text   = get_sub_field('cta_text');
$cta_link   = get_sub_field('cta_link');
?>


<div class="hero-header-wrapper" style="background-image:url('<?= $image ?>')">
    <div class="container">
        <div class="hero-ribbon-wrapper" style="background-image: url('<? echo esc_url(get_template_directory_uri()); ?>/img/Small-Hero-Ribbon.svg')">
            <div class="hero-ribbon-content">
                <h1 class="hero-title"><?= $title ? $title : "" ?></h1>
                <h2 class="hero-subtitle"><?= $subtitle ? $subtitle : "" ?></h2>
                <?= $cta_link ? "<div class='cta-wrapper  white-arrow'><a href='$cta_link'><h2>$cta_text</h2></a></div>" : "" ?>
            </div>
        </div>
    </div>
</div>



