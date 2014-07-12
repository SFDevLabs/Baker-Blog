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
				<h1>404: Not found</h1>
			</div>
		</div>
		
		<!-- .featured -->

		<div class="container">

			<div id="main" class="col small-full medium-col-3 large-col-4">
			<h1>Nothing was found at this location.</h1>
            </div>

			<?php get_sidebar('blog'); ?>

		</div>
		<!-- end .container -->

	</div>

	<!-- end #content -->

	<?php get_footer('blog'); ?>
	
