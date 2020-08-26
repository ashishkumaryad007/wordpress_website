<?php
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'admin_menu', 'cbusiness_consult_lite_pros');
function cbusiness_consult_lite_pros() {    	
	add_theme_page( esc_html__('CBusiness Consult Lite Details', 'cbusiness-consult-lite'), esc_html__('CBusiness Consult Lite Details', 'cbusiness-consult-lite'), 'edit_theme_options', 'cbusiness_consult_lite_pro', 'cbusiness_consult_lite_pro_details');   
} 

function cbusiness_consult_lite_pro_details() { 	
?>
<div class="wrap">
	<h1><?php esc_html_e( 'CBusiness Consult Lite', 'cbusiness-consult-lite' ); ?></h1>
	
		<div>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/design/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>" style=" width: 100%;"> 
		</div>
	
	<p><strong> <?php esc_html_e( 'Description: ', 'cbusiness-consult-lite' ); ?></strong><?php esc_html_e( 'CBusiness Consult Pro WordPress has used for most of all type of business including Business consultant, news, portfolio, blogs, etc. Its used for the multipurpose business like Marketing, Finance, Stock Market, IT infrastructure, Consultant, Manufacture plant, Services, Retailer, Wholesaler, Online business, Store, IT Firm, Cloth business, and many more business.', 'cbusiness-consult-lite' ); ?></p>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_THEMEURL ); ?>" target="_blank"><?php esc_html_e('Theme Url', 'cbusiness-consult-lite'); ?></a>	
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_PROURL ); ?>" target="_blank"><?php esc_html_e('Pro Theme Url', 'cbusiness-consult-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_PURCHASEURL ); ?>" target="_blank"><?php esc_html_e('Click To Purchase', 'cbusiness-consult-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_PURCHASEURL ); ?>" target="_blank"><?php esc_html_e('Price: $29 Only', 'cbusiness-consult-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_DOCURL ); ?>" target="_blank"><?php esc_html_e('Documentation', 'cbusiness-consult-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_DEMOURL ); ?>" target="_blank"><?php esc_html_e('View Demo', 'cbusiness-consult-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cbusiness_consult_lite_SUPPORTURL ); ?>" target="_blank"><?php esc_html_e('Support', 'cbusiness-consult-lite'); ?></a>
 </div> 
</div>
<?php }?>
<?php
add_action('customize_register', 'cbusiness_consult_lite_customize_register');
define('cbusiness_consult_lite_PROURL', 'https://www.themescave.com/themes/wordpress-theme-corporate-cbusiness-consult-pro/');
define('cbusiness_consult_lite_THEMEURL', 'https://www.themescave.com/themes/wordpress-theme-corporate-free-cbusiness-consult-lite/');
define('cbusiness_consult_lite_DOCURL', 'https://www.themescave.com/documentation/cbusiness-consult-pro/');
define('cbusiness_consult_lite_DEMOURL', 'https://www.themescave.com/demo/cbusiness-consult-pro/');
define('cbusiness_consult_lite_SUPPORTURL', 'https://www.themescave.com/forums/forum/cbusiness-consult-pro/');
define('cbusiness_consult_lite_PURCHASEURL', 'https://www.themescave.com/themes/?add-to-cart=841');
?>