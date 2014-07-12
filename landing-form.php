<?php
/**
 * Template Name: Landing Form
 * Description: Landing pages with forms.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

		
</header><!-- #site-header -->

<?php
if ( get_field('landing_form_color_scheme') == 'orange_white' ) {
	echo '<div id="content" class="landing-form orange-white"><!-- start the page content -->';
}
else {
	echo '<div id="content" class="landing-form orange-blue"><!-- start the page content -->';
}
?>

	<div id="banner">
		<div class="container">
			<div class="col small-full medium-col-3 large-col-2">
				<?php
				if ( get_field('landing_form_color_scheme') == 'orange_white' ) {
					echo '<div class="opacity-85 orange text-block no-cta">';
				}
				else {
					echo '<div class="opacity-85 white-bg text-block no-cta">';
				}
				?>
					<h2>
						<?php
						if ( get_field('landing_form_intro_headline') ) {
							echo '<span>' . get_field('landing_form_intro_headline') . '</span>';
						}
						?>
						<span><?php the_field('landing_form_main_headline'); ?></span>
					</h2>
					<?php
						if ( get_field('landing_form_paragraph') ) {
							echo '<p>' . get_field('landing_form_paragraph') . '</p>';
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="container">

		<?php
		if ( get_field('landing_form_color_scheme') == 'orange_white' ) {
			echo '<div class="col small-full medium-col-3 large-col-3 left-content">';
		}
		else {
			echo '<div class="col small-full medium-col-3 large-col-2 left-content">';
		}
		?>
		<?php
		if ( get_field('landing_form_intro_box') !== '' ) {
			echo'<div class="intro-box">
				' . get_field('landing_form_intro_box') . '
			</div>';
		}
		?>
				<?php the_field('landing_form_main_content'); ?>

			</div>


		<?php
		if ( get_field('landing_form_color_scheme') == 'orange_white' ) {
			echo '<div class="col small-full medium-col-3 large-col-3 right-form">';
		}
		else {
			echo '<div class="col small-full medium-col-3 large-col-4 right-form">';
		}
		?>		
			
				<div class="form">
					<div id="thank-you" class="centered">
						<?php the_field('landing_form_thank_you_message'); ?>
					</div>
					<div id="form-contents">
						<?php
						if ( get_field('landing_form_form_headline') ) {
							echo '<h2>' . get_field('landing_form_form_headline') . '</h2>';
						}
						?>
						<?php the_field('landing_form_form'); ?>
						<?php
						if ( get_field('landing_form_privacy_policy_link') == 'show' ) {
							echo '<p class="privacy"><a href="/privacy">Privacy Policy</a></p>';
						}
						?>
					</div>
				</div>
				<?php
				if ( get_field('landing_form_content_below_form_box') == 'show' ) {
					echo get_field('landing_form_content_for_below_the_form_box');
				}
				?>
			</div>

			<?php
			if ( get_field('landing_form_copyright_statement') == 'show' ) {
				echo '<p class="small small-full medium-full large-full">&copy;2014 Baker Electric Solar. All Rights Reserved. CA License #858088 C-10/C-46</p>';
			}
			?>
		</div>
	</section>
</div>
<script src="/wp-content/themes/baker/js/form-thank-you.js"></script>
<script>
$(document).ready(function() {


	function getUrlVars()
	{
	    var vars = [], hash;
	    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    for(var i = 0; i < hashes.length; i++)
	    {
	        hash = hashes[i].split('=');
	        vars.push(hash[0]);
	        vars[hash[0]] = hash[1];
	    }
	    return vars;
	}
	var cid = getUrlVars()['cid']
	if (cid){
		$('[name="Campaign_ID"]').val(cid);
	};

	var phone = getUrlVars()['phone']
	if (phone){
		$('#contact-phone').text(phone);
		$('[name="retURL"]').val( $('[name="retURL"]').val()+"&phone="+phone)
	};
	if (getUrlVars()['tid']){
			$('[name="00N700000031Mjo"]').val( getUrlVars()['tid'])
	}


	// message logic for pulling the right content
	if (window.location.search.match(/confirmed=true/)!=null) {
		var messageid = getUrlVars()['messageid'] ? getUrlVars()['messageid']: 'quote';
		var thanks_msg = $('#thank-you #'+messageid).html();
		$('#form-contents').addClass("thank-you-message centered").html(thanks_msg);
	}
	if (window.location.search.match(/offer=false/)!=null) {
		$(".left-content").attr('style','visibility:hidden;')
	}

	$( ".left-content .cta" ).on("click", function() {
		var section = $(this).parents("#content section");
		$(section).find(".accordion").slideDown("slow");
	});


});
</script>

<?php
if ( get_field('landing_form_footer') == 'show') {
	get_footer(); // This fxn gets the footer.php file and renders it 
}
?>