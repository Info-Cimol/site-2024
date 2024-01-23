<?php
/**
 * Home starter content.
 *
 * @package edutechstar\starter_content
 */
return [
    'post_type'    => 'page',
    'post_title'   => _x( 'Home', 'Theme starter content', 'edutechstar' ),
    'post_content' => '<p style="margin:-1.5em;"></p> <main class="main-div home-slider">
   <div class="slider-bg">
      <div class="hero-slider-content">
         <div class="container">
            <div class="row"> 
            <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="hero__content p-relative z-index-1"><h3 class="hero__title">We Will Help You To Learn</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p><a href="#" class="button-86">Learn More</a></div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="banner-img">
                  <img src="'.trailingslashit(get_template_directory_uri()).'/assets/img/banner.png" alt="img">
                  </div>
               </div>
            </div>                                                         
         </div>
      </div>
   </div>
</main>
    <!-- Main-end -->
    <!-- Blog-section -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"90px","bottom":"90px"}},"color":{"background":"#fff"}},"layout":{"inherit":true}} -->
<section id="mu-from-blog">

<div class="container">
<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"query-content"} -->
<!-- wp:post-featured-image /-->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px","right":"25px","left":"25px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-right:25px;padding-bottom:0px;"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-date /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop"><!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":6 } /--></div>
<!-- /wp:comments-query-loop --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"color":{"background":"#ccccccab"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ccccccab;color:#ccccccab"/>
<!-- /wp:separator -->

<!-- wp:post-title {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"18px","right":"25px"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"normal"} /-->
<!-- /wp:post-template -->
</div>
</section>
<!-- /wp:group -->
    ',];