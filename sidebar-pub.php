<?php
/**
 * Sidebar for publication pages with pub blurb and list of topics (tags)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div id="sidebar-pub" class="widget-area col-md-4 recent-entries">
	<div class="widget">
		<h2 class="widget-title"> Table of Contents</h2>
		<?php
		//Print the formatted table of contents for the post
			if( function_exists( 'wptopc' ) ){
					wptopc();
				} ?>
			</div>
	<div class="widget">
		<h2 class="widget-title">About This Publication</h2>
			<p><?php // display description custom field
							global $wp_query;
							$postid = $wp_query->post->ID;
						        echo get_post_meta($postid, 'pub_description', true). "<br/>";

							//get the partner logos
							$hams = get_order_field('partner_logos'); //name of the field
							foreach ($hams as $logos){ //loop the container with a new variable
								echo get_image('partner_logos',1,$logos). "<br/>";
							}
							wp_reset_query();
							?>
						</p>
		</div>

		<div class="widget">
			<h2 class="widget-title">Related Topics</h2>
					<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
		</div>
	</div>

<!-- #secondary-->
