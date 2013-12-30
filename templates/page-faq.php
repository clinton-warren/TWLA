<?php

/*
 * Template Name: FAQ Page
 */

get_header(); ?>

    <!-- Main Content FAQ Page-->
    <div class="large-10 large-offset-1 columns rounded-corners" role="content" id="main_wrap">
        
        <?php //query_posts('post_type=faq&order=ASC&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'faq' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
<?php get_footer(); ?>