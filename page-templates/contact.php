<?php
/*
Template Name: Contact Us
*/

get_header(); ?>
<?php $image = get_field('header_image');
	if( !empty($image) ){ ?>
	<div id="banner" class="row" style="background: url(<?php echo $image['url']; ?>) no-repeat top left;background-size: cover;">
		<div class="col-md-6 col-md-offset-3 text-center">
		  <?php if (get_field('header_title')){ ?> <h2><?php the_field('header_title'); ?></h2> <?php } ?>
		  <?php if (get_field('header_text')){ ?> <p><?php the_field('header_text'); ?></p> <?php } ?>
		</div>
	</div>
<?php } ?>

<section id="contact">
	<h1 class="hidden"><?php the_title(); ?></h1>
	<article class="entry col-md-10 col-md-offset-1">
		<div class="col-xs-12 col-sm-6"><?php the_field('column_1'); ?></div>
		<div class="col-xs-12 col-sm-6 last"><?php the_field('column_2'); ?></div>
	</article>
	<article class="row clear" style="background-color:#def1ef;border-top: 1px solid #aee9de;">
		<h4 class="text-center" style="padding: 30px 0 0;">We'd love to hear how we're doing</h4>
		<p class="text-center"><small>Send us a message</small></p>
		<div class="col-md-10 col-md-offset-1"><?php the_content(); ?></div>
	</article>
	<div class="clear"></div>
</section>

<section id="directions" class="row">
	<h2 class="text-center">Directions</h2>
	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.7017933028424!2d-74.56193858499046!3d40.2823740717244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3de4da33a883f%3A0x463153859f2f3a4c!2s279+Princeton+Hightstown+Rd%2C+East+Windsor%2C+NJ+08520!5e0!3m2!1sen!2sus!4v1473283832787" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


<?php if( have_rows('location') ): ?>
	<div class="acf-map text-center">
		<?php while ( have_rows('location') ) : the_row();
			$location = get_sub_field('locations');
			$address = explode( ',' , $location['address']);
			$image = get_sub_field('image');
			$alt = $image['alt'];
			$size = 'thumbnail';
			$thumb = $image['sizes'][ $size ]; ?>

			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo get_stylesheet_directory_uri();?>/images/marker.png">
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
				<h4>Komatsu Ramen</h4>
				<p class="address"><?php echo $location['address']; ?><br/>
				<a tel="8165996263">+ 816.599.6263</a></p>
				<a target="_blank" class="directions" href="https://www.google.com/maps/place/<?php echo $address[0].$address[1].$address[2].$address[3]; ?>/<?php echo $location['lat'] . ',' . $location['lng']; ?>"><?php _e('Get Directions','ashleycameron'); ?></a>
			</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
</section>

<div class="container-fluid">
	<?php get_template_part('template-parts/awards'); ?>
</div>
<section id="signup" class="row">
	<h3 class="hidden">Sign Up For Announcements</h3>
	<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOKhI3_PBm0g_H0dMRJLpqODxskiYkrk0"></script>

<?php get_footer(); ?>