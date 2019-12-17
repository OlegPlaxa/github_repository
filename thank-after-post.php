<?php
/**
 * Plugin Name: Thank after post plugin
 * Description: Plugin that adds thank you after all posts
 * Version: 7.0.1
 * Author: Oleg Plaxa
 */
add_action( 'the_content', 'thank_after_post' );

function thank_after_post ( $content ) {
    return $content .= '<p> --Thanks for REVIEW!-- <br>v 7.0.0</p>';
}
