<?php
/**
 * The template for displaying the -home.php only
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>

<div id="feature-image" class="row hidden-xs">
<div class="col-md-12 col-sm-12"><?php dynamic_sidebar('feature'); ?></div>
		</div>
<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main col-md-8" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

	<!--there are no comments on pages-->

				<?php endwhile; // End of the loop. ?>

				<!--Link Areas -->
					<div id="linkarea">
								<?php get_sidebar('home-linkarea');?>
							</div>
			</main> <!-- #main .col-md-12 -->
				<?php get_sidebar('home');?>
	</div><!-- #primary-->
</div><!--.row-->
<?php get_footer(); ?>
