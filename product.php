<article class="entry col-md-11">
	<div class="col-md-4">
		<?php if( has_post_thumbnail() ) {
			the_post_thumbnail('medium', array( 'class' => 'img-responsive' ));
			} else { ?>
			<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
			<?php } ?>
		<?php
			$safety = get_field('safety');
			$hdma = get_field('hdma');
			$wholesale = get_field('wholesale');
		?>
		<?php if( $safety ){ ?><a class="pdf" href="<?php echo $safety['url']; ?>">Safety Data Sheet</a><?php } ?>
		<?php if( $hdma ){ ?><a class="pdf" href="<?php echo $hdma['url']; ?>">HDMA</a><?php } ?>
		<?php if( $wholesale ){ ?><a class="pdf" href="<?php echo $wholesale['url']; ?>">Wholesale Item Number</a><?php } ?>
	</div>
	<div class="col-md-8">
		<h1><?php the_title();?></h1>
		<?php the_content();?>

		<?php if( have_rows('table') ): ?>
			<table>
			   	<?php while ( have_rows('table') ) : the_row();
				   	$description = get_sub_field('description');
				   	$generic = get_sub_field('generic');
				   	$brand = get_sub_field('brand');
				   	$therapeutic = get_sub_field('therapeutic');
				   	$physical_form = get_sub_field('physical_form');
				   	$unit_of_sale = get_sub_field('unit_of_sale');
				   	$rating = get_sub_field('rating');
				   	$barcode = get_sub_field('barcode');
				   	$controlled = get_sub_field('controlled');
				   	$additional = get_sub_field('additional');
				   	$storage = get_sub_field('storage');
				 ?>
				<tr><th colspan="2"><h2><?php the_title();?></h2></th></tr>
			   	<?php if ($description){ ?><tr><td><strong>Product Description</strong></td><td><?php echo $description; ?></td></tr><?php } ?>
			   	<?php if ($generic){ ?><tr class="even"><td><strong>Generic Name</strong></td><td><?php echo $generic; ?></td></tr><?php } ?>
			   	<?php if ($brand){ ?><tr><td><strong>Brand Name / Company</strong></td><td><?php echo $brand; ?></td></tr><?php } ?>
			   	<tr class="even"><td><strong>Therapeutic class</strong></td><td><?php echo get_the_tag_list('',', ',''); ?></td></tr>


			   	<?php if ($physical_form){ ?><tr><td><strong>Physical Form</strong></td><td><?php echo $physical_form; ?></td></tr><?php } ?>
			   	<?php if ($unit_of_sale){ ?><tr class="even"><td><strong>Unit of Sale</strong></td><td><?php echo $unit_of_sale; ?></td></tr><?php } ?>
			   	<?php if ($rating){ ?><tr><td><strong>Bioequivalency Rating</strong></td><td><?php echo $rating; ?></td></tr><?php } ?>
			   	<?php if ($barcode){ ?><tr class="even"><td><strong>Bar Code Type</strong></td><td><?php echo $barcode; ?></td></tr><?php } ?>
			   	<?php if ($controlled){ ?><tr><td><strong>Controlled Substance Class</strong></td><td><?php echo $controlled; ?></td></tr><?php } ?>
			   	<?php if ($additional){ ?>
			   	<tr class="even"><td><strong>Additional Information</strong></td>
				   	<td>
				   	<?php
					   	$additional = get_sub_field('additional');

					   	if( in_array('gluten', $additional) ) { ?>
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/gluten-free.png" alt="Gluten Free"/>
						<?php }
						if( in_array('latex', $additional) ) { ?>
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/latex-free.png" alt="Latex Free"/>
						<?php }
						if( in_array('preservative', $additional) ) { ?>
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/preservative-free.png" alt="Preservative Free"/>
						<?php }

/*
						$field = get_sub_field_object('additional');
						$value = $field['value'];
						$choices = $field['choices'];

						if( $value ): ?>
							<?php foreach( $value as $v ): ?>
								<?php echo $choices[ $v ]; ?><br/>
							<?php endforeach; ?>
						<?php endif;
*/ ?>
					</td>
				</tr>
				<?php } ?>
			   	<?php if ($storage){ ?><tr><td><strong>Storage Requirements</strong></td><td><?php echo $storage; ?></td></tr><?php } ?>
			    <?php endwhile; ?>
			</table>
		<?php endif; ?>
	</div>
	<?php if( have_rows('ndc') ): ?>
			<table id="NDC" class="text-center">
			   	<?php while ( have_rows('ndc') ) : the_row();
				   	$ndc = get_sub_field('ndc');
				   	$ndcLink = get_sub_field('ndc_link');
				   	$description = get_sub_field('description');
				   	$strength = get_sub_field('strength');
				   	$concentration = get_sub_field('concentration');
				   	$container_size = get_sub_field('container_size');
				   	$fill_volume = get_sub_field('fill_volume');
				   	$closure = get_sub_field('closure');
				   	$unit_of_sale = get_sub_field('unit_of_sale');
				 ?>
				<tr>
					<thead>
						<th>NDC #			</th>
						<th>Description		</th>
						<th>Strength		</th>
						<th>Concentration	</th>
						<th>Container Size	</th>
						<th>Fill Volume		</th>
						<th>Closure			</th>
						<th>Unit of Sale	</th>
					</thead>
				</tr>
				<tr>
			   		<?php if ($ndc){ ?><td><a target="_blank" href="<?php echo $ndcLink; ?>"><?php echo $ndc; ?></a></td><?php } ?>
				   	<?php if ($description){ ?><td><?php echo $description; ?></td><?php } ?>
				   	<?php if ($strength){ ?><td><?php echo $strength; ?></td><?php } ?>
				   	<?php if ($concentration){ ?><td><?php echo $concentration; ?></td><?php } ?>
				   	<?php if ($container_size){ ?><td><?php echo $container_size; ?></td><?php } ?>
				   	<?php if ($fill_volume){ ?><td><?php echo $fill_volume; ?></td><?php } ?>
				   	<?php if ($closure){ ?><td><?php echo $closure; ?></td><?php } ?>
				   	<?php if ($unit_of_sale){ ?><td><?php echo $unit_of_sale; ?></td><?php } ?>
				</tr>
			    <?php endwhile; ?>
			</table>
		<?php endif; ?>

		<p><strong>For Package Inserts, please click on the NDC#</strong></p>
		<p>Our products are available from authorized distributors.<br/>
		For complete ordering information, please contact your local pharmaceutical distributor.</p>

</article>