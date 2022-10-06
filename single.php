<?php get_header(); the_post(); ?>

<main class="single mb-5 pb-5">
    <section class="container-fluid">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1>
                        <?php the_title() ?>        
                    </h1>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>