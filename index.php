<?php get_header();?>
	<section class="container-fluid">
		<?php while(have_posts()) : the_post();?>

		<?php if ( in_category(array(1,5,6)) ) {
		    	include 'product.php';
			} else { ?>
			<article class="entry col-md-10 col-md-offset-1">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</article>
		<?php } ?>
		<?php endwhile;?>
	</section>
<?php get_footer();?>