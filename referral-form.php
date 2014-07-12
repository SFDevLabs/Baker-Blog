<?php

$landingid = $_GET["pid"];
/**
 * Template Name: Referral Form
 * Description: Referral Landing pages with forms.
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
input[type="checkbox"]{
float: left;
display: inline;
width: 3em;
height: 1em;
/* vertical-align: super; */
position: relative;
top: .3em;
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

.inline-form ul li label {
width: 165px;
text-align: right;
line-height: 52px;
margin-right: 15px;
}
.inline-form label, .inline-form input, .inline-form textarea {
display: block;
float: left;
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
		if ( get_field('landing_form_intro_box') == true ) {
			echo'<div class="intro-box">';
			?>
			<img class="offer_desk" src="<?php the_field('enjoy_offer_desktop_image'); ?>">
			<img class="offer_tab" src="<?php the_field('enjoy_offer_tablet_image'); ?>">
			<img class="offer_mob" src="<?php the_field('enjoy_offer_mobile_image'); ?>">
			<?php echo '</div>';
		}else{}
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

<?php
if($_GET['messageid'] == 'referral'){?>
<div class="centered">
						<?php the_field('ref_thank_you_message'); ?>
</div>
<?php }else{

?>
					
	
						
<div id="form-contents">
						<?php
						if ( get_field('landing_form_form_headline') ) {
							echo '<h2>' . get_field('landing_form_form_headline') . '</h2>';
						}
						?>
						<?php //the_field('landing_form_form'); ?>
						<h2><?php echo the_field('ref_form_headline') ?></h2>
						
			
		
		
<form name="lead" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
   <!--             <form name="lead" action="https://cs3.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">  sandbox  -->
                <input type=hidden name="oid" value="00D700000009DQa">
   <!--              <input type=hidden name="oid" value="00DQ000000EOAq8">   sandbox  -->
   
                <input type=hidden name="LeadSource" value="<?php 		
 // if(get_field('joy_campaign') == '70170000000jFCv'){ echo 'Door Hanger Landing Page';}
 // if(get_field('joy_campaign') == '701700000010KuA'){ echo 'UT Banner Ad Landing Page';}
 // if(get_field('joy_campaign') == '701700000010Ktv'){ echo 'UT Sticky Note Landing Page';}
 // if(get_field('joy_campaign') == '70170000000j1Ux'){ echo 'Facebook PPC Landing Page';}
 // if(get_field('joy_campaign') == '70170000000jEMV'){ echo 'Print Ads Landing Page';}
 // if(get_field('joy_campaign') == '70170000000j1V7'){ echo 'Regional PPC Landing Page';}
 // if(get_field('joy_campaign') == '70170000000j1VC'){ echo 'Remarketing Landing Page';}
 // if(get_field('joy_campaign') == '701700000010KQ1'){ echo 'palmer test page';}
 // if(get_field('joy_campaign') == '70170000000jOXt'){ echo 'Direct Mail Prizm Landing Page';}
 // if(get_field('joy_campaign') == '70170000000jOXo'){ echo 'eBlast to Leads/Contacts Landing Page';}
 // if(get_field('joy_campaign') == '701700000010JZD'){ echo 'Direct Mail Get1Free';}
 // if(get_field('joy_campaign') == '701700000010JNX'){ echo 'Direct Mail Home Page DAL';}
 // if(get_field('joy_campaign') == '70170000000j1VH'){ echo 'Download Checklist';}
?>">

<input type=hidden name="00N700000031Mjo" value="<?php the_title(); ?>" />   <!-- marketing campaign source  -->
			<!-- <input type="hidden" name="recipient2" value="email@email.com" /> -->
                <input type=hidden name="retURL" value="<?php echo get_permalink(); ?>?confirmed=true&messageid=referral">
                <input type=hidden name="Campaign_ID" value="<?php  echo the_field('referral_campaign'); ?>">
<ul>

<?php if(get_field('ref_first_name') == true){ ?>
<li>
                <label for="YourName">Your Name<span class="required"></span></label>
                <input type="text" id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="Jane Doe" required autofocus />
</li>
<?php } 
if(get_field('ref_email') == true){
?>
<li>                
                 <label for="email">Email<span class="required"></span></label>
                <input type="email" id="email" maxlength="80" name="email" size="20" type="text" placeholder="janedoe@example.com" required />
</li>
<?php } 
if(get_field('ref_referral_name') == true){
?>
<li>                
                                
                <label for="Referral1">Referral Name<span class="required"></span></label>
                <input type="text" id="00N70000003S2Rt" maxlength="200" name="00N70000003S2Rt" value="" placeholder="Jane Doe" required autofocus />
</li>
<?php } 

if(get_field('ref_referral_email') == true){
?>
<li>                
                                
               <label for="email1">Referral Email<span class="required"></span></label>
                <input type="email" id="00N70000003S2Ro" maxlength="80" name="00N70000003S2Ro" placeholder="janedoe@example.com" required />
</li>
<?php } 
if(get_field('ref_referral_address') == true){
?>
<li>                
 				              
                 <label for="Address">Referral Address<span class="required"></span></label>
                <input type="text" id="00N70000003SQWb" maxlength="80" name="00N70000003SQWb" placeholder="streetname st. city, state, zip" required />
</li>
<?php } 
if(get_field('ref_referral_phone') == true){
?>
<li>                
 				              
            <label for="PhoneNumber">Referral Phone Number<span class="required"></span></label>
                <input type="tel" id="00N70000003SQWg" maxlength="80" name="00N70000003SQWg" placeholder="123-456-7890" required />
                	
</li>


<?php } 
if(get_field('ref_referral_agreement') == true){
?>
<li>                

 <input type="checkbox" id=""  name=""  required /> <span style="font-size:.8em;">This person is expecting Baker Electric Solar to contact them.</span>
                	
</li>


<?php } ?>

</ul>
        
                                                        
                <p class="submit-button centered"><input type="submit" value="<?php if(is_page(2647)){ echo "Get Info"; }else{ echo "Submit Referral"; }?>" /></p>
                </form>		

						<?php
						if ( get_field('landing_form_privacy_policy_link') == 'show' ) {
							echo '<p class="privacy"><a href="/about-baker/privacy-policy/">Privacy Policy</a></p>';
						}
						?>
					
					<?php } ?>
					</div>
				</div>
				<?php
				//if ( get_field('joy_form_footer') == 'show' ) {
					echo get_field('ref_form_footer');
				//}
				?>
			</div>
			
			<p class="small small-full medium-full large-full">
			<?php
			echo the_field('ref_fine_print');
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




<?php
if ( get_field('landing_form_footer') == 'show') {
	get_footer(); // This fxn gets the footer.php file and renders it 
}
?>
