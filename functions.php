<?php

function load_features() {

	wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
	wp_enqueue_style('css',get_theme_file_uri('style.css'));
	wp_enqueue_style('classy-nav',get_theme_file_uri('css/classy-nav.min.css'));
	wp_enqueue_style('bootstrap',get_theme_file_uri('css/bootstrap.min.css'));
	wp_enqueue_style('owl.carousel',get_theme_file_uri('css/owl.carousel.min.css'));
	wp_enqueue_style('custom-icon',get_theme_file_uri('css/custom-icon.css'));
	wp_enqueue_style('font-awesome',get_theme_file_uri('css/font-awesome.min.css'));
	wp_enqueue_style('magnific-popup',get_theme_file_uri('css/magnific-popup.css'));
	wp_enqueue_style('animate',get_theme_file_uri('css/animate.css'));
	wp_enqueue_style('nice-select',get_theme_file_uri('css/nice-select.min.css'));

	wp_enqueue_script('jquery',get_theme_file_uri('js/jquery/jquery-2.2.4.min.js'));
	wp_enqueue_script('popper',get_theme_file_uri('js/bootstrap/popper.min.js'));
	wp_enqueue_script('bootstrap',get_theme_file_uri('js/bootstrap/bootstrap.min.js'));
	wp_enqueue_script('plugins',get_theme_file_uri('js/plugins/plugins.js'));
	wp_enqueue_script('active',get_theme_file_uri('js/active.js'));
}

add_action('wp_enqueue_scripts','load_features');

//activating theme option for ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

//registering nav menu
function reg_menu() {
	register_nav_menu('headerMenuLocation','Header Menu Location');
}

add_action('after_setup_theme','reg_menu');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//custom post type recipe and its custom taxonomy
function recipes_post(){
	register_post_type('Recipes',array(
		'supports'=>array('title','editor','thumbnail'),
		'has_archive'=>true,
		'public'=>true,
		'labels'=>array(
				'name'=>'Add New Recipe',
				'edit_item'=>'Edit Recipe',
				'all_itemes'=>'All Recipes',
				'singular_name'=>'Recipe'
			),
		'menu_icon'=>'dashicons-menu',
	));
	register_taxonomy('recipe_cat',array('recipes'),array(
		'hierarchical' => true,
	));
}

add_action('init','recipes_post');

//For showing pagination bar instead paginate_link()
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

//function for showing taxonomies in dropdown and redirect to particular taxonomy page
function the_taxonomy_dropdown($taxonomy) {
  $id = "{$taxonomy}-dropdown";
  $js =<<<SCRIPT
<script type="text/javascript">
 jQuery(document).ready(function($){
  $("select#{$id}").change(function(){
    window.location.href = $(this).val();
  });
 });
</script>
SCRIPT;
  echo $js;
  $terms = get_terms($taxonomy);
  echo "<select name=\"{$id}\" id=\"{$id}\">";
  foreach($terms as $term) {
    echo '<option value="';
    echo get_term_link(intval($term->term_id),$taxonomy);
    echo '">' . "{$term->name}</option>";
  }
  echo "</select>";
}

//enqueueing above functions
add_action('init','jquery_init');
function jquery_init() {
  wp_enqueue_script('jquery');
}