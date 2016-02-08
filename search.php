<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>
<div class="row">
	<section id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header col-md-12">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results: %s', 'wysac-wy-tobacco' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<nav class="pagination">
				<?php the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( '&#0171;', 'textdomain' ),
			    'next_text' => __( '&#0187;', 'textdomain' ),
					) ); ?>
			</nav>
		</div>
					<?php get_sidebar('home'); ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div><!--.row-->
<?php get_footer(); ?>
