<?php

/*
 * Template Name: Case Results
 */

get_header(); ?>

    <!-- Main Content Case Results-->
    <div class="large-12 columns rounded-corners" role="content" id="main_wrap">
	<h2 class="page-title"><?php the_title(); ?></h2>
	
	    <?php query_posts('post_type=cases&order=ASC&post_status=publish&posts_per_page=-1&paged='. get_query_var('paged')); ?>
 
	    <?php if ( have_posts() ) : ?>

	    <?php while ( have_posts() ) : the_post(); ?>
		 <?php get_template_part( 'content', 'case', get_post_format() ); ?>
	    <?php endwhile; ?>

	    <?php endif; ?>

	    <?php foundation_pagination(); ?>
	
    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
    
<?php get_footer(); ?> 