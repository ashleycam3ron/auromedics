<section id="testimonials" class="row text-center">
	<div id="carousel1" class="carousel slide col-md-8 col-md-offset-2">
		<h2>Testimonials</h2>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes.png " alt="quote" />
	    <?php $testimonials = new WP_Query(array(
				'post_type' => 'post',
				'cat'		=> 7,
				'posts_per_page' => 4,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				));
			$count = 0; ?>

			<ol class="carousel-indicators">
			    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
			    <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel1" data-slide-to="<?php echo $count++; ?>"></li>
			    <?php endwhile;  wp_reset_postdata(); ?>
			</ol>

			<div class="carousel-inner">
	          <?php
				$count = 0;
	            while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
				<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
				     <p><?php the_content();?></p>
				     <h3><?php the_title();?></h3>
				     <p class="customer"><?php the_field('customer');?><br/>
				     <?php the_field('location');?></p>
				</div><!-- item active -->
				<?php endwhile; wp_reset_postdata(); ?>
	        </div>


	        <a class="carousel-control prev" href="#carousel1" data-slide="prev"></a>
			<a class="carousel-control next" href="#carousel1" data-slide="next"></a>
		</div><!-- end #carousel -->
    </section>