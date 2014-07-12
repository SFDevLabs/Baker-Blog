<?php
/**
 * Template Name: Blog Page
 * Description: For pages on the third level of the site tree.
 *
 */
get_header(); // This fxn gets the header.php file and renders it 
?>

<nav id="subnav" role="navigation">
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

<div id="content" class="tertiary-template"><!-- start the page content -->

	<div style="margin-top:120px;">
		<!-- banner -->
	</div>

	<section id="block-01">
		<div class="container">


 
 


<script>
$(document).ready(function() {
     $(".ui-accordion-container").accordion(
        {active: "a.default", alwaysOpen: true, autoHeight: false,header: "a.accordion-label"}
     );
  });

</script>
			
				
				

			<div class="large-full tertiary-columns">
			
	
	
						<ul>
							<?php
							//$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );
							$args = array( 'posts_per_page' => 40 );

							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<?php endforeach; 
									wp_reset_postdata();?>

						</ul>
	
	
	
	
	
	
	
	
	
			</div>

		</div>
	</section>

<?php
get_footer(); // This fxn gets the footer.php file and renders it 
?>