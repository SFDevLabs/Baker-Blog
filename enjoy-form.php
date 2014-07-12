<?php

$landingid = $_GET["pid"];
/**
 * Template Name: Enjoy Form
 * Description: Landing pages with forms.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

		
</header><!-- #site-header -->

<style>
.solar-benefits #site-header #primary-nav li.nav-solar-benefits a{
color:#5f6062;
}
.solar-benefits #site-header #primary-nav .nav-solar-benefits {
background: transparent!important;
}


.intro-box {
padding: 0!important;
}
.offer_desk{
width:100%;
height:auto;
}
.offer_tab{
display:none;
}
.offer_mob{
display:none;
}
<?php 
if(get_field('landing_form_header_navigation') == 'hide'){?>
#site-header #contact-us {display:none!important;}
#site-header #primary-nav #contact-us-details{display:none!important;}
.nav-wrapper{display:none!important;}}
<?php } ?>


@media only screen and (max-width:340px) {
.offer_desk {
display:none;
}
.offer_tab {
display:none;
}
.offer_mob {
display:block;
width:100%;
height:auto;
}
}
@media only screen and (max-device-width:340px) {
.offer_desk {
display:none;
}
.offer_tab {
display:none;
}
.offer_mob {
display:block!important;
width:100%;
height:auto;
}
}
@media only screen and (max-device-width:480px) and (orientation: landscape) {
.offer_desk {
display:none;
}
.offer_tab {
display:none;
}
.offer_mob {
display:block;
width:100%;
height:auto;
}
}
@media all and (min-width: 599px) {
.offer_desk {
display:none;
}
.offer_tab {
display:block;
width:100%;
height:auto;
}
.offer_mob {
display:none;
}
}
@media all and (min-width: 900px) {
.offer_desk {
display:block;
width:100%;
height:auto;
}
.offer_tab {
display:none;
}
.offer_mob {
display:none;
}
}

</style> 





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
<?php
if (is_page(2180)) { 
$id = $landingid; 
$post = get_page($id); 

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
			echo'<div class="intro-box">';
			?>
			<img class="offer_desk" src="<?php the_field('enjoy_offer_desktop_image'); ?>">
			<img class="offer_tab" src="<?php the_field('enjoy_offer_tablet_image'); ?>">
			<img class="offer_mob" src="<?php the_field('enjoy_offer_mobile_image'); ?>">
			<?php echo '</div>';
		}
		?>
	
		
		
				<?php the_field('joy_main_content'); ?>

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
						<?php the_field('joy_thank_you_message'); ?>
<?php

if (is_page(2180)) { 


$id= $landingid; 
$post = get_page($id); 
echo $post->post_content;
echo the_field('joy_thank_you_message');
}
?>
					</div>
					<div id="form-contents">
						<?php
						if ( get_field('landing_form_form_headline') ) {
							echo '<h2>' . get_field('landing_form_form_headline') . '</h2>';
						}
						?>
						<?php //the_field('landing_form_form'); ?>
						<h3><?php echo the_field('joy_form_headline') ?></h3>
						
			
		
		
<form name="lead" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
   <!--             <form name="lead" action="https://cs3.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">  sandbox  -->
                <input type=hidden name="oid" value="00D700000009DQa">
   <!--              <input type=hidden name="oid" value="00DQ000000EOAq8">   sandbox  -->
   
                <input type=hidden name="LeadSource" value="<?php 
  if(get_field('joy_campaign') == '70170000000jFCv'){ echo 'Door Hanger Landing Page';}
  if(get_field('joy_campaign') == '701700000010KuA'){ echo 'UT Banner Ad Landing Page';}
  if(get_field('joy_campaign') == '701700000010Ktv'){ echo 'UT Sticky Note Landing Page';}
  if(get_field('joy_campaign') == '70170000000j1Ux'){ echo 'Facebook PPC Landing Page';}
  if(get_field('joy_campaign') == '70170000000jEMV'){ echo 'Print Ads Landing Page';}
  if(get_field('joy_campaign') == '70170000000j1V7'){ echo 'Regional PPC Landing Page';}
  if(get_field('joy_campaign') == '70170000000j1VC'){ echo 'Remarketing Landing Page';}
  if(get_field('joy_campaign') == '701700000010KQ1'){ echo 'palmer test page';}
  if(get_field('joy_campaign') == '70170000000jOXt'){ echo 'Direct Mail Prizm Landing Page';}
  if(get_field('joy_campaign') == '70170000000jOXo'){ echo 'eBlast to Leads/Contacts Landing Page';}
  if(get_field('joy_campaign') == '701700000010JZD'){ echo 'Direct Mail Get1Free';}
  if(get_field('joy_campaign') == '701700000010JNX'){ echo 'Direct Mail Home Page DAL';}
  if(get_field('joy_campaign') == '70170000000j1VH'){ echo 'Download Checklist';}
  
?>">

<input type=hidden name="00N700000031Mjo" value="<?php the_title(); ?>" />   <!-- marketing campaign source  -->
			<!-- <input type="hidden" name="recipient2" value="email@email.com" /> -->
                <input type=hidden name="retURL" value="http://bakerelectricsolar.com/thank-you?confirmed=true&messageid=quote&pid=<?php echo get_the_ID(); ?>">
                <input type=hidden name="Campaign_ID" value="<?php  echo the_field('joy_campaign'); ?>">
<ul class="col halves first">

<?php if(get_field('joy_first_name') == true){ ?>
<li>
                <label for="FirstName">First Name<span class="required"></span></label>
                <input type="text" id="first_name" name="first_name" value="" placeholder="" required="true" autofocus />
</li>
<?php } 
if(get_field('joy_last_name') == true){
?>
<li>                
                 <label for="LastName">Last Name<span class="required"></span></label>
                <input type="text" id="last_name" name="last_name" value="" placeholder="" required="true" autofocus />
</li>
<?php } 
if(get_field('joy_company') == true){
?>
<li>                
                                
                <label for="company">Company<span class="required"></span></label>
                <input type="text" id="company" name="company" value="" placeholder="" required="true" autofocus />
</li>
<?php } 

if(get_field('joy_address') == true){
?>
<li>                
                                
                <label for="Address">Property Address<span class="required"></span></label>
                <input type="text" id="street" name="street" value="" placeholder="" required="true" autofocus />
</li>
<?php } 
if(get_field('joy_call') == true){
?>
<li>                
 				              
                <label for="time">Best Time To Call<span class="required"></span></label>
                <select id="00N700000031MNT" multiple="multiple" name="00N700000031MNT" title="Best Call Back Time"  SIZE="1">
  <!--                <select id="00NQ00000015jYF" multiple="multiple" name="00NQ00000015jYF" title="Best Call Back Time"  size="1">   sandbox  -->
                	<option value="Anytime" selected="selected" >Anytime</option>
                	<option value="Morning">Morning</option>
					<option value="Afternoon">Afternoon</option>
					<option value="Evening">Evening</option>
					</select>
</li>
<?php } 
if(get_field('joy_best') == true){
?>
<li>                
 				              
            <label>How did you find out about us?</label>
                                  <textarea name="00N7000000279xA" id="00N7000000279xA"></textarea>
                	
</li>
<?php } ?>


</ul>

<ul class="col halves second">
<?php if(get_field('joy_email') == true){ ?>
<li>                

               
               <label for="email">Email<span class="required"></span></label>
                <input type="text" id="email" name="email" value="" placeholder="" required="true" />             
</li>
<?php } 
if(get_field('joy_city') == true){
?>
<li>                
                
                <label for="City">City<span class="required"></span></label>
                <input type="text" id="city" name="city" value="" placeholder="" required="true" autofocus />
</li>
<?php } 

if(get_field('joy_state') == true){
?>
<li>                
                                
                <label for="company">State<span class="required"></span></label>
                <input type="text" id="state" name="state" value="" placeholder="" required="true" autofocus />
</li>
<?php } 
if(get_field('joy_zip') == true){
?>
<li>                
                                
                <label for="company">Zip<span class="required"></span></label>
                <input type="text" id="zip" name="zip" value="" placeholder="" required="true" autofocus />
</li>
<?php } 





if(get_field('joy_phone') == true){
?>
<li>                
				
                <label for="telephone">Best Phone Number<span class="required"></span></label>
   				<input type="tel" id="phone" name="phone" value="" placeholder="" />  

</li>

<?php } 
if(get_field('joy_bill') == true){
?>
<li>                
                                 
               <label for="bill">Average Electric Bill<span class="required"></span></label>  
	  			<input type="text" id="00N70000002MkrW" name="00N70000002MkrW" value="" placeholder="" required="true" />                
  <!--				<input type="text" id="00N7000000279sM" name="00N7000000279sM" value="" placeholder="" />     sandbox  -->          
</li>          
<?php } ?>
</ul>                
                                                        
                <p class="submit-button centered"><input type="submit" value="<?php if(is_page(2647)){ echo "Get Info"; }else{ echo "Get A Quote"; }?>" /></p>
                </form>		
						<?php
						if ( get_field('landing_form_privacy_policy_link') == 'show' ) {
							echo '<p class="privacy"><a href="/about-baker/privacy-policy/">Privacy Policy</a></p>';
						}
						?>
					</div>
				</div>
				<?php
				//if ( get_field('joy_form_footer') == 'show' ) {
					echo get_field('joy_form_footer');
				//}
				?>
			</div>
			
			<p class="small small-full medium-full large-full">
			<?php
			echo the_field('joy_fine_print');
			?>
			<br>
			<?php 
			if ( get_field('landing_form_copyright_statement') == 'show' ) {
				echo '&copy;2014 Baker Electric Solar. All Rights Reserved. CA License #858088 C-10/C-46</p>';
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
