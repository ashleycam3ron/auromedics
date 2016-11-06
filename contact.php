<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>

<h2>Directions</h2>

<?php $location = get_field('location');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>