<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bright_Cheer
 */

get_header(); ?>
	<div id="brightcheer-main" class="row">
		<div class="col-md-8 col-lg-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
		</div><!-- #col-md-8 -->
		<div class="col-md-4 col-lg-4">
<?php
get_sidebar();
?>
		</div><!-- #col-md-4 -->
	</div><!-- #row -->	
<?php 
get_footer();
