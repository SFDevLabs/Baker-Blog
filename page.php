<?php
/**
 * The template for displaying a single page.
 *
 */
get_header(); // This fxn gets the header.php file and renders it ?>

	<nav id="subnav" role="navigation">
		<div class="container">
			<div class="nav-wrapper closed">
				<ul>
					<li class="block-02"><a href="#block-02"><?php the_field('subnav_item_1'); ?></a></li>
					<li class="block-03"><a href="#block-03"><?php the_field('subnav_item_2'); ?></a></li>
					<li class="block-04"><a href="#block-04"><?php the_field('subnav_item_3'); ?></a></li>
					<li class="block-05"><a href="#block-05"><?php the_field('subnav_item_4'); ?></a></li>
					<li class="block-06"><a href="#block-06"><?php the_field('subnav_item_5'); ?></a></li>
				</ul>
				<div class="mobile-trigger keep">Navigate</div>
			</div>
		</div>
	</nav>
		
</header><!-- #site-header -->

<div id="content" class="secondary-template"><!-- start the page content -->

	<section id="block-01">
		<div class="container">
			<div class="col small-full medium-col-3 large-col-2">
				<div class="85 white-bg text-block">
					<h2><?php the_field('headline_01'); ?></h2>
				</div>
				<div class="bottom link cta small-button">
					<a href="<?php the_field('button_link_01'); ?>"><?php the_field('button_text_01'); ?> <span>&raquo;</span></a>
				</div>
			</div>
		</div>
	</section>

	<section id="block-02" class="unexpanded">
		<div class="container">
			<div class="col small-full medium-col-3 large-col-3 intro">
				<div class="text-block">
					<h2><?php the_field('headline_02'); ?></h2>
					<p><?php the_field('intro_text_02'); ?></p>
				</div>
				<div class="button cta">
					<?php the_field('button_text_02'); ?>
				</div>
			</div>
			<div class="circle transparent">
				<img src="/wp-content/themes/baker/images/circle-transparent-mask.png" />
			</div>

			<div class="accordion">
				<?php the_field('accordion_content_02'); ?>
			</div>
		</div>
	</section>

	<section id="block-03" class="unexpanded">
		<div class="container">
			<div class="col red small-white small-full medium-col-3 large-col-3 intro">
				<div class="text-block">
					<h2><?php the_field('headline_03'); ?></h2>
					<p><?php the_field('intro_text_03'); ?></p>
				</div>
				<div class="button cta">
					<?php the_field('button_text_03'); ?>
				</div>
			</div>

			<div class="accordion">
				<?php the_field('accordion_content_03'); ?>
			</div>
		</div>
	</section>

	<section id="block-04" class="unexpanded">
		<div class="container">

			<div class="col small-full medium-col-3 large-col-3 intro">
				<div class="text-block">
					<h2><?php the_field('headline_04'); ?></h2>
					<p><?php the_field('intro_text_04'); ?></p>
				</div>
				<div class="button cta">
					<?php the_field('button_text_04'); ?>
				</div>
			</div>

			<div class="circle transparent">
				<img src="/wp-content/themes/baker/images/circle-transparent-mask.png" />
			</div>

			<div class="accordion">
				<?php the_field('accordion_content_04'); ?>
			</div>

			<!--<img src="/wp-content/themes/baker/images/close-button.png" class="close-button" />
			<img scroll-top-selector="#block-04" src="/wp-content/themes/baker/images/scroll-to-top.png" class="scroll-to-top" />

			<div class="accordion">
				<div class="col small-full medium-col-4 large-col-4">
					<p><strong>Plug into the sun with Baker</strong></p>
					<p>The clean energy produced by the sun is yours to harness for powering your home or business.</p> 
					<p>By choosing solar, you become the provider of your energy needs and can finally make what you do with electricity more important than how much of it you’re using.</p>
					<p>Switching from electric to solar power will let you:</p>
				</div>
				<div class="medium-full large-full">
					<div class="col small-full medium-col-2 large-col-2">
						<img src="/wp-content/themes/baker/images/solar-benefits-savings-control.jpg" />
						<h3>Gain control over increases in your electric bill</h3>
						<p>Average electric utility rates have increased in excess of 6% annually over the past 30 years and are expected to continue to rise.</p>
						<p>With your own solar system, you can eliminate these increases and always know what to expect when it comes to costs.</p>
						<p><a href="#"><img src="/wp-content/themes/baker/images/more-button.png" /><span>Read more:</span> How to Power a House with Solar Power <span>&raquo;</span></a></p>
					</div>
					<div class="col small-full medium-col-2 large-col-2 center">
						<img src="/wp-content/themes/baker/images/solar-benefits-savings-profit.jpg" />
						<h3>Profit from the return on investment a solar system provides</h3>
						<p>If you want to lease a solar system for your home with a low monthly payment, you can expect to see savings immediately. From the first month of operation it’s possible to pay less for solar on a monthly basis than your electric bill.</p>
						<p>If you are looking to purchase or do a prepaid lease, an average solar system pays for itself 6-10 years, which means every year after that, you’re saving more and more.</p>
						<p>And, whether you choose to integrate a system that will eliminate the most expensive portions of your monthly electric bill, or one that will “zero it out,” you will see a return on investment that will make using electricity bring a smile to your face for once.</p>
						<p><a href="#"><img src="/wp-content/themes/baker/images/more-button.png" /><span>Read more:</span> HERO Financing—Lowering Costs of Going Solar <span>&raquo;</span></a></p>
					</div>
					<div class="col small-full medium-col-2 large-col-2">
						<img src="/wp-content/themes/baker/images/solar-benefits-savings-power.jpg" />
						<h3>Have a constant source of power to leverage for years to come</h3>
						<p>The energy independence associated with solar energy will inevitably impact the global harvesting of fossil fuels.</p>
						<p>As we move away from our dependence on fossil fuels, we also distance ourselves from our dependence on foreign countries to source it. And though our search for new sources continues internationally, it’s no secret these supplies are limited. The sun, however, is a completely renewable source you can feel great about leveraging.</p>
						<p>With Baker Electric Solar, you can benefit financially and emotionally as you become your own provider of your family’s or business’s electrical needs.</p>
						<p><a href="#"><img src="/wp-content/themes/baker/images/more-button.png" /><span>Read more:</span> Advice for People Who Want to Go Solar <span>&raquo;</span></a></p>
					</div>
				</div>
			</div>-->


		</div>
	</section>

	<section id="block-05" class="unexpanded">
		<div class="blur-wrap">
		</div>
		<div class="container">
			<div class="col red small-white small-full medium-col-3 large-col-3 intro">
				<div class="text-block">
					<h2><?php the_field('headline_05'); ?></h2>
					<p><?php the_field('intro_text_05'); ?></p>
				</div>
				<div class="button cta">
					<?php the_field('button_text_05'); ?>
				</div>
			</div>

			<div class="accordion">
				<?php the_field('accordion_content_05'); ?>
			</div>

		</div>
	</section>

	<section id="block-06" class="unexpanded">
		<div class="container">
			<div class="col small-full medium-col-3 large-col-3 intro">
				<div class="text-block">
					<h2><?php the_field('headline_06'); ?></h2>
					<p><?php the_field('intro_text_06'); ?></p>
				</div>
				<div class="button cta">
					<?php the_field('button_text_06'); ?>
				</div>
			</div>
			<div class="circle transparent">
				<img src="/wp-content/themes/baker/images/circle-transparent-mask.png" />
			</div>

			<div class="accordion">
				<?php the_field('accordion_content_06'); ?>
			</div>

		</div>
	</section>
<script>
$(document).ready(function() {

	if ($(".mobile-trigger").not(":visible")) {

		if (window.location.hash) {
			var selector = window.location.hash;
			if (!selector){return false}
			var top = $(selector).offset().top;
			var headerHeight=$('header').height(); //we subtract the header from the selected div and subtract the header to scroll to the right place.
			var adjusted = top-headerHeight;

			var section = $(window.location.hash);
			$(section).removeClass("unexpanded").addClass("expanded");			
			$(section).find(".accordion").slideDown("slow");

			$('html,body').animate({
	          scrollTop: adjusted
	        }, 500);
			var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	        if (is_firefox) window.scrollTo(0,adjusted) //firefox hack
		}

		$("#subnav li a").on("click", function(e) {
			e.preventDefault();
			var selector = $(this).attr('href');
			if (!selector){return false}
			var top = $(selector).offset().top;
			var headerHeight=$('header').height(); //we subtract the header from the selected div and subtract the header to scroll to the right place.
			var adjusted = top-headerHeight;

			$('html,body').animate({
	          scrollTop: adjusted
	        }, 1000);
			var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	        if (is_firefox) window.scrollTo(0,adjusted) //firefox hack
		});

	}

	else {
		if (window.location.hash) {
			var selector = window.location.hash;
			if (!selector){return false}
			var top = $(selector).offset().top;

			$('html,body').animate({
	          scrollTop: top
	        }, 500);
			var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	        if (is_firefox) window.scrollTo(0,top) //firefox hack
		}
	}

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

	// function scroller(pos) {

	// 	var curr = $(window).scrollTop()
	// 	if (curr===pos)
	// 		return
	// 	else if (curr>pos)
	// 		nextPos=curr+1
	// 	else
	// 		nextPos=curr-1
 //        window.scrollTo(0,curr-1)

 //        scroller(pos)



	// }



});
</script>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>