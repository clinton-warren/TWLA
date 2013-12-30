<?php

/*
 * Template Name: Area of Practice
 */

get_header(); ?>

    <!-- Main Content Area of Practice-->
    <div class="large-12 columns" role="content" id="main_wrap-two-corners">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'aop' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>
        
    <?php dynamic_sidebar( 'aop-page-content-widget' ); ?>
        
    </div>
    <div class="eidman-home-widget">
        <div class="eidman-aop-widget">
            <?php dynamic_sidebar( 'aop-page-widget' ); ?>
        </div>
    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
<?php get_footer(); ?>