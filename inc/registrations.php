<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 6/27/2017
 * Time: 2:29 PM
 */

function custom_job_listings() {

    register_post_type( 'position',
        array(
            'labels' => array(
                'name'          => __( 'Positions', 'firetoss' ),
                'singular_name' => __( 'Position', 'firetoss' ),
            ),
            'has_archive'  => true,
            'hierarchical' => true,
            'menu_icon'    => 'dashicons-admin-users',
            'public'       => true,
            'rewrite'      => array( 'slug' => 'position', 'with_front' => false ),
            'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),


        ));

}
add_action( 'init', 'custom_job_listings' );