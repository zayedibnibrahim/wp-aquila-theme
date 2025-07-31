<?php
/**
 * Main Template File
 * 
 * @Package Aquila
 */
get_header();
?>

<div id="primary">
    <div id="main" class="site-main mt-5" role="main">
        <?php if ( have_posts() ) : ?>
        <div class="container">
            <?php if ( is_home() && ! is_front_page() ) : ?>
            <header class="mb-5">
                <h1><?php single_post_title(); ?></h1>
            </header>
            <?php endif; ?>

            <div class="row g-4">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <?php
                            get_template_part('template-parts/content');

                            ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else: get_template_part('template-parts/content-none'); ?>
            <?php endif; ?>

            <?php
                    aquila_pagination();
                ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>