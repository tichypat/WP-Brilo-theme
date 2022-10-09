<?php get_header(); ?>
    <main class="404 py-5 my-5">
        <section class="container">
            <div class="row">
                <div class="col-12 col-md-12 text-center">
                    <h1><?php _e( '404 page not found' ); ?></h1>
                    <a href="<?php echo get_site_url() ?>">Back to homepage</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>