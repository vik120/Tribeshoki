<?php 
/*
*   Template Name: Home Template
*
*/

?>

<?php 
    get_header();
?>

<div class="t" onscroll="vksFx()" >
    <canvas></canvas>
    <div class="t--inner">
        <img class="t--b" src="<?php bloginfo('stylesheet_directory') ?>/img/tribeshoki_bottle.jpg" alt="OkBye February 2019.">

        <img class="t--leaf l1" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l2" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l3" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l4" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l5" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l6" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l7" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <img class="t--leaf l8" src="<?php bloginfo('stylesheet_directory') ?>/img/leaf3.gif" alt="OkBye February 2019.">
        <div class="okbye">
            
            <?php // the_field('banner_title') ?>

        <strong>
            <i><img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/s-letter.png" alt="s" /></i>
            <i><img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/h-letter.png" alt="h" /></i>
            <i><img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/o-letter.png" alt="o" /></i>
            <i><img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/k-letter.png" alt="k" /></i>
            <i><img src="http://gutoplis.com/2020/dev/tribeshoki/wp-content/uploads/2020/03/i-letter.png" alt="i" /></i>
        </strong>
<label>
                <span>Indulgent<font color="#D5B32A">.</font></span> 
                <span>Sexy<font color="#F11A92">.</font></span>
                <span>Elegant<font color="#A95BC9">.</font></span>
                <span>Dramatic AF<font color="#D5B32A">.</font></span>
            </label>
          
            
        </div>
    </div>
</div>
 
    <main class="okbye2019" id="okbye2019">

        <div class="white-space"></div>
            <div class="w w_1 blanksite"></div>

             
           
            <!-- carousel -->
            <section id="carousel_section" class="section0 text-white wow bounceInUp">
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

                                        <div class="text-center">

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

                <section class="section multibottles">
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
          

            <section class="section educationbox-tabcontent">
                <div class="container">
                    <div class="section-title">
                        <h4>DRINKS YOUR WAY...</h4>
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

                    <section class="section  winedescription <?php echo $class ?>" style="background-image: url('<?php echo $backgroundimg ?>');">

                        <div class="container">
                             <div class="row">
                                 <div class="col-md-6">
                                     <figure class="wine-bottle-large">
                                         
                                         <img src="<?php echo $largeimage['url']; ?>" alt="<?php echo $largeimage['alt'] ?>" />

                                         <span class="flavour">Pineapple</span>
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
                 <div class="parallximg mt-0 mb-0">
                    <div class="prlx img-holder lozad"  data-image="<?php echo esc_url($image['url']); ?>"></div>
                </div>

            <?php endif; ?>

            

            <!-- contacct form -->

            <section class="text-center section contactus">
                <div class="container">
                    <?php the_field('contact_us') ?>
                   
                </div>
            </section>

            <!-- instagram Feeds -->
            <section class="instagram-feed section text-center">
                <div class="container">
                   
                    <?php the_field('instagram_feeds') ?>

                    

                </div>
            </section>
            <!-- end of instagram feeds -->

        <!-- <?php if( get_field('village_section') ): ?>
            
            <section class="section village-section text-center" id="villagesection">
                <div class="container">
                   <div class="row"> <?php the_field('village_section') ?></div>
                </div>
            </section>

        <?php endif; ?>

         <?php if( get_field('learn_recipe') || get_field('drinking_way') ): ?>
            <section class="eduaction-recipe section" id="kitchensection">
                <div class="container">
                    
                    <?php the_field('learn_recipe') ?>
                   
                        <?php if( have_rows('drinking_way') ): ?>

                         <div class="educationbox">

                            <?php while( have_rows('drinking_way') ): the_row(); 

                                 
                                $content = get_sub_field('name_of_drinking_way'); 

                                ?>

                               <div class="blackbox">

                                    
                                    <a href="#blackbox_<?php echo $content ?>"><?php echo $content; ?></a>
                                    

                                </div>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>
                    
                </div>
            </section>
         <?php endif; ?> -->

        <!-- education and recipie -->
         

       

       <!--  <?php if( have_rows('find_shoki') ): ?>
        <section class="section contactmap">
            <div class="container">
                <?php the_field('find_shoki') ?>

            </div>
        </section>
        <?php endif; ?> -->

       <!--  <section class="unapologetic-section section text-white text-center">
            <div class="container">
                
                    <h3 class="text-uppercase mb-4"> <?php the_field('unapologetic_title') ?></h3>
                    
                    <?php if( have_rows('unapologetic') ):  ?>


                    <?php while( have_rows('unapologetic') ): the_row(); 
 
                           $content = get_sub_field('content');
                        $class = get_sub_field('extra_class');

                            ?>
                             <div class="mb-4 <?php echo $class ?>">
                           
                                    <?php echo $content ?>
           
                            </div>

                        <?php endwhile; ?>
                       
                    <?php endif; ?>

                   
            </div>
        </section> -->

        <div class="white-space"></div>

    </main> 
        <footer class="f">
            <?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
                <div class="footer-socials text-center">
                    <?php
                    if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) {
                        eleganto_social_links();
                    }
                    ?>                 
                </div>
            <?php endif; ?>
        </footer>
<div class="bg"></div>

<script type="text/javascript">


</script>


<?php 
    get_footer();
?>