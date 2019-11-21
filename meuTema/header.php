<!doctype html>
<html <?php language_attributes(); ?>>
  <head> 
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="container">
        <div class="row align-items-center my-5">

            <div class="col-md-6 col-sm-12">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
                }else{
                    echo '<h1 class="display-4">'. get_theme_mod('header_title', 'Titulo do Cabeçalho') .'</h1>';
                    echo '<p class="lead">'. get_theme_mod('header_txt', 'Texto do cabeçalho') .'</p>';
                }
                ?>
                
            </div>

            <div class="col-md-4 offset-md-2 col-sm-12">
                <?php //Adiciona o formulario de busca 
                    dynamic_sidebar('busca');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                
                <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-4 rounded" role="navigation">
                    <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                        
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'principal',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                    </div>
                </nav>
            </div>
        </div>