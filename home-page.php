<?php
/* Template Name:Home Page
 * Develope by:siddharth singh
 * Email:siddharthsingh91@gmail.com
 * Author url:www.sanditsolution.com
 * @link http://www.sanditsolution.com/
 * @package Siddharth Singh
 * @subpackage Whitetopshow
 * @since White Top Show 1.0
 */
get_header(); ?>

<section id="module-content" class="clearfix">
  <div id="col-main" class="container container-responsive clearfix">
    <div class="section-wrappers"> 
      <!-- BEGIN content_for_index -->
      <div id="shopify-section-1555704628110" class="shopify-section index-section index-section-full">
        <div class="container">
          <div class="row-fluid">
            <div id="home-slider-1555704628110" class="home-slider responsive-slider hideControls">
              <div class="slides" data-group="slides">
                <ul>
                  <li class="slider_item_1557243957665">
                    <div class="slide-body" data-group="slide"> <a href="<?php echo get_site_url(); ?>/drogerie-wohlbefinden/"> <span class="slide-overlay"></span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/theme-asist/images/raw/header-bestseller.jpg" alt=""> </a> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="shopify-section-1555687265387" class="shopify-section index-section">
        <div class="widget-wrapper featured-collections clearfix" id="home-slider-contaner">
          <h3 class="title">Unsere Beliebtesten Kategorien</h3>
          <div id="featured-collections-wrapper-1555687265387" class="featured-collections-wrapper">
            <div id="featured-collections-1555687265387" class="featured-collections-content  clearfix owl-carousel owl-theme">
              <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage">
                  <div class="owl-item">
                    <div class="collection">
                      <div class="collection-container text-center animated shown">
                        <div class="front only">
                          <div class="collection-details"> <a href="<?php echo get_site_url(); ?>/drogerie-wohlbefinden/">
                            <h4> Wohlbefinden </h4>
                            </a> </div>
                          <a href="<?php echo get_site_url(); ?>/drogerie-wohlbefinden/"> <img class="collection-images" src="<?php echo get_stylesheet_directory_uri(); ?>/theme-asist/images/raw/cat-gesundheit.jpg" alt="Wohlbefinden"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="collection">
                      <div class="collection-container text-center animated shown">
                        <div class="front only">
                          <div class="collection-details"> <a href="<?php echo get_site_url(); ?>/haushalt-garten/">
                            <h4> Haushalt </h4>
                            </a> </div>
                          <a href="<?php echo get_site_url(); ?>/haushalt-garten/"> <img class="collection-images" src="<?php echo get_stylesheet_directory_uri(); ?>/theme-asist/images/raw/cat-haushalt.jpg" alt="Haushalt"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="collection">
                      <div class="collection-container text-center animated shown">
                        <div class="front only">
                          <div class="collection-details"> <a href="<?php echo get_site_url(); ?>/beauty-2/">
                            <h4> Beauty </h4>
                            </a> </div>
                          <a href="<?php echo get_site_url(); ?>/beauty-2/"> <img class="collection-images" src="<?php echo get_stylesheet_directory_uri(); ?>/theme-asist/images/raw/cat-beauty.jpg" alt="Beauty"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="collection">
                      <div class="collection-container text-center animated shown">
                        <div class="front only">
                          <div class="collection-details"> <a href="<?php echo get_site_url(); ?>/schnappchen/">
                            <h4> Schnäppchen </h4>
                            </a> </div>
                          <a href="<?php echo get_site_url(); ?>/schnappchen/"> <img class="collection-images" src="<?php echo get_stylesheet_directory_uri(); ?>/theme-asist/images/raw/cat-schnaeppchen.jpg" alt="Schnäppchen"> </a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-controls clickable">
                <div class="owl-buttons">
                  <div class="owl-prev"><span class="btn btn-1 mini"><i class="icon-angle-left"></i></span></div>
                  <div class="owl-next"><span class="btn btn-1 mini"><i class="icon-angle-right"></i></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END content_for_index --> 
    </div>
  </div>
</section>
<div class="container-fluid home-contaner"> 
  <!-- Collect the nav links, forms, and other content for toggling -->
  <?php if (have_posts()) : while (have_posts()) : ?>
  <?php  the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
      <div class="col-md-12">
        <div class="client_content">
          <?php the_content(); ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'white-top-show' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </div>
        <footer class="entry-meta">
          <?php edit_post_link( __( 'Edit', 'white-top-show' ), '<span class="edit-link"><i class="fa fa-edit"></i> ', '</span>' ); ?>
        </footer>
        <!-- .entry-meta --> 
      </div>
    </div>
  </article>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
