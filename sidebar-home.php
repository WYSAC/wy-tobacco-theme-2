<?php
/**
 * Sidebar for homepage with recent posts and resources
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div id="homepage-sidebar" class="widget-area row col-md-4 hidden-xs">
		<div class=" col-md-12 hidden-sm hidden-xs">
				<?php dynamic_sidebar( 'home-sidebar' ); ?>
			</div>
		<div class="widget recent-entries col-md-12 col-sm-6">
				<h2 class="widget-title">Recent Publications</h2>
					<ul>
					<?php
					$args = array(
						'posts_per_page' => 5,
						'offset'=> 0,
						'category' => array(2,3,4,5) );

					$myposts = get_posts( $args );

					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<span class="post-date linkarea"><?php the_time('m.d.Y');?></span>
							<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach;
					wp_reset_postdata();?>
					</ul>
				</div><!-- .widget .recent-entries-->
			<div class="widget recent-entries col-md-12 col-sm-6">
					<h2 class="widget-title">Recent Resources</h2>
						<ul>
						<?php
						$args = array(
							'posts_per_page' => 5,
							'offset'=> 0,
							'category' => 1 );

						$myposts = get_posts( $args );

						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<li>
								<span class="post-date"><?php the_time('m.d.Y');?></span>
								<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endforeach;
						wp_reset_postdata();?>
						</ul>
				</div> <!-- .widget .recent-entries-->
	</div><!--#homepage-sidebar .widget area .col-md-4-->
<!--#secondary-->
