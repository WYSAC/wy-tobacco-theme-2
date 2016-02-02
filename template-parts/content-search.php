<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="archive-entry-meta"> <span class="post-date">
			<?php
						if ( in_category(array('2','3','4','5')) ) { //If a publications cat or child-cat
							$categories = get_the_category(); //get just the first category
									if ( ! empty( $categories ) ) {
					    		echo esc_html( $categories[0]->name );
								}
						}
						else { //if just in the resources, get the post type
							echo get_post_format( $post );
						} ?>

			| <?php the_time('m.d.Y');?></span>
		</div><!-- .entry-meta -->
		
			<?php the_title( sprintf( '<h2 class="archive-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="archive-entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer archive-entry-footer">
		<a href="<?php the_permalink(); ?>"> Read more...</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
