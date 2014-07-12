<!-- sidebar -->
			<div id="sidebar" class="col small-full medium-col-3 large-col-2">

				<p class="orange"><a href="<?php home_url(); ?>/blog/feed/" class="cta button rss">Subscribe&nbsp;&nbsp;<i class="fa fa-rss"></i></a></p>
				<!-- search -->
				<form method="get" class="search" action="<?php echo home_url(); ?>" >
			        <input type="text" class="field s" name="s" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
			        <input type="submit" class="submit button" name="submit" value="Go" />
			    </form> 

			    <div class="widget popular">
			    	<h2 class="closed"><span class="cta button"></span> <span class="header-text">Popular Posts</span></h2>
			    	<ul>
			    		<?php
							$year = date('Y');
							$month = date('m');
							$args=array(
							  'orderby'=>'comment_count',
							  'order'=>'DESC',
							  'post_type' => 'post',
							  'post_status' => 'publish',
							  'posts_per_page' => 5,
							  'caller_get_posts'=> 1,
							  'date_query' => array(
							  		array(
							  				'year' => $year,
							  				'month' => $month,
							  			),
							  	),
							);
							$my_query = null;
							$my_query = wp_query_posts_comments($args);
							$id_arr = array(); // To store list of IDs to exclude
							$post_count = $my_query->post_count;
							if( $my_query->have_posts() ) {
							  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							  	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    			<span class="author-name">	By 
										<span class="author vcard">
											<span class="fn">
												<?php the_author_posts_link(); ?>
											</span>
										</span> on <?php the_time('M. j, Y'); ?>
									</span>
								</li>
							    <?php
							    $id_arr[] = get_the_ID();
							  endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							if($post_count < 5) {
								$args = array(
									'post_status' => 'publish',
									'posts_per_page' => 5 - $post_count,
									'post__not_in' => $id_arr
									);
								$latest = new WP_Query($args);
								while ($latest->have_posts()) : $latest->the_post(); ?>
							    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    			<span class="author-name">	By 
										<span class="author vcard">
											<span class="fn">
												<?php the_author_posts_link(); ?>
											</span>
										</span> on <?php the_time('M. j, Y'); ?>
									</span>
								</li>
							    <?php
							  	endwhile;
							  	wp_reset_query(); 
							}
						?>
			    		
			    	</ul>
			    </div>

			    <div class="widget">
			    	<h2 class="closed"><span class="cta button"></span> <span class="header-text">Categories</span></h2>

			    	<ul>
			    		<?php wp_list_categories('title_li=&exclude=1'); ?>
			    	</ul>
			    </div> 

			    <div class="widget twitter">

			    	<h2 class="closed"><span class="cta button"></span> <span class="header-text">Tweets from @BakerSolar</span></h2>
			    	<?php echo do_shortcode('[really_simple_twitter username="BakerSolar" consumer_key="7ezeBCO0Te0L9AgJbCrUiuCdz" consumer_secret="e03pua0hIzjrqyRGuJkFpcJAex4h0WQczck5XyKQ4oIv0bAmkM" access_token="2615546893-y6lZ4C7RN6sIOm0zI1QccZrjR2PeiF9fDrMcrAB" access_token_secret="VjlQ9JJr6XKae23WBFMYVPf6WscecbCPzRhRknUxugiLG" num="3" skip_retweets="true"]') ?>
			    	<!--<a class="twitter-timeline" href="https://twitter.com/BakerSolar" data-widget-id="487235016812797953">Tweets by @BakerSolar</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					-->
					<div class="orange">
						<p class="follow-link cta button twitter"><a href="http://twitter.com/BakerSolar">Follow Us&nbsp;&nbsp;<i class="fa fa-twitter"></i></a></p>
					</div>
				</div>   	
		            
			</div>
			<!-- end #sidebar -->