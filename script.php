<script type='text/javascript' src='/js/jquery-1.11.3.min.js'></script>
<script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='/js/easing.min.js'></script>
<script type='text/javascript' src='/js/imagesloaded.pkgd.min.js'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/js/superfish-1.7.4.min.js'></script>
<script type='text/javascript' src='/js/jquery.appear.min.js'></script>
<script type='text/javascript' src='/js/script.js'></script>
<script type='text/javascript' src='/js/swatches-and-photos.js'></script>
<script type='text/javascript' src='/js/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='/js/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='/js/jquery.selectBox.min.js'></script>
<script type='text/javascript' src='/js/jquery.parallax.js'></script>
<script type='text/javascript' src='/js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='/js/jquery.transit.min.js'></script>
<script type='text/javascript' src='/js/jquery.carouFredSel.min.js'></script>
<script type='text/javascript' src='/js/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='/js/owl.carousel.js'></script>
<script type='text/javascript' src='/js/jquery.rondell.js'></script>

<script type="text/javascript">
	$('.home_slider').rondell({
		radius: { x: 345, y: 0 },
		center: { left: 550, top: 190 },
		scaling: 1.125,
		size: {width: 1100, height: 520},
		preset: "carousel",
		fadeTime: 500,
		visibleItems: 1,
		autoRotation: {delay: 8000},
		alwaysShowCaption: true,
		randomStart: false,
		lightbox: { enabled: false },			
		controls: { 
			enabled: true,
			margin: {x: 20, y: 148}
		},
		zIndex: 12,
		itemProperties: {
		    size: {
		        width: 300,
		        height: 300
		    },
		    sizeFocused: {
		        width: 360,
		        height: 360
		    }			
		}
	});
	$('.home_slider_md').rondell({
		radius: { x: 350, y: 0 },
		center: { left: 500, top: 190 },
		scaling: 1.125,
		size: {width: 1000, height: 520},
		preset: "carousel",
		fadeTime: 500,
		visibleItems: 1,
		autoRotation: {delay: 8000},
		alwaysShowCaption: true,
		randomStart: false,
		lightbox: { enabled: false },			
		controls: { 
			enabled: true,
			margin: {x: 20, y: 146}
		},
		zIndex: 12,
		itemProperties: {
		    size: {
		        width: 300,
		        height: 300
		    },
		    sizeFocused: {
		        width: 360,
		        height: 360
		    }			
		}
	});
	$('#products').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText: [ '<', '>' ],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	$('#banners').owlCarousel({
		loop:true,
    	responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	$('.products-list').owlCarousel({
		loop:false,
		margin:20,
    	responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});
	(function() {
	  $(function() {
	    var carousel;
	    carousel = $("#rondellCarousel").rondell({
	      preset: "carousel"
	    });
	  });
	}).call(this);
</script>