<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content Single Case-->
    <div class="large-12 columns rounded-corners" role="content" id="main_wrap">
		<h1>Case Results</h1>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
	<div class="eidman-home-widget">
        <div class="eidman-aop-widget">
            <?php dynamic_sidebar( 'case-result-widget' ); ?>
        </div>
    </div>

    <!-- End Main Content -->
    <?php dynamic_sidebar( 'awards-widget' ); ?>

<?php get_footer(); ?>