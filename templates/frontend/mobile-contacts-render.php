<?php
/**
 * @package MB Mobile Contact Bar
 * Frontend Template
 * 
 */

	//Declare Options
	$phone =  esc_attr( get_option( 'phone_number'));
	$phone_num= preg_replace('/\s+/', '', $phone);
	$whatsapp = esc_attr( get_option( 'whatsapp'));
	$whatsapp_num = preg_replace('/\+/','', preg_replace('/\s+/', '', $whatsapp));
	$whatsapp_url = "https://wa.me/".$whatsapp_num."#utm_source=Whatsapp&amp;utm_medium=CTA%20men%C3%B9%20mobile&amp;utm_campaign=Whatsapp";
	$email = esc_attr( get_option( 'email') );
	$bgColor = get_option( 'bg-color' ) ? esc_attr( get_option( 'bg-color' ) ) : '#e2e2e2' ;
	$waColor = get_option( 'wa-color' ) ? esc_attr( get_option( 'wa-color' ) ) : '#25d366' ;
	$phColor = get_option( 'ph-color' ) ? esc_attr( get_option( 'ph-color' ) ) : '#0000ff' ;
	$emailColor = get_option( 'email-color' ) ? esc_attr( get_option( 'email-color' ) ) : '#B0896C' ;
?>


<div class="mobile-icon-container sticky" style="background-color:<?= $bgColor ?>">
	<div id="mobile_contact_icons" class="mobile-contact-icons" role="complementary">
		<div>			
			<div class="contatti-mobile">
				<div class="contatti-grid">
					<div>
						<a href="mailto:<?php echo $email ?>">
							<i class="fa fa-envelope" aria-hidden="true" style="color:<?= $emailColor?>"></i>
						</a>
					</div>
					<div>
						<a href="tel:<?php echo $phone_num?>">
							<i class="fa fa-phone-square" aria-hidden="true" style="color:<?= $phColor?>"></i>
						</a>
					</div>
					<div>
						<a href="<?php echo $whatsapp_url ?>"
							target="_blank" rel="noopener">
							<i class="fa fa-whatsapp" aria-hidden="true" style="color:<?= $waColor?>"></i>
						</a>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>

