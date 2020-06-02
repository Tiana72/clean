<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>
	<main id="primary" class="site-main">

	<div id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php get_template_part('template-parts/content', 'page'); ?>
					</div>
				</div>
			</div>
		</div>


	</main><!-- #main -->

<?php

get_footer();
