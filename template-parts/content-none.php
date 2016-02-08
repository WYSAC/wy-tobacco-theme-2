<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Sorry... Nothing was found', 'wysac-wy-tobacco' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<?php else : ?>
			<div class="col-md-8">
			<h4><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wysac-wy-tobacco' ); ?></h4>
		</div>
		<div class="col-md-4">
			<?php get_search_form(); ?>
		</div>
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/02/nothing.gif" style="width:100%;height:auto;">

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
