<?php 
 
/**
 * Template Name: Custom Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

?>

<?php 
	/* header */
	include 'header2.php'
 ?>

<div class="midbody" style="padding-top: 130px;">
 
<?php 
	 
	if( have_rows('sections_types') ): ?>
		<?php while( have_rows('sections_types') ): the_row(); 
			// vars 
			$content = get_sub_field('section_type'); 
		?>

		    <?php echo $content; ?>

		<?php endwhile; ?>
	<?php endif; ?>
 
</div>
<?php	
	include 'footer2.php'

?>