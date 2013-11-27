    <!-- FOOTER -->
    <div class="footer">
	<div class="row">
          <div class="col-sm-4">
            <div class="footer-links">
              <a href="#">Privacy</a> | <a href="#">Terms</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="div-copyright">
              &copy; 2013 ToyLuv.com
            </div>
          </div>
          <div class="col-sm-4">
            <div class="pull-right">
              <a href="#">Back to top</a>
            </div>
          </div>  
      </div><!--- end row -->
    </div><!-- container -->



    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-typeahead.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/lib/angular/angular.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/angular/angular-route.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/controllers.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/filters.js"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/services.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/angular/angular-resource.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/holder.js"></script>


	<script src="<?php echo get_template_directory_uri(); ?>/lib/angular/angular-animate.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/animations.js"></script>


    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'toybuddy'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
	<?php wp_footer(); ?> 
  </body>
</html>
