</main> <!-- #site-content -->

<footer class="site-footer clearfix bg-primary pt-5 pt-lg-10">
	<div class="container pb-5 pb-lg-10">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-xl-4 mb-4 mb-md-0">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/site-icon.png" alt="" class="footer-logo">
				<ul class="social-links list-unstyled nav">
          <li>
            <a href="#0">
              <span class="i-facebook i-font-before"></span>
            </a>
          </li>
          <li>
            <a href="#0">
              <span class="i-instagram i-font-before"></span>
            </a>
          </li>
          <li>
            <a href="#0">
              <span class="i-linkedin i-font-before"></span>
            </a>
          </li>
        </ul>
			</div> <!-- .col-md-4 -->
			<div class="col-md-3 col-lg-3 col-xl-4 mb-3 mb-md-0">
			  <h5 class="text-white mb-2-5">Company</h5>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-primary-menu', 'container' => '', 'menu_class' => 'footer-primary-menu' ) ); ?>
			</div> <!-- .col-md-4 -->
			<div class="col-md-6 col-lg-6 col-xl-4 mb-5 mb-md-0">
			<h5 class="text-white mb-2-5">Contact</h5>
			  <ul class="icon-with-text list-unstyled">
					<li>
						<span class="icon flex-shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/mail-white.svg" alt="">
						</span> <!-- .icon -->
						<span class="text flex-grow-1 ms-2-5">
							<a href="mailto:info@lightaluminum.com">info@lightaluminum.com</a>
						</span> <!-- .text -->
					</li>
					<li>
						<span class="icon flex-shrink-0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/pin-white.svg" alt="">
						</span> <!-- .icon -->
						<span class="text flex-grow-1 ms-2-5">
							Aqaba International Industrial Estate, </br> P.O Box 787 Aqaba 77110, Aqaba (ASEZA), </br> Jordan.
						</span> <!-- .text -->
					</li>
				</ul> <!-- .list-unstyled -->
			</div> <!-- .col-md-4 -->
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="copyrights text-center">
		<p class="m-0">Copyright © 2022 lightaluminum.com. All rights reserved.</p>
	</div> <!-- .copyrights -->
</footer> <!-- #footer -->

  </div>
</div>
	
<?php wp_footer(); ?>
</body>
</html>