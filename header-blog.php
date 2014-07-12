<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(''); ?></title>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/styles/style.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class("blog orange"); ?>>

	<!-- header -->
	<header id="site-header" role="banner">
	
		<nav id="primary-nav" role="navigation">
			<div class="container">
				<h1 class="site-title">
					<a href="<?php echo home_url(); ?>" title="Baker Electric Solar, SoCal Experts in SunPower Solar Energy" rel="home">Baker Electric Solar, SoCal Experts in SunPower Solar Energy</a>
				</h1>
				<div class="nav-contact-us closed" id="contact-us"><span>Contact Us</span></div>
				<ul id="contact-us-details">
					<li class="nav-phone"><span>1 (877) 543-8765</span></li>
					<li class="nav-chat"><a href="/live-chat">Chat Now</a></li>
					<li class="nav-quote"><a href="/get-a-free-quote">Free Quote</a></li>
					<li class="nav-email"><a href="mailto:info@bakerelectricsolar.com">Email Us</a></li>
				</ul>
				<div class="nav-wrapper closed">
					<ul>
						<li class="nav-main-home"><a href="/">Home</a></li>
						<li class="nav-blog"><a href="/blog">Blog Home</a></li>
						<li class="nav-contact"><a href="/contact-us">Contact Us</a></li>
					</ul>
					<div class="mobile-trigger keep">Navigate</div>
				</div>
			</div>
		</nav>

	</header>
	<!-- end header -->