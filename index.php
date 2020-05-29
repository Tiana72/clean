<?php
get_header();
?>

<main id="primary" class="site-main">
    <div id="fh5co-portfolio">
        <?php $query = new WP_Query( array (
            'category_name' => 'home',
        ) ); ?>
        <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
            <?php
                if ( has_post_thumbnail() ) {
                    $img_url = get_the_post_thumbnail_url();
                } else {
                    $img_url = 'https://picsum.photos/1280/864';
                }
            ?>
            <!-- пост -->
            <div class="fh5co-portfolio-item fh5co-img-right">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
                <div class="fh5co-portfolio-description">
                    <h2>Project Second</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
                </div>
            </div>

        <?php endwhile; ?>
            <!-- навигация -->

        <?php else: ?>
            <!-- нет постов -->

        <?php endif; ?>
    </div>


</main><!-- #main -->

<?php
get_footer();
