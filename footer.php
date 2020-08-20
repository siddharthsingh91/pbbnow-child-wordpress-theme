<div class="footer-service-policies">
  <div class="container">
    <div class="row">
      <div class="service-policy col-sm-4"> <a href="<?php echo get_home_url(); ?>/shops/"> <i class="glyphicon glyphicon-refresh"></i> <strong>Hassle-free customer support</strong><br>
        24-hours easy customer support on  DLH Technology </a> </div>
      <div class="service-policy col-sm-4"> <a href="<?php echo get_home_url(); ?>/shops/"> <i class="glyphicon glyphicon-credit-card"></i> <strong>100% secure payments</strong><br>
        We support Paypal, Cards, Wallets and EMI </a> </div>
      <div class="service-policy col-sm-4"> <a href="<?php echo get_home_url(); ?>"> <i class="glyphicon glyphicon-lock"></i> <strong>Vast service network</strong><br>
        1000+ satisfied clients / DLH Technology</a> </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <?php if( is_active_sidebar( 'white-top-show-pre-footer-left' ) ) { dynamic_sidebar( 'white-top-show-pre-footer-left' ); }else{?>
          <h4>Space on pre footer extreme left, Use Widget</h4>
          <?php } ?>
        </div>
        
        <!-- end .col-sm-4 -->
        
        <div class="col-sm-4">
          <!--<?php if( is_active_sidebar( 'white-top-show-pre-footer-middle' ) ) { dynamic_sidebar( 'white-top-show-pre-footer-middle' ); }else{?>
          <h4>Space on pre footer middle</h4>
          <?php } ?>-->
        </div>
        
        <!-- end .col-sm-4 -->
        
        <div class="col-sm-4">
          <?php if( is_active_sidebar( 'white-top-show-pre-footer-right' ) ) { dynamic_sidebar( 'white-top-show-pre-footer-right' ); }else{?>
          <h4>Space on pre footer extreme left, Use Widget</h4>
          <?php } ?>
        </div>
        
        <!-- end .col-sm-4 --> 
        
      </div>
      
      <!-- end .row --> 
      
    </div>
    
    <!-- end .container --> 
    
  </div>
  
  <!-- end .footer -->
  
  <div class="bottom">
    <?php 

/********************************************

put this where you wnat to show this widget**

*********************************************/

if( is_active_sidebar( 'white-top-show-copyright' ) ) { dynamic_sidebar( 'white-top-show-copyright' ); }else{?>
    <?php _e( 'Copyright &copy; sanditsolution.com All Rights Reserved. &copy;', 'white-top-show' ) ?>
    <?php } ?>
  </div>
  
  <!-- end .bottom --> 
  
</footer>


 <!-- Modal -->
<div class="modal fade" id="eventsEnquiryForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUICK INQUIRIE</h5>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="32" title="Contact Us"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   


 <!-- Modal -->
<div class="modal fade" id="eventsVideoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUICK INQUIRIE</h5>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/Px5OFa0MzYQ?autoplay=0;start=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   


<!-------------------------------------------------------------------------------------------------------------------------------->

<?php wp_footer(); ?>

<!--Js for skype popup-->

</body></html>