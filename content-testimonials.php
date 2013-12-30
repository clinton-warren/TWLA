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

<?php //$field_value = get_field( "field_name" ); ?>

<div class="eidman-testimonials-article">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <p class="eidman-testimonials-case"><?php the_field( "area_of_practice" ); ?></p>
    <div style="width:100%; text-align:center; margin-bottom: 1.5em;"><img src="<?php bloginfo( 'template_url' ); ?>/images/quote-icon.png" /></div>
    <header>
        <hgroup>
            <h3 class="eidman-testimonials-quote"><?php the_field( "large_quote" ); ?></h3>
                <?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
        </hgroup>
    </header>
    <div class="eidman-testimonials-content"><?php the_content(); ?></div>
    <?php if ( has_post_thumbnail()){
        echo '<div class="eidman-testimonials-content" style="padding-top:20px; text-align:center;">'.get_the_post_thumbnail().'</div>';
        }
     ?>
    <p class="eidman-testimonials-name"><?php the_field( "name" ); ?></p>
    <p class="eidman-testimonials-location"><?php the_field( "location" ); ?></p>
</article>
</div>