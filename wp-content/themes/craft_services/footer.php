			</div>
        <div id="footer" class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
              	<h1><strong>Connect</strong> With Us</h1>
                <ul>
                  <li>
                    <a data-service="facebook" href="https://www.facebook.com/CRAFTMediaDigital" target="_blank" class="social">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-2x/facebook-icon-footer-2x.png" />
                    </a>
                  </li>
                  <li>
                    <a data-service="twitter" href="http://twitter.com/craftdc" target="_blank" class="social">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-2x/twitter-icon-footer-2x.png" />
                    </a>
                  </li>
                  <li>
                    <a data-service="google" href="https://plus.google.com/103101467332946636334/" target="_blank" class="social">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-2x/google-plus-icon-footer-2x.png" />
                    </a>
                  </li>
                  <li>
                    <a data-service="linkedin" href="http://www.linkedin.com/company/craft-media-digital" target="_blank" class="social">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-2x/linkedin-icon-footer-2x.png" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="privacy"><a href="#" data-toggle="modal" data-target="#privacy">Privacy Policy</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
			<?php get_template_part('privacy'); ?>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-12325399-5', 'auto');
				ga('send', 'pageview');

			</script>
<?php wp_footer(); ?>
  </body>
</html>