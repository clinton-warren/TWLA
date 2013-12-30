<?php
/**
 * Content Single
 *
 * Loop content in single post template (single.php)
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h3 style="color:#004b8d;"><?php the_title(); ?> <?php the_field( "blog_post_title_addition" ); ?></h3>
		</hgroup>
	</header>

	<?php if ( has_post_thumbnail()) : ?>
	<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" target="_blank" class="th single-post-thumb" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	
	<?php the_content(); ?>

	
</article>
