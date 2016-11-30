<?php get_header();?>
<?php $image = get_field('header_image');
	if( !empty($image) ){ ?>
	<div id="banner" class="text-center" style="background: url(<?php echo $image['url']; ?>) no-repeat top center;background-size: cover;">
		<div class="col-sm-6 col-sm-offset-3">
		  <?php if (get_field('header_title')){ ?> <h2><?php the_field('header_title'); ?></h2> <?php } ?>
		  <?php if (get_field('header_text')){ ?> <p><?php the_field('header_text'); ?></p> <?php } ?>
		</div>
	</div>
<?php } ?>

	<section class="container-fluid" <?php if ( has_post_thumbnail() ) { ?>style="padding-top:0;padding-left:0;"<?php } ?>>
		<?php while(have_posts()) : the_post();?>
		<?php if ( in_category(array(1,5,6)) ) {
				get_template_part('template-parts/product');
			} else {
			  if (has_post_thumbnail()){ ?>
			    <h1 class="hidden"><?php the_title();?></h1>
				<aside class="hidden-xs col-sm-4 col-md-3" style="padding-left: 0;">
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
				</aside>
				<article class="entry col-sm-7 col-md-6" style="padding-top:5%;margin-left: 4%;">
					<?php the_content();?>
				</article>
		<?php } else { ?>
			<article class="entry col-md-7 col-md-offset-3">
				<?php the_content();?>
			</article>
		<?php }} ?>
		<?php endwhile;?>
	</section>

<?php get_footer();?>