<?php
/**
 * Plugin Name: Thank after post plugin
 * Description: Plugin that adds thank you after all posts
 * Version: 5.1.1
 * Author: Oleg Plaxa
 */
add_action( 'the_content', 'thank_after_post' );

function thank_after_post ( $content ) {
    return $content .= '<p> --Thanks for REVIEW. Updated till 5 version!-- <br>v 5.1.1</p>';
}
