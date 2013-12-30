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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 1.2em 0 0.75em 0; clear:both;">

	<header>
		<hgroup>
			<a href="<?php the_permalink();?>"><h3 class="blog-post-article-title"><?php the_title(); ?></h3></a>
                        <a href="<?php the_permalink();?>"><p class="blog-post-exerpt"><?php the_field( "blog_post_title_addition" ); ?></p></a>
			<?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
			<h6 class="blog-post-meta">Written by <?php the_author_link(); ?>
                           <?php if ( function_exists( 'get_relative_date' ) ) {
                                    echo  get_relative_date( get_the_time( 'U' ), 1 ) . ' ago.';
                                }
                                else {
                                    echo "on ".the_time(get_option('date_format')); 
                                }
                           ?>
                        </h6>
		</hgroup>
	</header>
    
    <?php if ( has_post_thumbnail()) : ?>
        <div class="large-4 columns blog-post-thumb" role="content">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" target="_blank" ><img src="<?php echo $url; ?>" 
                    title="<?php the_title_attribute(); ?>" style="width:240px;" /></a>
        </div>
   <?php endif; ?>
    
     <div class="<?php if ( has_post_thumbnail()) echo "large-8 blog-post-content"; else echo "large-12 blog-post-content-2"; ?> columns " role="content">
	<?php 
        $more_link = "<p class='blog-post-more-link'>".the_title('','', false)." ".get_field( "blog_post_title_addition")."</p>";
        the_content( $more_link, false ); ?>
     </div>
</article>