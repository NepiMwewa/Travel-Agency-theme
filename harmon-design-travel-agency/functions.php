<?php
/*
 * This is the child theme for Travel Ultimate theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'harmon_design_travel_agency_enqueue_styles', 20 );
function harmon_design_travel_agency_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */
require_once( get_stylesheet_directory() . '/inc/structure.php');
require_once( get_stylesheet_directory() . '/inc/custom-header.php');

function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
        $title = 'Destinations';
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
 
	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

add_action('admin_menu', 'add_global_custom_options');

function add_global_custom_options()  
{  
    add_options_page('Global Custom Options', 'Global Custom Options', 'manage_options', 'functions','global_custom_options');  
}

function global_custom_options()
{
	?>
	<div class="wrap">
			<h2>Global Custom Options</h2>
			<form method="post" action="options.php">
					<?php wp_nonce_field('update-options') ?>
					<p><strong>Twitter ID:</strong><br />
							<input type="text" name="twitterid" size="45" value="<?php echo get_option('twitterid'); ?>" />
					</p>
					<p><input type="submit" name="Submit" value="Store Options" /></p>
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="page_options" value="twitterid" />
			</form>
	</div>
	<?php
}