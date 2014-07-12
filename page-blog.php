<?php
/**
 * Template Name: Blog Page
 * Description: For pages on the third level of the site tree.
 *
 */
get_header('blog');
?>


    <!-- content -->      	
	<div id="content">

		<?php
		//$latest = new WP_Query('posts_per_page=9&post_status=publish');
		query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); 
		if(have_posts() && !is_paged()) :
			the_post();
			global $more;
			$more = 0; // fix to use the more quicktag since we're using custom page
		?>
		<div class="featured">
			<div class="container">
				<h1>Baker Electric Solar Blog</h1>

				<div class="hero-group">

					<!-- hero post -->
					
					<div class="hero post col small-full medium-col-3 large-col-4">
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" alt="<?php the_title(); ?>" class="" />
						</a>

						<div class="text-block white-bg opacity-85">

							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							
							<p class="post-author">
								by <span class="author vcard">
									<span class="fn">
										<?php the_author_posts_link(); ?>
									</span>
								</span> 
							</p>
							<p class="post-date"><?php the_time('M. j, Y'); ?></p>

					    	<?php 
					    		if(strpos($post->post_content, '<!--more-->') > -1) {
					    			echo '<p>' . get_the_content('').' <a href="'. get_the_permalink() .'" title="'. get_the_title() .'"> ... Read More</a></p>'; 
					    		} else {
					    			echo '<p>' . wp_trim_words(get_the_content(), 40) . '<a href="'. the_permalink() .'" title="'. the_title() .'"> ... Read More</a></p>';
					    		}
					    	?>

						</div>


						<p class="comments text-block orange">
							<a href="<?php the_permalink(); ?>#disqus-thread">Comments <i class="fa fa-comment"></i> <?php echo get_comments_number(get_the_ID()); ?></a>
						</p>   
					</div>
					
					<!-- end post -->
					<?php
					$small_feat = 1;
					while (have_posts()): the_post();
					?>
					<!-- post -->
					<div class="side post col small-full medium-col-3 large-col-2">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" alt="<?php the_title(); ?>" />
						</a>

						<div class="text-block white-bg opacity-85">


							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

							<p class="post-author">
								by <span class="author vcard">
									<span class="fn">
										<?php the_author_posts_link(); ?>
									</span>
								</span>   
							</p>
							<p class="post-date"><?php the_time('M. j, Y'); ?></p>

						</div>

						<p class="comments text-block orange">
							<a href="<?php the_permalink(); ?>#disqus-thread">Comments <i class="fa fa-comment"></i> <?php echo get_comments_number(get_the_ID()); ?></a>
						</p>  

					</div>
					<?php 
					if($small_feat >= 2) break;
					$small_feat++;
					endwhile;
					?>
					<!-- end post -->

					
				</div>
				<!-- .row -->
			</div>
		</div>
		<!-- .featured -->
		<?php endif;  if(is_paged()): ?>
			<div class="featured">
			</div>
		<?php endif; ?>
		<div class="container">


			<div id="main" class="col small-full medium-col-3 large-col-4">

				<h2>More from the Baker Blog</h2>
				<?php
					if(have_posts()) :
						while (have_posts()): the_post();
							

					?>
				<div class="post">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col small-full medium-full large-col-3">
						<?php 
						if('' != get_the_post_thumbnail()) { // if there's a featured image set, let's use that after resizing 
							$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
							$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
						} else {  // if not we just grab a place holder image (for now)
							$img = "http://bakerelectric.staging.wpengine.com/wp-content/uploads/2014/05/solar-panels-default.jpg"; 
							$img = get_bloginfo('template_directory') . '/timthumb.php?src=' . $img .'&w=644&h=300'; 
						}
						?>
						<img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" />
					</a>

					<div class="col small-full medium-full large-col-3">
						<h2 class="title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="post-author">
							by <span class="author vcard">
								<span class="fn">
									<?php the_author_posts_link(); ?>
								</span>
							</span>
						</p>
						<p class="post-date"><?php the_time('M. j, Y'); ?></p>

						<p class="comments">
							<a href="<?php the_permalink(); ?>#disqus-thread"><i class="fa fa-comment"></i> <?php echo get_comments_number(get_the_ID()); ?></a>
						</p> 
					</div>                      	
				</div>
				<!-- .post -->
				<?php
				endwhile;
				endif;
				?>

				

				<!-- pagination -->
				<div class="pagination orange">
					<!--<p class="cta button link not-expanding"><a href="#">Older posts</a></p>-->
					<?php if(get_next_posts_link()): ?><div class="alignright"><p class="cta older button"><?php next_posts_link( 'Older posts' ); ?></p></div><?php endif; ?>
					<?php if(get_previous_posts_link()): ?><div class="alignleft"><p class="cta newer button"><?php previous_posts_link( 'Newer posts' ); ?></p></div><?php endif; ?>
				</div>
				<!-- end pagination -->

				<?php wp_reset_query(); ?>
        	</div>
        	<!-- end main -->
            

			<?php get_sidebar('blog'); ?>

		</div>
		<!-- end .container -->

	</div>

	<!-- end #content -->

	<?php get_footer('blog'); ?>
	
</body>
</html>