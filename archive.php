<?php get_header(); ?>

<div id="archive">
	<div class="container equal">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="col-xs-6 col-md-4 col-lg-3 col" id="post-<?php the_ID(); ?>">
		<div <?php post_class() ?>>
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) { ?>
		     	 <?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
			 <?php } else { ?>
					<img class="img-responsive" src="http://placehold.it/250x300/eeeeee/888888">
			 <?php } ?>
			</a>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</article>

	<?php endwhile; ?>
	<?php else : ?>
		<h2>Not Found</h2>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>