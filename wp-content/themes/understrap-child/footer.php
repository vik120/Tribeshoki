
 <input type="hidden" id="directoryUrl" value="<?php bloginfo('stylesheet_directory') ?>">

<?php wp_footer(); ?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory') ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/imagesloaded.pkgd.min.js"></script>

<script type="text/javascript">
	jQuery.noConflict()( function ( $ ) {
    "use strict";
		jQuery(document).ready(function(){
			
			var touch = Modernizr.touch;
			
			$('.img-holder').imageScroll({
			  imageAttribute: (touch === true) ? 'image-mobile' : 'image',
			  touch: touch
			});

			
            
 
		})
	});
</script>

<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script src="https://unpkg.com/smooth-scrollbar@latest/dist/smooth-scrollbar.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/scroll.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/main.js"></script>

</body>

</html>