<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('-', true, 'right');?><?php bloginfo('name');?></title>
  <?php $favicon_path = get_template_directory_uri().'/dist/images/favicons/'; ?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_path; ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_path; ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_path; ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $favicon_path; ?>/site.webmanifest">
  <link rel="mask-icon" href="<?php echo $favicon_path; ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

	<?php get_template_part('template-parts/header/header', 'generic');?>