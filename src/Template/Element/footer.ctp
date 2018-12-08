<footer id="footer" class="footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="#"><img alt="The DMCS" src="/images/logo2.png"></a>
					<div class="footer-social text-center">
						<a href="#" title="Facebook" target="_blank">
							<i class="fa fa-facebook facebook-bg-hover"></i>
						</a>
						<a href="#" title="Twitter" target="_blank">
							<i class="fa fa-twitter twitter-bg-hover"></i>
						</a>
						<a href="#" title="Google+" target="_blank">
							<i class="fa fa-google-plus google-plus-bg-hover"></i>
						</a>
						<a href="#" title="Pinterest" target="_blank">
							<i class="fa fa-pinterest pinterest-bg-hover"></i>
						</a>
						<a href="#" title="RSS" target="_blank">
							<i class="fa fa-rss rss-bg-hover"></i>
						</a>
						<a href="#" title="Instagram" target="_blank">
							<i class="fa fa-instagram instagram-bg-hover"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="widget widget_text">
						<h3 class="widget-title"><span><?= $company->body ?></span></h3>
						<div class="textwidget">
							<p><i class="fa fa-map-marker"></i> <?= $address->body ?></p>
							<p>
								<i class="fa fa-phone"></i>
								<a href="tel:<?= $phone->body ?>" style="width: auto">
									<span><?= $phone->body ?></span>
								</a>
							</p>
							<p>
								<i class="fa fa-envelope"></i> <a href="mailto:<?= $email->body ?>"><?= $email->body ?></a>
							</p>
							
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<img src="/images/chungchi.png" width="100%" />
					<div id="fb-root"></div>
					<script>
						(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
					<div class="fb-like" data-href="https://www.facebook.com/botphomaiTornado" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</footer>