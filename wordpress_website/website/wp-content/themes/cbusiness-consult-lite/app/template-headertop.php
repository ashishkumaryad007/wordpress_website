<a class="skip-link screen-reader-text" href="#content">
<?php esc_attr_e( 'Skip to content', 'cbusiness-consult-lite' ); ?></a>
<section id="header">
  <header class="container">
    <div class="header_top row">      
      <!--header section start -->
      <div class="header_left headercommon">          
        <div class="logo">
          <?php if (display_header_text()==true){?>
          <h1><a href="<?php echo esc_url( home_url( '/') ); ?>"><?php bloginfo('name'); ?></a></h1>
          <p><?php bloginfo('description'); ?></p>
          <?php } ?>
        </div><!-- logo -->      
      </div><!--header_left-->
    <div class="header_right headercommon">
        <ul>
          <?php if(get_theme_mod('cbusiness_consult_lite_fb')){?>
            <li><a title="<?php esc_attr_e('Facebook','cbusiness-consult-lite'); ?>" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('cbusiness_consult_lite_fb','')); ?>"></a> </li>
          <?php }?>
          <?php if(get_theme_mod('cbusiness_consult_lite_twitter')){?>
            <li><a title="<?php esc_attr_e('twitter','cbusiness-consult-lite'); ?>" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('cbusiness_consult_lite_twitter','')); ?>"></a></li>
          <?php }?>
          <?php if(get_theme_mod('cbusiness_consult_lite_glplus')){?>
            <li><a title="<?php esc_attr_e('googleplus','cbusiness-consult-lite'); ?>" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url(get_theme_mod('cbusiness_consult_lite_glplus','')); ?>"></a></li>
          <?php }?>
          <?php if(get_theme_mod('cbusiness_consult_lite_in')){?>
            <li><a title="<?php esc_attr_e('linkedin','cbusiness-consult-lite'); ?>" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('cbusiness_consult_lite_in','')); ?>"></a></li>
          <?php }?>
        </ul>

        <div class="phone-email">
          <ul>
          <li>
            <?php $cbusiness_consult_lite_email = get_theme_mod('cbusiness_consult_lite_email'); ?>
            <?php if(get_theme_mod('cbusiness_consult_lite_email')){?>
              <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo esc_html($cbusiness_consult_lite_email);?>
            <?php }?>
            

          </li>
          <li>
            <?php $cbusiness_consult_lite_phone = get_theme_mod('cbusiness_consult_lite_phone'); ?>
            <?php if(get_theme_mod('cbusiness_consult_lite_phone')){?>
              <i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo esc_html($cbusiness_consult_lite_phone);?>
            <?php }?>           
            </li>
        </ul>
        </div><!--phone-email-->        
        <div class="clear"></div> 

      </div>
      <!-- header section end -->     
      <div class="clear"></div>
    </div><!--header_top-->
    <div class="clear"></div>
    
  </header>
</section><!--header-->

<section id="main_navigation">
  <div class="container">
  <div class="main-navigation-inner mainwidth">
      <div class="toggle">
                <a class="togglemenu" href="#"><?php esc_html_e('Menu','cbusiness-consult-lite'); ?></a>
                <div class="clear"></div>
      </div><!-- toggle --> 
      <div class="sitenav">
          <?php
          wp_nav_menu( array(
          'theme_location' => 'primary'
          ) );
          ?>
          <div class="clear"></div>
      </div><!-- site-nav -->
      <div class="clear"></div>
    </div><!--main-navigation-->
    <div class="clear"></div>
  </div><!--container-->
  <div class="clear"></div>
</section><!--main_navigation-->