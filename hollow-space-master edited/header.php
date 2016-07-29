<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
		<!-- CSS -->
		<link href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_directory'); ?>/css/app.css" rel="stylesheet" type="text/css" />	
	</head>
	<body <?php body_class(); ?>>
		<!-- Header -->
        <div class="header">
            <div class="container">
                <a href="http://hollow.space"><p class="title spaceship white">( <span class="darkPink thin windows">• • •</span> )</p></a>
            </div>
        </div>