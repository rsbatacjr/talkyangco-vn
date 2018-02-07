<?php
require_once('wp_bootstrap_navwalker.php');
define('HOME_PAGE', "http://talk-academy.vn");
define('THEME_URI', get_template_directory_uri());
require_once('manage-schedule.php');
require_once('manage-weblinks.php');

add_action('wp_enqueue_scripts', 'talkyangco_scripts');
function talkyangco_scripts() {
	wp_enqueue_style('bootstrap', THEME_URI.'/css/bootstrap.min.css');
	wp_enqueue_style('style',get_stylesheet_uri());
	// wp_enqueue_script('modernizr-script',THEME_URI.'/js/modernizr-custom.js',array(),'',true);
	// wp_enqueue_script('bootstrap-script',THEME_URI.'/js/bootstrap.min.js',array(),'1.0.0',true);
}

add_action('init','create_schoolbranch_taxonomy');
function create_schoolbranch_taxonomy() {
	register_taxonomy(
		'schoolbranch',
		'post',
		array(
			'label' => 'School Branch',
			'hierarchical' => true,
			'labels' => array(
				'add_new_item' => 'Add New School Branch'
				)
			)
		);
}

add_action('init', 'create_post_type');
function create_post_type() {
	register_post_type(
		'course',
		array(
			'labels' => array(
				'name' => __('Courses'),
				'singular_name' => __('Course'),
				'add_new' => __('New Course'),
				'add_new_item' => __('Add New Course'),
				'new_item' => __('New Course'),
				'edit_item' => __('Edit Course'),
				'view_item' => __('View Course'),
				'all_items' => __('All Courses')
			),
		'menu_icon' => 'dashicons-smiley',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'faq',
		array('labels' => array(
			'name' => __('FAQs'),
			'singular_name' => __('FAQ'),
			'add_new' => __('New FAQ'),
			'add_new_item' => __('Add New FAQ'),
			'new_item' => __('New FAQ'),
			'edit_item' => __('Edit FAQ'),
			'view_item' => __('View FAQ'),
			'all_items' => __('All FAQs')
			),
		'menu_icon' => 'dashicons-calendar',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'meal',
		array('labels' => array(
			'name' => __('Meals'),
			'singular_name' => __('Meal'),
			'add_new' => __('New Meal'),
			'add_new_item' => __('Add New Meal'),
			'new_item' => __('New Meal'),
			'edit_item' => __('Edit Meal'),
			'view_item' => __('View Meal'),
			'all_items' => __('All Meals')
			),
		'menu_icon' => 'dashicons-carrot',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type(
		'experience',
		array(
			'labels' => array(
				'name' => __('Experiences'),
				'singular_name' => __('Experience'),
				'add_new' => __('New Experience'),
				'add_new_item' => __('Add New Experience'),
				'new_item' => __('New Experience'),
				'edit_item' => __('Edit Experience'),
				'view_item' => __('View Experience'),
				'all_items' => __('All Experiences')
			),
		'menu_icon' => 'dashicons-smiley',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'name', 
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'revisions'
			)
		)
	);

	register_post_type('news',
		array(
			'labels' => array(
				'name' => __('News'),
				'singular_name' => __('News'),
				'add_new' => __('New News'),
				'add_new_item' => __('Add New News'),
				'new_item' => __('New News'),
				'edit_item' => __('Edit News'),
				'view_item' => __('View News'),
				'all_items' => __('All News')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('plans',
		array(
			'labels' => array(
				'name' => __('Plans'),
				'singular_name' => __('Plan'),
				'add_new' => __('New Plan'),
				'add_new_item' => __('Add New Plan'),
				'new_item' => __('New Plan'),
				'edit_item' => __('Edit Plan'),
				'view_item' => __('View Plans'),
				'all_items' => __('All Plans')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array('name',
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('campaign',
		array(
			'labels' => array(
				'name' => __('Campaign'),
				'singular_name' => __('Campaign'),
				'add_new' => __('New Campaign'),
				'add_new_item' => __('Add New Campaign'),
				'new_item' => __('New Campaign'),
				'edit_item' => __('Edit Campaign'),
				'view_item' => __('View Campaigns'),
				'all_items' => __('All Campaigns')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('inside-philippines',
		array(
			'labels' => array(
				'name' => __('Inside Philippines'),
				'singular_name' => __('Inside Philippines'),
				'add_new' => __('New Inside Philippines'),
				'add_new_item' => __('Add New Inside Philippines'),
				'new_item' => __('New Inside Philippines'),
				'edit_item' => __('Edit Inside Philippines'),
				'view_item' => __('View Inside Philippines'),
				'all_items' => __('All Inside Philippines')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);

	register_post_type('best-student-teacher',
		array(
			'labels' => array(
				'name' => __('Best Student/Teacher'),
				'singular_name' => __('Best Student/Teacher'),
				'add_new' => __('New Best Student/Teacher'),
				'add_new_item' => __('Add New Best Student/Teacher'),
				'new_item' => __('New Best Student/Teacher'),
				'edit_item' => __('Edit Best Student/Teacher'),
				'view_item' => __('View Best Student/Teacher'),
				'all_items' => __('All Best Student/Teacher')
				),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'name', 
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'revisions'
				)
			)
		);
}

add_action('init', 'register_my_menu');
function register_my_menu() {
  register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'create_schedule_types_table', 1);
register_activation_hook(__FILE__, 'create_schedule_types_table');
function create_schedule_types_table() {
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	global $wpdb;
	global $charset_collate;

	$sql_create_table = "CREATE TABLE {$wpdb->prefix}talk_schedule_types (
          id bigint(20) unsigned NOT NULL auto_increment,
          schedule_name varchar(256) NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";

    $sql_create_table .= "CREATE TABLE {$wpdb->prefix}talk_schedule_dates (
          id bigint(20) unsigned NOT NULL auto_increment,
          schedule_id bigint(20) NOT NULL,
          schedule_date varchar(256) NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";

    $sql_create_table .= "CREATE TABLE {$wpdb->prefix}page_links (
          id bigint(20) unsigned NOT NULL auto_increment,
          label varchar(32) NOT NULL,
          link_to varchar(256) NOT NULL,
          order_number int NOT NULL,
          PRIMARY KEY  (id)
    ) $charset_collate; ";
 
	dbDelta($sql_create_table);
}

function listByPostType() {
	$htmlResult = "";
	$post_type = get_post_meta(get_the_ID(), "category", true);
	wp_reset_query();
    $args=array('post_type'=>$post_type,'order'=>'DESC');
    $loop=new WP_Query($args);

    if($loop->have_posts()){
        while($loop->have_posts()):$loop->the_post();
        	$htmlResult.=
        	"
        		<tr>
        			<td>".get_the_ID()."</td>
        			<td><a class=grey-link href='".get_permalink()."'>".get_the_title()."</a></td>
        			<td>".get_the_author()."</td>
        			<td>".get_the_date('Y.m.d')."</td>
        			<td></td>
        		</tr>
        	";
        endwhile;
    }

    echo $htmlResult;
}
