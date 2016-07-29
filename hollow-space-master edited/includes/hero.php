<?php 
	//Get hero meta
	$hero_title = get_post_meta($post->ID, 'hero_title', true);
	$hero_description = get_post_meta($post->ID, 'hero_description', true);
	$hero_button_text = get_post_meta($post->ID, 'hero_button_text', true);
	$hero_button_href = get_post_meta($post->ID, 'hero_button_href', true);
	//Make the hero section if there is any hero meta
	if( $hero_title || $hero_description || $hero_button_text || $hero_button_href ):
?>
	<section id="hero" class="bgGray padT60 padB60" post-id="<?php echo "$post->ID" ?>">
		<div class="header">
			<div class="row">
				<div class="columns medium-12">
					<?php
					    //Echo each if it exists
					    if ($hero_title) { echo "<h1 class='entry-title text-center'>$hero_title</h1>"; }
						if ($hero_description) { echo "<p class='h6 text-center padT20'>$hero_description</p>";	}
						if ($hero_button_text && $hero_button_href) { echo "<p class='text-center padT20'><a href='$hero_button_href' class='btnSolidDGray'>$hero_button_text</a></p>"; }
					?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>