<?php 
	//Get testimonial meta
	$testimonial_quote = get_post_meta($post->ID, 'testimonial_quote', true);
	$testimonial_source = get_post_meta($post->ID, 'testimonial_source', true);
	//Build the testimonial section if there is any hero meta
	if( $testimonial_source || $testimonial_quote )
:?>
	<section id="testimonials" class="bgLGray padT60 padB60 text-center">
		<div id="test">
			<div class="row">
				<div class="columns medium-12">
			    	<?php
			    		//Echo each if it exists 
			    		if ($testimonial_quote) { echo "<p class='h6'>\"$testimonial_quote\"</p>"; }
			    		if ($testimonial_source) { echo "<p class='italic gray padT20'>$testimonial_source</p>"; } 
			    	?>
			    </div>
		    </div>
		</div>
	</section>
<?php endif ;?>