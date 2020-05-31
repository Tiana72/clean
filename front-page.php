<?php
get_header();
?>

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
            <?php get_template_part('template-parts/content', 'preview'); ?>
        <?php $i++; endwhile; ?>
            <!-- навигация -->

        <?php else: ?>
            <!-- нет постов -->

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="clearfix"></div>


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
