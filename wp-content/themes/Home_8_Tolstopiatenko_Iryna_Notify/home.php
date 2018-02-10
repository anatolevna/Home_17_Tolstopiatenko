<?php


get_header(); ?>

    <section id="post" class="background-editable-flat-reach">
        <div class="container">
            <ul class="gear-star-earth">
                <?php $args = array('post_type' => 'gear_star_earth', 'posts_per_page' => 3);
                $our = new WP_Query($args); ?>
                <?php while ($our->have_posts()) : $our->the_post(); ?>
                    <li class="card">
                        <div class="box-img">
                            <?php the_post_thumbnail('full', 'class=round-img'); ?>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </section>
    <!--2-->
    <section class="background-send">
        <div class="container clearfix">
            <div class="notify-adn-upd">
                <h2>Get Notified Of Any Updates!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla nisl congue
                    congue. Maecenas nec condimentum libero, at elementum mauris. Phasellus eget nisi dapibus, ultricies
                    nisl at, hendrerit risusuis ornare luctus id sollicitudin ante lobortis at.</p>
                <div class="form">
                    <input type="email" name="email" id="email-adress" required="required" placeholder="Email Address">
                    <button type="submit">Notify</button>
                </div>
            </div>
            <div class="video">
                <div class="videoWrapper">
                    <iframe src="https://player.vimeo.com/video/209829506" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <a href="https://vimeo.com/209829506"></a><a href="https://vimeo.com/user62798019"></a><a
                            href="https://vimeo.com"></a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>