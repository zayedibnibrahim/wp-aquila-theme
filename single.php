
<?php

/**
 * Single post Template
 * 
 * @package Aquila
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

                <div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div>
                            <?php
                            get_template_part('template-parts/content');

                            ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else: get_template_part('template-parts/content-none');
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>
