$(function() { 
    $.scrollSpeed(10, 0);
});

$(document).ready(function(){

	var visualComponent = {

		root: document.querySelector(".top"),
		rootin: document.querySelector(".top .top-in"),
		canvas: document.querySelector('.top .canvas'),
		bannerLogo: document.querySelector('.top .bannerlogo'),
		mainBanner: document.querySelector('.main-banner'),
		text1: document.querySelector('.top .bannertext1'),
		text2: document.querySelector('.top .bannertext2'),
		text3: document.querySelector('.top .bannertext3'),
		text4: document.querySelector('.top .bannertext4'),

		leaf1: document.querySelector('.top .t--leaf.l1'),
		leaf2: document.querySelector('.top .t--leaf.l2'),
		leaf3: document.querySelector('.top .t--leaf.l3'),
		leaf4: document.querySelector('.top .t--leaf.l4'),
		leaf5: document.querySelector('.top .t--leaf.l5'),
		leaf6: document.querySelector('.top .t--leaf.l6'),
		leaf7: document.querySelector('.top .t--leaf.l7'),
		leaf8: document.querySelector('.top .t--leaf.l8')
	}
 
	 
	function  canvas(){
		$(visualComponent.canvas).css({
			'height': $(window).height()*1.75
		})
	}

	canvas();

	$(window).on('resize', function(){
		canvas();
	})

 

	 $(window).scroll(function(){
	    // // Trigger the function when window is scrolled
	    // showWords();

		var divOffsetTop = $(visualComponent.mainBanner).offset().top,
		
		divOuterHeight = $(visualComponent.mainBanner*1.75).outerHeight(),

		windowInnerHeight = $(window).innerHeight(),
		
		windowScrollTop = $(this).scrollTop();
		
	 
		

			var canvasHeight = document.documentElement.scrollTop;
			var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
			var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

			var scrolled = (winScroll / height) * 100;

			 
			

			console.log('percentage'+scrolled+' winScroll'+winScroll);

			if(scrolled > 0.01){
				
				$(visualComponent.leaf1).css({
			 		'transform': 'translate(-75%, -80%) scale(1) rotate(85deg)'
			 	})

			 	$(visualComponent.leaf2).css({
			 		'transform': 'translate(82%, -82%) scale(-1.2) rotate(0)'
			 	})

			 	$(visualComponent.leaf3).css({
			 		'transform': 'translate(-4%, 92%) scaleX(-1) rotate(-44deg)'
			 	})

			 	$(visualComponent.leaf4).css({
			 		'transform': 'translate(80%, 62%)  scaleX(-1.3) rotate(-9deg) translateY(-4%)'
			 	})

			 	$(visualComponent.leaf5).css({
			 		'transform': 'translate(-93%, 60%) scale(1.2) rotate(-5deg)'
			 	})

			 	$(visualComponent.leaf6).css({
			 		'transform': 'translate(0%, 200%) scale(1.2) rotate(-60deg)'
			 	})

			 	$(visualComponent.leaf7).css({
			 		'transform': 'translate(100%, -90%) scale(1.2,-1.2) rotate(-89deg)'
			 	})

			 	$(visualComponent.leaf8).css({
			 		'transform': 'translate(0%, -100%) scaleY(-1) rotate(-45deg)'
			 	})
			}else if(scrolled < 0.01){

				$(visualComponent.leaf1).css({
			 		'transform': 'translate(0%, 0%) scale(1) rotate(85deg)'
			 	})

			 	$(visualComponent.leaf2).css({
			 		'transform': 'translate(0%, 0%) scale(-1.2) rotate(0)'
			 	})

			 	$(visualComponent.leaf3).css({
			 		'transform': 'translate(0%, 0%) scaleX(-1) rotate(-44deg)'
			 	})

			 	$(visualComponent.leaf4).css({
			 		'transform': 'translate(0%, 0%)  scaleX(-1.3) rotate(-9deg) translateY(-4%)'
			 	})

			 	$(visualComponent.leaf5).css({
			 		'transform': 'translate(0%, 0%) scale(1.2) rotate(-5deg)'
			 	})

			 	$(visualComponent.leaf6).css({
			 		'transform': 'translate(0%, 0%) scale(1.2) rotate(-60deg)'
			 	})

			 	$(visualComponent.leaf7).css({
			 		'transform': 'translate(00%, 0%) scale(1.2,-1.2) rotate(-89deg)'
			 	})

			 	$(visualComponent.leaf8).css({
			 		'transform': 'translate(0%, 00%) scaleY(-1) rotate(-45deg)'
			 	})
			}

			if(scrolled > 99.5){

				$(visualComponent.leaf1).css({
			 		'transform': 'translate(0%, 0%) scale(1) rotate(85deg)'
			 	})

			 	$(visualComponent.leaf2).css({
			 		'transform': 'translate(0%, 0%) scale(-1.2) rotate(0)'
			 	})

			 	$(visualComponent.leaf3).css({
			 		'transform': 'translate(0%, 0%) scaleX(-1) rotate(-44deg)'
			 	})

			 	$(visualComponent.leaf4).css({
			 		'transform': 'translate(0%, 0%)  scaleX(-1.3) rotate(-9deg) translateY(-4%)'
			 	})

			 	$(visualComponent.leaf5).css({
			 		'transform': 'translate(0%, 0%) scale(1.2) rotate(-5deg)'
			 	})

			 	$(visualComponent.leaf6).css({
			 		'transform': 'translate(0%, 0%) scale(1.2) rotate(-60deg)'
			 	})

			 	$(visualComponent.leaf7).css({
			 		'transform': 'translate(00%, 0%) scale(1.2,-1.2) rotate(-89deg)'
			 	})

			 	$(visualComponent.leaf8).css({
			 		'transform': 'translate(0%, 00%) scaleY(-1) rotate(-45deg)'
			 	})

			}else if(scrolled < 99.5 && scrolled > 0.01){

 				$(visualComponent.leaf1).css({
			 		'transform': 'translate(-75%, -80%) scale(1) rotate(85deg)'
			 	})

			 	$(visualComponent.leaf2).css({
			 		'transform': 'translate(82%, -82%) scale(-1.2) rotate(0)'
			 	})

			 	$(visualComponent.leaf3).css({
			 		'transform': 'translate(-4%, 92%) scaleX(-1) rotate(-44deg)'
			 	})

			 	$(visualComponent.leaf4).css({
			 		'transform': 'translate(80%, 62%)  scaleX(-1.3) rotate(-9deg) translateY(-4%)'
			 	})

			 	$(visualComponent.leaf5).css({
			 		'transform': 'translate(-93%, 60%) scale(1.2) rotate(-5deg)'
			 	})

			 	$(visualComponent.leaf6).css({
			 		'transform': 'translate(0%, 200%) scale(1.2) rotate(-60deg)'
			 	})

			 	$(visualComponent.leaf7).css({
			 		'transform': 'translate(100%, -90%) scale(1.2,-1.2) rotate(-89deg)'
			 	})

			 	$(visualComponent.leaf8).css({
			 		'transform': 'translate(0%, -100%) scaleY(-1) rotate(-45deg)'
			 	})
			
			}






			if(scrolled > 0.1){

				$(visualComponent.mainBanner).css({
			 		'transform': 'scale(1.05)'
			 	})

			}else{
				$(visualComponent.mainBanner).css({
			 		'transform': 'scale(1)'
			 	})
			}


			if(scrolled > 0.8 && scrolled < 2.4){
				$(visualComponent.bannerLogo).css({
			 		'opacity': 1
			 	})
			}else{
				$(visualComponent.bannerLogo).css({
			 		'opacity': 0
			 	})
			}


			if(scrolled > 3 && scrolled < 5.2){
				$(visualComponent.text1).css({
			 		'opacity': 1,
			 	}).fadeIn();
			}else{
				$(visualComponent.text1).css({
			 		'opacity': 0
			 	}).fadeOut();
			}

			if(scrolled > 6 && scrolled < 8.2){
				$(visualComponent.text2).css({
			 		'opacity': 1
			 	}).fadeIn();
			}else{
				$(visualComponent.text2).css({
			 		'opacity': 0
			 	}).fadeOut();
			}

			if(scrolled > 9 && scrolled < 11.2){
				
				$(visualComponent.text3).css({
			 		'opacity': 1
			 	}).fadeIn();

			}else{
				
				$(visualComponent.text3).css({
			 		'opacity': 0
			 	}).fadeOut();
			}

			if(scrolled > 12 && scrolled < 14.2){
				
				$(visualComponent.text4).css({
			 		'opacity': 1
			 	}).fadeIn();

			}else{
				$(visualComponent.text4).css({
			 		'opacity': 0
			 	}).fadeOut();
			}

			if(scrolled > 14.59){
				
				$(visualComponent.rootin).css({
			 		'opacity': 0,
			 		"visiblity": "hidden"
			 	});

			 	$(visualComponent.mainBanner).css({
			 		'opacity': 0,
			 		"visiblity": "hidden"
			 	});

			}else{
				$(visualComponent.rootin).css({
			 		'opacity': 1,
			 		"visiblity": "visible"
			 	});

			 	$(visualComponent.mainBanner).css({
			 		'opacity': 1,
			 		"visiblity": "visible"
			 	});
			}
		
		// if ((windowScrollTop + divOffsetTop) <= (divOuterHeight) ){		

		// }else{
			 

		// }

	});

	 function showWords(){
	    //Return if all words is shown
	    if(textCurrent >= textArraySize) return; 
	    // Get how many pixels have scrolled from top 
	    var scroll = $(window).scrollTop();
	    if (
	      // See if current scrolled size is higher then the current word
	      scroll > (textShowAt * textCurrent)
	    ) {
	        // Append the text to the div
	        $('#text').append(textArray[textCurrent] + ' ');
	        // Increase textCurrent to show next array key (next word)
	        textCurrent++;
	    }
	}
 




})