<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</div><!-- / end #content -->

<?php
if (!is_page_template( 'landing-form.php' ) || (is_page_template( 'landing-form.php') ) && get_field('landing_form_footer_top') == 'show') {
echo '<footer id="site-footer-top" role="contentinfo">
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
					<a href="/get-a-free-quote/">Let\'s get going! <span>&raquo;</span></a>
				</div>
			</div>
		</div>

		<div class="footer-links small-full medium-fourths large-fourths">

			<div class="col">

				<h2>Residential</h2>

				<h3>Solar Benefits 101</h3>
				<ul>
					<li><a href="/residential-solutions">Residential Solutions</a></li>
					<li><a href="/solar-benefits/#block-02">Enjoy Electricity Again</a></li>
					<li><a href="/solar-benefits/#block-03">Rates are Rising</a></li>
					<li><a href="/solar-benefits/#block-04">Solar Savings Examples</a></li>
					<li><a href="/solar-benefits/#block-06">Environmental Impact</a></li>
				</ul>

				<h3>How to Buy</h3>
				<ul>
					<li><a href="/residential-solutions/#block-03">Lease vs. Own</a></li>
					<li><a href="/residential-solutions/hero-financing/">HERO Financing</a></li>
					<li><a href="/solar-benefits/#block-05">Government Incentives</a></li>
				</ul>

				<h3>Installation Features</h3>
				<ul>
					<li><a href="/residential-solutions/#block-06">Installation Gallery</a></li>
					<li><a href="/residential-solutions/solar-monitoring/">Monitoring</a></li>
					<li><a href="/residential-solutions/installation-process/">Installation Process</a></li>
					<li><a href="/residential-solutions/#block-05">How Solar Works</a></li>
				</ul>

				<h3>Resources</h3>
				<ul>
					<li><a href="/residential-solutions/#block-02">Getting Started</a></li>
					<li><a href="/residential-solutions/#block-04">Baker Way Bonus Program</a></li>
					<li><a href="/residential-solutions/residential-resources/#tax">Tax Credit Form</a></li>
					<li><a href="/about-baker/faqs/">Home FAQs</a></li>
					<li><a href="/#block-05">Free Solar Checklist</a></li>
					<li><a href="/residential-solutions/residential-resources/">Residential Resources</a></li>
				</ul>

			</div>

			<div class="col">

				<h2>Commercial</h2>

				<h3>Large Solar Projects</h3>
				<ul>
					<li><a href="/commercial-solutions/#block-02">Business Overview</a></li>
					<li><a href="/commercial-solutions/#block-03">Commercial Rate Increase</a></li>
					<li><a href="/commercial-solutions/#block-04">Case Studies</a></li>
					<li><a href="/commercial-solutions/#block-05">5 Easy Steps</a></li>
					<li><a href="/commercial-solutions/business-resources/">Business Resources</a></li>
				</ul>

				<h3>Electrical Contracting</h3>
				<ul>
					<li><a href="/commercial-solutions/#block-06">Baker Electric, Inc.</a></li>
				</ul>

			</div>

			<div class="col">

				<h2>Our Company</h2>

				<h3>About Baker</h3>
				<ul>
					<li><a href="/about-baker/#block-02">The Baker Way</a></li>
					<li><a href="/about-baker/#block-03">75 Year History</a></li>
					<li><a href="/about-baker/#block-04">Community Involvement</a></li>
				</ul>

				<h3>Recognition</h3>
				<ul>
					<li><a href="/about-baker/#block-05">Awards</a></li>
					<li><a href="/about-baker/#block-06">SunPower Elite Dealer</a></li>
					<li><a href="/residential-solutions/video-gallery/">Client Reviews</a></li>
				</ul>

				<h3>News &amp; Media</h3>
				<ul>
					<li><a href="/about-baker/baker-in-the-news/">Baker in the News</a></li>
					<li><a href="/about-baker/media-kit/">Media Kit</a></li>
				</ul>

			</div>

			<div class="col">

				<h2>Installations</h2>

				<h3>Service Areas</h3>
				<ul>
				
					<li><a href="/residential-solutions/san-diego-county/">San Diego County</a></li>
					<li><a href="/residential-solutions/riverside-county/">Riverside County</a></li>
					<li><a href="/residential-solutions/orange-county/">Orange County</a></li>
<li><a href="/residential-solutions/san-bernardino/">San Bernardino</a></li>
				</ul>

				<h2>Connect</h2>
 
				<h3>Get Information</h3>
				<ul>
					<li><a href="/contact-us/">Contact Us</a></li>
					<li><a href="/get-a-free-quote/">Request a Quote</a></li>
				</ul>

				<h3>Attend an Event</h3>
				<ul>
					<li><a href="/rsvp/">Event Calendar/RSVP</a></li>
				</ul>

			</div>

		</div>

	</div><!-- .container -->
</footer><!-- #site-footer-top -->
';
}
?>

<?php
if (!is_page_template( 'landing-form.php' ) || (is_page_template( 'landing-form.php') ) && get_field('landing_form_footer') == 'show') {

echo '<footer id="site-footer-bottom" role="contentinfo">
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
			<a href="#" class="logo angies">Angie\'s List 2013 Super Service Award</a>
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
</footer>';
}
?>
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
		console.log("hi")
		$("#contact-us-details").slideUp();
		$("#contact-us").removeClass("open").addClass("closed");
	});
});
</script>

<script>
	$(document).ready(function(){
		$(".button.cta").not('.not-expanding').on('click',function(){
			event.preventDefault();
			var i = 2;
			var sectionId = $(this).parents().eq(i).attr('id');			
			while(typeof sectionId === 'undefined' || sectionId.indexOf("block") < 0) {
				var sectionId = $(this).parents().eq(i).attr('id');
				i++;
			}
			// console.log(sectionId);
			window.location.hash = '';
			var url = String( window.location.href ).replace( '#', "" );
			var hash = '#' + sectionId;
			var url = url + hash;
			window.history.pushState(null,null, url);

			$('html, body').animate({
        		scrollTop: $(hash).offset().top
    		}, 0);
		});
	});
</script>

<script>
	$(document).ready(function(){

		$('.hide-it').hide();
		if( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    		$('.img-thumbnail p').hide();
    		$('.hide-it').show();

    		$('.hide-it').css({
				'color': '#5f6062',
				'font-family': "\'GillSansMTStd-Medium\', \'Lucida Grande\', \'Tahoma\', sans-serif",
				'font-weight': 'normal',
				'font-size':'20px'
			});


    		$('#video-gallery-section .small-full').css({
    			'margin':'0',
    			'padding':'0'
    		});

    		$('#video-gallery-section .small-full p').css({
    			'margin':'15px',
    			'padding':'10px',
    			'line-height':'24px'
    		});

    		$('#video-gallery-section .small-full .hide-it').css({
    			'margin':'15px',
    			'padding':'10px',
    			'line-height':'24px'
    		});

    		$(".img-thumb").on('click',function(){
    			event.preventDefault();
    		});

    		$(".video-gallery #banner").css('max-height','400px');
		}
		else {
			var thumb;
			$("#video-gallery-section .img-thumb").on('click',function(){
				thumb = $(this).attr('id');
				console.log(thumb);
			});
			

			$("#video-gallery-section .vid-thumb").fancybox({

	    	});

	   		$("#video-gallery-section .img-thumb").fancybox({
	   			openEffect  : 'none',
	    		closeEffect : 'none',
	    		type : 'image',
	   			afterLoad   : function() {
	   				// find the p with class thumb and get the contents
	   				// console.log(thumb);
	   				// console.log(typeof thumb);
	   				var sel = '.' + thumb;
	   				// console.log(sel);
	   				// console.log($(sel).text());
	   				var par = $(sel).html();
	   				var html = '<div class="fancy-review"><p>' + par + '</p></div>';
					
					// var html = '<div class="col small-full medium-col-2 large-col-2"><div class="85 white-bg text-block"><h2>Client Reviews </h2><blockquote><p>“I have had Baker Solar for over three years. They are THE BEST!!! I can\’t imagine going anywhere else. They were prompt, efficient and honest. They said what they did and did what they said.”</p></blockquote><div class="quote-info"><h3>Margaret Moir</h3><p>Residential Installation</p><p>San Diego, CA</p></div></div><div class="bottom link cta small-button"><a href="/residential-solutions/video-gallery/">See all reviews <span>»</span></a></div></div>';
					console.log(html);
					this.inner.prepend( html );
	    		}
	    	});
		}
	});

</script>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

<script type="text/javascript">
adroll_adv_id = "KMD7THIG2VGKRMPUKITZGW";
adroll_pix_id = "2YABZC4KCZDNBHYUQMFHLS";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

</body>
</html>
