<?php
/**
 * @package Ion
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="apple-mobile-web-app-capable" content="yes">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php $current_user = wp_get_current_user(); ?>
	
	
	<div class="bar bar-header bar-energized">
		<?php if ( is_user_logged_in() ) { ?>
			<h1 class="title">Welcome, <?php echo esc_html( $current_user->display_name ); ?></h1>
		<?php } else { ?>
			<h1 class="title">Coverks</h1>
		<?php } ?>
	</div>
	
	<div class="container">