<?php
/**
 * Template part for displaying search form in the main-navbar-alt.php
 *
 * If you want to add another item instead of a form, use something like this:
 * <div class="my-2 my-md-0 d-none d-lg-inline">something</div>
 *
 * @package Kathmandu
 */

?>

<form class="form my-2 my-md-0 d-none d-lg-inline" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
<label class="assistive-text screen-reader-text" for="s">
	<?php esc_html_e( 'Search', 'kathmandu' ); ?>
</label>
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'kathmandu' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-append">
			<input class="submit btn-kathmandu" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'kathmandu' ); ?>">
		</span>
	</div>
</form>
