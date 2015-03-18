</section>
<footer class="full-width">
  <div class="footer-thirds row">

  <div class="footer-menu columns medium-4 large-4 ">
  <h5 class="module-header"><a href="index.php">Parsley Health</a></h5>
    <?php foundationPress_footer_menu(); ?>
  </div>

  <div class="columns small-footer"><hr></div>

  <div class="footer-social-icons columns medium-4 large-4">

    <!-- EMAIL SIGN UP -->

    <!-- Begin MailChimp Signup Form -->

      <div id="mc_embed_signup">
        <form action="//robinberzinmd.us8.list-manage.com/subscribe/post?u=34eb42af15f150c2c339c3d8b&amp;id=59643ea2b9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-footer-form validate" target="_blank" novalidate>
        
        <h5 class="module-header">Email Updates</h5>

        <div class="row collapse">
          <div class="mc-field-group columns small-8">
            <input type="email" placeholder="Your Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="columns small-4">
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button secondary postfix">     
          </div>
        </div>

        <div id="mce-responses">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    
          
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_34eb42af15f150c2c339c3d8b_59643ea2b9" tabindex="-1" value=""></div>

        </form>
      </div>

      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
      <script type='text/javascript'>
      (function($) {
      window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
      }(jQuery));
      var $mcj = jQuery.noConflict(true);
      </script>

      <!--End mc_embed_signup-->

    <h5 class="module-header">Get Social</h5>

    <a href="https://www.facebook.com/RobinBerzinMD">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    <a href="https://twitter.com/robinberzinmd">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    <a href="http://www.pinterest.com/robinberzin/parsley-health/">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    <a href="mailto:hello@parsleyhealth.co">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
      </span>
    </a>


  </div>

  <div class="columns small-footer"><hr></div>

  <div class="columns medium-4 large-4">
    <?php do_action('foundationPress_before_footer'); ?>
    <?php dynamic_sidebar("footer-widgets"); ?>
    <?php do_action('foundationPress_after_footer'); ?>
  </div>

</div> <!-- row -->

</footer>
<a class="exit-off-canvas"></a>

  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

</body>
</html>