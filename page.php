<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
        
$currentID = get_the_ID();

$args = array(
    'post_type'			  => 'agenda',
    'posts_per_page'      => 3,
    'post__not_in'        => array($currentID),
    'orderby'             => 'date',
    'order'               => 'DESC',
    'suppress_filters'    => true
);

$context['agenda'] = Timber::get_posts($args);

if (is_front_page()) {
    Timber::render( array( 'page-frontpage.twig', 'page.twig' ), $context );
} else {
    Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );
}