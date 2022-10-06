<?php
get_header();
?>
<main class="search-page">

    <section class="container">
        <?php if ( have_posts() ) : ?>
            <h2 class="mb-3">
                Výsledky vyhledávání pro: "<?php the_search_query(); ?>"
            </h2>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-12 col-md-6 mb-3">
                        <article class="post">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="thumbnail_polygon" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )) ?>')">
                                </div>
                            <?php } ?>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <p class="post-meta"><?php the_time('d M, Y'); ?> |
                            <?php
                                $categories = get_the_category();
                                $comma      = ', ';
                                $output     = '';
                                
                                if ( $categories ) {
                                    foreach ( $categories as $category ) {
                                        $output .= $category->cat_name ;
                                    }
                                    
                                }
                                if($output == "") {
                                    $output = "Stránka";
                                } 
                                echo $output;
                                ?>
                            </p>
                            <p>
                                <a href="<?php echo get_permalink() ?>">
                                    <?php
                                        echo substr(get_the_excerpt(), 0, 400); 
                                        
                                     ?>
                                </a>
                            </p>
                        </article>
                    </div>
                <?php endwhile; ?>
                    </div>
        <?php
        else :
            ?>
            
                <div class="text-center">
                    <span>Žádné výsledky. Zkuste prosím něco jiného.</span>
                </div>

            <?php
        endif;
        ?>
    </section>
</main>
 

<?php
get_footer(); 
?>
