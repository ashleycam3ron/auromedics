<footer id="footer" class="container-fluid">
	<h4 class="hidden">Company Overview</h4>
	<div class="col-md-7">
		<div class="col-sm-5 logo">
			<a href="<?php echo esc_url( home_url() ) ?>">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/AuroMedics-Pharma-LLC-Logo.png" alt="AuroMedics Pharma LLC Logo">
			</a>
			<address>AuroMedics Pharma LLC <br/>
				279 Princeton Hightstown Road <br/>
				East Windsor, NJ 08520
			</address>
			<img class="hda" src="<?php echo get_stylesheet_directory_uri() ?>/images/HDA-Member-Logo.png" alt="HDA Member" />
		</div>
		<div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 pro">
			<h5>Products</h5>
			<ul>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">All Products</a></li>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">New Products</a></li>
				<li><a href="<?php echo esc_url( home_url() ) ?>/products">Featured Products</a></li>
			</ul>
		</div>
		<div class="col-xs-6 col-sm-4 benefits">
			<h5>Benefits</h5>
			<ul>
				<li><span>+</span> High-quality products </li>
				<li><span>+</span> Competitive pricing</li>
				<li><span>+</span> Consistent supply</li>
				<li><span>+</span> Exemplary service</li>
			</ul>
		</div>
	</div>
	<div class="col-md-5">
		<div class="col-xs-5 col-xs-offset-1 col-md-offset-0 col-sm-4 col-md-5 contact">
			<h5>Contact Us</h5>
			<h6>TELEPHONE</h6>
			<a class="tel" href="tel:888-238-7880">(888) 238-7880</a>
			<h6>FAX</h6>
			<a class="tel" href="tel:732-355-9449">(732) 355-9449</a>
		</div>
		<div class="col-xs-6 col-sm-7 companies">
			<h5>Other Aurobindo Companies</h5>
			<ul>
				<li><a target="_blank" href="http://aurobindousa.com">www.aurobindousa.com</a></li>
				<li><a target="_blank" href="http://aurolifepharma.com">www.aurolifepharma.com</a></li>
				<li><a target="_blank" href="http://aurohealth.com">www.aurohealth.com</a></li>
				<li><a target="_blank" href="http://natrol.com">www.natrol.com</a></li>
			</ul>
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