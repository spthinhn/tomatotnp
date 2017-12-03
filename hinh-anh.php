<!doctype html>
<html lang="en-US">
	<?php require_once('head.php'); ?>
	<body>
		<?php require_once('nav-mobile.php'); ?>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<?php require_once('header.php'); ?>
			<div class="content-container no-padding mobile-header">
				<div class="heading-container heading-resize heading-no-button mobile-margin-top">
					<img src="/images/bot-pho-mai/cover.jpg" width="100%">
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
                    'title'         : 'Bột phô mai',
                    'description'   : '',
                    'thumbnail'     : ['/images/bot-pho-mai/bpmttc03_1kgx200.jpg','/images/bot-pho-mai/bpmtt01_1kgx200.jpg'],
                    'large'         : ['/images/bot-pho-mai/bpmttc03_1kg.jpg','/images/bot-pho-mai/bpmtt01_1kg.jpg'],
                    'img_title'     : ['Bột phô mai','Bột phô mai1'],
                    'button_list'   :
                    [
                    ],
                    'tags'          : ['Bột phô mai']
                },
               

            ]
        });
    });
		</script>
	</body>
</html>