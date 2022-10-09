<?php get_header(); the_post(); ?>

    <main class="front-page">

        <!-- Main header -->
        <section id="about" class="header-about container py-5 my-5" data-aos="fade-down">
            <div class="row no-gutters my-3 my-md-5 d-flex flex-column-reverse flex-md-row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center my-3 my-md-0">
                    <h1 class="m-0">Jack Jackson</h1>
                    <p class="my-4">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus 
                        id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    </p>
                    <div class="col-12">
                        <a class="btn btn-primary" href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end py-3">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Picture of Jack Jackson">
                </div>
            </div>
        </section>
        <!-- /Main header -->

        <!-- Portfolio -->
        <section id="work" class="portfolio container py-5 my-5" data-aos="fade-up">
            <div class="col-12">
                <h2>What I did</h2>
            </div>
            <div class="row no-gutters">
                <?php
                    //WP Query for portfolio posts
                    $args = array(  
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'orderby'   => array(
                            'date' =>'ASC',
                        )
                    );
                
                    $loop = new WP_Query( $args ); 

                    if ( $loop->have_posts() ) {
                        
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        ?>
                            <div class="col-12 col-md-4 portfolio-item my-3">
                                <div class="row no-gutters">
                                    <a href="#">
                                        <div class="col-12 portfolio-item-image p-0 position-relative">                                   
                                            <div class="portfolio-item-image-rectangle position-absolute"></div>
                                            <img loading="lazy" src="<?php the_post_thumbnail_url() ?>" alt=" <?php the_title() ?> <?php echo get_the_excerpt() ?>" class="img-fluid">
                                        </div>
                                        <div class="col-12 portfolio-item-info px-3 py-4">
                                            <h3><?php the_title() ?></h3>
                                            <?php the_excerpt() ?>                                           
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php 
                        endwhile;

                    } else {
                        echo "<h4>No projects yet</h4>";
                    }
                    wp_reset_postdata(); 
                ?>
            </div>
        </section>
        <!-- /Portfolio -->

    </main>

<?php get_footer(); ?>