<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

</div>
<!-- End Page -->
<script>
    /*
     * Examples
     * $(this).corner("30px");
     * $(this).corner("bottom");
     * $(this).corner("sharp 20px");
     * Use top, bottom, left, right, tl, tr, bl, br to identify which corner to style
    */
    $('#main_wrap-two-corners').corner("top 7px");
    $('#main_wrap').corner("7px");
    $('#blog').corner("7px");
</script>
<!-- Footer -->
<footer>
    <div class="row" style="max-width:51.875em;">

<?php if ( dynamic_sidebar('Sidebar Footer One') || dynamic_sidebar('Sidebar Footer Two') || dynamic_sidebar('Sidebar Footer Three') || dynamic_sidebar('Sidebar Footer Four')  ) : else : ?>

<div class="large-12 columns eidman-footer">
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'inline-list' )); ?>
</div>

<?php endif; ?>

    </div>
    <div class="row" style="max-width:51.875em;">
        <?php dynamic_sidebar( 'copyright-widget' ); ?>
    </div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
<script type="text/javascript">
  // Once the video is ready
  _V_("example_video_1").ready(function(){

    var myPlayer = this;    // Store the video object
    var aspectRatio = 9/16; // Make up an aspect ratio

    function resizeVideoJS(){
      // Get the parent element's actual width
      var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
      // Set width to fill parent element, Set height
      myPlayer.width(width).height( width * aspectRatio );
    }

    resizeVideoJS(); // Initialize the function
    window.onresize = resizeVideoJS; // Call the function on resize
  });
</script>
</body>
</html>