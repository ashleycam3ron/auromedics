<?php get_header(); ?>

<div id="home" class="container-fluid">
	<?php //get_template_part('/template-parts/slider'); ?>

    <section id="hero" class="row">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>
		<div class="col-md-5 col-md-offset-6">
			<?php the_content(); ?>
			<a class="btn-default" href="#">Our company values <i class="fa fa-chevron-right"></i></a>
		</div>
    </section><!-- end .row -->

    <section id="three-col" class="row">
	    <div class="col-md-4 serve">
		    <h3>Who We Serve</h3>
		    <h4>Generic Injectables. Customized Solutions.</h4>
			<p>We know that you expect high-quality products, flexible pricing, and consistent supply. We go beyond the status quo of the generic injectables market with our service philosophy. Our philosophy is to offer solutions to meet the needs of each customer.</p>
			<a class="btn-default" href="#">Our Valued Customers <i class="fa fa-chevron-right"></i></a>
	    </div>
	    <div class="col-md-4 catalog">
		    <h3>Download Product Catalog</h3>
		    <img class="img-responsive" src="http://placehold.it/125x170/ffffff/888888">
	    	<h4>We are proud to offer an extensive product portfolio</h4>
			<a class="btn-default" href="#">View All Products <i class="fa fa-chevron-right"></i></a>
	    </div>
	    <div class="col-md-4 subscribe">
		    <h3>Announcements</h3>
		    <div class="text-center">
				<p>Sign up now for product launch <br/>announcements and company news.</p>
				<p>[email address]</p>
				<a href="#">We respect your privacy.</a>
			</div>
		</div>
    </section>

    <section id="products" class="row equal">
	    <div class="col-md-3 new">
		    <header>
			    <h3><span>NEW</span> Products</h3>
				<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/.category-new-products">View All <i class="fa fa-chevron-right"></i></a>
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

			    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
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
						  <p>Brand Name: xxxxxx xxxxxx xxxxxx xxxxxx</p>
						  <?php echo get_the_tag_list('<small class="tags">',', ','</small>'); ?>
						</div>
				    </div>
			    </article>

			<?php endwhile; ?>
		</div>
	    <div class="col-md-9 featured">
		    <header>
			    <h3><span>Featured</span> Products</h3>
			    <a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/products/.category-featured-products">View All <i class="fa fa-chevron-right"></i></a>
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

			    <article class="product col-md-3 col" id="post-<?php the_ID(); ?>">
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
						  <p>Brand Name: xxxxxx xxxxxx xxxxxx xxxxxx</p>
						  <?php echo get_the_tag_list('<small class="tags">',', ','</small>'); ?>
						</div>				    </div>
			    </article>

			<?php endwhile; ?>
		</div>
    </section>

	<section id="about" class="row text-center">
		<div class="col-md-6">
			<h3>What We Do</h3>
			<h4>Generic Injectables. Standout Products.</h4>
			<p>We focus on producing quality products, customizing procurement solutions, and providing exemplary service. We are proud to offer an extensive product portfolio.</p>
			<a class="btn-default" href="#">Learn more <i class="fa fa-chevron-right"></i></a>
		</div>
		<div class="col-md-6">
			<h3>How We Do It</h3>
			<h4>Generic Injectables. Unique Capabilities.</h4>
			<p>We control our critical processes: supply chain, distribution, and product quality. We are vertically integrated—developing the majority of our products in-house and utilizing our dedicated development and regulatory affairs teams. As a result, we can maximize efficiency and provide a consistent supply of high-quality products at reasonable prices.</p>
			<a class="btn-default" href="#">View Products <i class="fa fa-chevron-right"></i></a>
		</div>
	</section>

	<section id="testimonials" class="row text-center">
	    <div class="col-md-8 col-md-offset-2">
			<h3>Testimonials</h3>
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'Testimonials',
					'posts_per_page' => 5,
					'orderby' => 'date',
					'order' => 'DESC' );
				$testimonials = new WP_Query( $args );
				while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

			    <article id="post-<?php the_ID(); ?>">
		            <a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail()) { ?>
					  	<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
		            <?php } else { ?>
						<img class="img-responsive" src="http://placehold.it/250x300/eeeeee/888888">
					<?php } ?>
					</a>
				    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				    <p><?php the_excerpt(); ?></p>
			    </article>

			<?php endwhile; ?>
		</div>
    </section>

    <section id="recognition" class="row text-center">
	    <h3 class="col-md-3">Recognition</h3>
	    <div class="col-md-3">
		    <img class="img-responsive" src="http://placehold.it/200x60/dddddd/888888">
		    2016 <br/>GENERIC PHARMACEUTICAL <br/>Supplier Of The Year
	    </div>
	    <div class="col-md-3">
		    <img class="img-responsive" src="http://placehold.it/200x60/dddddd/888888">
		    2014-2015 <br/>PERFORMANCE AWARD <br/>Pharmaceutical Supplier Under $25M
	    </div>
	    <div class="col-md-3">
		    <img class="img-responsive" src="http://placehold.it/200x60/dddddd/888888">
		    2016 <br/>GENERIC INJECTABLES <br/>Manufacturer Of The Year
	    </div>
    </section>

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
		jQuery('#carousel').carousel({
		    interval: false
		});
	});
</script>

<?php get_footer(); ?>