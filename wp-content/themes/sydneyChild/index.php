<?php  get_header();?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content.php' );
			}


		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content.php', 'none' );

		}
		?>

		<?php  get_sidebar();?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer(); ?>
