<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/19/2017
 * Time: 11:12 AM
 */

$display_title = get_sub_field('form_title');
$id_or_title = get_sub_field('form_title_or_id');
$background_image = get_sub_field('background_image');


?>


<div class="form-banner-wrapper" <?= $background_image ? "style=background-image:url($background_image)" : "" ?>>
    <div class="banner-color-overlay">
        <div class="container">
            <div class="form">
               <?php gravity_form($id_or_title, $display_title, false, false, null, false, false); ?>
            </div>
        </div>
    </div>
</div>
