<?php /* All Products */

wp_enqueue_script( 'isotope', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js', array('jquery'),  true );
wp_enqueue_script( 'isotope-fix', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.0.0/imagesloaded.pkgd.min.js', array('jquery'),  true );

get_header(); ?>

<div id="products">
	<section>
		<img class="img-responsive" src="http://placehold.it/1400x500/eeeeee/888888">
	</section>
	<div class="container-fluid">

<!--
		<section class="col-md-10 col-md-offset-1 new">
		    <header>
			    <h3><span>NEW</span> Products</h3>
			</header>
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'New Products',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC' );
				$new = new WP_Query( $args );
				while ( $new->have_posts() ) : $new->the_post(); ?>

			    <article class="product col-xs-6 col-md-3 col" id="post-<?php the_ID(); ?>">
		            <a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail()) { ?>
					  	<?php echo get_the_post_thumbnail($post->ID, 'medium', array( 'class' => 'img-responsive' )); ?>
		            <?php } else { ?>
						<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
					<?php } ?>
					</a>
				    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				    <p><?php the_excerpt(); ?>
				    Brand Name: ---<br/>
xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx</p>
			    </article>

			<?php endwhile; ?>
		</section>

	    <section class="col-md-10 col-md-offset-1 featured">
		    <header>
			    <h3><span>Featured</span> Products</h3>
		    </header>
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'Featured Products',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC' );
				$featured = new WP_Query( $args );
				while ( $featured->have_posts() ) : $featured->the_post(); ?>

			    <article class="product col-xs-6 col-md-3 col" id="post-<?php the_ID(); ?>">
		            <a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail()) { ?>
					  	<?php echo get_the_post_thumbnail($post->ID, 'medium', array( 'class' => 'img-responsive' )); ?>
		            <?php } else { ?>
						<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
					<?php } ?>
					</a>
				    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				    <p><?php the_excerpt(); ?>
				    Brand Name: ---<br/>
xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx xxxxxx</p>
			    </article>

			<?php endwhile; ?>
		</section>
-->
		<aside id="sidebar-left" class="col-md-3">
			Filter by keyword
			<?php //get_search_form(); ?>

			<input type="text" class="quicksearch" placeholder="Search" />

			<h3>Therapeutic Class</h3>
			<?php $tags = get_tags();
			$html = '<ul id="filters2">';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );

				$html .= "<li><label><input type='checkbox' value='.tag-{$tag->slug}'/>";
				$html .= "{$tag->name}</label></li>";
			}
			$html .= '</ul>';
			echo $html; ?>
		</aside>

		<section class="col-md-9 all">
		    <header>
			    <h3><span>All</span> Products</h3>

			    <ul id="filters">
					<li><a href="#" data-filter="*" class="selected btn-default">All</a></li>
					<li><a href="#" data-filter=".category-new-products" class="btn-default">New</a></li>
					<li><a href="#" data-filter=".category-featured-products" class="btn-default">Featured</a></li>
				</ul>
				<span>Sort by</span>
				<select class="button-group sort-by-button-group">
				  <option data-sort-by="original-order">Alphabetical (A-Z)</option>
				  <option data-option-value="false">Alphabetical (Z-A)</option>
				  <option data-option-value="false">Newest</option>
				  <option data-option-value="false">Oldest</option>
				</select>

			    <i class="grid fa fa-th-large"><p class="sr-only sr-only-focusable">Grid View</p></i>
			    <i class="list fa fa-th-list"><p class="sr-only sr-only-focusable">List View</p></i>
		    </header>

		    <div id="grid">
		    <?php
			    $args = array(
					'post_type' => 'post',
					'category_name' => 'Products',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC' );
				$all = new WP_Query( $args );
				while ( $all->have_posts() ) : $all->the_post(); ?>

			<article <?php post_class(array('col-xs-6','col-md-4')); ?> id="post-<?php the_ID(); ?>">
				<div class="preview">
					<?php if (in_category(6)){?><i class="fa fa-star"></i><?php } ?>
					<?php if (in_category(5)){?><span class="new">New</span><?php } ?>
					<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
				     	 <?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
					 <?php } else { ?>
							<img class="img-responsive" src="http://placehold.it/320x400/ffffff/888888">
					 <?php } ?>
					</a>
					<div>
					  <h2><a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					  <?php if( have_rows('table') ): while ( have_rows('table') ) : the_row();
						  $brand = get_sub_field('brand');
						  if ($brand){ ?>
					 	 <p>Brand: <?php echo $brand; ?></p>
					  <?php } else { ?>
					  	 <p>Brand Name: xxxxxx xxxxxx xxxxxx xxxxxx</p>
					   <?php }
						 endwhile; endif; ?>
					  <?php echo get_the_tag_list('<small class="tags">',', ','</small>'); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; ?>
		</section>

	</div>
</div>


<script>
$(document).ready(function() {
	$('.category-products').addClass('grid');});
    $('i.list').click(function(event){event.preventDefault();$('.category-products').removeClass('grid').addClass('list');});
    $('i.grid').click(function(event){event.preventDefault();$('.category-products').removeClass('list').addClass('grid');
});

$("#filters :first-child a").addClass('selected');
	// Store # parameter and add "." before hash
   // var hashID = "." + window.location.hash.substring(1);

    // quick search regex
	var qsRegex;

    var $container = $('#grid'); //The ID for the list with all the blog posts
	$container.isotope({ //Isotope options, 'item' matches the class in the PHP
		itemSelector : '.category-products',
  		layoutMode : 'fitRows',
	}).imagesLoaded(); //Isotope fix - make sure images are loaded before initializing

	//Add the class selected to the item that is clicked, and remove from the others
	var $optionSets = $('#filters, #filters2'),
		$optionLinks = $optionSets.find('a');
		$optionLinks.click(function(){
	var $this = $(this);
	// don't proceed if already selected
	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('#filters, #filters2');
		$optionSets.find('.selected').removeClass('selected');
		$this.addClass('selected');
	//When an item is clicked, sort the items.
	 var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });
	return false;
	});

//Checkbox filters
   $checkboxes = $('#filters2 input');
   $checkboxes.change(function(){
	    var filters = [];
	    // get checked checkboxes values
	    $checkboxes.filter(':checked').each(function(){
	      filters.push( this.value );
	    });

	    filters = filters.join(', ');
	    $container.isotope({ filter: filters });
	  });

//Search filter
	// use value of search field to filter
	var $quicksearch = $('.quicksearch').keyup( debounce( function() {
	  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
	  $container.isotope();
	}, 200 ) );

	// debounce so filtering doesn't happen every millisecond
	function debounce( fn, threshold ) {
	  var timeout;
	  return function debounced() {
	    if ( timeout ) {
	      clearTimeout( timeout );
	    }
	    function delayed() {
	      fn();
	      timeout = null;
	    }
	    timeout = setTimeout( delayed, threshold || 100 );
	  }
	}

</script>
<?php get_footer(); ?>