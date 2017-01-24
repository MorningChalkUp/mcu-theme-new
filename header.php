<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="canonical" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link type="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg"  media="screen,projection"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?php echo get_template_directory_uri(); ?>/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/immybox/immybox.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/getmdl-select.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="https://use.typekit.net/ydo2tvd.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_template_part( 'templates/fb' ); ?>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <?php get_template_part( 'templates/nav' ); ?>