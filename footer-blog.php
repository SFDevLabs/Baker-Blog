<footer id="site-footer-top">
		<div class="container">

			<div class="intro large-full">
				<h2>Learn more about Baker Electric Solar</h2>
			</div>
		</div>

		<div class="container">
			
			<div class="cards">
				<div class="col one small-full medium-col-2 large-col-2 edge green">
					<div class="white-bg text-block">
						<h2>Client Reviews</h2>
						<p>Find out what our customers think.</p>
					</div>
					<div class="bottom cta">
						<a href="/residential-solutions/video-gallery/">What they say <span>&raquo;</span></a>
					</div>
				</div>

				<div class="col two small-full medium-col-2 large-col-2 center bright-blue">
					<div class="white-bg text-block">
						<h2>Baker Way</h2>
						<p>Let us show you how simple solar can be.</p>
					</div>
					<div class="bottom cta">
						<a href="/about-baker">Why Baker? <span>&raquo;</span></a>
					</div>
				</div>

				<div class="col three small-full medium-col-2 large-col-2 edge orange-yellow right">
					<div class="white-bg text-block">
						<h2>Get a Quote</h2>
						<p>The first step to solar is getting a free quote.</p>
					</div>
					<div class="bottom cta">
						<a href="/get-a-free-quote/">Let's get going! <span>&raquo;</span></a>
					</div>
				</div>
			</div>

			
		</div>
		<?php wp_footer(); ?>
	</footer>


	<!-- footer -->
	<footer id="site-footer-bottom" role="contentinfo">
		<div class="container">

			<div class="left">
				<p class="site-title">
					<a href="/" title="Baker Electric Solar" rel="home">Baker Electric Solar</a>
				</p>

				<div class="legal">
					<p>&copy; 2014 Baker Electric Solar</p>
					<p>CA Lic # 858088</p>
					<!-- <p><a href="/about-baker/terms">Terms of Service</a></p> -->
					<p><a href="/about-baker/privacy-policy/">Privacy</a></p>
				</div>
			</div>

			<div class="right links">
				<a href="#" class="logo angies">Angie's List 2013 Super Service Award</a>
				<a href="http://www.bbb.org/sandiego/business-reviews/contractors-solar-energy/baker-electric-solar-in-escondido-ca-1024213/" class="logo bbb" target="_blank">BBB Accredited Business</a>
				<div class="social">
					<a href="http://www.facebook.com/bakerelectricsolar" class="facebook" target="_blank">Facebook</a>
					<a href="http://twitter.com/bakersolar" class="twitter" target="_blank">Twitter</a>
					<a href="https://plus.google.com/109699838039427889159/posts" class="google-plus" target="_blank">Google Plus</a>
					<a href="http://pinterest.com/BakerSolar/" class="pinterest" target="_blank">Pinterest</a>
					<a href="http://www.yelp.com/biz/baker-electric-solar-escondido-3" class="yelp" target="_blank">Yelp</a>
					<a href="http://www.youtube.com/user/BakerElectricSolar" class="youtube" target="_blank">YouTube</a>
					<a href="http://www.linkedin.com/company/baker-electric-solar" class="linkedin" target="_blank">LinkedIn</a>
					<a href="http://www.bakerelectricsolar.com/blog/" class="rss">RSS</a>
				</div>
				<a target="_blank" href="http://us.sunpowercorp.com/" class="logo sunpower">Sunpower Elite Dealer</a>
				<a href="http://www.baker-electric.com" target="_blank" class="logo baker" >Baker Electric Inc.</a>			
			</div>

		</div>
	</footer>
	<!-- end footer -->

	<script>
	$(document).ready(function() {

		if ($(".mobile-trigger").is(":visible")) {
			$("#site-header nav ul li").each(function() {
				if ($(this).css("overflow") == "hidden") {
					$(this).addClass("keep");
				}
			});
			$("#site-header nav").on("click", ".closed .mobile-trigger", function() {
				$("#site-header nav .opened ul").children("li:not(.keep)").slideUp("fast", function() {
					$(this).parents(".nav-wrapper").removeClass("opened").addClass("closed");
				});
				$(this).siblings("ul").children("li").slideDown("fast", function() {
					$(this).parents(".nav-wrapper").removeClass("closed").addClass("opened");
				});
			});
			$("#site-header nav").on("click", ".opened .mobile-trigger", function() {
				$(this).siblings("ul").children("li:not(.keep)").slideUp("fast", function() {
					$(this).parents(".nav-wrapper").removeClass("opened").addClass("closed");
				});
			});	
		}

		$("#site-header").on("click", "#contact-us.closed", function() {
			$("#contact-us-details").slideDown();
			$("#contact-us").removeClass("closed").addClass("open");
		});
		$("#site-header").on("click", "#contact-us.open", function() {
			$("#contact-us-details").slideUp();
			$("#contact-us").removeClass("open").addClass("closed");
		});

		if ($(".single #sidebar .widget h2 span.cta").is(":visible")) {

			// hiding sidebar content with JS so if JS fails, nothing is hidden
			$("#sidebar .widget ul").css("display", "none");
			// set content height for smooth open/close
			$("#sidebar .widget ul").each (function() {
				$(this).css("height", $(this).height());
			});

			$("#sidebar .widget").on("click", ".closed", function() {
				$(this).removeClass("closed").addClass("opened");
				$(this).next("ul").slideDown("slow");
			});
			$("#sidebar .widget").on("click", ".opened", function() {
				$(this).removeClass("opened").addClass("closed");
				$(this).next("ul").slideUp("slow");
			});
			
		}


		// hiding disqus thread with JS so if JS fails, disqus isn't hidden
		$("#disqus_thread").css("display", "none");
		$("#main").on("click", ".comment-header.closed", function() {
			$(this).removeClass("closed").addClass("opened");
			$("#disqus_thread").slideDown();
		});
		$("#main").on("click", ".comment-header.opened", function() {
			$(this).removeClass("opened").addClass("closed");
			$("#disqus_thread").slideUp();
		});


		if(window.location.hash == "#disqus-thread" || window.location.hash == "disqus-thread") {
		  	$("#main .comment-header.closed").removeClass("closed").addClass("opened");
			$("#disqus_thread").slideDown();
			var offset = $('#disqus_thread').offset();
			var scrollto = offset.top - 160; // fixed_top_bar_height = 50px
			$('html, body').animate({scrollTop:scrollto}, 0);
		} 
	});
	</script>