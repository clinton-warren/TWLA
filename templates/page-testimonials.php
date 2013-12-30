<?php

/*
 * Template Name: Testimonials
 */

get_header(); ?>

    <!-- Main Content Testimonials Page -->
    <div class="large-10 large-offset-1 columns rounded-corners" role="content" id="main_wrap">
	<h2 class="page-title"><?php the_title(); ?></h2>
	
	    <?php query_posts('post_type=testimonials&order=ASC&post_status=publish&posts_per_page=25&paged='. get_query_var('paged')); ?>
 
	    <?php if ( have_posts() ) : ?>

	    <?php while ( have_posts() ) : the_post(); ?>
		 <?php get_template_part( 'content', 'testimonials', get_post_format() ); ?>
	    <?php endwhile; ?>

	    <?php endif; ?>

	    <?php foundation_pagination(); ?>
	
    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
    
<?php get_footer(); ?>