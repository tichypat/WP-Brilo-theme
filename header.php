<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <!-- Navigation -->
        <header>
            <nav class="navbar navbar-expand-md ">
                <div class="container d-md-flex justify-content-end">

                    <?php
                        // WP Nav function for displaying main navigation
                        wp_nav_menu([
                            'menu'            => 'top-menu',
                            'theme_location'  => 'top-menu',
                            'container'       => 'div', 
                            'container_id'    => 'top-menu-container', 
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id'         => 'top-menu',
                            'menu_class'      => 'navbar-nav sidenav ms-auto',
                            'depth'           => 2,
                        ]);
                    ?>	
                    
                    <!-- Mobile navigation -->
                    <button class="collapse-btn d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img loading="lazy" src="<?php echo get_template_directory_uri()."/assets/img/collapse.png" ?>" alt="Collapse icon">
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header d-flex justify-content-end">
                            <button class="collapse-btn-close" type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/collapse-close.png" ?>" alt="">
                            </button>
                        </div>
                        <div class="offcanvas-body d-flex justify-content-center align-items-center">
                            <?php
                                // WP Nav function for displaying mobile navigation
                                wp_nav_menu([
                                    'menu'            => 'top-menu',
                                    'theme_location'  => 'top-menu',
                                    'container'       => 'div', 
                                    'container_id'    => 'top-menu-container-mobile', 
                                    'menu_id'         => 'top-menu-mobile',
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 2,
                                ]);
                            ?>
                        </div>
                    </div>
                    <!-- /Mobile navigation -->
                </div>   
            </nav>	
        </header>