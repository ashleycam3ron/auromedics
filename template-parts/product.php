<article class="entry col-md-11 single">
	<div class="col-md-4 text-center">
		<?php if( has_post_thumbnail() ) {
				$large = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
			<a class="fancybox product-img" rel="products" href="<?php echo $large[0]; ?>">
				<?php the_post_thumbnail('medium', array( 'class' => 'img-responsive' )); ?>
				<span class="zoom"></span>
			</a>
		<?php } else { ?>
			<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
		<?php } ?>

		<?php if( have_rows('product_images') ): ?>
			<ul class="thumbs">
			  <?php while( have_rows('product_images') ): the_row();
				$image = get_sub_field('image');
				$thumb = $image['sizes']['thumbnail']; ?>
				<li>
					<a class="fancybox" rel="products" href="<?php echo $image['url']; ?>">
						<img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
					</a>
				</li>
			  <?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<?php
			$safety = get_field('safety');
			$hdma = get_field('hdma');
			$wholesale = get_field('wholesale'); ?>
		<?php if( $safety ){ ?>
			<a class="pdf-lg" target="_blank" href="<?php echo $safety['url']; ?>"><span>Safety Data Sheet</span></a><?php } ?>
		<?php if( $hdma ){ ?>
			<a class="pdf-lg" target="_blank" href="<?php echo $hdma['url']; ?>"><span>HDMA</span></a><?php } ?>

			<p class="clear"><small><strong>For Package Inserts, please click on the NDC#</strong></small></p>
	</div>
	<div class="info col-md-8" style="padding-right: 0;">
		<?php the_content();?>

		<?php if( have_rows('table') ): ?>
		   	<?php while ( have_rows('table') ) : the_row();
			   	$description = get_sub_field('description');
			   	$brand = get_sub_field('brand');
			   	$class = get_sub_field('class');
			   	$physical_form = get_sub_field('physical_form');
			   	$unit_of_sale = get_sub_field('unit_of_sale');
			   	$pack_size = get_sub_field('pack_size');
			   	$case = get_sub_field('case');
			   	$rating = get_sub_field('rating');
			   	$barcode = get_sub_field('barcode');
			   	$controlled = get_sub_field('controlled');
			   	$additional = get_sub_field('additional');
			   	$storage = get_sub_field('storage'); ?>
			<h1><?php the_title();?></h1>
			<ul>
			   	<?php if( have_rows('description') ):
				   	$count = 0; ?>
			   	<li><strong>Presentation(s):</strong><?php while( have_rows('description') ): the_row();
					$count++;
					$presentation = get_sub_field('presentation'); ?><?php if ($count != 1){ ?><div><strong></strong><?php echo $presentation; ?></div><?php } else { echo $presentation; } ?><?php endwhile; ?>
				</li>
				<?php endif; ?>

			   	<?php if ($brand){ ?><li><strong>Reference Listed Drug:</strong><?php echo $brand; ?></li><?php } ?>
		   		<li><strong>Therapeutic Class: </strong><?php echo $class; ?><?php //echo get_the_tag_list('',', ',''); ?></l>
			</ul>

			<h2>Wholesaler Item Numbers</h2>
			<?php if( have_rows('wholesale') ): ?>
				<table id="wholesale" class="text-center col-md-12">
					<tr>
					  <thead>
						<th>Strength</th>
						<th>ABC		</th>
						<th>Cardinal</th>
						<th>McKesson</th>
						<th>M&amp;D	</th>
					  </thead>
					</tr>
			   <?php while ( have_rows('wholesale') ) : the_row();
				   	$strength = get_sub_field('strength');
					$abc = get_sub_field('abc');
				   	$cardinal = get_sub_field('cardinal');
				   	$mckesson = get_sub_field('mckesson');
				   	$md = get_sub_field('md'); ?>
					<tr>
			   		  <td><?php if ($strength){ ?><?php echo $strength; ?><?php } else { echo '–';} ?></td>
			   		  <td><?php if ($abc){ ?><?php echo $abc; ?>		  <?php } else { echo '–';} ?></td>
			   		  <td><?php if ($cardinal){ ?><?php echo $cardinal; ?><?php } else { echo '–';} ?></td>
			   		  <td><?php if ($mckesson){ ?><?php echo $mckesson; ?><?php } else { echo '–';} ?></td>
			   		  <td><?php if ($md){ ?><?php echo $md; ?>			  <?php } else { echo '–';} ?></td>
					</tr>
				<?php endwhile; ?>
				</table>
			<?php endif; ?>

			<h2>Unit of Sale</h2>
			<ul class="unit">
			  <li>
			   	<?php if ($physical_form){ ?>
			   		<span class="col-md-3"><strong>Physical Form</strong> <br/><?php echo $physical_form; ?></span><?php } ?>
			   	<?php if ($unit_of_sale){ ?>
			   		<span class="col-md-3"><strong>Unit of Sale</strong> <br/><?php echo $unit_of_sale; ?></span><?php } ?>
			   	<?php if ($pack_size){ ?>
			   		<span class="col-md-3"><strong>Pack Size</strong> <br/><?php echo $pack_size; ?></span><?php } ?>
			   	<?php if ($case){ ?>
			   		<span class="col-md-3"><strong>Case Quantity</strong> <br/><?php echo $case; ?></span><?php } ?>
			   		<div class="clear"></div>
			  </li>
		   	</ul>

		<?php if( have_rows('ndc') ): ?>
			<table id="NDC" class="text-center col-md-12">
				<tr>
				  <thead>
					<th>NDC <br/>#55150-</th>
					<th>Description		</th>
					<th>Strength		</th>
					<th>Concentration	</th>
					<th>Container Size	</th>
					<th>Fill Volume		</th>
					<th>Closure			</th>
				  </thead>
				</tr>
			   	<?php while ( have_rows('ndc') ) : the_row();
				   	$ndc = get_sub_field('ndc');
				   	$ndcLink = get_sub_field('ndc_link');
				   	$description = get_sub_field('description');
				   	$strength = get_sub_field('strength');
				   	$concentration = get_sub_field('concentration');
				   	$container_size = get_sub_field('container_size');
				   	$fill_volume = get_sub_field('fill_volume');
				   	$closure = get_sub_field('closure'); ?>

				<tr>
			   		<?php if ($ndc){ ?><td><a target="_blank" href="<?php echo $ndcLink; ?>"><?php echo $ndc; ?></a></td><?php } ?>
				   	<?php if ($description){ ?><td><?php echo $description; ?></td><?php } ?>
				   	<?php if ($strength){ ?><td><?php echo $strength; ?></td><?php } ?>
				   	<?php if ($concentration){ ?><td><?php echo $concentration; ?></td><?php } ?>
				   	<?php if ($container_size){ ?><td><?php echo $container_size; ?></td><?php } ?>
				   	<?php if ($fill_volume){ ?><td><?php echo $fill_volume; ?></td><?php } ?>
				   	<?php if ($closure){ ?><td><?php echo $closure; ?></td><?php } ?>
				</tr>
			    <?php endwhile; ?>
			</table>
		<?php endif; ?>

		<h2 class="accordion"><span class="plus">+</span>Additional Information</h2>

			 <?php if ($additional){ ?>
				<?php if( in_array('gluten', $additional) ) { ?>
				  <img src="<?php echo get_stylesheet_directory_uri();?>/images/gluten-free.png" alt="Gluten Free"/>
				<?php }
				if( in_array('latex', $additional) ) { ?>
				  <img src="<?php echo get_stylesheet_directory_uri();?>/images/latex-free.png" alt="Latex Free"/>
				<?php }
				if( in_array('preservative', $additional) ) { ?>
				  <img src="<?php echo get_stylesheet_directory_uri();?>/images/preservative-free.png" alt="Preservative Free"/>
				<?php } ?>
			<?php } ?>


			<div class="extra">
				<ul style="margin-top: 10px;">
			   	  <li>
				   	<?php if ($rating){ ?><span class="col-xs-4 col-sm-3"><strong>Bioequivalency Rating</strong> <br/><?php echo $rating; ?></span><?php } ?>
				   	<?php if ($barcode){ ?><span class="col-xs-4 col-sm-3"><strong>Bar Code Type</strong> <br/><?php echo $barcode; ?></span><?php } ?>
				   	<?php if ($controlled){ ?><span class="col-xs-4 col-sm-3"><strong>Controlled Substance Class</strong> <br/><?php echo $controlled; ?></span><?php } ?>
				   	<div class="clear"></div>
			      </li>
			   	<?php if ($storage){ ?><li><strong>Storage Requirements:</strong> <?php echo $storage; ?></li><?php } ?>
			   	</ul>
			    <small><p style="padding:6px 5px;">Our products are available from authorized distributors.<br/> For complete ordering information, please contact your local pharmaceutical distributor.</p></small>
		   	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
</article>

<script type="text/javascript">
    jQuery(document).ready(function() {
	    jQuery(".extra").css('display','none');
        jQuery(".accordion").click(function() {
	        jQuery(this).toggleClass('active');
	        jQuery('.extra').slideToggle('slow');
	    });
    });

	//superscript registered trademark
	jQuery('.info li').contents().filter(function() {
	    return this.nodeType === 3;
	}).replaceWith(function() {
	    return this.nodeValue.replace(/®/g, '<sup>$&</sup>');
	});
</script>