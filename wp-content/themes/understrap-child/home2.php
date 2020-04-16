<?php 
/*
*   Template Name: Home 2 Template
*
*/

?>

<?php 
    include 'header2.php'
?>

<style type="text/css">
	 


</style>

<div class="t top">
	<div class="leafbox">
		<div class="leafbox-in">
			<img class="t--leaf l1" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l2" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l3" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l4" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l5" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l6" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l7" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
	        <img class="t--leaf l8" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
		</div>
	</div>
	 <img class="main-banner" src="<?php bloginfo('stylesheet_directory') ?>/img/tribeshoki_bottle.jpg" alt="OkBye February 2019.">
	<div class="canvas"></div>
	<div class="top-in">
		<div class="container">
           <?php the_field('banner_title') ?>
			<!-- <div class="banner-content">
				<div class="bannerlogo">
		            <img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/logo.png" alt="" />
		        </div>
		       <div class="bannertext bannertext1">INDULGENT.</div>
		       <div class="bannertext bannertext2">SEXY.</div>
		       <div class="bannertext bannertext3">ELEGANT.</div>
		       <div class="bannertext bannertext4">DRAMATIC AF.</div>
			</div> -->
		</div>
	</div>
</div>

<main id="maincontent">

        <div class="white-space"></div> 

             
           
            <!-- carousel -->
            <section id="carousel_section" class="section0 text-white">
                <!-- <div class="border-top"></div> -->
                <div class="section entranceslide">
                    <div class="">
                        <div class=" entranceslide-txt">
                            <div class="text-uppercase" id="trbieshoki_feature">

                                <?php if( have_rows('product_features') ): ?>

                                    

                                    <?php while( have_rows('product_features') ): the_row(); 

                                        // vars
                                        $image = get_sub_field('product_feature_image');
                                        $content = get_sub_field('product_feature_content');
                                         

                                        ?>

                                        <div class="text-center  wow fadeIn">

                                            <div class="container">
                                                <?php echo $content; ?>
                                            </div>

                                            <?php if( $image ): ?>
                                            <div class="parallximg"  data-image-src="<?php echo $image['url']; ?>">
                                               <div class="prlx img-holder lozad tribshoki_feature_img"  data-image="<?php echo $image['url']; ?>">
                                                   
                                               </div>
                                           </div>
                                           <?php endif; ?>

                                        </div>

                                    <?php endwhile; ?>
 

                                <?php endif; ?>

                               

                            </div>
                        </div>        
                    </div>
                </div>
            </section>

            <?php if( have_rows('product_bottles') ): ?>

                <section class="section multibottles  wow fadeIn">
                   <div class="container">
                       <div class="image-rotator"  data-carousel-3d> 

                        <?php while( have_rows('product_bottles') ): the_row(); 

                            // vars
                            $image = get_sub_field('product_bottles_image'); 

                            ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                        <?php endwhile; ?>

                         </div>
               
                       </div>
                   </section>

            <?php endif; ?>

           <!-- multibottles -->
          

            <section class="section educationbox-tabcontent  wow fadeIn">
                <div class="container">
                    <div class="section-title">
                        <h2>DRINKS YOUR WAY...</h2>
                    </div>
                </div>

                 <?php if( have_rows('drinking_way') ): ?>

                        <div class="drinkingway">

                            <?php while( have_rows('drinking_way') ): the_row(); 

                                // vars 
                                $name = get_sub_field('name_of_drinking_way');
                                $info = get_sub_field('drinking_information');
                                $wallpaper = get_sub_field('drinking_wallpaper');
                                $class = get_sub_field('drinking_way_extra_class'); 

                                ?>
                                <div class="neat-section">
                                   <div class="container">
                                        <?php echo $info ?>
                                    </div>
                                    <figure class="tab-img">
                                        <img src="<?php echo $wallpaper['url'] ?>" alt="<?php echo $wallpaper['alt'] ?>" />
                                    </figure>
                                </div>

                            <?php endwhile; ?>

                        </div>


                    <?php endif; ?>
            </section>


            <!-- portfolio -->

            <?php if( have_rows('product_info') ): ?>

                

                <?php while( have_rows('product_info') ): the_row(); 

                    // vars
                    $largeimage = get_sub_field('large_bottle_image');
                    $smallimage = get_sub_field('small_bottle_image');
                    $productname = get_sub_field('product_name');
                    $content = get_sub_field('product_content');
                    $backgroundimg = get_sub_field('product_background_pattern');
                    $class = get_sub_field('product_extra_class');
                    ?>

                    <section class="section  winedescription  wow fadeIn <?php echo $class ?>" style="background-image: url('<?php echo $backgroundimg ?>');">

                        <div class="container">
                             <div class="row">
                                 <div class="col-md-6">
                                     <figure class="wine-bottle-large">
                                         
                                         <img src="<?php echo $largeimage['url']; ?>" alt="<?php echo $largeimage['alt'] ?>" />

                                         <h2><span class="flavour"><?php echo $productname ?></span></h2>
                                     </figure>
                                 </div>
                                 <div class="col-md-6">
                                     <figure class="wine-bottle-small">
                                         <img src="<?php echo $smallimage['url']; ?>" alt="<?php echo $smallimage['alt'] ?>" />
                                     </figure>

                                     <?php echo $content; ?>
                                  
                                 </div>
                             </div>
                         </div>

                    </section>

                <?php endwhile; ?>

                

            <?php endif; ?>
             
             
            <?php
             $image = get_field('parallax_image');
            if( !empty( $image ) ): ?>
                 <div class="parallximg mt-0 mb-0  wow fadeIn">
                    <div class="prlx img-holder lozad"  data-image="<?php echo esc_url($image['url']); ?>"></div>
                </div>

            <?php endif; ?>

            

            <!-- contacct form -->

            <section class="text-center section contactus  wow fadeIn">
                <div class="container">
                    <?php the_field('contact_us') ?>
                   
                </div>
            </section>

            <!-- instagram Feeds -->
            <section class="instagram-feed section text-center  wow fadeIn">
                <div class="container">
                   
                    <?php the_field('instagram_feeds') ?>

                    

                </div>
            </section>
            <!-- end of instagram feeds -->
 

        <div class="white-space" style="height: 500"></div>

    </main> 


<?php 
    include 'footer2.php'
?>