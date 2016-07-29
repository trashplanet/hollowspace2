<?php 
	//Get cta meta
	$cta_description = get_post_meta($post->ID, 'cta_description', true);
	$cta_button_href = get_post_meta($post->ID, 'cta_button_href', true);
	$cta_button_text = get_post_meta($post->ID, 'cta_button_text', true);
	//Build the testimonial section if there is any cta meta
	if( $cta_description || $cta_button_href || $cta_button_text ):
?>
	<section id="testimonials" class="bgGray padT60 padB60 text-center">
		<div id="test">
			<div class="row">
				<div class="columns medium-12">
			    	<?php
			    		//Echo each if it exists 
			    		if ($cta_description) { echo "<p class='h6 white'>$cta_description</p>"; }
			    		if ($cta_button_href && $cta_button_text) { echo "<p class='text-center padT20'><a href='$cta_button_href' class='btnSolidDGray'>$cta_button_text</a></p>"; }
			    	?>
			    </div>
		    </div>
		</div>
	</section>
<?php endif; ?>