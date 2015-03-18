<?php
/*
Template Name: Homepage
*/
get_header(); ?>

  <div class="homepage-header-image">
    <?php 
      $small_image = get_field('small_image');
      $medium_image = get_field('medium_image');
      $large_image = get_field('large_image');
      if( !empty($large_image) ): ?>
        <img data-interchange="[<?php echo $small_image['url']; ?>, (default)], [<?php echo $medium_image['url']; ?>, (medium)], [<?php echo $large_image['url']; ?>, (large)]">
    <?php endif; ?>
  </div>

  <div class="homepage-header-text-container row">

    <div class="homepage-header-text"><h1><?php $key="promo_text_h1"; echo get_post_meta($post->ID, $key, true); ?></h1>
    </div>

  </div> <!-- homepage-header-text-container -->

  <!--  HOMEPAGE CONTENT -->

  <div class="full-width green-background" role="main">

    <div class="row body-background">

      <div class="small-12 large-12 columns" role="main">

  	<?php /* Start loop */ ?>

  	<?php while (have_posts()) : the_post(); ?>
  	
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="homepage-content entry-content row">
        <div class="columns">
			    <?php the_content(); ?>
        </div>
      </div>

      <!--  PDF SIGNUP -->

      <div class="row">

        <!-- Begin MailChimp Signup Form -->
        
        <div id="mc_embed_signup" class="pdf-signup columns medium-offset-2 medium-8 end">
          <form action="//parsleyhealth.us8.list-manage.com/subscribe/post?u=34eb42af15f150c2c339c3d8b&amp;id=ded326172a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mc-pdf-form" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <h2><?php the_field('pdf_title'); ?></h2>
            <div class="pdf-text row">
              <div class="columns medium-offset-1 medium-3 small-4">
                <?php 
                $image = get_field('pdf_image');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </div>
              <div class="columns medium-7 small-8 end pdf-copy">
                <?php the_field('pdf_copy'); ?>
              </div>
            </div>
            <div class="email-form row collapse">
              <div class="mc-field-group columns medium-offset-1 medium-7 small-8">
                <input type="email" placeholder="Your Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>
              <div class="columns medium-3 small-4 end">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_34eb42af15f150c2c339c3d8b_ded326172a" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Sign me up!" name="subscribe" id="mc-embedded-subscribe" class="button secondary postfix"></div>
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    
            </div>
          </div>
          </form>

        </div>  <!--End mc_embed_signup-->

      </div> <!-- pdf signup -->

      <!-- PARSLEY DIFFERENCE -->

      <div class="parsley-difference">

        <hr>

        <h2><?php $key="different_header"; echo get_post_meta($post->ID, $key, true); ?></h2>

        <div class="difference-table columns large-4 small-12">
          <div class="parsley-icon"><span class="fa-stack fa-lg fa-3x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-heart fa-stack-1x fa-inverse"></i></span></div>
          <h3><?php $key="difference_1_header"; echo get_post_meta($post->ID, $key, true); ?></h3>
          <?php $key="difference_1"; echo get_post_meta($post->ID, $key, true); ?>
        </div>

        <div class="difference-table columns large-4 small-12">
          <div class="parsley-icon"><span class="fa-stack fa-lg fa-3x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-tablet fa-stack-1x fa-inverse"></i></span></div>
          <h3><?php $key="difference_2_header"; echo get_post_meta($post->ID, $key, true); ?></h3>
          <?php $key="difference_2"; echo get_post_meta($post->ID, $key, true); ?>
        </div>

        <div class="difference-table columns large-4 small-12">
          <div class="parsley-icon"><span class="fa-stack fa-lg fa-3x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></div>
          <h3><?php $key="difference_3_header"; echo get_post_meta($post->ID, $key, true); ?></h3>
          <?php $key="difference_3"; echo get_post_meta($post->ID, $key, true); ?>
        </div>

      </div> <!-- row -->

      <!-- BECOME MEMBER -->

      <hr>

      <div class="become-member row">

        <div class="columns small-12 large-6 large-offset-3 medium-8 medium-offset-2 end">

          <div class="parsley-become-member">

            <h2><?php $key="become_member_header"; echo get_post_meta($post->ID, $key, true); ?>
            </h2>

            <div>
              <?php $key="become_member_text"; echo get_post_meta($post->ID, $key, true); ?>
            </div>
          
            <div class="join-now text-center">
              <a href="https://parsleyhealth.md-hq.com/registration"><button class="button mdhq-button secondary">Join Now</button></a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="index.php/membership"><button class="button">Learn More</button></a>
            </div>

          </div>

        </div>

      </div> <!--  BECOME MEMBER -->

      <hr>

<!-- ROBIN PHOTO -->

    <div class="robin-photo row">

      <div class="robin-image">
        <?php 
          $small_image = get_field('robin_photo_s');
          $large_image = get_field('robin_photo_l');
          if( !empty($large_image) ): ?>
            <img data-interchange="[<?php echo $small_image['url']; ?>, (default)], [<?php echo $large_image['url']; ?>, (medium)]">
        <?php endif; ?>
      </div>

      <div class="robin-photo-text columns show-for-medium-up large-4 large-offset-1 medium-5 medium-offset-1 ">
        <?php $key="robin_photo_copy"; echo get_post_meta($post->ID, $key, true); ?>
      </div> <!-- row -->

      <div class="show-for-small-only robin-photo-small row">
        <div class="columns small-12">
          <?php $key="robin_photo_copy"; echo get_post_meta($post->ID, $key, true); ?>
        </div>
      </div>

    </div> <!-- ROBIN PHOTO -->

    <hr>

    <!-- TWO COLUMNS -->
  
    <div class="entry-content two-columns row">
      
      <?php get_template_part( 'partials/blog-post-list' ); ?>

      <!-- RIGHT COLUMN -->

      <div class="homepage-twitter large-6 medium-6 small-12 columns">

      <!-- TWITTER -->
      <div class="social-header">
        <h3 class="module-header">Social</h3>
      </div>
      
      <div>
        <a class="twitter-timeline" width="100%" data-dnt="true" href="https://twitter.com/robinberzinmd" data-widget-id="476538021177614336">Tweets by @robinberzinmd</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div> <!-- TWITTER -->

      <hr>

    </div> <!-- two columns -->

    
    <?php endwhile; // End the loop ?>

    </article>

    </div> <!-- main columns -->

  </div> <!-- body-background -->

</div> <!-- green-background -->

<?php get_footer(); ?>