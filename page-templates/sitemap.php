<?php
/* Template Name: Sitemap Page */

get_header();
$image = get_field('header_image');
	if( !empty($image) ){ ?>
<div id="banner" class="text-center" style="background: url(<?php echo $image['url']; ?>) no-repeat top left;background-size: contain;">
	<?php if (get_field('header_title')){ ?> <h2><?php the_field('header_title'); ?></h2> <?php } ?>
	<?php if (get_field('header_text')){ ?> <p><?php the_field('header_text'); ?></p> <?php } ?>
</div>
<?php } ?>
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