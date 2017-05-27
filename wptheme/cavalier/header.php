<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Cavalier</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    

        <link rel="apple-touch-icon" sizes="57x57" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="http://dev-cavalier.pantheonsite.io/wp-content/themes/cavalier/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


        <!-- Hier staan je eigen links en meta tags -->
        <?php wp_head(); ?>

            <style>
    #header{
        background-image: url('<?php header_image(); ?>');
        background-size:cover;
    }
    </style>
</head> 

<body data-spy="scroll">
    
    <!-- ******HEADER****** --> 
    <header id="header" class="header"> 
        <div class="container">            
            <h1 class="logo">

                <div class="custom_header">
                        
                    <div class="custom_logo">
                   <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                        } else {
                        echo '<img src="'.get_template_directory_uri().'/images/logo_cavalier.png">';
                        } 
                    ?>
                   
                
                </div>
                 <div class="logo-title ">
                        <span class="">Cavalier</span>
                    </div>
         
                </div>

            </h1><!--//logo-->          
        </div>
    </header><!--//header-->

                <!-- NAVBAR -->
             <nav class="main-nav center" role="navigation">           
                <div class="navbar-collapse">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'nav navbar-nav',
                        'container_class' => 'navbar-collapse collapse',
                        'container-id' => 'navbar-collapse')); ?>
                </div><!--//navbar-collapse-->
            </nav><!—//main-nav--> 
