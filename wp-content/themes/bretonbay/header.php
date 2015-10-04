<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700|Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/Hover/css/hover.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal-default-theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="navigation">
    <div class="underlay">
      <div class="container">
        <div class="header-logo col-xs-12 col-sm-12 col-md-3">
          <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/breton-bay-logo.png"></a>
        </div>
        <nav class="primary-navigation col-xs-12 col-sm-12 col-md-9">
          <?php wp_nav_menu( array( 'menu_class' => 'nav-links list-unstyled list-inline', 'theme_location' => 'primary' ) ); ?>
        </nav>
      </div>
    </div>
  </div>
