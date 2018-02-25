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
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FPh%25C3%25B4-Mai-H%25C3%25A0n-Qu%25E1%25BB%2591c%2F824398560926201&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=75" scrolling="no" style="border:none; overflow:hidden; height:75px;" allowtransparency="true" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</footer>