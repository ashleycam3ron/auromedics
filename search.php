<?php get_header(); ?>
<div id="search" class="container">
	<section class="col-md-10 col-md-offset-1">
		<h1><?php printf( __( 'Search Results for: %s', 'auromedics' ), get_search_query() ); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt("Read More"); ?>
            </article>
		<?php endwhile; else : ?>

			<h1><?php _e( 'Nothing posts found.', 'auromedics' ); ?></h1>
			<article>
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
					<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'auromedics' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
				<?php elseif ( is_search() ) : ?>
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ashleycameron' ); ?></p>
					<?php get_search_form(); ?>
				<?php else : ?>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ashleycameron' ); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</article>
	<?php endif; ?>
	</section>
</div>
<?php get_footer(); ?>