<?php
/**
 * The template for displaying search form in main nav
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WYSAC Wyoming Tobacco
 */

?>
<div class="site-search">
		<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
		     <fieldset>
		         <label for="s" class="screen-reader-text">Search for:</label>
		         <input type="search" id="s" class="site-search-input" name="s" placeholder="Enter terms" required />
		         <input type="image" id="searchsubmit" class="site-search-icon" alt="Search" src="http://dalton.uwyo.edu/wytobacco/wp-content/uploads/2016/02/search-icon.png" />
		     </fieldset>
		</form>
</div>
