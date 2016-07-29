<?php 
	$slide_num = 1;
	//Get first slide meta
	${'slide_' . $slide_num . '_bg_img'} = get_post_meta($post->ID, 'slide_'.$slide_num.'_bg_img', true);
	${'slide_' . $slide_num . '_title'} = get_post_meta($post->ID, 'slide_'.$slide_num.'_title', true);
	${'slide_' . $slide_num . '_text'} = get_post_meta($post->ID, 'slide_'.$slide_num.'_text', true);
	${'slide_' . $slide_num . '_button_text'} = get_post_meta($post->ID, 'slide_'.$slide_num.'_button_text', true);
	${'slide_' . $slide_num . '_button_href'} = get_post_meta($post->ID, 'slide_'.$slide_num.'_cta_href', true);
	//Make the hero section if there is any slide meta
	while( ${'slide_' . $slide_num . '_title'} || ${'slide_' . $slide_num . '_text'} || ${'slide_' . $slide_num . '_button_text'} || $slide_1_cta_href || ${'slide_' . $slide_num . '_bg_img'} ) {
		echo ${'slide_' . $slide_num . '_bg_img'};
		$slide_num++;
	}
?>