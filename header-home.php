<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?> 

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class=" lt-ie9" lang="en" > <![endif]--> 
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />

<!-- Add jQuery -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title('|', true, 'right'); ?></title>

<!-- VIDEO JS -->
<link href="<?php bloginfo('template_url'); ?>/js/video-js/video-js.css" rel="stylesheet">
<script src="<?php bloginfo('template_url'); ?>/js/video-js/video.js"></script>
<script>
  videojs.options.flash.swf = "<?php bloginfo('template_url'); ?>/js/video-js/video-js.swf"
</script> 

<!-- IE COMPATIBILITY -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="UTF-8">

<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans+Caption' rel='stylesheet' type='text/css'>

<!-- ROUNDED CORNERS - DIE, FUCKING IE! -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.corner.js"></script>

<!-- DROPDOWN MENU -->
<!--[if lte IE 8]>
<script type="text/javascript">
    var is_touch_device = 'ontouchstart' in document.documentElement;
    if(!is_touch_device && ($(document).width() > 480) ){ 
    document.write("<link href='<?php bloginfo('template_url'); ?>/ie8-dropdown.css' rel='stylesheet' type='text/css' >");
}
</script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="page-body">
    <script>
      document.body.style.backgroundImage="url('<?php bloginfo( 'template_url' ); ?>/images/home.jpg')";
    </script>

<div class="row eidman-header">

    <div class="logo">   
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $header_image = get_header_image(); ?>" /></a>
    </div>	
    
    <div class="contact-info">
	<h3>Do you have a case ?</h3>
	<span>212.489.0500</span>
    </div>
    
    
</div>    
    
 <div class="row eidman-menu">   
    <nav class="top-bar" style="margin-bottom:0;" data-options="is_hover:true">
	    
		<ul class="title-area">
			<li class="name"></li>			
		
			<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
		</ul>
	    
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>
</div>
    
<div class="row">
     <?php dynamic_sidebar( 'main-page-top-widget' ); ?>
</div>
	
<!-- Begin Page -->
<div class="row eidman-page">