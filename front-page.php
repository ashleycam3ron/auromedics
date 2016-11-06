<?php get_header(); ?>

<div id="home" class="container-fluid">
	<h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>
	<?php $image = get_field('header_image');
		if( !empty($image) ){ ?>
	<div id="banner" class="row" style="background: url(<?php echo $image['url']; ?>) no-repeat center left #def1ef;min-height: 80vh;background-size: cover">
		<div class="col-md-5 col-md-offset-6">
		  <?php if (get_field('header_title')){ ?><?php the_field('header_title'); ?><?php } ?>
		  <?php if (get_field('header_text')){ ?> <p><?php the_field('header_text'); ?></p> <?php } ?>
		  <p><a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/">Browse Our Products</a></p>
		</div>
	</div>
	<?php } ?>

	<div style="border-bottom: 1px solid #d2f4f1;background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-pea-pod.jpg) no-repeat white;background-size: cover;">
				<div class="col-md-6 col-md-offset-3 text-center" style="padding:7% 5%;">
					<h2 style="color: #2c2daa;text-transform: none;font-size: 24px;margin-bottom: 8px;letter-spacing: .01em;font-family:'RotisSemiSerifW02-Roman', serif;">Experience the AuroMedics Difference!</h2>
					<img class="stars" src="<?php echo get_stylesheet_directory_uri(); ?>/images/5-stars.png" alt="5 stars"/>
					<p>We know that you expect high-quality products, competitive pricing, and consistent supply. We go beyond the status quo of the generic injectables market by redefining a service philosophy based on our products,  flexibility, and capabilities. </p>
					<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/about/">Learn more</a>
				</div>
				<div class="clear"></div>
			</div>


    <section id="products" class="row equal">
	    <div class="col-md-3 new">
		    <header>
			    <h3><span>NEW</span> Products</h3>
				<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/">View All</a>
			</header>
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'New Products',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC' );
				$new = new WP_Query( $args );
				while ( $new->have_posts() ) : $new->the_post();
					$categories = get_the_category();?>

			    <article <?php post_class(array('col-md-10','col-md-offset-1')); ?> id="post-<?php the_ID(); ?>">
				    <div class="preview">
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
						</div>
				    </div>
			    </article>

			<?php endwhile; ?>
		</div>
	    <div class="col-md-9 featured">
		    <header>
			    <h3><span>Featured</span> Products</h3>
			    <a class="btn-default pull-right" style="margin-top: 12px;" href="<?php echo esc_url( home_url() ) ?>/products/.category-featured-products">View All</a>
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

			    <article class="product col-md-3 col" style="padding-right: 0;" id="post-<?php the_ID(); ?>">
				    <div class="preview">
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
		</div>
    </section>

	<section id="three-col" class="row">
	    <div class="col-md-4 serve">
		    <h3>Who We Serve</h3>
		    <div style="padding: 0 25px">
				<p>At AuroMedics, we take the customer experience seriously and pride ourselves on our ability to anticipate our customers’ every need.</p>
				<ul>
					<li><!-- <img class="clear size-full wp-image-164" src="http://ashley-cameron.com/clients/auromedics/wordpress/wp-content/uploads/icon-hospital.png" alt="icon hospital" width="47" height="47"> -->Hospital Customers</li>
				<li><!-- <img class="clear size-full wp-image-164" src="http://ashley-cameron.com/clients/auromedics/wordpress/wp-content/uploads/icon-GPOs.png" alt="icon gpos" width="47" height="47"> -->GPOs</li>
				<li><!-- <img class="clear size-full wp-image-164" src="http://ashley-cameron.com/clients/auromedics/wordpress/wp-content/uploads/icon-trade.png" alt="icon trade" width="47" height="47"> -->Trade Partners</li>
				</ul>
				<p><a class="btn-default" href="#">Our Valued Customers</a></p>
		    </div>
	    </div>
	    <div class="col-md-4 catalog">
		    <h3>Download Product Catalog</h3>
		    <div style="padding: 0 25px">
			    <a href="<?php echo esc_url( home_url() ) ?>/products/" style="float: left;margin: 0 24px 0 0;padding: 0;">
			      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog-thumb.jpg" alt="Product Catalog">
			    </a>
		    	<h4>We are proud to offer an extensive product portfolio</h4>
				<p><a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/">Download Catalog</a></p>
		    </div>
	    </div>
	    <div class="col-md-4 subscribe">
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

	<?php // check if the flexible content field has rows of data
		if( have_rows('custom_layouts') ):
		    while ( have_rows('custom_layouts') ) : the_row();
				$image = get_sub_field('image');
		        if( get_row_layout() == '2_col_1' ): ?>
				<section id="products" class="row">
		        	<div class="content col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1">
		        		<?php the_sub_field('text'); ?>
		        	</div>
		        	<img class="img-responsive hidden-xs col-sm-4 col-sm-offset-1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				</section>
		        <?php elseif( get_row_layout() == '2_col_2' ): ?>
		        <section id="tours" class="row">
					<img class="img-responsive col-xs-8 col-sm-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
		        	<div class="content col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1">
		        		<?php the_sub_field('text'); ?>
		        	</div>
		        </section>
		        <?php endif;
		    endwhile;
		else :
		    // no layouts found
		endif; ?>
</div>

<script>
	jQuery(function($){
		jQuery('#carousel1').carousel({
		    interval: 6000
		});
	});
</script>

<?php get_footer(); ?>