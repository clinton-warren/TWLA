<?php
/**
 * Content
 *
 * Displays content shown in the 'index.php' loop, default for 'standard' post format
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <hgroup>
            <h3 class="eidman-case-results-post-header"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
        </hgroup>
    </header>
	<?php the_content(); ?>
</article>