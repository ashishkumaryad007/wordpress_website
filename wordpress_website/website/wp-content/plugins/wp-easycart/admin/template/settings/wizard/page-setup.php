<form action="" method="POST" name="wpeasycart_admin_setup_wizard_form" id="wpeasycart_admin_setup_wizard_form" novalidate="novalidate">
    <input type="hidden" name="ec_admin_form_action" id="ec_admin_form_action" value="process-wizard-page-setup">
    <h3>Page Setup</h3>
    <p>Your store needs a few pages to operate. The following pages have <strong>already been created automatically</strong> for you (if they did not already exist).</p>
    <div class="ec_admin_wizard_page_row">
        <div class="ec_admin_wizard_page_row_title"><a href="<?php echo wp_easycart_admin( )->store_page; ?>" target="_blank">Store</a></div>
        <div class="ec_admin_wizard_page_row_content">This is where your customers will enter your store and begin shopping.</div>
        <div style="clear:both;"></div>
    </div>
    <div class="ec_admin_wizard_page_row">
        <div class="ec_admin_wizard_page_row_title"><a href="<?php echo wp_easycart_admin( )->cart_page; ?>" target="_blank">Shopping Cart</a></div>
        <div class="ec_admin_wizard_page_row_content">This page displays the shopping cart and checkout to the customer.</div>
        <div style="clear:both;"></div>
    </div>
    <div class="ec_admin_wizard_page_row">
        <div class="ec_admin_wizard_page_row_title"><a href="<?php echo wp_easycart_admin( )->account_page; ?>" target="_blank">My Account</a></div>
        <div class="ec_admin_wizard_page_row_content">This page displays the customer's account, order history, and other information.</div>
        <div style="clear:both;"></div>
    </div>
    <div class="ec_admin_wizard_page_row">
        <p>We recommend adding your store, account, and cart to your menu. You can show these pages on your site by adding them to your menu via <a href="nav-menus.php" target="_blank">Appearance >> Menus</a></p>
        <div style="clear:both;"></div>
    </div>

    <div class="ec_admin_wizard_page_row" style="padding:30px 0;">
        <div class="ec_admin_wizard_page_row_title"><strong>Cache Compatibility</strong></div>
        <div class="ec_admin_wizard_page_row_content" style="padding-right:100px;">Caching is the process of serving a snapshot of a page to every user, which makes your site fast! The problem is that a shopping cart needs to display something different for each customer. EasyCart has that handled by loading your cart and account dynamically. Keep this feature on for best compatibility.</div>
        <label class="ec_admin_wizard_input_row_toggle">
            <input type="checkbox" name="ec_option_cache_prevent" id="ec_option_cache_prevent" checked="checked" />
            <span class="ec_admin_wizard_slider round" style="top:-7px;"></span>
        </label>
        <div style="clear:both;"></div>
    </div>

    <div class="ec_admin_wizard_page_row" style="padding:30px 0;">
        <div class="ec_admin_wizard_page_row_title"><strong>SSL &amp; Secure Sites</strong></div>
        <div class="ec_admin_wizard_page_row_content" style="padding-right:100px;">SSL Certificates are what make the connection between your customer and your cart secure. You will need to get one from your hosting provider to securely process credit cards and may cost you extra. The good news is that once installed, everyone will see a nice secure lock in their browser. We recommend leaving this setting on to automatically force your EasyCart into a secure state. If you see a warning in the browser, you'll know to get an SSL certificate from your host.</div>
        <label class="ec_admin_wizard_input_row_toggle">
            <input type="checkbox" name="ec_option_load_ssl" id="ec_option_load_ssl" checked="checked" />
            <span class="ec_admin_wizard_slider round" style="top:-7px;"></span>
        </label>
        <div style="clear:both;"></div>
    </div>

    <div class="ec_admin_wizard_page_row" style="padding:30px 0;">
        <div class="ec_admin_wizard_page_row_title"><strong>SEO Friendly Links</strong></div>
        <div class="ec_admin_wizard_page_row_content" style="padding-right:100px;">Permalinks are what WordPress calls SEO Friendly links and the EasyCart offers this to those that have the correct server setup. We recommend this option because it will turn store links from https://www.yoursite.com/store/?model_number=XYZ to https://www.yoursite.com/store/my-widget/, which search engines love! If you turn this on and notice an issue accessing your products, contact us for help!</div>
        <label class="ec_admin_wizard_input_row_toggle">
            <input type="checkbox" name="ec_option_use_old_linking_style" id="ec_option_use_old_linking_style" checked="checked" />
            <span class="ec_admin_wizard_slider round" style="top:-7px;"></span>
        </label>
        <div style="clear:both;"></div>
    </div>

    <div class="ec_admin_wizard_button_bar">
        <a href="admin.php?page=wp-easycart-settings&ec_admin_form_action=skip-wizard" class="ec_admin_wizard_quit_button">Skip Setup Wizard</a>
        <a href="admin.php?page=wp-easycart-products&subpage=products">Setup Later</a>
        <input type="submit" class="ec_admin_wizard_next_button" value="Save &amp; Continue" />
    </div>
</form>