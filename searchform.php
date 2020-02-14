<?php
/**
 * The template for displaying search forms
 *
 * @package Kathmandu
 */

?>

<!-- Search Form Widget -->
<div class="kathmandu-search">
	<h2 class="form-title"><?php esc_html_e( 'Search ', 'kathmandu' ); ?></h2>
	<div class="content">
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<div class="input-group">
				<input class="field form-control" id="s" name="s" type="text"
					placeholder="<?php esc_attr_e( 'Search &hellip;', 'kathmandu' ); ?>"
					value="<?php the_search_query(); ?>">
				<span class="input-group-append">
					<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
						value="<?php esc_attr_e( 'Search', 'kathmandu' ); ?>">
				</span>
			</div>
		</form>
	</div>
</div>
