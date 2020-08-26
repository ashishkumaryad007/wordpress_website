<div class="ec_admin_list_line_item ec_admin_demo_data_line">
            
	<?php wp_easycart_admin( )->preloader->print_preloader( "ec_admin_checkout_stock_control_loader" ); ?>
    
    <div class="ec_admin_settings_label"><div class="dashicons-before dashicons-admin-generic"></div><span>Checkout Stock Control</span><a href="<?php echo wp_easycart_admin( )->helpsystem->print_docs_url('settings', 'checkout', 'stock-control');?>" target="_blank" class="ec_help_icon_link"><div class="dashicons-before ec_help_icon dashicons-info"></div></a>
    <?php echo wp_easycart_admin( )->helpsystem->print_vids_url('settings', 'checkout', 'stock-control');?></div>
    <div class="ec_admin_settings_input ec_admin_settings_live_payment_section">
        <div><input type="checkbox" name="ec_option_send_low_stock_emails" id="ec_option_send_low_stock_emails" value="1"<?php if( get_option('ec_option_send_low_stock_emails') == "1" ){ echo " checked=\"checked\""; }?> /> Send Low Stock Admin Emails</div>
       	<div><input type="checkbox" name="ec_option_send_out_of_stock_emails" id="ec_option_send_out_of_stock_emails" value="1"<?php if( get_option('ec_option_send_out_of_stock_emails') == "1" ){ echo " checked=\"checked\""; }?> /> Send Out of Stock Admin Emails</div>
       	<div>Low Stock Trigger Quantity <input name="ec_option_low_stock_trigger_total" id="ec_option_low_stock_trigger_total" type="number" step="1" min="1" value="<?php echo get_option('ec_option_low_stock_trigger_total'); ?>" /></div>
        
        <div class="ec_admin_settings_input">
            <input type="submit" class="ec_admin_settings_simple_button" onclick="return ec_admin_save_stock_control_options( );" value="Save Options" />
        </div>
    </div>
</div>