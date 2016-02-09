<?php
/**
 * Sidebar for archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div id="sidebar-about" class="widget-area col-md-4 recent-entries">
	<div class="widget recent-entries col-md-12 col-sm-6">
		<h2 class="widget-title">Wyoming TPC</h2>
		<?php wp_list_pages( array ( //Get the pages list
					'exclude' =>  44,
					'title_li' => '',
					)
				);?>

		</div>
		<div class="widget  recent-entries  col-md-12 col-sm-6">
			<h2 class="widget-title">Need Help?</h2>
				<p>This website was designed and developed by the Information Technology team at Wyoming Survey and Analysis Center.</p>
				<p>For technical issues or problems, please contact the HelpDesk:</p>
				<p><button class="btn btn-default" type="submit">Contact HelpDesk</button></p>
		</div>
		<div class=" col-md-12 col-sm-6">
				<?php dynamic_sidebar('info-sidebar'); ?>
			</div>
</div> <!--#sidebar-about -->
<!-- #secondary-->
