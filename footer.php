<footer id="footer" class="container-fluid">
	<div class="col-md-6">
		<div class="col-md-5">
			<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/AuroMedics-Pharma-LLC-Logo.png" alt="AuroMedics Pharma LLC Logo">
			</a>
			<address>AuroMedics Pharma LLC <br/>
				279 Princeton Hightstown Road <br/>
				East Windsor, NJ 08520
			</address>
			<img src="" alt="HDA Member" />
		</div>
		<div class="col-md-7">
			<h5>About</h5>
			<p>AuroMedics is a generic injectables company that has built its business and offerings around servicing our customers’ needs. Count on us to deliver benefits that you experience high-quality products, flexible pricing, consistent supply, and exemplary service.</p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-4">
			<h5>Products</h5>
		</div>
		<div class="col-md-4">
			<h5>Benefits</h5>
			<ul>
				<li><span>+</span> High-quality products </li>
				<li><span>+</span> Competitive pricing</li>
				<li><span>+</span> Consistent supply</li>
				<li><span>+</span> Exemplary service</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h5>Contact Us</h5>
			<h6>TELEPHONE</h6>
			<a href="tel:888-238-7880">(888) 238-7880</a>
			<h6>FAX</h6>
			<a href="tel:732-355-9449">(732) 355-9449</a>
		</div>
	</div>

	<div class="copyright row">
		<div class="container">
   		<p class="col-md-7">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?> Pharma LLC. All Rights Reserved. <a target="_blank" href="http://aurobindo.com">Aurobindo.com</a></p>
   		<div class="col-md-5 pull-right text-right"><?php wp_nav_menu( array('menu' => 'footer')); ?></div>
   		</div>
    </div>
</footer>
</div><!-- end #wrapper -->
  </body>
</html>
<?php wp_footer();?>