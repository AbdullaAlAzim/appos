  <?php
	$appos_map_embed_code = '';
	if( function_exists('cs_get_option')){
		$appos_map_embed_code = cs_get_option('appos_map_embed_code');
	}
   ?> 
<!--  Map Start -->
	<?php if(!empty($appos_map_embed_code)):?>
	    <section id="map" class="home-map">
	    	<iframe src="<?php echo esc_url($appos_map_embed_code); ?>" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</section>
	<?php endif; ?>
<!--  Map End -->