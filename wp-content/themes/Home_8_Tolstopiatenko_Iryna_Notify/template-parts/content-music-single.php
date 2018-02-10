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

    <section class="container">
        <div class="background-editable-flat-reach">
        <?php the_post_thumbnail('full', 'class=round-img'); ?>
        <div class="title">LIST OF TYPE OF MUSIC | MUSIC GENRES</div>
        <a href="<?php the_permalink();?>"><?php the_title() ?></a>
        <p><?php the_field('single')?></p>
        <p><?php the_field('about')?></p>

    </section>

</article><!-- #post-<?php the_ID(); ?> -->
