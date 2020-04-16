 jQuery.noConflict()( function ( $ ) {
    "use strict";
    $( document ).ready( function () {

        new WOW().init();
        // jQuery('#trbieshoki_feature').slick({
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   arrows: false,
        //   fade: true,
        //   asNavFor: '#trbieshoki_figure'
        // });
       
        // jQuery('#trbieshoki_figure').slick({
        //   slidesToShow: 3,
        //   slidesToScroll: 1,
        //   asNavFor: '#trbieshoki_feature',
        //   dots: true,
        //   centerMode: true,
        //   focusOnSelect: true
        // });
     
        

      

        //smoothscroll
        var sections = $( 'section' )
            , nav = $( '#main-navigation-inner .nav' )
            , nav_height = nav.outerHeight();

        $( window ).on( 'scroll', function () {
            var cur_pos = $( this ).scrollTop();

            sections.each( function () {
                var top = $( this ).offset().top - nav_height,
                    bottom = top + $( this ).outerHeight();

                if ( cur_pos >= top && cur_pos <= bottom ) {
                    nav.find( 'a' ).removeClass( 'active' );
                    sections.removeClass( 'active' );

                    $( this ).addClass( 'active' );
                    nav.find( 'a[href="#' + $( this ).attr( 'id' ) + '"]' ).addClass( 'active' );
                }
            } );
        } );


        
        

        // FlexSlider Carousel
        var $window = $( window );

        // tiny helper function to add breakpoints
        function getGridSize() {
            return ( window.innerWidth < 520 ) ? 1 :
                ( window.innerWidth < 768 ) ? 2 :
                ( window.innerWidth < 992 ) ? 3 : 4;
        }
         
        // set the timeout for the slider resize
        $( function () {
        
            var resizeEnd;
            $( window ).on( 'resize', function () {
                clearTimeout( resizeEnd );
                resizeEnd = setTimeout( function () {
                    flexsliderResize();
                }, 100 );
            } );
        
        });
        function flexsliderResize() {
            if ( $( '#carousel-home' ).length > 0 ) {
                $( '#carousel-home' ).data( 'flexslider' ).resize();
            }
        }


        //  Border effects
        $( window ).on( 'resize', function (  ) {
            $( ".border-top" ).css( { "border-left-width": window.innerWidth } );
            $( ".border-bottom" ).css( { "border-right-width": window.innerWidth } );
        } ).trigger( 'resize' );


        //  Parallax effects
        
        setTimeout(function(){
            
               
        }, 2000) ;

   

    } );
} );

// Smooth scroll effect
 
jQuery( document ).ready( function ( $ ) {



    function loadParallxImg(){
        if( jQuery('.img-holder').data('image')){
         
            $('.img-holder').each(function (index, value) {
               
               var image = $(this).data('image');

                $(this).parent().css({
                    "background-image": "url('"+ image+"')",
               
                })
                 
           //  $('<div class="fixed" style="background-image: url('+ image+')"></div>').insertBefore(this);

            });

            // $('.img-holder').imageScroll({
              
            //    container: $('.scroll-content'),
            //    speed: 0.2,
            //    coverRatio: 0.75,
            //    holderMinHeight: 200,
            //    extraHeight: 0,
            //    mediaWidth: 1600,
            //    mediaHeight: 900,
            //    fallback: false
            // });

        }
    }

    loadParallxImg();

    $(window).resize(function(){
        loadParallxImg();
    })

     
    // let scrollbar = Scrollbar.init(document.querySelector("#okbye2019"));

    // $(".navbar-nav .nav-link").on('click', function(e){
    //     e.preventDefault();
    //    var href = $(this).attr('rel');
    //    $(this).addClass('active');

         
         
    //     scrollbar.scrollIntoView(document.getElementById(href));

        
        
    // });



   
    // scrollbar.addListener(function(status) {

    //    var offset = status.offset;

    //    new WOW().init(); 
       
    //    if(offset.y < 419){

    //         $('.t').addClass('hide');
       
    //    }else{
       
    //         $('.t').removeClass('hide');
       
    //    }
        
    // });
   
    // scrollbar.isVisible(document.querySelector('.scroll-content'));

    // scrollbar.scrollTo(0, 100, 600, {
    //   callback: () => alert('done!'), 
    // });

   
       
    



    // $('.educationbox .blackbox a').on('click', function(event){
    //     event.preventDefault();

    //     var target = $(this).attr('href');

    //     $('.educationbox-tabcontent .neat-section').removeClass('show');

    //     $(target).addClass('show');

    // })
  

});