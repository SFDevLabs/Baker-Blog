<?php
/**
 * Template Name: Tertiary Page
 * Description: For pages on the third level of the site tree.
 *
 */
get_header(); // This fxn gets the header.php file and renders it ?>

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

	<div id="banner">
		<!-- banner -->
	</div>

	<section id="block-01">
		<div class="container">


 
 
<?php if(get_field('tertiary_circle_background_image') == ''){?>
<div class="col large-full large-col-3 large-col-4">
<?php }else{ ?>
 <div class="col small-full medium-col-3 large-col-4">
<?php  
}
?>
<script>
$(document).ready(function() {
     $(".ui-accordion-container").accordion(
        {active: "a.default", alwaysOpen: true, autoHeight: false,header: "a.accordion-label"}
     );
  });

</script>
			
				<div class="text-block">
				

<h2><?php the_field('tertiary_headline'); ?></h2>


					
					<?php the_field('tertiary_body_text'); ?>
					<?php if ( get_field('tertiary_button') == 1) {
						echo '<div class="button cta link left">
							<a href="' . get_field('tertiary_button_link') . '">
								' . get_field('tertiary_button_text') . ' 
							</a>
						</div>';
					}
					?>
				</div>
			</div>

			<div class="circle">
				<img src="/wp-content/themes/baker/images/circle-mask.png" />
			</div>
<?php if(get_field('tertiary_add_columns') == false){?>
<?php }else{ ?>
			<div class="large-full tertiary-columns">
			
				<?php the_field('tertiary_column_content'); ?>
			</div>
<?php  
}
?>
		</div>
	</section>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
