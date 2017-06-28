<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/9/2017
 * Time: 12:05 PM
 */


$header_small = get_sub_field('header_small');
$header_large = get_sub_field('header_large');
$link = get_sub_field('link');

?>

<div class="pb-wrapper">
    <div class="pb-content-wrapper">
        <a href="<?= $link ?>">
            <div class="pb-text">
                <?= $header_small ? "<h2>$header_small</h2>" : "" ?>
                <?= $header_large ? "<h1>$header_large</h1>" : "" ?>
            </div>
        </a>
    </div>
</div>
