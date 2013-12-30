<?php

/*
 * Template Name: Contact Page
 */

get_header(); ?>

    <!-- Main Content Contact Page-->
    <div class="large-10 large-offset-1 columns rounded-corners" role="content" id="main_wrap">
        
        <?php //query_posts('post_type=faq&order=ASC&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>
        <div class="contact-widget">
            <?php dynamic_sidebar( 'contact-page-widget' ); ?>
        </div>
    </div>
    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>
<?php get_footer(); ?>