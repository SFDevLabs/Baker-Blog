<?php
/**
 * Template Name: Video Gallery
 * Description: For pages with a collection of videos.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

	<nav id="subnav" role="navigation" class="residential">
		<div class="container">
			<div class="nav-wrapper closed">
				<ul>
					<li class="block-02"><a href="../#block-02"><?php the_field('subnav_item_1', $post->post_parent ); ?></a></li>
					<li class="block-03"><a href="../#block-03"><?php the_field('subnav_item_2', $post->post_parent ); ?></a></li>
					<li class="block-04"><a href="../#block-04"><?php the_field('subnav_item_3', $post->post_parent ); ?></a></li>
					<li class="block-05"><a href="../#block-05"><?php the_field('subnav_item_4', $post->post_parent ); ?></a></li>
					<li class="block-06"><a href="../#block-06"><?php the_field('subnav_item_5', $post->post_parent ); ?></a></li>
				</ul>
				<div class="mobile-trigger keep">Navigate</div>
			</div>
		</div>
	</nav>
		
</header><!-- #site-header -->

<div id="content" class="video-gallery"><!-- start the page content -->


	<div id="banner">

	</div>

	<section id="video-gallery-section">
		<div class="container">

				<h2>Client Reviews</h2>

				<div class="videos">

					<?php
					if ( get_field('video_thumbnail_01') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-01">
							<a href="' . get_field('video_link_01') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_01') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_01') . '</p>
						</div>';
					}
				
					?>

					<?php
					if ( get_field('video_thumbnail_02') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-02">
							<a href="' . get_field('video_link_02') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_02') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_02') . '</p>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_03') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-03">
							<a href="' . get_field('video_link_03') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_03') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_03') . '</p>
						</div>';
					}
					?>


					<?php
					if ( get_field('video_thumbnail_04') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2 img-thumbnail" id="thumbnail-04">
							<a href="' . get_field('video_link_04') . '" class="fancybox.iframe img-thumb" id="image_inner_text_04">
								<img src="' . get_field('video_thumbnail_04') . '">
								<!-- <img src="/wp-content/themes/baker/images/play-button.png" class="play-button" /> -->
							</a>
							<p>' . get_field('video_caption_04') . '</p>
							<div class="hide-it image_inner_text_04"><h3>' . get_field('review_inner_header') . '</h3>' . get_field('image_inner_text_04') . '<div class="quoter">' . get_field('quoter_04'). '</div><div class="review-location">' . get_field('location_04') . '</div></div>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_05') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2 img-thumbnail" id="thumbnail-05">
							<a href="' . get_field('video_link_05') . '" class="fancybox.iframe img-thumb" id="image_inner_text_05">
								<img src="' . get_field('video_thumbnail_05') . '" />
								<!-- <img src="/wp-content/themes/baker/images/play-button.png" class="play-button" /> -->
							</a>
							<p>' . get_field('video_caption_05') . '</p>
							<div class="hide-it image_inner_text_05"><h3>' . get_field('review_inner_header') . '</h3>' . get_field('image_inner_text_05') . '<div class="quoter">' . get_field('quoter_05'). '</div><div class="review-location">' . get_field('location_05') . '</div></div>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_06') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2 img-thumbnail" id="thumbnail-06">
							<a href="' . get_field('video_link_06') . '" class="fancybox.iframe img-thumb" id="image_inner_text_06">
								<img src="' . get_field('video_thumbnail_06') . '" />
								<!-- <img src="/wp-content/themes/baker/images/play-button.png" class="play-button" /> -->
							</a>
							<p>' . get_field('video_caption_06') . '</p>
							<div class="hide-it image_inner_text_06"><h3>' . get_field('review_inner_header') . '</h3>' . get_field('image_inner_text_06') . '<div class="quoter">' . get_field('quoter_06'). '</div><div class="review-location">' . get_field('location_06') . '</div></div>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_07') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-07">
							<a href="' . get_field('video_link_07') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_07') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_07') . '</p>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_08') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-08">
							<a href="' . get_field('video_link_08') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_08') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_08') . '</p>
						</div>';
					}
					?>

					<?php
					if ( get_field('video_thumbnail_09') )
					{
					echo '<div class="col small-full medium-col-3 large-col-2" id="thumbnail-09">
							<a href="' . get_field('video_link_09') . '" class="fancybox.iframe vid-thumb">
								<img src="' . get_field('video_thumbnail_09') . '" />
								<img src="/wp-content/themes/baker/images/play-button.png" class="play-button" />
							</a>
							<p>' . get_field('video_caption_09') . '</p>
						</div>';
					}
					?>

				</div>

		</div>
	</section>
</div>
<script>
	$(document).ready(function() {
		if ($(".mobile-trigger").is(":visible")) {
			$(".videos .thumbnail").on("click", function() {
				var videoSrc = $(this).attr('video-src');
				var cleanSrc = videoSrc.replace("embed/", "watch?v=").replace("//", "http://");
				window.location = cleanSrc;
			});
		}
		else {
			$("#content").fitVids();
			var initialVid = $(".videos .thumbnail").first().attr('video-src');
			$("#banner-video").html('<iframe width="640" height="400" src="'+initialVid+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>').removeClass("loading");
			$("#banner-video").fitVids();
			$("#banner-video-dimmer").fadeIn();

			$(".videos .thumbnail").on("click", function() {
				var videoSrc = $(this).attr('video-src');
				$("#banner-video").html('<iframe width="640" height="400" src="'+videoSrc+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>').removeClass("loading");
				$("#banner-video").fitVids();
				$("#banner-video-dimmer").fadeIn();
			});
		}
	});
</script>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
