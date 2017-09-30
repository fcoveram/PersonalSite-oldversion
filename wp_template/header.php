<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
   if(is_home()){
     echo "";
   }
   elseif(is_404()){
     echo "404 (Página no encontrada) - ";
   }
   elseif(is_search()){
     echo "Resultados para ";
     echo wp_specialchars($s, 1);
     echo " - ";
   }
   else{
    echo wp_title();
    echo " - ";
   }
   echo bloginfo('name');
   ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="keywords">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
        wp_head(); ?>
<script src="https://use.typekit.net/obk4uws.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/what-input.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/foundation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
<?php wp_get_archives('type=monthly&format=link'); ?>
</head>
<body <?php body_class($class); ?> >
    <!-- <main id="wrapper" role="main">-->
