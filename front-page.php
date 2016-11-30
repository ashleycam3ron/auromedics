<?php get_header(); ?>

<div id="home" class="container-fluid">
	<?php $image = get_field('header_image');
		if( !empty($image) ){ ?>
	<div id="banner" class="row text-center" style="background: url(<?php echo $image['url']; ?>) no-repeat bottom left #fff;">
		<div class="col-md-5 col-md-offset-6">
		  <?php if (get_field('header_title')){ ?><h2><?php the_field('header_title'); ?></h2><?php } ?>
		  <img class="stars" src="<?php echo get_stylesheet_directory_uri(); ?>/images/5-stars.png" alt="5 stars">
		  <?php if (get_field('header_text')){ ?> <p><?php the_field('header_text'); ?></p> <?php } ?>
		  <p><a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/">Browse Our Products</a></p>
		</div>
	</div>
	<?php } ?>

    <section id="products" class="equal">
	    <div class="featured">
		    <header>
			    <h3><span>Featured Products</span></h3>
			    <a class="btn-default pull-right" href="<?php echo esc_url( home_url() ) ?>/products/">View All</a>
		    </header>
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'Featured Products',
					'posts_per_page' => 4,
					'orderby' => 'title',
					'order' => 'rand' );
				$featured = new WP_Query( $args );
				while ( $featured->have_posts() ) : $featured->the_post(); ?>

			    <article class="product col-xs-6 col-sm-4 col-md-3 equal" id="post-<?php the_ID(); ?>">
				    <div class="preview col">
					    <?php if (in_category(6)){?><i class="fa fa-star"></i><?php } ?>
						<?php if (in_category(5)){?><span class="new">New</span><?php } ?>
			            <a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail()) { ?>
						  	<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
			            <?php } else { ?>
							<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
						<?php } ?>
						</a>
					    <div>
						  <h2><a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						  <?php if( have_rows('table') ){ ?>
						   	<?php while ( have_rows('table') ) : the_row();
							   	$brand = get_sub_field('brand'); ?>
							   	<?php if ($brand){ ?>
							   		<p>Brand Name: <?php echo $brand; ?></p>

							<?php } endwhile; ?>
						  <?php } else { ?>
						  	<p>Brand Name: xxxxxx xxxxxx xxxxxx xxxxxx</p>
						  <?php } ?>
						  <?php echo get_the_tag_list('<small class="tags">',', ','</small>'); ?>
						</div>				    </div>
			    </article>

			<?php endwhile; ?>
			<div class="clear"></div>
		</div>
    </section>

	<section id="three-col" class="row equal">
	    <div class="col-sm-5 col-md-4 col serve">
		    <h3>Who We Serve</h3>
		    <div style="padding: 0 25px">
				<p>At AuroMedics, we take the customer experience seriously and pride ourselves on our ability to anticipate our customers’ every need.</p>
				<ul>
					<li>Health System Customers</li>
					<li>GPOs</li>
					<li>Trade Partners</li>
				</ul>
				<p><a class="btn-default" href="#">Our Valued Customers</a></p>
		    </div>
	    </div>
	    <div class="col-sm-7 col-md-4 col catalog">
		    <h3>Product Catalog</h3>
		    <div style="padding: 0 25px">
			    <a href="<?php echo esc_url( home_url() ) ?>/products/" style="float: left;margin: 0 24px 0 0;padding: 0;">
			      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog-thumb.jpg" alt="Product Catalog">
			    </a>
		    	<h4>We are proud to offer an extensive product portfolio</h4>
				<p><a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/">Download Catalog</a></p>
		    </div>
	    </div>
	    <div class="col-sm-12 col-md-4 col subscribe">
		    <h3>Don't Miss Out</h3>
		    <div class="text-center">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>
				<a href="<?php echo esc_url( home_url() ) ?>/privacy-policy/">
					<small style="color: #aee9de;margin: 10px auto 0;display: block;">We respect your privacy</small></a>
			</div>
		</div>
    </section>

    <?php get_template_part('template-parts/testimonials'); ?>
    <?php get_template_part('template-parts/awards'); ?>
</div>

<script>
	jQuery(function($){
		jQuery('#carousel1').carousel({
		    interval: 6000
		});
	});
</script>

<?php get_footer(); ?>