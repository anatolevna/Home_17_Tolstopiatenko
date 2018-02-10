<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="conteiner notify-adn-upd">
        <div class="background-editable-flat-reach">
            <img class="img-music" <?php the_post_thumbnail('full', 'class=round-img'); ?>

            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
            <p><?php the_field('artist') ?></p>
            <p><?php the_field('genre') ?></p>
            <p><?php the_field('label') ?></p>
            <p><?php the_field('produser') ?></p>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
