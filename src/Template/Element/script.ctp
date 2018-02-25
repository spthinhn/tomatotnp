<?= $this->Html->script('jquery-1.11.3.min.js'); ?>
<?= $this->Html->script('jquery-migrate.min.js'); ?>
<?= $this->Html->script('jquery.themepunch.tools.min.js'); ?>
<?= $this->Html->script('jquery.themepunch.revolution.min.js'); ?>
<?= $this->Html->script('easing.min.js'); ?>
<?= $this->Html->script('imagesloaded.pkgd.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>
<?= $this->Html->script('superfish-1.7.4.min.js'); ?>
<?= $this->Html->script('jquery.appear.min.js'); ?>
<?= $this->Html->script('script.js'); ?>
<?= $this->Html->script('swatches-and-photos.js'); ?>
<?= $this->Html->script('jquery.prettyPhoto.min.js'); ?>
<?= $this->Html->script('jquery.prettyPhoto.init.min.js'); ?>
<?= $this->Html->script('jquery.selectBox.min.js'); ?>
<?= $this->Html->script('jquery.parallax.js'); ?>
<?= $this->Html->script('jquery.touchSwipe.min.js'); ?>
<?= $this->Html->script('jquery.transit.min.js'); ?>
<?= $this->Html->script('jquery.carouFredSel.min.js'); ?>
<?= $this->Html->script('isotope.pkgd.min.js'); ?>
<?= $this->Html->script('owl.carousel.js'); ?>
<?= $this->Html->script('jquery.rondell.js'); ?>
<?= $this->Html->script('simple-lightbox.js'); ?>


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
		nav: true,
		navText: [ '<', '>' ],
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
		navText: [ '<', '>' ],
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
		navText: [ '<', '>' ],
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

	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>