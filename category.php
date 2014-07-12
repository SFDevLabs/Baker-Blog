<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('blog'); ?>

	<div id="content">

		<div class="featured">
			<div class="container">
				<h1><?php single_cat_title('', true); ?></h1>
			</div>
		</div>
		
		<!-- .featured -->

		<div class="container">


			<div id="main" class="col small-full medium-col-3 large-col-4">

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
				wp_reset_query();
				?>

				

				<!-- pagination -->
				<div class="pagination orange">
					<!--<p class="cta button link not-expanding"><a href="#">Older posts</a></p>-->
					<?php if(get_next_posts_link()): ?><div class="alignright"><p class="cta older button"><?php next_posts_link( 'Older posts' ); ?></p></div><?php endif; ?>
					<?php if(get_previous_posts_link()): ?><div class="alignleft"><p class="cta newer button"><?php previous_posts_link( 'Newer posts' ); ?></p></div><?php endif; ?>
				</div>
				<!-- end pagination -->

        	</div>
        	<!-- end main -->
            

			<?php get_sidebar('blog'); ?>

		</div>
		<!-- end .container -->

	</div>

	<!-- end #content -->

	<?php get_footer('blog'); ?>
	
