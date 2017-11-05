<!doctype html>
<html lang="en-US">
	<?php require_once('head.php'); ?>
	<body>
		<?php require_once('nav-mobile.php'); ?>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<?php require_once('header.php'); ?>
			<div class="content-container no-padding mobile-header">
				<div class="heading-container heading-resize heading-no-button">
					<img src="images/slideshow/2.jpg" width="100%">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div id="elastic_grid_demo"></div>
						</div>
					</div>
				</div>
			</div>
			<?php require_once('footer.php'); ?>
		</div>
		<?php require_once('script.php'); ?>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
		<!--- uncompress-->

		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
		<script type="text/javascript" src="js/elastic_grid.js"></script>

		<script type="text/javascript">
			$(function(){
        $("#elastic_grid_demo").elastic_grid({
            'showAllText' : 'Tất cả',
            'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
            'hoverDirection': true,
            'hoverDelay': 0,
            'hoverInverse': false,
            'expandingSpeed': 500,
            'expandingHeight': 500,
            'items' :
            [
                {
                    'title'         : 'Azuki bean',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/1.jpg', 'images/small/2.jpg', 'images/small/3.jpg', 'images/small/10.jpg', 'images/small/11.jpg'],
                    'large'         : ['images/small/1.jpg', 'images/large/2.jpg', 'images/large/3.jpg', 'images/large/10.jpg', 'images/large/11.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Swiss chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/4.jpg', 'images/small/5.jpg', 'images/small/6.jpg', 'images/small/7.jpg'],
                    'large'         : ['images/large/4.jpg', 'images/large/5.jpg', 'images/large/6.jpg', 'images/large/7.jpg'],
                    'img_title'     : ['jquery elastic grid 6 ', 'jquery elastic grid 7 ', 'jquery elastic grid 8', 'jquery elastic grid 9', 'jquery elastic grid 9'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Giá']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/15.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/15.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột đậu xanh', 'Giá']
                },
                {
                    'title'         : 'Aubergine napa cabbage',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/12.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/12.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Swiss chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/17.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/17.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Giá']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/13.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/13.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/7.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/7.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Azuki bean',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/16.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/16.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Swiss chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/18.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/18.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Giá']
                },
                {
                    'title'         : 'Winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/11.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/11.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/3.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/3.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/5.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/5.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai', 'Giá']
                },
                {
                    'title'         : 'Azuki bean',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/6.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/6.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
                {
                    'title'         : 'Swiss chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/8.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/8.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Giá']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/9.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/9.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai', 'Giá']
                }

            ]
        });
    });
		</script>
	</body>
</html>