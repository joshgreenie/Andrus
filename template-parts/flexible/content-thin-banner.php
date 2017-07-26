<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 6/28/2017
 * Time: 3:37 PM
 */

$left_text = get_sub_field('left_text');
$right_text = get_sub_field('right_text');


?>

<div id="thin-banner">
    <div class="container">
        <div class="thin-wrapper">
            <h3><?php echo $left_text ? "$left_text" : "" ;?></h3>
            <h2><?php echo $right_text ? "$right_text" : "" ;?></h2>
        </div>
    </div>
</div>
