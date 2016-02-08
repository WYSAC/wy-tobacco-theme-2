<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Uh oh... Something went wrong', 'wysac-wy-tobacco' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="row">
						<div class="col-md-6"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/02/darth-vader-fail.gif" style="width:100%;height:auto;"/></p></div>

					<div class="col-md-6">

						<h4><?php esc_html_e( 'It looks like the page you were looking for has moved. How about searching?', 'wysac-wy-tobacco' ); ?></h4>
					</div>
					<div class="col-md-6 internal-search">
					<?php get_search_form(); ?>
				</div>
				</div>
			</div><!--.row-->


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
