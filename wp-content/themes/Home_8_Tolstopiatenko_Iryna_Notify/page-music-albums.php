<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php the_post_thumbnail('full', 'class=round-img'); ?>

            <div class="title">LIST OF TYPE OF MUSIC | MUSIC GENRES</div>

            <?php
            $args = [
                'post_type' => 'music',
                'nopaging' => true,
            ];
            query_posts($args);

            while (have_posts()) : the_post();

                get_template_part('template-parts/content-music', 'music');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
