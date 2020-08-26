<?php do_action( 'wp_easycart_admin_mobile_navigation' ); ?>

<?php do_action( 'wp_easycart_admin_upsell_popup' ); ?>

<div class="ec_admin_help_video_container">
    <div class="ec_admin_upsell_popup_close">
    	<a href="#" onclick="wp_easycart_admin_close_video_help( ); return false;"><div class="dashicons-before dashicons-dismiss"></div></a>
    </div>
    <div class="ec_admin_help_video_container_inner"><div id="wp_easycart_admin_help_video_player"></div></div>
</div>
<script>jQuery( '.ec_admin_help_video_container' ).prependTo( document.body );</script>

<div class="ec_admin_wrap">

	<div class="ec_admin_left ec_admin_default_color1-background-gradient ec_admin_default_color1-border-right">
    
    	<a href="http://www.wpeasycart.com" target="_blank" style="background:rgba(130,130,130,.4); display:block;"><div class="ec_admin_logo"></div></a>
        
        <div class="ec_admin_styled_divider" style="margin-top:0px;"></div>
        
        <div class="wp_easycart_view_store_main_link"><a href="<?php $storepageid = get_option( 'ec_option_storepage' ); $store_page = get_permalink( $storepageid ); echo $store_page; ?>" target="_blank" class="ec_admin_default_color1-color">View My Store</a></div>
        
        <div class="ec_admin_styled_divider"></div>
        
        <div class="ec_admin_search ec_admin_default_color2-background">
            <form method="GET" action="https://docs.wpeasycart.com/" target="_blank" class="ec_admin_default_color2-background">
                <input class="ec_admin_default_color2-background" type="text" name="s" placeholder="search docs..." />
                <div class="ec_admin_search_icon dashicons-before dashicons-search"></div>
            </form>
        </div>
    
        <div class="ec_admin_styled_divider"></div>
        
        <?php if (get_option( 'ec_option_admin_display_sales_goal') == 1) { ?>
    
    	<div class="ec_admin_main_stats ec_admin_default_color1-background-gradient ec_admin_default_color2-border">
        
        	<div class="ec_admin_left_stats">
            
            	<div class="ec_admin_left_stats_first"><?php 
				if( class_exists( 'DateTime' ) ){
					$date = new DateTime;
					echo $date->format('M');
				}else{
					echo date( 'M' );
				}?> Sales</div>
            
            	<div class="ec_admin_left_stats_second"><?php echo $GLOBALS['currency']->get_currency_display( $this->month_sales_total ); ?></div>
            
            </div>
            
            <div class="ec_admin_right_stats">
            
            	<div class="<?php if( $this->month_percentage_change >= 0 ){ echo "ec_admin_right_stats_arrow_positive"; }else{ echo "ec_admin_right_stats_arrow_negative"; } ?>"></div>
            
            	<div class="<?php if( $this->month_percentage_change >= 0 ){ echo "ec_admin_right_stats_percent_positive"; }else{ echo "ec_admin_right_stats_percent_negative"; } ?>"><?php if( $this->month_percentage_change > 0 ){ echo "+"; } echo number_format( $this->month_percentage_change, 2, '.', '' ); ?>%</div>
            
            </div>
            
        </div>
            
        <div class="ec_admin_bottom_stats">
        
            <div class="ec_admin_bottom_stats_label_row">
            
                <div class="ec_admin_bottom_stats_label_row_right"><?php 
				if( class_exists( 'DateTime' ) ){
					$date = new DateTime;
					echo $date->format('M');
				}else{
					echo date( 'M' );
				}?> Sales</div>
            
                <div class="ec_admin_bottom_stats_label_row_left"><?php echo number_format( $this->month_percentage_goal, 0, '', '' ); ?>% of goal</div>
            
            </div>
            
            <div class="ec_admin_bottom_stats_bar">
            
                <div class="ec_admin_bottom_stats_bar_positive" style="width:<?php echo number_format( $this->month_percentage_goal, 0, '', '' ); ?>%;"></div>
            
            </div>
        
        </div>
        
        
        <div class="ec_admin_styled_divider"></div>
        
         <?php } ?>
         
        <div class="ec_admin_left_navigation">
        
        	<?php do_action( 'wp_easycart_admin_left_navigation' ); ?>
        
        </div>
    
    </div>
    
    <div class="ec_admin_right ec_admin_default_color1-border-left ec_admin_default_color1-border-right">
    
    	<div class="ec_admin_head_navigation ec_admin_default_color1-background-gradient">
        
        	<?php do_action( 'wp_easycart_admin_head_navigation' ); ?>
            
            <div class="ec_admin_color_selector"><input value="<?php echo get_option( 'ec_option_admin_color' ); ?>" id="ec_admin_shell_color" /></div>
        
        </div>
        
        <div class="ec_admin_content_area ec_admin_default_color1-border-left ec_admin_default_color1-border-right">
        
        	<div class="ec_admin_mobile_menu_button">
    
                <a href="#" onclick="ec_admin_open_mobile_menu( ); return false;"><div class="dashicons-before dashicons-menu"></div></a>
            
            </div>
            
            <?php do_action( 'wp_easycart_admin_messages' ); ?>
        
        	<?php do_action( 'wp_easycart_admin_shell_content' ); ?>
        
        </div>
    
    </div>
    


</div>

<style>
    .ec_admin_wizard_input_row_toggle > input:checked + .ec_admin_wizard_slider, .ec_admin_wizard_complete > span.bubble > span.dot{ background-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_wizard_current > span.bubble:before, .ec_admin_wizard_current > span.bubble:after, .ec_admin_wizard_complete > span.bubble:before, .ec_admin_wizard_complete > span.bubble:after{ background:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_wizard_container > h1{ background:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-top-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), .40 ); ?>; border-bottom-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?>; }
    .ec_admin_wizard_current > span.bubble, .ec_admin_wizard_complete > span.bubble{ background:<?php echo get_option( 'ec_option_admin_color' ); ?>; color:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_default_color1-color, .ec_admin_wizard_current, .ec_admin_wizard_complete{ color:<?php echo get_option( 'ec_option_admin_color' ); ?> !important; }
    .ec_admin_default_color1-background, .ec_admin_default_color1-background-gradient.ec_admin_left_nav_item:hover, .ec_admin_default_color1-background-gradient.ec_admin_left_nav_selected, .ec_admin_top_nav_link:hover, .ec_admin_bottom_stats_bar_positive, .wp_easycart_wizard_success_box_button > a, a.ec_admin_wizard_next_button, input[type="submit"].ec_admin_wizard_next_button{ background:<?php echo get_option( 'ec_option_admin_color' ); ?>; background-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_default_color1-background-gradient{ 
        background:<?php echo get_option( 'ec_option_admin_color' ); ?>;
        background: -moz-linear-gradient(top, <?php echo get_option( 'ec_option_admin_color' ); ?> 0%, <?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?> 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo get_option( 'ec_option_admin_color' ); ?>), color-stop(100%,<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?>));
        background: -webkit-linear-gradient(top, <?php echo get_option( 'ec_option_admin_color' ); ?> 0%,<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?> 100%);
        background: -o-linear-gradient(top, <?php echo get_option( 'ec_option_admin_color' ); ?> 0%,<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?> 100%);
        background: -ms-linear-gradient(top, <?php echo get_option( 'ec_option_admin_color' ); ?> 0%,<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?> 100%);
        background: linear-gradient(to bottom, <?php echo get_option( 'ec_option_admin_color' ); ?> 0%,<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?> 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo get_option( 'ec_option_admin_color' ); ?>', endColorstr='<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.40 ); ?>',GradientType=0 );
    }
    a.ec_admin_wizard_quit_button{ color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    a.ec_admin_wizard_quit_button:hover{ color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; }
    .ec_admin_default_color1-border-right{ border-right-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_default_color1-border-left{ border-left-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_default_color2-background, .ec_admin_default_color2-background > input, a.ec_admin_wizard_next_button:hover, input[type="submit"].ec_admin_wizard_next_button:hover{ background:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), .4 ); ?>; background-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; }
    .ec_admin_default_color2-border{ border-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; }
    .ec_admin_default_color3-background, .ec_admin_left_nav_subitem.ec_admin_left_nav_selected, .ec_admin_bottom_stats_bar{ background:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; background-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; }
    .ec_admin_top_nav_link{ border-left-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-right-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.4 ); ?>; }
    .ec_admin_content_area, .ec_admin_right_stats{ border-bottom-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-left-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_wrap{ border-right-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_left_stats{ border-right-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), .4 ); ?>; }
    .ec_admin_left_nav_subitem.ec_admin_left_nav_selected{ background-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.6 ); ?>; }
    .ec_admin_content_area h1.wp-heading-inline, .ec_admin_content_area h1.easycart-wp-heading-inline, .ec_admin_content_area h1.wp-heading-inline a, .ec_admin_content_area h1.easycart-wp-heading-inline a, .ec_admin_settings_label{ color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.6 ); ?>; }
    .ec_admin_content_area h1.wp-heading-inline a:hover, .ec_admin_content_area h1.easycart-wp-heading-inline a:hover{ color:#FFF; background:<?php echo get_option( 'ec_option_admin_color' ); ?>; border-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.6 ); ?>; }
    .ec_admin_content_area .wp-list-table a{ color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), -.6 ); ?>; }
    .ec_admin_content_area .wp-list-table a:hover{ color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_stats_container, #ec_admin_row_tier_pricing, #ec_admin_row_b2b_pricing, .ec_admin_details_panel textarea, .ec_admin_settings_input input[type="checkbox"]{ border-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_products_submit > input.ec_admin_products_simple_button, .ec_admin_product_details_manufacturer_column2 > input[type="button"], .ec_admin_expand_section > div.dashicons-arrow-down-alt2:before, .ec_admin_expand_section > div.dashicons-arrow-up-alt2:before, #ec_admin_add_new_advanced_option_row > input, #ec_admin_add_new_category_row > input, #ec_admin_add_new_price_tier_row > input[type="button"], #ec_admin_add_new_role_price_row > input[type="button"], .ec_admin_option_add_new_row input[type="button"], .ec_page_title_button:hover, .ec_admin_order_edit_button:hover, .ec_admin_settings_input > span.ec_admin_settings_simple_button, .ec_admin_settings_input > input.ec_admin_settings_simple_button, .ec_admin_settings_label > span.ec_admin_label_button > a, .ec_admin_settings_shipping_input > input, input.ec_admin_settings_simple_delete_button, .ec_admin_settings_simple_delete_button, .ec_admin_settings_live_rate_toggle div.dashicons-before, .ec_admin_settings_shipping_divider, .ec_admin_language_add > input.ec_admin_settings_simple_button, .ec_admin_language_input > input.ec_admin_settings_simple_button{ background-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; }
    .ec_admin_products_submit > input.ec_admin_products_simple_button:hover, .ec_admin_settings_input > span.ec_admin_settings_simple_button:hover, .ec_admin_settings_input > input.ec_admin_settings_simple_button:hover, .ec_admin_settings_label > span.ec_admin_label_button > a:hover, .ec_admin_settings_shipping_input > input:hover, input.ec_admin_settings_simple_delete_button:hover, .ec_admin_settings_simple_delete_button:hover, .ec_admin_language_add > input.ec_admin_settings_simple_button:hover, .ec_admin_language_input > input.ec_admin_settings_simple_button:hover{ background-color:<?php echo wp_easycart_admin( )->adjust_hex_brightness( get_option( 'ec_option_admin_color' ), .4 ); ?>; }
    .ec_admin_settings_currency_section input[type="number"], .ec_admin_settings_currency_section input[type="text"], .ec_admin_settings_currency_section input[type="password"], .ec_admin_settings_currency_section input[type="date"], .ec_admin_settings_currency_section select, .ec_admin_settings_currency_section .select2, .ec_admin_settings_input select, .select2-container > .selection > .select2-selection, .ec_admin_settings_products_section input, input.ec_admin_taxcloud_field, select.ec_admin_taxcloud_field, .ec_admin_settings_tax_section input, .ec_admin_settings_tax_section select, .ec_admin_settings_live_payment_section input[type="text"], .ec_admin_settings_live_payment_section input[type="email"], .ec_admin_settings_live_payment_section input[type="password"], .ec_admin_settings_live_payment_section select, .ec_admin_live_rate_display, .ec_admin_settings_shipping_section input[type="text"], .ec_admin_settings_shipping_section input[type="number"], .ec_admin_settings_shipping_section select{ border-color:<?php echo get_option( 'ec_option_admin_color' ); ?>; color:#333; }
</style>