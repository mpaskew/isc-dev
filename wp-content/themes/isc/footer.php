	</section>

	<footer>
		<div class="row donate">
			<div class="nine columns"><h6 class="donate-text">Want to see more science in Chicago? Every donation helps.</h6></div>
			<div class="three columns">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<div class="donate-btn">
				    <input type="hidden" name="cmd" value="_s-xclick">
				    <input type="hidden" name="hosted_button_id" value="7FUVCUXGTEJ34">
				    <input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" value="contribute" class="donate-txt" />
				    <img class="piggy" src="<?php bloginfo('template_directory'); ?>/assets/images/piggy.png" alt="Donate! Graphic, pig on a rocket!" />
					</div>
			    </form>
			</div>
		</div>
		<div class="cnt-banner banner-ft">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/banner-footer.png" alt="">
		</div>
		<div class="foot-content">
	        <ul class="h-list footer-list row">
	            <li class="footer-nav-item four columns">
	                <a class="footer-nav-link font-ext" href="/contact"><span class="ico-mail"></span> contact us</a>
	            </li>
	            <li class="footer-nav-item five columns">
	                <a class="footer-nav-link font-ext" href="http://facebook.com/illinoissciencecouncil">find us on facebook</a>
	            </li>
	            <li class="footer-nav-item three columns">
	                <a class="footer-nav-link font-ext" href="http://twitter.com/IllinoisScience">@IllinoisScience</a>
	            </li>
	        </ul>
	        <div class="row">
	        	<small>Copyright &copy; <?php echo date("Y"); ?> Illinois Science Council &bull; A not-for-proﬁt corporation</small>
	        </div>
        </div>
	</footer>
	
	<!-- Included JS Files (Compressed) -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/foundation.min.js"></script>

	<!-- Initialize JS Plugins -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" charset="utf-8" src="/twitter/jquery.tweet.js"></script>
<!--     <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.tweet.js"></script> -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26163949-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>  
    <?php wp_footer(); ?>
</body>
</html>