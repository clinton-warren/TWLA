<?php

/*
 * Template Name: Full Page Template
 */

get_header(); ?>

    <!-- Main Content Just Page-->
    <div class="large-10 large-offset-1 columns rounded-corners" role="content" id="main_wrap">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
<?php get_footer(); ?>