<?php

/*
 * Template Name: Home Page
 */

get_header('home'); ?>

    <!-- Main Content Home-->
    <div class="large-12 columns" role="content" id="main_wrap-two-corners" >
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'home' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <div class="eidman-home-widget">
        <?php dynamic_sidebar( 'main-page-widget' ); ?>
    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>