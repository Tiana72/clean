<?php
if ( has_post_thumbnail() ) {
    $img_url = get_the_post_thumbnail_url();
} else {
    $img_url = 'https://picsum.photos/1280/864';
}
?>
<!-- пост --> 
<img src="<?php echo $img_url; ?>" alt=""> 
<div class="fh5co-portfolio-description">
    <?php while (have_posts()) : the_post();?>
        <!-- пост -->
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(''); ?></p>
    <?php endwhile; ?>
</div>

