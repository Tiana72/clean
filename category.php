<?php
get_header();
?>
<?php if( get_theme_mod('clean_home_category') ) : ?>
    <main id="primary" class="site-main">
        <div id="fh5co-portfolio">
            <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'preview'); ?>

            <?php $i++; endwhile; ?>
            <!-- навигация -->
            <?php the_posts_pagination(array(
                'show_all'     => false,
                'end_size'     => 2,
                'mid_size'     => 2,
                'prev_next'    => true,
                'prev_text'    => __('<< Prev', 'clear'),
                'next_text'    => __('Next >>', 'clear'),
                'type'         => 'list',
                'add_args'     => false,
                'add_fragment' => '',
            ) ); ?>

            <?php else: ?>
                <!-- нет постов -->

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="clearfix"></div>


    </main><!-- #main -->
<?php endif; ?>



<?php
get_footer();
