<?php

$context = Timber::context();

$args = array(
// Get post type project
'post_type' => 'post',
// Get all posts
'posts_per_page' => -1,
// Gest post by "graphic" category
'meta_query' => array(
    array(
        'key' => 'category',
        'value' => 'project',
        'compare' => 'LIKE'
    )
),
// Order by post date
'orderby' => array(
    'date' => 'DESC'
));

$context['projects'] = Timber::get_posts( $args );
Timber::render( 'menu.twig', $context );
