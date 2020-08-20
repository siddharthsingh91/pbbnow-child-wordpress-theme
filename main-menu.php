<nav class="navbar navbar-default navbar-fixed-top" role="navigation" <?php if ( is_admin_bar_showing() ) { echo 'style="margin-top:32px;"';}?>>
  <header class="header">
    <div class="top clearfix">
      <div class="container"> <a class="available top-shop-text" href="tel:1-800-831-0282"><i class="ion-android-call"></i><span>1-800-831-0282</span> &nbsp; | </a> <a class="available top-shop-text" href="mailto:admin@dlhtechnologyconsulting.com"> &nbsp; <i class="ion-android-mail"></i><span>admin@dlhtechnologyconsulting.com</span> &nbsp;</a> 
        <!-- <a class="available cart-price" href="<?php $string = wc_get_cart_url(); echo $string; ?>"><i class="ion-ios-cart"></i></i>
      <span><?php global $woocommerce; echo $woocommerce->cart->get_cart_total()."/".$woocommerce->cart->cart_contents_count; ?>
      </span></a> -->
        <div class="right-icons"> 
            <!--<a class="available" href="<?php echo get_home_url(); ?>/shops/hire-siddharth-singh/"><i class="ion-battery-charging"></i><span>Hire Us</span></a> 
            <a class="available" href="<?php echo get_home_url(); ?>/shops/project-cost-calculator/"><i class="ion-code-working"></i><span>Request For Quote</span></a>--> 
            <a class="available" href="<?php echo get_home_url(); ?>/blog/"><i class="ion-ios-book"></i><span>Blog</span></a>
            <?php if ( is_user_logged_in() ) { $current_user = wp_get_current_user(); ?>
            <span class="share"> &nbsp;<a class="available" href="<?php echo get_home_url(); ?>/login.php"><i class="ion-ios-contact"></i> <?php echo  esc_html( $current_user->user_login ); ?> </a>
            <?php } else { ?>
            <a class="available" href="<?php echo get_home_url(); ?>/wp-login.php"><i class="ion-log-in"></i><span>Login</span></a>
          <?php } ?>
          
          <!-- Popup -->
          <div class="popup">
            <nav class="social-nav">
              <?php wp_nav_menu(array('theme_location'  => 'woo-account','menu_class' => 'list-unstyled')); ?>
              <!-- end .list-unstyled --> 
            </nav>
            <!-- end .social-nav --> 
          </div>
          <!-- end .popup --> 
          </span> </div>
        <!-- end .right-icons --> 
        
      </div>
    </div>
    <!-- end .top --> 
    <!-- end .bottom --> 
  </header>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">
          <?php _e( 'Toggle navigation', 'white-top-show' ) ?>
          </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--Below code for logo start-->
          <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
          <a href="<?php echo $image[0]; ?>" title="<?php  echo wp_title(); ?>" rel="home"> <img src="<?php echo $image[0]; ?>" alt="<?php  echo wp_title(); ?>"></a> 
          <!--Below code for logo end--> 
        </div>
        <div id="bs-exam  ple-navbar-collapse-1" class="navbar-collapse collapse">
          <?php
        wp_nav_menu( array(
        'menu'              => 'header-menu',
        'depth'             => 2,
        'container'         => false,
        'menu_class'        => 'nav navbar-nav')
        );
        ?>
        </div>
      </div>
    </div>
  </div>
</nav>
