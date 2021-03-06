<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header col-md-12">

				<?php
					the_archive_title( '', '</h1>' ); //This has a filter, found in functions.php, that determines the formatting of the prefix.  This also controls which .section-title appears above the archive the_archive_title
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

	<div class="col-md-8">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search', get_post_format() );

				?>

			<?php endwhile; ?>

			<nav class="pagination">
				<?php the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( '&#0171;', 'textdomain' ),
			    'next_text' => __( '&#0187;', 'textdomain' ),
					) ); ?>
			</nav>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>

		<?php
					if ( in_category(1) ) {
						get_sidebar ('resource'); }
					else {
						get_sidebar('archive');
					}?>
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!--.row-->
<?php get_footer(); ?>
