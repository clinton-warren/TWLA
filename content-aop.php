<?php
/**
 * Content Page
 *
 * Loop content in page template (page.php)
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
		<h2 class="page-title"><?php the_title(); ?></h2>
	</header>

	<?php if ( has_post_thumbnail()) : 
            $url = wp_get_attachment_url( get_post_thumbnail_id() );
        ?>
          <script>
             document.body.style.backgroundImage="url('<?php echo $url; ?>')";
          </script>
	<?php endif; ?>
	
	<?php the_content(); ?>

</article>