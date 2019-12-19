<?php
/**
 * Plugin Name: Thank after post plugin
 * Description: Plugin that adds thank you after all posts
 * Version: 4.1.0
 * Author: Oleg Plaxa
 */
add_action( 'the_content', 'thank_after_post' );

function thank_after_post ( $content ) {
    return $content .= '<p> --Thanks for REVIEW. Updated till 4 version!-- <br>v 4.1.0</p>';
}
