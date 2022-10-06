<?php get_header(); the_post(); ?>

    <main class="page">
        <!-- Main Banner -->
        <section class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12 d-flex banner justify-content-center align-items-center">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>