<?php
$curr_page = "";
if( isset( $_GET['subpage'] ) )
	$curr_page = esc_attr( $_GET['subpage'] );
else
	$curr_page = esc_attr( $_GET['page'] );
?>
<div class="wpeasycart_upsell_panel_wrap">
    
    <div class="wpeasycart_upsell_panel">

        <div class="wpeasycart_upsell_panel_section wpeasycart_upsell_panel_green">

            <h1>YOUR STORE, SIMPLE AND EASY.</h1>

            <h4>Upgrade to PRO and unlock every feature. Upgrade to Premium and unlock your full potential with ALL EasyCart extensions included.</h4>

        </div>

        <div class="wpeasycart_upsell_panel_section">

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_paypal_express">
                <div class="ec_admin_upgrade_header">Paypal Express Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">When you upgrade you are getting PayPal Express + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=paypal-express" target="_blank">Learn more about PayPal Express</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=paypal-express&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <?php /* SHIPPING UPSALES */ ?>
            <?php if( isset( $_GET['subpage'] ) && ( $_GET['subpage'] == 'shipping-settings' || $_GET['subpage'] == 'shipping-rates' ) ){ ?>
            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_australia_post">
                <div class="ec_admin_upgrade_header">Australia Post Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with Australia Post + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about Australia Post</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=australia-post&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_canada_post">
                <div class="ec_admin_upgrade_header">Canada Post Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with Canada Post + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about Canada Post</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=canada-post&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_dhl">
                <div class="ec_admin_upgrade_header">DHL Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with DHL + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about DHL</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_fedex">
                <div class="ec_admin_upgrade_header">FedEx Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with FedEx + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about FedEx</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_ups">
                <div class="ec_admin_upgrade_header">UPS Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with UPS + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about UPS</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_usps">
                <div class="ec_admin_upgrade_header">USPS Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with USPS + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about USPS</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>
            <?php }?>

           <?php $trial_note = '
            <div id="wp_easycart_trial_upsell">';

            $pro_plugin_base = 'wp-easycart-pro/wp-easycart-admin-pro.php';
            $pro_plugin_file = WP_PLUGIN_DIR . '/' . $pro_plugin_base;
            if( file_exists( $pro_plugin_file ) && !is_plugin_active( $pro_plugin_base ) ) {
                $trial_note .= '<div class="ec_admin_message_error">';
                $trial_note .= '<p>WP EasyCart PRO is installed but NOT ACTIVATED. Please <a href="' . wp_easycart_admin( )->get_pro_activation_link( ) . '">click here to activate your WP EasyCart PRO plugin</a>.</p>';
                $trial_note .= '</div>';
            }
            $trial_note .= '
                <div class="ec_admin_upgrade_header">Start Your FREE 14 Day PRO Trial</div>
                <div class="ec_admin_upgrade_subheader">To start your free trial, simply click the install button below.</div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="admin.php?page=wp-easycart-registration&ec_trial=start">INSTALL YOUR PRO TRIAL NOW!</a></div>
                <div class="ec_admin_upgrade_subheader" style="font-size:14px;">*WP EasyCart PRO plugin will install immediately on click and your trial will start.</div>
                <div class="ec_admin_upgrade_subheader" style="font-size:14px;">*No credit card required to start trial, remove WP EasyCart PRO at any time.</div>
            </div>';

            echo apply_filters( 'wp_easycart_trial_start_content', $trial_note );
            ?>
        </div>

        <div class="wpeasycart_upsell_panel_section wpeasycart_upsell_panel_grey">

            <h2>So many features, you probably won’t use them all.</h2>

            <h5>WP EasyCart enables small businesses to build a successful WordPress eCommerce store from their own WordPress blog or website.  That’s why we’ve included feature-rich tools, plugins and extensions from Quickbooks and automated marketing, to shipping and tax integrations at no extra cost!  One platform, made easy!</h5>

            <div class="wpeasycart_upsell_panel_section_button_row_center">
                <a href="https://www.wpeasycart.com/wordpress-shopping-cart-features/" target="_blank" class="wpeasycart_upsell_panel_button_outline">See Our Full Feature List</a>
            </div>

            <img src="https://www.wpeasycart.com/wp-content/uploads/2019/10/partners.png" alt="MailChimp, Square, ShipStation, QB, USPS, UPS" title="Partner Logos" class="wpeasycart_partner_logos" />

        </div>

        <div class="wpeasycart_upsell_panel_section">

            <h2>Customer support from a human, not a dead-end forum</h2>

            <p>WP EasyCart provides quick, personalized support for your shopping cart plugin.  We know every minute of up-time counts for your small business, let us get you back to selling and making a profit. Get the peace of mind knowing that we’re always here to help.</p>

            <p><strong>See what happy business owners are saying about EasyCart.</strong></p>

            <div class="wpeasycart_upsell_testimonials">

                <div class="wpeasycart_upsell_testimonial">
                    <h4>Excellent Support</h4>
                    <p>“The support team at WP Easycart are very helpful and prompt. I think the longest I have waited for a reply has been 5 hours. It’s very clear they know what they are doing.”</p>
                    <div class="wpeasycart_upsell_testimonial_info">
                        <span>jimlaabsmusicstore</span>
                        <img src="https://www.wpeasycart.com/wp-content/uploads/2019/10/5-stars-1.png" alt="5/5 Stars" title="5 Stars" class="wpeasycart_testimonial_stars" />
                    </div>
                </div>

                <div class="wpeasycart_upsell_testimonial">
                    <h4>Best Ecommerce Solution</h4>
                    <p>“I have been using WP Easy Cart for over one year and now deployed on 5 websites with absolutely zero issues. When I do have an issue, always very minor tweaks, and I submit a ticket, it is responded too usually with several hours at most personally and answered. I love this company and their product.”</p>
                    <div class="wpeasycart_upsell_testimonial_info">
                        <span>Cofffeeman</span>
                        <img src="https://www.wpeasycart.com/wp-content/uploads/2019/10/5-stars-1.png" alt="5/5 Stars" title="5 Stars" class="wpeasycart_testimonial_stars" />
                    </div>
                </div>

            </div>

            <div class="wpeasycart_upsell_panel_section_button_row_center">
                <a href="https://wordpress.org/plugins/wp-easycart/#reviews" target="_blank" class="wpeasycart_upsell_panel_button_outline">View More Reviews on WordPress</a>
            </div>

        </div>

        <div class="wpeasycart_upsell_panel_section wpeasycart_upsell_panel_grey">

            <h2>Start selling today!</h2>

            <div class="wpeasycart_upsell_pricing_row">

                <div class="wpeasycart_upsell_pricing_column">

                    <div class="wp_easycart_upsell_pricing_column_title">PROFESSIONAL</div>
                    <div class="wp_easycart_upsell_pricing_column_pricing"><span class="wp_easycart_upsell_pricing_currency">$</span>69<span class="wp_easycart_upsell_pricing_time">/YR</span></div>
                    <div class="wp_easycart_upsell_pricing_column_item">Unlocks all the features of the WP EasyCart platform.</div>
                    <div class="wp_easycart_upsell_pricing_column_item">1 Year Premium Support</div>
                    <div class="wp_easycart_upsell_pricing_column_item"><a href="https://www.wpeasycart.com/professional-edition-ecommerce/?upsell=5&upsellpage=<?php echo $curr_page; ?>" target="_blank" class="wpeasycart_upsell_panel_button_outline">LEARN MORE</a></div>
                    <div class="wp_easycart_upsell_pricing_column_item"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=5&upsellpage=' . $curr_page ); ?>" target="_blank">GET PROFESSIONAL</a></div>

                </div>

                <div class="wpeasycart_upsell_pricing_column">

                    <div class="wp_easycart_upsell_pricing_column_title">PREMIUM</div>
                    <div class="wp_easycart_upsell_pricing_column_pricing"><span class="wp_easycart_upsell_pricing_currency">$</span>99<span class="wp_easycart_upsell_pricing_time">/YR</span></div>
                    <div class="wp_easycart_upsell_pricing_column_item">Unlocks all the features + Includes Premium Extensions.</div>
                    <div class="wp_easycart_upsell_pricing_column_item">1 Year Premium Support</div>
                    <div class="wp_easycart_upsell_pricing_column_item"><a href="https://www.wpeasycart.com/wordpress-ecommerce-premium-edition/?upsell=6&upsellpage=<?php echo $curr_page; ?>" target="_blank" class="wpeasycart_upsell_panel_button_outline">LEARN MORE</a></div>
                    <div class="wp_easycart_upsell_pricing_column_item"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_premium_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=6&upsellpage=' . $curr_page ); ?>" target="_blank">GET PREMIUM</a></div>

                </div>

            </div>

        </div>

        <div class="wpeasycart_upsell_panel_section">

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_paypal_express">
                <div class="ec_admin_upgrade_header">Paypal Express Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">When you upgrade you are getting PayPal Express + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=paypal-express" target="_blank">Learn more about PayPal Express</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=paypal-express&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <?php /* SHIPPING UPSALES */ ?>
            <?php if( isset( $_GET['subpage'] ) && ( $_GET['subpage'] == 'shipping-settings' || $_GET['subpage'] == 'shipping-rates' ) ){ ?>
            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_australia_post">
                <div class="ec_admin_upgrade_header">Australia Post Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with Australia Post + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about Australia Post</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=australia-post&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_canada_post">
                <div class="ec_admin_upgrade_header">Canada Post Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with Canada Post + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about Canada Post</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=canada-post&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_dhl">
                <div class="ec_admin_upgrade_header">DHL Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with DHL + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about DHL</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_fedex">
                <div class="ec_admin_upgrade_header">FedEx Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with FedEx + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about FedEx</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_ups">
                <div class="ec_admin_upgrade_header">UPS Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with UPS + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about UPS</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>

            <div class="ec_admin_upsell_popup_extras" style="display:none;" id="ec_admin_upsell_popup_usps">
                <div class="ec_admin_upgrade_header">USPS Requires an Upgrade!</div>
                <div class="ec_admin_upgrade_subheader">Upgrade to get live shipping rates with USPS + hundreds of other great selling features.</div>
                <div class="ec_admin_upgrade_subheader"><a href="http://docs.wpeasycart.com/wp-easycart-administrative-console-guide/?section=shipping-settings" target="_blank">Learn more about USPS</a></div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="<?php echo apply_filters( 'wp_easycart_upgrade_pro_url', 'https://www.wpeasycart.com/wordpress-shopping-cart-pricing/?upsell=dhl&upsellpage=' . $curr_page ); ?>" target="_blank">UPGRADE NOW</a></div>

            </div>
            <?php }?>

           <?php $trial_note = '
            <div id="wp_easycart_trial_upsell">';

            $pro_plugin_base = 'wp-easycart-pro/wp-easycart-admin-pro.php';
            $pro_plugin_file = WP_PLUGIN_DIR . '/' . $pro_plugin_base;
            if( file_exists( $pro_plugin_file ) && !is_plugin_active( $pro_plugin_base ) ) {
                $trial_note .= '<div class="ec_admin_message_error">';
                $trial_note .= '<p>WP EasyCart PRO is installed but NOT ACTIVATED. Please <a href="' . wp_easycart_admin( )->get_pro_activation_link( ) . '">click here to activate your WP EasyCart PRO plugin</a>.</p>';
                $trial_note .= '</div>';
            }
            $trial_note .= '
                <div class="ec_admin_upgrade_header">Start Your FREE 14 Day PRO Trial</div>
                <div class="ec_admin_upgrade_subheader">To start your free trial, simply click the install button below.</div>
                <div class="ec_admin_upgrade_subheader ec_admin_upgrade_box_signup_row"><a href="admin.php?page=wp-easycart-registration&ec_trial=start">INSTALL YOUR PRO TRIAL NOW!</a></div>
                <div class="ec_admin_upgrade_subheader" style="font-size:14px;">*WP EasyCart PRO plugin will install immediately on click and your trial will start.</div>
                <div class="ec_admin_upgrade_subheader" style="font-size:14px;">*No credit card required to start trial, remove WP EasyCart PRO at any time.</div>
            </div>';

            echo apply_filters( 'wp_easycart_trial_start_content', $trial_note );
            ?>
        </div>

        <div style="clear:both;"></div>

    </div>
    
</div>