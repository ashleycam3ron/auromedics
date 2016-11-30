<?php /* All Products */
wp_enqueue_script( 'isotope', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js', array('jquery'),  true );
wp_enqueue_script( 'isotope-fix', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.0.0/imagesloaded.pkgd.min.js', array('jquery'),  true );

get_header(); ?>

<div id="products" class="container-fluid">
	<?php $image = get_field('header_image', 'category_1');
		if( !empty($image) ){ ?>
		<section id="banner" style="background: url(<?php echo $image['url']; ?>) no-repeat center left #def1ef;background-size: cover;">
			<article class="col-md-5 col-md-offset-6">
				<?php if (get_field('header_title', 'category_1')){ ?> <h1><?php the_field('header_title', 'category_1'); ?></h1> <?php } ?>
				<?php if (get_field('header_text', 'category_1')){ ?> <h2><?php the_field('header_text', 'category_1'); ?></h2> <?php } ?>
				<?php echo category_description( $category_id ); ?>
			</article>
		</section>
	<?php } ?>

		<aside id="sidebar-left" class="hidden-xs col-md-3">
			<p>Filter by keyword</p>
			<p style="margin: 0;"><input type="text" class="quicksearch" placeholder="Search" /></p>
			<hr>
			<h3>Therapeutic Class</h3>
			<?php $tags = get_tags();
			$html = '<ul id="filters2">';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
				$html .= "<li><label><input type='checkbox' value='.tag-{$tag->slug}'/>";
				$html .= "{$tag->name}<span class='count pull-right'>{$tag->count}<span></label></li>";
			}
			$html .= '</ul>';
			echo $html; ?>
		</aside>

		<section class="col-md-9 all">
		    <header style="border: 0;border-bottom: 1px solid #ebeced;">
			    <h3><span>All</span> Products</h3>
			    <ul id="filters">
					<li><a href="#" data-filter="*" class="selected btn-default">All</a></li>
					<li><a href="#" data-filter=".category-featured-products" class="btn-default">Featured</a></li>
				</ul>
				<a href="http://ashley-cameron.com/clients/auromedics/wordpress/wp-content/uploads/AuroMedics-Corporate-Product-Catalog.pdf" target="_blank" class="download btn-default1">Download Product Catalog</a>
		    </header>

		    <div id="grid">
		    <?php $args = array(
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
					 	 <p>Brand: <span class="brand"><?php echo $brand; ?></span></p>
					  <?php } else { ?>
					  	 <p>Brand Name: xxxxxx xxxxxx xxxxxx xxxxxx</p>
					   <?php }
						 endwhile; endif; ?>
					  <?php echo get_the_tag_list('<small class="tags">',', ','</small>'); ?>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<?php endwhile; ?>
		</section>
</div> <!-- end #products -->

<script>
	$("input[type='checkbox']").change(function(){
	    if($(this).is(":checked")){
	        $(this).parent().addClass("active");
	    }else{
	        $(this).parent().removeClass("active");
	    }
	});
</script>
<script>
//superscript registered trademark
jQuery('.preview').contents().filter(function() {
    return this.nodeType === 3;
}).replaceWith(function() {
    return this.nodeValue.replace(/®/g, '<sup>$&</sup>');
});

$("#filters :first-child a").addClass('selected');
	// Store # parameter and add "." before hash
   // var hashID = "." + window.location.hash.substring(1);

	// quick search regex
	var qsRegex;

	var $container = $('#grid').imagesLoaded( function() {
	  // init Isotope after all images have loaded
	  $container.isotope({
	    itemSelector : '.category-products',
	  	layoutMode : 'fitRows',
	  	filter: function() {
		    return qsRegex ? $(this).text().match( qsRegex ) : true;
		  },
	  });
	});

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