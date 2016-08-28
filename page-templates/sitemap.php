<?php
/* Template Name: Sitemap Page */

get_header();?>
	<section id="hero" class="row">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>
		<div class="col-md-5 col-md-offset-6">
			<?php the_content(); ?>
			<a class="btn-default" href="#">Our company values <i class="fa fa-chevron-right"></i></a>
		</div>
    </section>
	<section class="container-fluid">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="entry col-sm-8 col-sm-offset-2" id="post-<?php the_ID(); ?>">
            	<h1 class="title"><?php the_title(); ?></h1>
	            <h2>Menu</h2>
                <?php wp_nav_menu( array('menu' => 'main' )); ?>
				<h2>Pages</h2>
				<ul>
				<?php wp_list_pages(array( 'exclude' => '', 'title_li' => '', ) ); ?>
				</ul>
                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            </article>
		<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>