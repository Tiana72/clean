<?php
get_header();
?>
front
<?php if( get_theme_mod('clean_home_category') ) : ?>
<main id="primary" class="site-main">
    <div id="fh5co-portfolio">
        <?php $query = new WP_Query( array (
            'category_name' => get_theme_mod('clean_home_category'),
            'posts_per_page' => '-1',
            'orderby' => 'date',
            'order' => 'ASC',
            ) ); ?>
        <?php if ($query->have_posts()) : $i = 1; while ($query->have_posts()): $query->the_post();?>
            <?php
                if ( has_post_thumbnail() ) {
                    $img_url = get_the_post_thumbnail_url();
                } else {
                    $img_url = 'https://picsum.photos/1280/864';
                }
            ?>
            <!-- пост -->
            <div class="fh5co-portfolio-item <?php if( $i % 2 == 0 ) echo 'fh5co-img-right'; ?>">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
                <div class="fh5co-portfolio-description">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(''); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'clean') ; ?></a></p>
                </div>
            </div>

        <?php $i++; endwhile; ?>
            <!-- навигация -->

        <?php else: ?>
            <!-- нет постов -->

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>


</main><!-- #main -->
<?php endif; ?>

<?php if (have_posts()): while (have_posts()): the_post();?>
<!-- пост -->
    <?php the_content() ; ?>
<?php endwhile; ?>
<!-- навигация -->
<?php else: ?>
<!-- нет постов -->
<?php endif; ?>

<?php
get_footer();
