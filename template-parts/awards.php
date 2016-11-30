<section id="awards" class="row text-center">
	<h2 class="col-md-3">Recognition</h2>
	<?php if( have_rows('awards', 147) ): ?>
	<ul>
	<?php while( have_rows('awards', 147) ): the_row();
		$logo = get_sub_field('logo', 147);
		$year = get_sub_field('year', 147);
		$award = get_sub_field('name_of_award', 147); ?>

		<li class="col-xs-12 col-sm-4 col-md-3">
			<img class="img-responsive" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title'] ?>" />
		    <h4><?php echo $year; ?></h4>
		    <p><?php echo $award; ?></p>
		</li>
	<?php endwhile; ?>
	</ul>
	<div class="clear"></div>

<?php endif; ?>
</section>
