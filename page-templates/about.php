<?php
/*
Template Name: About
*/
get_header();?>

<div id="about">

	<?php $video = get_field('video');
		if( $video ): ?>
		<section class="container-fluid" style="background: white;">
			<h3 class="hidden">About Our Company</h3>
			<video controls onclick="this.play();" class="img-responsive" style="margin: auto;" width="1024" height="400" poster="<?php echo get_stylesheet_directory_uri(); ?>/images/video-poster.jpg">
<!-- <video class="img-responsive" style="margin: auto;" width="1024" height="400" poster="<?php //echo get_stylesheet_directory_uri(); ?>/images/video-poster.jpg" onclick="this.play();"> -->
			  <source src="<?php echo $video['url']; ?>" type="video/mp4">
	<!-- 		  <source src="movie.ogg" type="video/ogg"> -->
			Your browser does not support the video tag.
			</video>
		</section>
	<?php endif; ?>

	<section>
		<article class="row entry" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg02.jpg) no-repeat left top;">
			<div style="border-top: 1px solid #d2f4f1;margin-bottom: 40px;">
				<div class="col-md-6 col-md-offset-3 text-center" style="padding: 5% 5% 0;">
					<h4 style="font-size: 24px;margin-bottom: 8px;letter-spacing: .01em;font-family:'RotisSemiSerifW02-Roman', serif;">Experience the AuroMedics Difference!</h4>
					<img class="stars" src="<?php echo get_stylesheet_directory_uri(); ?>/images/5-stars.png" alt="5 stars"/>
					<p>We know that you expect high-quality products, competitive pricing, and consistent supply. We go beyond the status quo of the generic injectables market by redefining our philosophy based on:</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-12 cards equal">
				<div class="col-md-4 clear">
					<h4>Products</h4>
					<div class="col">
						<p><strong style="color: inherit;">We are proud to offer an extensive product portfolio that:</strong></p>
						<ul>
							<li>Can be utilized in a range of institutional settings, including acute care hospitals, long-term care facilities, surgery and rehabilitation centers, and outpatient clinics</li>
							<li>Includes therapeutic classes such as antibiotics, antivirals, respiratory, hematology, cardiovascular, central nervous system, and many more</li>
							<li>Targets in-demand, short-supply products</li>

						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<h4>Flexibility</h4>
					<div class="col">
						<p><strong style="color: inherit;">AuroMedics adapts to changing norms in the market. Our offerings reflect our flexibility:</strong></p>
						<ul>
							<li>Customized product procurement solutions for GPO partners</li>
							<li>Fair pricing models for hospitals						 </li>
							<li>The fulfillment of drop shipment agreements				 </li>
							<li>Accessibility											 </li>
							<li>Transparency											 </li>
						</ul>
						<p>Our willingness to go the extra mile means that you can focus on controlling your bottom line.</p>
					</div>
				</div>
				<div class="col-md-4">
					<h4>Capabilities</h4>
					<div class="col">
						<p><strong style="color: inherit;">We control our critical processes:</strong></p>
						<ul>
							<li>Supply chain</li>
							<li>Distribution</li>
							<li>Product quality</li>
						</ul>
						<p>We are vertically integrated—developing the majority of our products in-house and utilizing our dedicated development and regulatory affairs teams.</p>
						<p>As a result, we can maximize efficiency and provide a consistent supply of high-quality products at reasonable prices.</p>
					</div>
				</div>
			</div>
		</article>
	</section>

<section class="mission entry col-md-12" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-pea-pod.jpg) no-repeat white;background-size: cover;padding: 5% 15px 0;">
		<h3 class="hidden">Our Mission</h3>
<!--
		<article class="mission col-md-3 col-md-offset-1">
			<h3>Our Philosophy</h3>

			<h4>AuroMedics Mission</h4>
			<p>Make buying generic injectables an experience customers look forward to</p>
			<h4>AuroMedics Vision</h4>
			<p>Become synonymous with excellent customer service and continuously improve upon this excellence
			by being:</p>
			<ul>
				<li>Honest			</li>
				<li>Responsive		</li>
				<li>Consistent		</li>
			</ul>

			<p>AuroMedics core values </p>
			<ul>
				<li>Customer-centric</li>
				<li>Proactive 		</li>
				<li>Flexible 		</li>
			</ul>
		</article>
-->

<!--
		<?php if (get_field('what_we_do')){ ?>
			<article class="col-md-5 col-md-offset-1">
				<?php the_field('what_we_do'); ?>
				<p style="text-align: center;"><a class="btn-default1" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></p>
			</article>
		<?php } ?>

		<?php if (get_field('how_we_do_it')){ ?>
			<article class="col-md-5" style="padding: 0 60px;text-align: center;">
				<?php the_field('how_we_do_it'); ?>
				<p style="text-align: center;"><a class="btn-default1" href="<?php the_field('button_link1'); ?>"><?php the_field('button_text1'); ?></a></p>
			</article>
		<?php } ?>
		<div class="clear"></div>
-->

		<article class="entry philosophy col-md-10 col-md-offset-1 text-center">
			<h3>Our Philosophies</h3>
			<p><span class="goal">Corporate Goal -</span> To make customers want to do business with AuroMedics, <br/>by making it easier to do business with AuroMedics</p>

			<div class="col-md-4">
				<h4>Mission</h4>
				<p>Make buying generic injectables an experience customers look forward to</p>
			</div>
			<div class="col-md-4">
				<h4>Vision</h4>
				<p>Become synonymous with excellent customer service and continuously improve upon this excellence
				by being:</p>
				<ul>
					<li>Honest			</li>
					<li>Responsive		</li>
					<li>Consistent		</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Core Values</h4>
				<ul>
					<li>Customer-centric</li>
					<li>Proactive 		</li>
					<li>Flexible 		</li>
				</ul>
			</div>
<!--
			<div class="col-md-3">
				<h4>Corporate Goal</h4>
				<p>To make customers want to do business with AuroMedics, by making it easier to do business with AuroMedics</p>
			</div>
-->
		</article>
		<div class="clear"></div>
	</section>

	<?php if (get_field('who_we_serve_col1')){ ?>
		<section class="container-fluid entry clear" style="padding: 5% 15px 9%;background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg01.jpg) no-repeat;background-size: cover;">
			<article class="col-md-5 col-md-offset-1 text-center" style="margin: 0 9% 0 6%;">
				<h3>Who We Serve</h3>
				<?php the_field('who_we_serve_col1'); ?>
<!-- 				<p class="text-center"><a class="btn-default1" href="<?php the_field('button_link2'); ?>"><?php the_field('button_text2'); ?></a></p> -->
				<p class="text-center"><a class="btn-default1" id="popup-link" href="#contact">Let Us Serve You</a></p>
			</article>
			<article class="col-xs-9 col-xs-offset-2 col-md-4 col-md-offset-0">
				<?php the_field('who_we_serve_col2'); ?>
			</article>
			<div class="clear"></div>
		</section>
	<?php } ?>

	<section class="entry last" style="background:#fff;">
		<img class="group img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Product-Group-About.png" alt="Product group" />
	</section>

	<section id="signup">
		<h3 class="hidden">Sign Up For Announcements</h3>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>
	</section>

</div>
<div id="contact" style="display: none;">
	<h4 class="text-center">We'd love to hear how we're doing</h4>
	<p class="text-center"><small>Send us a message</small></p>
	<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
</div>

<script>
	$("#popup-link").fancybox({
	  width: "auto",
	  height: "auto",
	  minWidth: 600,
	  minHeight: 300,
	  padding: 50,
	  autoSize: false,
	  closeClick: false,
	  openEffect: 'none',
	  closeEffect: 'fade'
	});
</script>
<?php get_footer();?>