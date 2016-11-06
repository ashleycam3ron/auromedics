<footer id="footer" class="container-fluid">
	<h3 class="hidden">Company Overview</h3>
	<div class="col-md-6">
		<div class="col-sm-5">
			<a href="<?php echo esc_url( home_url() ) ?>">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/AuroMedics-Pharma-LLC-Logo.png" alt="AuroMedics Pharma LLC Logo">
			</a>
			<address>AuroMedics Pharma LLC <br/>
				279 Princeton Hightstown Road <br/>
				East Windsor, NJ 08520
			</address>
			<img style="padding-left:18px;padding-bottom: 23px;" src="<?php echo get_stylesheet_directory_uri() ?>/images/HDA-Member-Logo.png" alt="HDA Member" />
		</div>
		<div class="col-sm-6 col-md-7">
			<h5>About</h5>
			<p>AuroMedics is a generic injectables company that has built its business and offerings around servicing our customers’ needs. Count on us to deliver benefits that you experience high-quality products, competitive pricing, consistent supply, and exemplary service.</p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-sm-4 pro">
			<h5>Products</h5>
			<ul>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">All Products</a></li>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">New Products</a></li>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">Featured Products</a></li>
			</ul>
		</div>
		<div class="col-sm-4 benefits">
			<h5>Benefits</h5>
			<ul>
				<li><span>+</span> High-quality products </li>
				<li><span>+</span> Competitive pricing</li>
				<li><span>+</span> Consistent supply</li>
				<li><span>+</span> Exemplary service</li>
			</ul>
		</div>
		<div class="col-sm-4 contact">
			<h5>Contact Us</h5>
			<h6>TELEPHONE</h6>
			<a class="tel" href="tel:888-238-7880">(888) 238-7880</a>
			<h6>FAX</h6>
			<a class="tel" href="tel:732-355-9449">(732) 355-9449</a>
		</div>
	</div>

	<div class="copyright row">
		<div class="col-xs-12">
   		<p class="col-md-7">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?> Pharma LLC. All Rights Reserved. <a target="_blank" href="http://aurobindo.com">Aurobindo.com</a></p>
   		<nav class="pull-right text-right">
	   		<h5 class="hidden">Footer Navigation</h5>
	   		<?php wp_nav_menu( array('menu' => 'footer')); ?>
	   	</nav>
   		</div>
    </div>
</footer>
</div><!-- end #wrapper -->
  </body>
</html>
<?php wp_footer();?>