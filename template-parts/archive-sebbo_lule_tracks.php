<?php
/**
 * The template for displaying tracks Archive pages.
 *
 * @package ssebolulehelper.
 */

get_header(); ?>

<h2>tracks</h2>

<?php

$count = 0;

// first loop
while( have_posts() ) : the_post();

get_template_part( 'loop', 'track' );

endwhile;

get_sidebar( 'full' ); 

get_footer(); 
