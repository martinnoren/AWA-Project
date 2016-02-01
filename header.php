<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>AWA-Project</title>
		<?php wp_head(); ?>
	</head>

	<?php 

		if( is_front_page() ):
			$awa_classes = array('awa-class', 'my-class' );
		else:
			$awa_classes = array( 'no-awa-class');
		endif;

	?>	

	<body <?php body_class( $awa_classes ); ?>>

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
