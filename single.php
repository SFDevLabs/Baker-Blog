
<?php get_header('blog'); ?>

    <!-- content -->      	
	<div id="content">
		<?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); 
        	$cur_post = get_the_ID(); ?>
        	
		<div class="featured post">
			<div class="container">
				<?php 
				if('' != get_the_post_thumbnail()) { // if there's a featured image set, let's use that after resizing 
					$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
					
				} else {  // if not we just grab a place holder image (for now)
					$img = "/wp-content/uploads/2014/07/alternate-default-image.jpg"; 
				}
				?>

				<div id="hero-image" class="col large-col-4" style="background: transparent url(<?php  echo $img; ?>) center center no-repeat; background-size: cover; ">
					<img src="<?php bloginfo('template_directory'); ?>/images/circle-mask.png" />
				</div>

			</div>
				<div id="hero-overlay" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; background: transparent url(<?php bloginfo('template_directory'); ?>/images/hero-bg-left.png) left center no-repeat; background-size: 65% auto;"></div>

				<div class="container text-container" style="">

				<div class="col large-col-3">
					<h1><?php the_title(); ?></h1>
					<p class="post-author">By <?php the_author_posts_link(); ?></p>
					<p class="post-date"><span class="bull">&bull;</span> <?php the_time('M. j, Y'); ?></p>
					<p class="categories">Categorized in 
					<?php 
					$cats = wp_get_post_categories(get_the_ID());
					foreach($cats as $c) {
					?><a class="category" href="<?php get_category_link($c); ?>"><?php echo get_category($c)->name; ?></a><?php if($c != end($cats)) echo ','; ?> 
					<?php } ?></p>
				</div>


			</div>
		</div>

			<div class="container main-content-container">
				<div id="main" class="post col small-full medium-col-3 large-col-4">

					<div class="post-content">

						<?php the_content(); ?>

					</div>

					<div class="share">
						<h3>Share This Post</h3>
						<p class="share-icons social">
							<?php
								$bitly = wp_get_shortlink();
							?>
							<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo $bitly; ?>&p[title]=<?php the_title(); ?>" class="facebook" target="_blank">Facebook</a>
							<a href="http://twitter.com/intent/tweet/?text=<?php the_title(); ?>&url=<?php echo $bitly; ?>" class="twitter" target="_blank">Twitter</a>
							<a href="
							https://plus.google.com/share?url=<?php echo $bitly; ?>" class="google-plus" target="_blank">Google Plus</a>
							<a href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&url=<?php echo $bitly; ?>&is_video=false&description=<?php the_title(); ?>" class="pinterest" target="_blank">Pinterest</a>
							<a href="http://www.tumblr.com/share/link?url=<?php echo $bitly; ?>&name=<?php the_title(); ?>" class="tumblr" target="_blank">Tumblr</a>
							<a href="http://www.linkedin.com/shareArticle?url=<?php echo $bitly; ?>&title=<?php the_title(); ?>" class="linkedin" target="_blank">LinkedIn</a>
						</p>
					</div>

					<div class="author-bio">
						<h3>About the Author</h3>
						<?php echo get_avatar(get_the_author_meta( 'ID' )); ?>
						<h4><?php the_author(); ?></h4>
						<p><?php the_author_meta('description'); ?></p>
					</div>

					<h3 class="expandable closed comment-header"><span class="cta button"></span> <span class="comment-header-text"><?php echo get_comments_number(); ?> Comments</span></h3>
					<?php comments_template(); ?>
					<!--<img src="./images/disqus.png" />-->

					<h3>Related Posts</h3>
					<div class="next-prev related-posts">
					<?php
						$id_arr = array(); // To store list of IDs to exclude
						$id_arr[] = $cur_post; // current post not really related
						$args = array(
								'category__in' => $cats,
								'posts_per_page' => 4,
								'post__not_in' => $id_arr
							);
						$same_category = new WP_Query($args);
						$post_count = $same_category->post_count;
						$counter = 1;
						if( $same_category->have_posts() ) {
							while ($same_category->have_posts()) : $same_category->the_post(); ?>
								<a href="<?php the_permalink(); ?>" id="related-post-<?php echo $counter ?>" class="col small-col-6 medium-col-3 large-col-3">
									<?php 
									if('' != get_the_post_thumbnail()) { // if there's a featured image set, let's use that after resizing 
										$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
										$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
									} else {  // if not we just grab a place holder image (for now)
										$img = "http://bakerelectric.staging.wpengine.com/wp-content/uploads/2014/05/solar-panels-default.jpg"; 
										$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
									}
									?>
									<div class="col small-col-1 medium-col-3 post-img large-full" style="background: transparent url(<?php  echo $img; ?>) center center no-repeat; background-size: cover;">
									</div>
									<h4 class="col small-col-2 medium-col-3 large-full"><?php the_title(); ?></h4>
								</a>
							<?php
							$counter++;
							$id_arr[] = get_the_ID();
							endwhile;
							wp_reset_query();
						}
						if($post_count < 4) {
							$args = array(
								'post__not_in' => $id_arr,
								'posts_per_page' => 4 - $post_count,
								'category' => $cats
							);
							$latest = new WP_Query($args);
							while ($same_category->have_posts()) : $same_category->the_post(); ?>
								<a href="<?php the_permalink(); ?>" id="related-post-<?php echo $counter ?>" class="col small-col-6 medium-col-3 large-col-3">
									<?php 
									if('' != get_the_post_thumbnail()) { // if there's a featured image set, let's use that after resizing 
										$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
										$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
									} else {  // if not we just grab a place holder image (for now)
										$img = "http://bakerelectric.staging.wpengine.com/wp-content/uploads/2014/05/solar-panels-default.jpg"; 
										$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
									}
									?>
									<div class="col small-col-1 medium-col-3 post-img large-full" style="background: transparent url(<?php  echo $img; ?>) center center no-repeat; background-size: cover;">
										<!-- image holder -->
									</div>
									<h4 class="col small-col-2 medium-col-3 large-full"><?php the_title(); ?></h4>
								</a>
							<?php
							$counter++;
							endwhile;
							wp_reset_query();
						}
					?>
						
					</div>

				</div>
				<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>

      <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
        <?php wp_redirect( '/404-page', 301 ); exit; ?>
      <?php endif; ?>
        	<!-- end main -->
            

			<?php get_sidebar('blog'); ?>

		</div>
		<!-- end .container -->

	</div>
	<!-- end #content -->
	<?php get_footer('blog'); ?>
	
</body>
</html>