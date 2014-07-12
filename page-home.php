<?php 
/**
 * 	Template Name: Home Page
 *
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>

</header>


<div id="content" class="home">
	
	<section id="block-01" class="large orange">
		<div class="flexslider image">
			<ul class="slides">
				<li id="block-01-slide-01">
					<div class="container">
						<div class="col small-full medium-col-3 large-col-2">
							<div class="opacity-85 white-bg text-block">
								<h2><?php the_field('home_slide_1_headline_01'); ?></h2>
								<?php the_field('home_slide_1_paragraph_01'); ?>
							</div>
							<div class="bottom cta link small-button">
								<a href="<?php the_field('home_slide_1_button_link_01'); ?>"><?php the_field('home_slide_1_button_text_01'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
				</li>
				<li id="block-01-slide-02">
					<div class="container">
						<div class="col small-full medium-col-3 large-col-2">
							<div class="opacity-85 white-bg text-block">
								<h2><?php the_field('home_slide_2_headline_01'); ?></h2>
								<?php the_field('home_slide_2_paragraph_01'); ?>
							</div>
							<div class="bottom cta link small-button">
								<a href="<?php the_field('home_slide_2_button_link_01'); ?>"><?php the_field('home_slide_1_button_text_01'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
				</li>
				<li id="block-01-slide-03">
					<div class="container">
						<div class="col small-full medium-col-3 large-col-2">
							<div class="opacity-85 white-bg text-block">
								<h2><?php the_field('home_slide_3_headline_01'); ?></h2>
								<?php the_field('home_slide_3_paragraph_01'); ?>
							</div>
							<div class="bottom cta link small-button">
								<a href="<?php the_field('home_slide_3_button_link_01'); ?>"><?php the_field('home_slide_1_button_text_01'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
				</li>
				<li id="block-01-slide-04">
					<div class="container">
						<div class="col small-full medium-col-3 large-col-2">
							<div class="opacity-85 white-bg text-block">
								<h2><?php the_field('home_slide_4_headline_01'); ?></h2>
								<?php the_field('home_slide_4_paragraph_01'); ?>
							</div>
							<div class="bottom cta link small-button">
								<a href="<?php the_field('home_slide_4_button_link_01'); ?>"><?php the_field('home_slide_1_button_text_01'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section id="block-02" class="short orange-yellow">
		<div class="container row">
			<div class="col small-full medium-full large-col-2">
				<div class="text-block">
					<h2>Buzz on the Blog</h2>
					<p>The latest news from the Baker blog.</p>
				</div>
				<div class="button link cta not-expanding">
					<a href="<?php echo site_url('/blog/'); ?>">Visit the blog</a>
				</div>
			</div>
			<div class="col small-full medium-clear medium-col-3 large-col-2 center">
				<div class="blog first text-block">
					<h3></h3>
					<p class="byline"><a href="#">Posted by <span class="author"></span> on <span class="date"></span></a></p>
					<p><span class="snippet"></span> <a href="#">[&hellip;]</a></p>
				</div>
			</div>
			<div class="col small-full medium-col-3 large-col-2">
				<div class="blog second text-block">
					<h3></h3>
					<p class="byline"><a href="#">Posted by <span class="author"></span> on <span class="date"></span></a></p>
					<p><span class="snippet"></span> <a href="#">[&hellip;]</a></p>
				</div>
			</div>
		</div>
	</section>

	<section id="block-03" class="medium blue">
		<div class="container row">
			<div class="col small-full medium-col-3 large-col-2">
				<div class="text-block">
					<h2><?php the_field('home_headline_03'); ?></h2>
					<?php the_field('home_paragraph_03'); ?>
				</div>
				<div class="button link cta not-expanding">
					<a style="color:#fff;" href="<?php the_field('home_button_link_03'); ?>"><?php the_field('home_button_text_03'); ?></a>
				</div>
			</div>
		</div>
	</section>

	<section id="block-04" class="medium orange">
		<div class="container row">
			<div class="col small-full medium-col-3 large-col-2">
				<div class="text-block">
					<h2><?php the_field('home_headline_04'); ?></h2>
					<?php the_field('home_paragraph_04'); ?>
				</div>
				<div class="button link cta not-expanding">
					<a style="color:#fff;" href="<?php the_field('home_button_link_04'); ?>"><?php the_field('home_button_text_04'); ?></a>
				</div>
			</div>
			<div class="circle orange-circles">
				<img src="/wp-content/themes/baker/images/circle-mask-orange-circles.png" />
			</div>
		</div>
	</section>

	<section id="block-05" class="medium red-orange unexpanded">
		<div class="container row">
			<div class="col small-full medium-col-3 large-col-2">
				<div class="text-block">
					<h2><?php the_field('home_headline_05'); ?></h2>
					<?php the_field('home_paragraph_05'); ?>
				</div>
				<div class="button cta">
					<?php the_field('home_button_text_05'); ?> 
				</div>
			</div>

			<div class="accordion">
				<div class="col small-full medium-col-3 large-col-3">
					<p class="red-orange"><strong>Solar Checklist: How to Choose a Solar Company</strong></p>

					<!--<p class="red-orange">Don't let a solar Company trick you into a bad install.</p> -->

					<p>We hope that you can use these tips and guidelines to find a company that is the right fit and help protect consumers against a company that may not be a good long-term choice.</p>
					<p class="red-orange">The Solar Company Checklist aims to:</p>
					<ul>
						<li>Educate consumers on the information they should request from a potential solar energy company</li>
						<li>Assist you in evaluating a solar electric installer</li>
						<li>Leave you feeling confident about your choice to invest in solar</li>
					</ul>
					<p>We’d be honored to be one of the companies that you evaluate for a potential solar electric project.</p>
				</div>
				<div class="col small-full medium-col-3 large-col-3 right-form">
					<div class="form">
						<p class="centered red-orange"><strong>Go Solar the Right Way</strong></p>
						<p class="centered">Download the checklist to get started.</p>
						<form id="ylf" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
							<div class="col halves first">
								<input type="hidden"  name="ydl_td" value="bakerelectricsolar.com">
								<input type="hidden" name="sfga" value="00D700000009DQa"/>
	               				<input type=hidden name="LeadSource" value="Web">
	               				<input type=hidden name="00N700000031Mjo" value="Free Download" />
	                            <input type="hidden" name="oid" value="00D700000009DQa" />
	                            <input type="hidden" name="retURL" value="http://bakerelectricsolar.com/residential-solutions/thank-you-for-downloading-the-solar-checklist/" />
	                            <input type="hidden" name="recipient2" value="arye@bakerelectricsolar.com" />
							    <input type="hidden" name="check_123" id="check_123" value="sdasdsa" />
								<ul>
									<li>
										<label for="first_name">First Name</label>
										<input  id="first_name" maxlength="50" name="first_name" size="50" type="text" />
									</li>
									<li>
										<label for="last_name">Last Name</label>
										<input  id="last_name" maxlength="50" name="last_name" size="50" type="text" />
									</li>
									<li>
										<label for="email">Email</label>
										<input  id="email" maxlength="50" name="email" size="50" type="text" />
									</li>
								</ul>
		                    </div>
								<div class="col halves second">
			                    	<img src="/wp-content/themes/baker/images/solar-checklist-pdf-thumbnail.jpg" />
			                   	</div>	
								<p class="submit-button centered">
									<input name="submit" value="Download Now" type="submit" onclick="MM_validateForm('first_name','','R','last_name','','R','email','','NisEmail');return document.MM_returnValue" />
								</p>
	                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="block-06" class="x-large green">
		<div class="flexslider video">
			<ul class="slides">

				<li id="block-06-slide-01">
					<div class="container video-lid" id="lid-player_1">
						<div class="col small-full medium-col-2 large-col-2">
							<div class="85 white-bg text-block">
								<h2><?php the_field('home_slide_1_headline_06'); ?></h2>
								<?php the_field('home_slide_1_paragraph_06'); ?>
							</div>
							<div class="bottom link cta small-button">
								<a href="<?php the_field('home_slide_1_button_link_06'); ?>"><?php the_field('home_slide_1_button_text_06'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
<!-- 					<div class="hidden-video" id="video-player_1">
						<div class="container">
							<iframe id="player1" width="640" height="360" src="//www.youtube.com/embed/RkE8hEffytQ?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div> -->
				</li>

				<li id="block-06-slide-02">
					<div class="container video-lid" id="lid-player_2">
						<div class="col small-full medium-col-2 large-col-2">
							<div class="85 white-bg text-block">
								<h2><?php the_field('home_slide_2_headline_06'); ?></h2>
								<?php the_field('home_slide_2_paragraph_06'); ?>
							</div>
							<div class="bottom link cta small-button">
								<a href="<?php the_field('home_slide_2_button_link_06'); ?>"><?php the_field('home_slide_2_button_text_06'); ?> <span>&raquo;</span></a>
							</div>
						</div>
						<a class="play-click" video-src="<?php the_field('home_slide_2_video_link_06'); ?>?enablejsapi=1"> <img src="/wp-content/themes/baker/images/play-button.png" class="play-button" id="play-button-player_2" /> </a>
					</div>
<!-- 					<div class="hidden-video" id="video-player_2">
						<div class="container">
							<iframe id="player2" width="640" height="360" src="//www.youtube.com/embed/GG87bb7L1QE?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div> -->
				</li>

				<li id="block-06-slide-03">
					<div class="container video-lid" id="lid-player_3">
						<div class="col small-full medium-col-2 large-col-2">
							<div class="85 white-bg text-block">
								<h2><?php the_field('home_slide_3_headline_06'); ?></h2>
								<?php the_field('home_slide_3_paragraph_06'); ?>
							</div>
							<div class="bottom link cta small-button">
								<a href="<?php the_field('home_slide_3_button_link_06'); ?>"><?php the_field('home_slide_3_button_text_06'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
<!-- 					<div class="hidden-video" id="video-player_3">
						<div class="container">
							<iframe id="player3" width="640" height="360" src="//www.youtube.com/embed/-h0yh1x8XX4?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div> -->
				</li>

				<li id="block-06-slide-04">
					<div class="container video-lid" id="lid-player_4">
						<div class="col small-full medium-col-2 large-col-2">
							<div class="85 white-bg text-block">
								<h2><?php the_field('home_slide_4_headline_06'); ?></h2>
								<?php the_field('home_slide_4_paragraph_06'); ?>
							</div>
							<div class="bottom cta link small-button">
								<a href="<?php the_field('home_slide_4_button_link_06'); ?>"><?php the_field('home_slide_4_button_text_06'); ?> <span>&raquo;</span></a>
							</div>
						</div>
					</div>
<!-- 					<div class="hidden-video" id="video-player_4">
						<div class="container">
							<iframe id="player4" width="640" height="360" src="//www.youtube.com/embed/lkQ789hOxYc?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div> -->
				</li>

			</ul>
		</div>


	</section>
		<div id="video-modal" style="display:none">
			<div id="data">	</div>
		</div>
<script>
$(document).ready(function() {

	$('.flexslider.image').flexslider({
		animation: "slide",
		slideshow: true,
		slideshowSpeed:6000,
		touch: false, // true for swipe functionality
		// controlNav: false, // remove if bottom nav / dots required
		directionNav: true // left / right arrows!
	});

	$('.flexslider.image').on('mouseenter',function(){
		$(".flex-direction-nav").show();
	});

	$('.flexslider.image').on('mouseleave',function(){
		$(".flex-direction-nav").hide();
	});

	/*$(".hidden-video").each(function() {

		var slide = $(this).parent();

		var videoID = "#" + $(this).children("iframe").attr("id");

		var player = videoID;
		$f(player).addEvent('ready', ready);

		function addEvent(element, eventName, callback) {
			if (element.addEventListener) {
				element.addEventListener(eventName, callback, false)
			} else {
				element.attachEvent(eventName, callback, false);
		    }
		}
		 
		function ready(player_id) {
			var froogaloop = $f(player_id);
			froogaloop.addEvent('play', function(data) {
				$('.flexslider').flexslider("pause");
			});
			froogaloop.addEvent('pause', function(data) {
				$('.flexslider').flexslider("play");
			});

			$(slide).find(".play-button").on("click", function() {
				$(slide).children(".video-lid").hide();
				$(slide).children(".hidden-video").show("slow", function() {
					froogaloop.api('play');		
				});
			});
		}


	});

	var player;

	var vimeoPlayers = jQuery('.flexslider.video').find('iframe'), player; 		
	
	for (var i = 0, length = vimeoPlayers.length; i < length; i++) {
		player = vimeoPlayers[i]; 		    
		$f(player).addEvent('ready', ready); 	
	} 		
	
	function addEvent(element, eventName, callback) { 	    	
		if (element.addEventListener) { 		    	
			element.addEventListener(eventName, callback, false) 		    
		} else { 	      		
			element.attachEvent(eventName, callback, false); 	      	
		} 	    
	} 	    
	
	function ready(player_id) {  

		var playButton = "#play-button-" + player_id;
		var lid = "#lid-" + player_id;
		var showVideo = "#video-" + player_id;

		console.log(playButton);

		$(playButton).on("click", function() {
			console.log(lid);
			console.log(showVideo);
			$(lid).hide();
			$(showVideo).show("slow", function() {
				var froogaloop = $f(player_id); 	    	
				froogaloop.addEvent('play');
				froogaloop.api('play');		
			});
		});		
	}  

	$(".flexslider.video")
		.fitVids()
		.flexslider({
			animation: "slide",
			useCSS: false,
			slideshow: false,
			smoothHeight: true,
			before: function(slider){
				if (slider.slides.eq(slider.currentSlide).find('iframe').length !== 0)
					$f( slider.slides.eq(slider.currentSlide).find('iframe').attr('id') ).api('pause');  
			}
		});*/


	// var tag = document.createElement('script');
	// tag.src = "https://www.youtube.com/iframe_api";
	// var firstScriptTag = document.getElementsByTagName('script')[0];
	// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	

	// var player1;
	// var player2;
	// var player3;
	// var player4;

	// function onYouTubeIframeAPIReady() {
	// 	player1 = new YT.Player('player1');
 //    	player2 = new YT.Player('player2');
 //    	player3 = new YT.Player('player3');
 //    	player4 = new YT.Player('player4');
	// }

	// $("#block-06").on("click", ".play-button", function() {
	// 	var slide = $(this).parents(".slides li");
	// 	$(slide).children(".hidden-video").show("slow", function() {
	// 		//$(this).children("iframe").playVideo();
	// 	});
	// });

	// $(".play-click").on("click", function(e){

	// 	alert(e)

	// })

	$(".flexslider.video").flexslider({
		animation: "slide",
		slideshow: false,
		touch: false,
		//controlNav: false, // remove if bottom nav / dots required
		directionNav: true, // left / right arrows!
	});

	$('.flexslider.video').on('mouseenter',function(){
		$(".flex-direction-nav").show();
	});

	$('.flexslider.video').on('mouseleave',function(){
		$(".flex-direction-nav").hide();
	});	

	$("a.play-click").fancybox({
		beforeLoad: function() {
				var videoSrc = this.element.attr('video-src');
				if (videoSrc && videoSrc.length>0)
					 this.content='<iframe width="640" height="360" src="'+videoSrc+'" frameborder="0" allowfullscreen></iframe>'
				else
					this.content='';
    	},
		'hideOnContentClick': true,
		content: '<div class="error-msg"> Video is not available at this time.</div>'
	});
	

	$.ajax({
		url: '/feed',
		type: 'GET',
        dataType: 'xml'
	}).done(function(xml) {
		var first = $(xml).find("item").first();
		var second = $(first).next();

		var months = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

		var firstDate = new Date($(first).find("pubDate").text());
		var secondDate = new Date($(second).find("pubDate").text());

		var firstCleanDate = months[firstDate.getMonth()] + " " + firstDate.getDate() + ", " + firstDate.getFullYear();
		var secondCleanDate = months[secondDate.getMonth()] + " " + secondDate.getDate() + ", " + secondDate.getFullYear();
		

		var firstText = $(first).find("description").text().replace(/�/g,"'").replace('[&#8230;]',"");

        $(".blog.first h3").text($(first).find("title").text());
        $(".blog.first p a").attr("href", $(first).find("link").text());
        $(".blog.first .author").html($(first).find("creator").text());
        $(".blog.first .date").text(firstCleanDate);
        $(".blog.first .snippet").html(firstText);

		var secondText = $(second).find("description").text().replace(/�/g,"'").replace('[&#8230;]',"");

        $(".blog.second h3").text($(second).find("title").text());
        $(".blog.second p a").attr("href", $(second).find("link").text());
        $(".blog.second .author").html($(second).find("creator").text());
        $(".blog.second .date").text(secondCleanDate);
        $(".blog.second .snippet").html(secondText);
    });

	
	$( "#content section .cta" ).on("click", function() {
		var section = $(this).parents("#content section");
		if (section.hasClass("unexpanded")) {
			$(section).removeClass("unexpanded").addClass("expanded");			
			$(section).find(".accordion").slideDown("slow");
		} else {
			$(section).removeClass("expanded").addClass("unexpanded");
			$(section).find(".accordion").slideUp("slow");
		};

	});

	// $(".flexslider.video")
	// 	.fitVids()
	// 	.flexslider({
	// 		animation: "slide",
	// 		useCSS: false,
	// 		slideshow: false,
	// 		smoothHeight: true,
	// 		video: true
	// 	});

});
</script>


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
