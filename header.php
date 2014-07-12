<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="YEc029MKxl_Wn1mn4VMEVD7MlgOQstR71lycMbrSk-U" />
<title>
	<?php wp_title(); ?>
	<?php //bloginfo('name'); // show the blog name, from settings ?>
	<?php //is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>
<link rel="canonical" href="http://bakerelectricsolar.com/blog/" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="/wp-content/themes/baker/style.css" />


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

<style type="text/css">


<?php 
if (is_page_template( 'page-home.php' )) {
echo '.home #block-01 ul li#block-01-slide-01 {
	background: #eee url(' . get_field('home_slide_1_background_image_01') . ') center center no-repeat;
}

.home #block-01 ul li#block-01-slide-02 {
	background: #e1cc99 url(' . get_field('home_slide_2_background_image_01') . ') right top no-repeat;
}

.home #block-01 ul li#block-01-slide-03 {
	background: #eee url(' . get_field('home_slide_3_background_image_01') . ') left center no-repeat;
}

.home #block-01 ul li#block-01-slide-04 {
	background: #fece30 url(' . get_field('home_slide_4_background_image_01') . ') right center no-repeat;
}


.home #block-03 {
	background: #42b6d1 url('. get_field('home_background_image_03') .') center center no-repeat;	
}

.home #block-04 .circle.orange-circles {
	background: #fff url('. get_field('home_background_image_04') .') 5px top no-repeat;	
}

.home #block-05 {
	background: #fece30 url('. get_field('home_background_image_05') .') top center no-repeat;
}


.home #block-06 ul li#block-06-slide-01 {
	background: #eee url(' . get_field('home_slide_1_background_image_06') . ') center center no-repeat;
}

.home #block-06 ul li#block-06-slide-02 {
	background: #e1cc99 url(' . get_field('home_slide_2_background_image_06') . ') right top no-repeat;
}

.home #block-06 ul li#block-06-slide-03 {
	background: #eee url(' . get_field('home_slide_3_background_image_06') . ') left center no-repeat;
}

.home #block-06 ul li#block-06-slide-04 {
	background: #fece30 url(' . get_field('home_slide_4_background_image_06') . ') right center no-repeat;
}


@media all and (max-width: 899px) {

	.home #block-01 ul li#block-01-slide-01 {
		background: #eee url(' . get_field('home_slide_1_background_image_01_tablet') . ') center center no-repeat;
	}

	.home #block-01 ul li#block-01-slide-02 {
		background: #e1cc99 url(' . get_field('home_slide_2_background_image_01_tablet') . ') right top no-repeat;
	}

	.home #block-01 ul li#block-01-slide-03 {
		background: #eee url(' . get_field('home_slide_3_background_image_01_tablet') . ') left center no-repeat;
	}

	.home #block-01 ul li#block-01-slide-04 {
		background: #fece30 url(' . get_field('home_slide_4_background_image_01_tablet') . ') right center no-repeat;
	}


	.home #block-03 {
		background: #42b6d1 url('. get_field('home_background_image_03_tablet') .') center center no-repeat;	
	}

	.home #block-04 .circle.orange-circles {
		background: #fff url('. get_field('home_background_image_04_tablet') .') right top no-repeat;	
	}

	.home #block-05 {
		background: #fece30 url('. get_field('home_background_image_05_tablet') .') center center no-repeat;
	}


	.home #block-06 ul li#block-06-slide-01 {
		background: #eee url(' . get_field('home_slide_1_background_image_06_tablet') . ') center center no-repeat;
	}

	.home #block-06 ul li#block-06-slide-02 {
		background: #e1cc99 url(' . get_field('home_slide_2_background_image_06_tablet') . ') center center no-repeat;
	}

	.home #block-06 ul li#block-06-slide-03 {
		background: #eee url(' . get_field('home_slide_3_background_image_06_tablet') . ') center center no-repeat;
	}

	.home #block-06 ul li#block-06-slide-04 {
		background: #fece30 url(' . get_field('home_slide_4_background_image_06_tablet') . ') center center no-repeat;
	}


}

@media all and (max-width: 599px) {
	.home #block-01 ul li#block-01-slide-01 {
		background: #eee url(' . get_field('home_slide_1_background_image_01_mobile') . ') center center no-repeat;
	}

	.home #block-01 ul li#block-01-slide-02 {
		background: #e1cc99 url(' . get_field('home_slide_2_background_image_01_mobile') . ') right top no-repeat;
	}

	.home #block-01 ul li#block-01-slide-03 {
		background: #eee url(' . get_field('home_slide_3_background_image_01_mobile') . ') left center no-repeat;
	}

	.home #block-01 ul li#block-01-slide-04 {
		background: #fece30 url(' . get_field('home_slide_4_background_image_01_mobile') . ') right center no-repeat;
	}


	.home #block-03 {
		background: #42b6d1 url('. get_field('home_background_image_03_mobile') .') center center no-repeat;	
	}

	.home #block-04 .circle.orange-circles {
		background: #fff url('. get_field('home_background_image_04_mobile') .') 5px top no-repeat;	
	}

	.home #block-05 {
		background: #fece30 url('. get_field('home_background_image_05_mobile') .') center center no-repeat;
	}


	.home #block-06 ul li#block-06-slide-01 {
		background: #eee url(' . get_field('home_slide_1_background_image_06_mobile') . ') center center no-repeat;
	}

	.home #block-06 ul li#block-06-slide-02 {
		background: #e1cc99 url(' . get_field('home_slide_2_background_image_06_mobile') . ') right top no-repeat;
	}

	.home #block-06 ul li#block-06-slide-03 {
		background: #eee url(' . get_field('home_slide_3_background_image_06_mobile') . ') left center no-repeat;
	}

	.home #block-06 ul li#block-06-slide-04 {
		background: #fece30 url(' . get_field('home_slide_4_background_image_06_mobile') . ') right center no-repeat;
	}
}

';

}
?>

<?php
if (is_page() && !is_page_template()) {

echo '#block-01 {
	background: url(' . get_field('background_image_01') . ') center center no-repeat;
}

#block-03 {
	background: url(' . get_field('background_image_03') . ') left top no-repeat;
}

#block-05 {
	background: url(' . get_field('background_image_05') . ') left top no-repeat;
}


#block-02 .circle.transparent {
	background: #fff url(' . get_field('background_image_02') . ') center top no-repeat;	
}

#block-04 .circle.transparent {
	background: #fff url(' . get_field('background_image_04') . ') center top no-repeat;	
}

#block-06 .circle.transparent {
	background: #fff url(' . get_field('background_image_06') . ') center top no-repeat;	
}

@media all and (max-width: 899px) {
	#block-01 {
		background: url(' . get_field('background_image_01_tablet') . ') left top no-repeat;
	}

	#block-03 {
		background: url(' . get_field('background_image_03_tablet') . ') left top no-repeat;
	}

	#block-05 {
		background: url(' . get_field('background_image_05_tablet') . ') left top no-repeat;
	}


	#block-02 .circle.transparent {
		background: #fff url(' . get_field('background_image_02_tablet') . ') center top no-repeat;	
	}

	#block-04 .circle.transparent {
		background: #fff url(' . get_field('background_image_04_tablet') . ') center top no-repeat;	
	}

	#block-06 .circle.transparent {
		background: #fff url(' . get_field('background_image_06_tablet') . ') center top no-repeat;	
	}
}

@media all and (max-width: 599px) {
	#block-01 {
		background: url(' . get_field('background_image_01_mobile') . ') left top no-repeat;
	}

	#block-03 {
		background: url(' . get_field('background_image_03_mobile') . ') left top no-repeat;
	}

	#block-05 {
		background: url(' . get_field('background_image_05_mobile') . ') left top no-repeat;
	}


	#block-02 .circle.transparent {
		background: #fff url(' . get_field('background_image_02_mobile') . ') center top no-repeat;	
	}

	#block-04 .circle.transparent {
		background: #fff url(' . get_field('background_image_04_mobile') . ') center top no-repeat;	
	}

	#block-06 .circle.transparent {
		background: #fff url(' . get_field('background_image_06_mobile') . ') center top no-repeat;	
	}
}

';

}
?>


<?php
if (is_page_template( 'tertiary.php' )) {

echo '
@media all and (min-width: 900px) {
	#content.tertiary-template #banner {
		background: #eee url(' . get_field('tertiary_top_background_image') . ') center center no-repeat;
	}

	#content.tertiary-template .circle {
		background: #fff url(' . get_field('tertiary_circle_background_image') . ') center center no-repeat;
	}
}

@media all and (max-width: 899px) {
	#content.tertiary-template #banner {
		background: #eee url(' . get_field('tertiary_top_background_image_tablet') . ') center center no-repeat;
	}

	#content.tertiary-template .circle {
		background: #fff url(' . get_field('tertiary_circle_background_image_tablet') . ') center center no-repeat;
	}
}

@media all and (max-width: 599px) {

	#content.tertiary-template .circle {
		background: #fff url(' . get_field('tertiary_circle_background_image_mobile') . ') center center no-repeat;
	}
}

';
}
?>

<?php
if (is_page_template( 'video-gallery.php' )) {
echo '
@media all and (min-width: 900px) {
	#content.video-gallery #banner {
		background: #eee url(' . get_field('video_gallery_top_background_image') . ') center center no-repeat;
	}
}
@media all and (max-width: 899px) {
	#content.video-gallery #banner {
		background: #eee url(' . get_field('video_gallery_top_background_image_tablet') . ') center center no-repeat;
	}
}
@media all and (max-width: 599px) {
	#content.video-gallery #banner {
		background: #eee url(' . get_field('video_gallery_top_background_image_mobile') . ') center center no-repeat;
	}
}';
}
?>

<?php
if (is_page_template( 'landing-form.php' ) || is_page_template( 'enjoy-form.php' ) || is_page_template( 'referral-form.php' )) {
echo '
@media all and (min-width: 900px) {
	#content.landing-form #banner {
		background: #eee url(' . get_field('landing_form_background_image') . ') center center no-repeat;
	}
}

@media all and (max-width: 899px) {
	#content.landing-form #banner {
		background: #eee url(' . get_field('landing_form_background_image_tablet') . ') center center no-repeat;
	}
}

@media all and (max-width: 599px) {
	#content.landing-form #banner {
		background: #eee url(' . get_field('landing_form_background_image_mobile') . ') center center no-repeat;
	}
}
';
}
?>


#site-footer-top .cards .one {
	background: transparent url(/wp-content/themes/baker/images/footer-client-reviews.jpg) left top no-repeat;
}

#site-footer-top .cards .two {
	background: transparent url(/wp-content/themes/baker/images/footer-baker-way.jpg) left top no-repeat;
}

#site-footer-top .cards .three {
	background: transparent url(/wp-content/themes/baker/images/footer-get-a-quote.jpg) left top no-repeat;
}

#site-footer-top .cards .one,
#site-footer-top .cards .two,
#site-footer-top .cards .three {
	background-size: auto 167px;
}

#block-06 .circle.transparent,
#block-02 .circle.transparent,
#block-04 .circle.transparent {
	background-size: 100% auto;
}
#content.landing-form #banner,
#block-01,
.video-gallery #content #banner,
.circle,
#banner,
#content.tertiary-template .circle,
#content.tertiary-template #banner,
.home #block-01 ul li#block-01-slide-01,
.home #block-01 ul li#block-01-slide-02,
.home #block-01 ul li#block-01-slide-03,
.home #block-01 ul li#block-01-slide-04,
.home #block-03,
.home #block-06 ul li#block-06-slide-01,
.home #block-06 ul li#block-06-slide-02,
.home #block-06 ul li#block-06-slide-03,
.home #block-06 ul li#block-06-slide-04 {
	background-size: cover;
}

.home #block-05 {
	background-size: auto;
}

#block-03,
#block-05 {
	background-size: 100% auto;
}

@media all and (max-width: 899px) {
	.home #block-04 .circle.orange-circles {
		background-size: 55% auto;
	}
}

@media all and (max-width: 735px) {
	.home #block-01 ul li#block-01-slide-01,
	.home #block-01 ul li#block-01-slide-02,
	.home #block-01 ul li#block-01-slide-03,
	.home #block-01 ul li#block-01-slide-04,
	.home #block-06 ul li#block-06-slide-01,
	.home #block-06 ul li#block-06-slide-02,
	.home #block-06 ul li#block-06-slide-03,
	.home #block-06 ul li#block-06-slide-04 {
		background-position: center top;
		background-size: 120% auto;
	}	
}

@media all and (max-width: 599px) {
	#content.landing-form #banner,
	.circle,
	.residential-resources #banner,
	.home #block-01 ul li#block-01-slide-01,
	.home #block-01 ul li#block-01-slide-02,
	.home #block-01 ul li#block-01-slide-03,
	.home #block-01 ul li#block-01-slide-04,
	.home #block-03,
	.home #block-05,
	.home #block-06 ul li#block-06-slide-01,
	.home #block-06 ul li#block-06-slide-02,
	.home #block-06 ul li#block-06-slide-03,
	.home #block-06 ul li#block-06-slide-04,
	.solar-benefits #block-01,
	.solar-benefits #block-03,
	.solar-benefits #block-05 {
		background-position: center top;
		background-size: 100% auto;
	}
	.home #block-04 .circle.orange-circles {
		background-position: center center;
		background-size: auto 100%;
	}
	.home #block-05 {
		background-position: right top;
		background-size: 150% auto;
	}
	.solar-benefits #block-01 {
		background-position: right -100px;
		background-size: 150% auto;
	}
	.solar-benefits #block-03 {
		background-size: 200% auto;
	}
	.solar-benefits #block-02 .circle.transparent,
	.solar-benefits #block-04 .circle.transparent,
	.solar-benefits #block-06 .circle.transparent {
		background-position: center bottom;
		background-size: auto 200px;
	}
	#site-footer-top .cards .one,
	#site-footer-top .cards .two,
	#site-footer-top .cards .three {
		background-size: auto 100%;
		background-position: -167px 0;
	}
}

</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script src="/wp-content/themes/baker/js/jquery.fitvids.js"></script>
<script src="/wp-content/themes/baker/js/jquery.flexslider.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



</head>

<?php if(is_page()) { $page_slug = $post->post_name; } ?>
<body class="<?php the_field('site_section'); ?> <?php global $post; echo $post->post_name; ?>">

<!-- clickandchat -->
<?php //if(is_page(2139)){ ?>
<div style="display:none;">
<script type='text/javascript' src='https://server4gateway.clickandchat.com/include.js?domain=www.bakerelectricsolar.com'></script>
<script type='text/javascript' >
if(typeof sWOTrackPage=='function')sWOTrackPage();
</script>
<div style="display: none; border: 1px solid black; background: white; font-family: Arial; color: black;"><a href="http://www.clickandchat.com" style="text-decoration: none; color: black;">Live Chat Software</a> byClickAndChat</div>
</div>
<?php // } ?>
<!-- //clickandchat -->

<header id="site-header" role="banner">
	
	<nav id="primary-nav" role="navigation">
		<div class="container">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
			</h1>
			<?php
			if (!is_page_template( 'landing-form.php' )) {
				echo '<div class="nav-contact-us closed" id="contact-us"><span>Contact Us</span></div>
				<ul id="contact-us-details">
					<li class="nav-phone"><span>1 (877) 543-8765</span></li>
					<li class="nav-chat"><a href="/live-chat">Chat Now</a></li>
					<li class="nav-quote"><a href="/get-a-free-quote">Free Quote</a></li>
					<li class="nav-email"><a href="mailto:info@bakerelectricsolar.com">Email Us</a></li>
				</ul>
				<div class="nav-wrapper closed">
					<ul>
						<li class="nav-home"><a href="/">Home</a></li>
						<li class="nav-solar-benefits"><a href="/solar-benefits"><span>Solar</span> Benefits</a></li>
						<li class="nav-residential-solutions"><a href="/residential-solutions"><span>Residential</span> Solutions</a></li>
						<li class="nav-commercial-solutions"><a href="/commercial-solutions"><span>Commercial</span> Solutions</a></li>
						<li class="nav-about-baker"><a href="/about-baker"><span>About</span> Baker</a></li>
					</ul>
					<div class="mobile-trigger keep">Navigate</div>
				</div>';
			}
			else if (is_page_template( 'landing-form.php') && get_field('landing_form_header_navigation') == 'show') {
				echo '<div class="nav-contact-us closed" id="contact-us"><span>Contact Us</span></div>
				<ul id="contact-us-details">
					<li class="nav-phone"><span>1 (877) 543-8765</span></li>
					<li class="nav-chat"><a href="/live-chat">Live Chat</a></li>
					<li class="nav-quote"><a href="/get-a-free-quote">Free Quote</a></li>
					<li class="nav-email"><a href="mailto:info@bakerelectricsolar.com">Email Us</a></li>
				</ul>
				<div class="nav-wrapper closed sectionless">
					<ul>
						<li class="nav-home"><a href="/">Home</a></li>
						<li class="nav-solar-benefits"><a href="/solar-benefits"><span>Solar</span> Benefits</a></li>
						<li class="nav-residential-solutions"><a href="/residential-solutions"><span>Residential</span> Solutions</a></li>
						<li class="nav-commercial-solutions"><a href="/commercial-solutions"><span>Commercial</span> Solutions</a></li>
						<li class="nav-about-baker"><a href="/about-baker"><span>About</span> Baker</a></li>
					</ul>
					<div class="mobile-trigger keep">Navigate</div>
				</div>';
			}
			?>
		</div>
	</nav>
