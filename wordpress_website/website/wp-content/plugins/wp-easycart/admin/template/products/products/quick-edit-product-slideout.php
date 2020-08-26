<?php
global $wpdb;
$manufacturer_list = $wpdb->get_results( "SELECT ec_manufacturer.manufacturer_id AS value, ec_manufacturer.name AS label FROM ec_manufacturer ORDER BY ec_manufacturer.name ASC" );
$basic_option_list = $wpdb->get_results( "SELECT ec_option.option_id AS value, ec_option.option_name AS label FROM ec_option WHERE option_type = 'basic-combo' OR option_type = 'basic-swatch' ORDER BY option_name ASC" );

?>
<div class="ec_admin_slideout_container" id="product_quick_edit_box" style="z-index:1028;">
    <input type="hidden" id="ec_qe_product_id" value="" />
    <div class="ec_admin_slideout_container_content">
        <?php wp_easycart_admin( )->preloader->print_preloader( "ec_admin_product_quick_edit_display_loader" ); ?>
        <header class="ec_admin_slideout_container_content_header">
            <div class="ec_admin_slideout_container_content_header_inner">
                <h3>Product Quick Edit</h3>
                <div class="ec_admin_slideout_close" onclick="wp_easycart_admin_close_slideout( 'product_quick_edit_box' );">
                    <div class="dashicons-before dashicons-no-alt"></div>
                </div>
            </div>
        </header>
        <div class="ec_admin_slideout_container_content_inner">
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_status">Product Status</label>
                <div>
                    <select id="ec_quick_editproduct_status" name="ec_quick_editproduct_status" class="select2-basic">
                        <option value="0">Not Active</option>
                        <option value="1" selected="selected">Active</option>
                    </select>
                </div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_featured">Feature on Main Store Page?</label>
                <div>
                    <select id="ec_quick_editproduct_featured" name="ec_quick_editproduct_featured" class="select2-basic">
                        <option value="1" selected="selected">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_title">Title</label>
                <div>
                    <input type="text" id="ec_quick_editproduct_title" name="ec_quick_editproduct_title" placeholder="Your Product Name" />
                </div>
                <div class="ec_admin_slideout_error_text" id="title_required">
                	The title is required.
                </div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_sku">SKU</label>
                <div>
                    <input type="text" id="ec_quick_editproduct_sku" name="ec_quick_editproduct_sku" placeholder="product-name" />
                </div>
                <div class="ec_admin_slideout_error_text" id="sku_required">
                	The SKU is required.
                </div>
                <div class="ec_admin_slideout_error_text" id="duplicate_sku">
                	Duplicate SKU, please change to a unique value.
                </div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_manufacturer">Manufacturer</label>
                <div>
                	<div class="wpec-admin-75-select">
                        <select id="ec_quick_editproduct_manufacturer" name="ec_quick_editproduct_manufacturer" class="select2-basic">
                            <option value="0">Select One</option>
                            <?php foreach( $manufacturer_list as $manufacturer ){ ?>
                            <option value="<?php echo $manufacturer->value; ?>"><?php echo $manufacturer->label; ?></option>
                            <?php }?>
                        </select>
	                </div>
                	<input type="button" class="wpec-admin-upload-button" value="Add New" onclick="wp_easycart_admin_open_slideout( 'new_manufacturer_box' );" />
            	</div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <div>
                	<div class="wpec-admin-50-wide">
                        <label for="ec_quick_editproduct_price">Price</label>
                        <div>
                            <?php
                            $step = 1;
                            for( $i=0; $i<$GLOBALS['currency']->get_decimal_length( ); $i++ ){
                                $step = $step / 10;
                            }
                            ?>
                            <input type="number" step="<?php echo $step; ?>" id="ec_quick_editproduct_price" name="ec_quick_editproduct_price" placeholder="19.99" />
                        </div>
                    </div>
                    <div class="wpec-admin-50-wide">
                        <label for="ec_quick_editproduct_list_price">List Price</label>
                        <div>
                            <input type="number" step="<?php echo $step; ?>" id="ec_quick_editproduct_list_price" name="ec_quick_editproduct_list_price" placeholder="24.99" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_image">Image</label>
                <div>
                    <input type="text" id="ec_quick_editproduct_image" name="ec_quick_editproduct_image" class="wpec-admin-upload-input" value="" />
					<input type="button" class="wpec-admin-upload-button" value="Select Image" id="ec_upload_button_image" onclick="ec_admin_image_upload( 'ec_quick_editproduct_image' );" />
                </div>
            </div>
            
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_stock_option">Stock Options</label>
                <div>
                    <select id="ec_quick_editproduct_stock_option" name="ec_quick_editproduct_stock_option" class="select2-basic" onchange="ec_admin_quick_edit_product_update_stock_option( );">
                        <option value="0">Do Not Track Stock</option>
                        <option value="1">Track Basic Stock</option>
                        <option value="2">Track Option Item Stock</option>
                    </select>
            	</div>
            </div>
            <div class="ec_admin_slideout_container_input_row ec_admin_quick_edit_product_basic_stock" style="display:none;">
                <div>
                	<input type="number" step="1" id="ec_quick_editproduct_stock_quantity" name="ec_quick_editproduct_stock_quantity" placeholder="Stock Quantity" />
                </div>
            </div>
            
            <div class="ec_admin_slideout_container_input_row ec_admin_quick_edit_product_optionitem_stock" style="display:none; float:left; width:100%; margin-top:25px; text-align:center;">-- Option item quantities are available when you edit the full product --</div>
            
            <div class="ec_admin_slideout_container_input_row">
                <label for="ec_quick_editproduct_is_shippable">Shipping Options</label>
                <div>
                    <select id="ec_quick_editproduct_is_shippable" name="ec_quick_editproduct_is_shippable" class="select2-basic" onchange="ec_admin_quick_edit_product_update_shipping_type( );">
                        <option value="0">No Shipping</option>
                        <option value="1">Enable Shipping</option>
                    </select>
            	</div>
            </div>
            <div class="ec_admin_slideout_container_input_row ec_admin_quick_edit_product_shipping_row" style="display:none;">
                <div>
                	<div class="wpec-admin-50-wide">
                    	<label for="ec_quick_editproduct_weight">Weight</label>
                        <input type="number" min="0" step=".01" id="ec_quick_editproduct_weight" name="ec_quick_editproduct_weight" placeholder="Weight" />
                    </div>
                	<div class="wpec-admin-50-wide">
                    	<label for="ec_quick_editproduct_weight">Length</label>
                    	<input type="number" min="0" step=".01" id="ec_quick_editproduct_length" name="ec_quick_editproduct_length" placeholder="Length" />
                    </div>
                	<div class="wpec-admin-50-wide">
                    	<label for="ec_quick_editproduct_weight">Width</label>
                    	<input type="number" min="0" step=".01" id="ec_quick_editproduct_width" name="ec_quick_editproduct_width" placeholder="Width" />
                    </div>
                	<div class="wpec-admin-50-wide">
                    	<label for="ec_quick_editproduct_weight">Height</label>
                    	<input type="number" min="0" step=".01" id="ec_quick_editproduct_height" name="ec_quick_editproduct_height" placeholder="Height" />
                    </div>
                </div>
            </div>
            
            <div class="ec_admin_slideout_container_input_row"<?php if( !get_option( 'ec_option_admin_product_show_tax_option' ) ){ ?> style="display:none;"<?php }?>>
                <label for="ec_quick_editproduct_is_taxable">Tax Options</label>
                <div>
                    <select id="ec_quick_editproduct_is_taxable" name="ec_quick_editproduct_is_taxable" class="select2-basic">
                        <option value="0">Not Taxable</option>
                        <option value="1">Enable Tax</option>
                        <option value="2">Enable VAT</option>
                        <option value="3">Enable Tax & VAT</option>
                    </select>
            	</div>
            </div>
            
            <div style="float:left; width:100%; margin-top:25px; text-align:center;">*You can edit all product settings after creating the product basics</div>
        </div>
        <footer class="ec_admin_slideout_container_content_footer">
            <div class="ec_admin_slideout_container_content_footer_inner">
                <div class="ec_admin_slideout_container_content_footer_inner_body">
                    <ul>
                        <li>
                            <button onclick="ec_admin_update_quick_product( 0 );">
                                <span>Save</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="ec_admin_update_quick_product( 1 );">
                                <span>Save &amp; Edit Full</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="wp_easycart_admin_close_slideout( 'product_quick_edit_box' )">
                                <span>Discard Changes</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>jQuery( document.getElementById( 'new_product_box' ) ).appendTo( document.body );</script>