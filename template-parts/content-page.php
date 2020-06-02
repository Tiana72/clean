<?php
if ( has_post_thumbnail() ) {
  the_post_thumbnail();
}
?>
<!-- пост --> 
<div class="fh5co-portfolio-description">
    <?php while (have_posts()) : the_post();?>
        <!-- пост -->
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(''); ?></p>
    <?php endwhile; ?>
</div>

