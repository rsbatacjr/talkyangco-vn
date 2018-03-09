<?php
require_once('wp_bootstrap_navwalker.php');
define('HOME_PAGE', "http://talk-academy.vn");
define('THEME_URI', get_template_directory_uri());
require_once('manage-schedule.php');
require_once('manage-weblinks.php');

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
wp_localize_script( 'function', 'my_ajax_script', array( 'ajaxurl' => admin_url(  'admin-ajax.php' ) ) );
add_action( 'admin_init', 'add_ajax_actions' );

function talk_content_filter($content)
{
	$type = get_post_type();
	if($type == "inside-philippines" || $type == "meal" || $type == "campaign")
	{
		return str_replace('class="', 'class="img-responsive ', $content);
	}
	else
	{
		return $content;
	}
}

add_filter('the_content', 'talk_content_filter');

add_theme_support( 'post-thumbnails' );


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
		'travel',
		array(
			'labels' => array(
				'name' => __('Travels'),
				'singular_name' => __('Travel'),
				'add_new' => __('New Travel'),
				'add_new_item' => __('Add New Course'),
				'new_item' => __('New Travel'),
				'edit_item' => __('Edit Travel'),
				'view_item' => __('View Travel'),
				'all_items' => __('All Travels'),
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
			'revisions',
			'comments'
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


function listGalleryImage($galleryfield) {
	$indicatorHtml = "";
	$innerHtml = "";
	$ctr = 1;

	$images = get_post_meta(get_the_ID(), $galleryfield, false);

	$htmlResult = "<div id='" . $galleryfield . "' class='carousel slide' data-ride='carousel'>";
	$slide = 0;
	foreach ($images as $image) {
		$innerHtml .= "<div class='item".($indicatorHtml == "" ? " active'": "")."'><img src='$image' class='gallery-image' /></div>";

		$indicatorHtml .= "<li data-target='#" . $galleryfield . "' data-slide-to='$slide' ".($indicatorHtml == "" ? "class='active'": "")."></li>";
		$slide++;
	}
	$htmlResult .= "<ol class='carousel-indicators'>";
	$htmlResult .= $indicatorHtml;
	$htmlResult .= "</ol>";

	$htmlResult .= "<div class='carousel-inner'>";
	$htmlResult .= $innerHtml;
	$htmlResult .= "</div>";
	$htmlResult .= "
			<a class='left carousel-control' href='#".$galleryfield."' data-slide='prev'>
				<!-- <span class='glyphicon-chevron-left'></span> -->
				<span class='sr-only'>Previous</span>
			</a>
			<a class='right carousel-control' href='#".$galleryfield."' role='button' data-slide='next'>
				<!-- <span class='glypicon glyphicon-chevron-right' aria-hidden='true'></span> -->
				<span class='sr-only'>Next</span>
			</a>
		</div>";
	$ctr++;
	return $htmlResult;
}


function listByPostType() {
	$htmlResult = "";
	$post_type = get_post_meta(get_the_ID(), "category", true);
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	wp_reset_query();
    $args=array('post_type'=>$post_type,'order'=>'DESC', 'posts_per_page' => 12, 'paged' => $paged);
    $loop=new WP_Query($args);

    if($loop->have_posts()){
    	$col = 0;
        while($loop->have_posts()):$loop->the_post();
        	if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }

        	$col++;
        	if ($col == 1) {
        		$htmlResult.="<div class='row'>";
        	}
        	$htmlResult.="<div class='col-xs-12 col-md-6' style='margin-bottom: 15px;'>
        					<a href='".get_permalink()."'>
        						<img src='$thumbnail[0]' style='display: block; max-width:100%; max-height:200px; width: auto; height: auto; margin: 0 auto;'><br>
        						<h2>".get_the_title()."</h2>
        						<p>".get_the_excerpt()."</p>
    						</a>
        				  </div>";

        	if ($col == 2) {
        		$htmlResult.="</div>";
        		$col=0;
        	}
        endwhile;
	?>
	<div class="row">
		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
	</div>
<?php
    }

    echo $htmlResult;
}



function listByPostType2() {
        $htmlResult = "<div class='row' style='margin-top: 30px;></div>";
        $post_type = get_post_meta(get_the_ID(), "category", true);
        wp_reset_query();
    $args=array('post_type'=>$post_type,'order'=>'DESC');
    $loop=new WP_Query($args);

    if($loop->have_posts()){
        while($loop->have_posts()):$loop->the_post();
		if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }
                $htmlResult.=
                "
                        <div class='row'>
				<div class='col-xs-4 col-md-3'>
				<a href='".get_permalink()."'>
					<div style='background-image:url($thumbnail[0]);width:100%;height:100%;min-height:150px;background-size:150%;background-position:center;margin-bottom:25px;'></div>
				</a>
				</div>
				<div class='col-xs-8 col-md-9'>
                                <a style='color:#333' href='".get_permalink()."'><h3 style='margin:0;'>".get_the_title()."</h3></a>
                                <strong>".get_the_author()."</strong>
                                <span style='color:#c0c0c0'>".get_the_date('Y.m.d')."</span><br>
                                <p style='line-height:25px;margin-bottom:25px;'>".get_the_excerpt()."</p>

				</div><div class='clearfix'></div>
                        </div>
                ";
        endwhile;
    }

    echo $htmlResult;
}


add_shortcode( 'show_footerImages', 'show_footerImages_func' );
function show_footerImages_func($atts, $content = null) {
	$a = shortcode_atts(array(
        'post_type'=>'inside-philippines'
    ), $atts);
	$htmlResult = "";
	$post_type = get_post_meta(get_the_ID(), "category", true);
	wp_reset_query();
    $args=array('post_type'=>$a['post_type'],'order'=>'DESC', 'posts_per_page'=>12);
    $loop=new WP_Query($args);

    if($loop->have_posts()){
    	$col = 0;
        while($loop->have_posts()):$loop->the_post();
        	if(has_post_thumbnail($loop->ID)){
        		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID),'single-post-thumbnail');;
        	} else {
	        	$thumbnail='';
	        }

        	$col++;
        	if ($col == 1) {
        		$htmlResult.="<div class='row'>";
        	}
        	$htmlResult.="<div class='col-xs-4 col-md-2' style='margin-bottom: 10px;".($col == 1 ? "padding-right: 5px" : ($col == 6 ? "padding-left: 5px" : "padding-left: 10px; padding-right: 10px"))."'>
        					<div class='footer-image' style='width: 100%; max-height: 200px; position: relative; overflow: hidden'>
	        					<a href='".get_permalink()."'>
	        						<img  src='$thumbnail[0]' style='position:absolute;top:-25px; width: 100%; height:250px;'><br>
	    						</a>
    						</div>
        				  </div>";

        	if ($col == 6) {
        		$htmlResult.="</div>";
        		$col=0;
        	}
        endwhile;
    }

    echo $htmlResult;
}

add_shortcode( 'show_topThree', 'show_topThree_func' );
function show_topThree_func($atts, $content = null) {
	$htmlResult = "";
	$a = shortcode_atts(array(
        'post_type'=>'inside-philippines'
    ), $atts);
	wp_reset_query();
    $args=array('post_type'=>$a['post_type'],'order'=>'DESC', 'posts_per_page' => 3);
    $loop=new WP_Query($args);

    if($loop->have_posts()){
    	$col = 0;
        while($loop->have_posts()):$loop->the_post();
        	$htmlResult .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
        endwhile;
    }

    echo $htmlResult;
}

add_action( 'wp_ajax_nopriv_post_consultation_online', 'post_consultation_online' );
add_action( 'wp_ajax_post_consultation_online', 'post_consultation_online' );
function post_consultation_online() {
	extract($_REQUEST);

	$subject = "";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = ['Reply-To: '.$email.' <'.$email.'>'];

	$body = "
	Name: $studentname<br>
	English Name: $englishname<br>
	Email: $email<br>
	Country: $country<br>
	Phone: $phone<br>
	Gender: $gender<br>
	Age: $age<br>
	Program: $program<br>
	Dormitory: $dormitory<br>
	Dormitory type: $dormitorytype<br>
	Purpose of study abroad: $purpose<br>
	Current english level: $currentenglevel<br>
	Budget: $budget<br>
	Language learning experience: learningexperience<br>
	Training period: $trainingperiod<br>
	Others: $others";


	wp_mail( "reybatacjr@gmail.com", $subject, $body, $headers );
	echo "OK";
	die();
}

add_shortcode('show_consultation_online_form', 'show_consultation_online_form_func');
function show_consultation_online_form_func() {
	ob_start();
	?>
	<div class="form-horizontal">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="studentname">Name <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="studentname" name="studentname"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="englishname">English Name <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="englishname" name="englishname"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="email">Email <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-10">
						<input class="form-control" id="email" name="email"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="country">Country <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="country" name="country"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="phone">Phone <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="phone" name="phone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">Gender</label>
					<div class="col-xs-8">
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="M">Male
					    </label>
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="F">Female
					    </label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="age">Age</label>
					<div class="col-xs-8">
						<input class="form-control" id="age" name="age"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="program">Program</label>
					<div class="col-xs-8">
						<select class="form-control" id="program" name="program">
							<option value="1">ESL 421, 521, 611</option>
							<option value="2">Intensive IELTS</option>
							<option value="3">Intensive TOEIC</option>
							<option value="4">IELTS Guarantee</option>
							<option value="5">TOEIC Guarantee</option>
							<option value="6">Power Speaking</option>
							<option value="7">Working Holiday</option>
							<option value="8">Family ESL </option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="form-group">
					<label class="control-label col-xs-4">Dormitory type</label>
					<div class="col-xs-9">
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="Single room">Single room
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="Double room">Double room
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="Triple room">Triple room
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="Quadruple room">Quadruple room
					</label>
					<label class="radio-inline">
						<input type="radio" name="dormitorytype" value="Others">Others :
					</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-offset-4 col-md-4">
			<input class="form-control hidden" id="dormitorytypeother" name="dormitorytypeother"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2">Purpose of study abroad</label>
					<div class="col-xs-10">
					<label class="radio-inline">
						<input type="radio" name="purpose" value="English conversion">English conversion
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Exam preparation">Exam preparation
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Employment">Employment
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Linked Training / Working Holiday">Linked Training / Working Holiday
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Overseas employment">Overseas employment
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Immigrant">Immigrant
					</label>
					<label class="radio-inline">
						<input type="radio" name="purpose" value="Others">Others :
					</label>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-offset-2 col-xs-10">
				<input class="form-control hidden" id="purposeother"></input>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="currentenglevel">Current english level</label>
					<div class="col-xs-8">
						<input class="form-control" id="currentenglevel" name="currentenglevel"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="budget">Budget</label>
					<div class="col-xs-8">
						<input class="form-control" id="budget" name="budget"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">Language learning experience</label>
					<div class="col-xs-8">
						<label class="radio-inline">
							<input type="radio" name="learningexperience" >has experience
						</label>
						<label class="radio-inline">
							<input type="radio" name="learningexperience" >none
						</label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="trainingperiod">Training period</label>
					<div class="col-xs-8">
						<input class="form-control" id="trainingperiod" name="trainingperiod"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="others">Others</label>
					<div class="col-xs-10">
						<textarea class="form-control" rows=4 width="100%" id="others" name="others"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<button id="send-consultation" class="btn btn-danger">Apply for study abroad</button>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php echo THEME_URI; ?>/js/online-consulting.js"></script>
	<?php
	return ob_get_clean();
}


add_action( 'wp_ajax_nopriv_post_online_registration', 'post_online_registration' );
add_action( 'wp_ajax_post_online_registration', 'post_online_registration' );
function post_online_registration() {
	extract($_REQUEST);

	$subject = "";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = ['Reply-To: '.$email.' <'.$email.'>'];

	$body = "
	Name: $studentname<br>
	English Name: $englishname<br>
	Email: $email<br>
	Country: $country<br>
	Phone: $phone<br>
	Gender: $gender<br>
	Date of birth: $dateofbirth<br>
	Program: $program<br>
	Dormitory: $dormitory<br>
	Dormitory type: $dormitorytype<br>
	Purpose of study abroad: $purpose<br>
	Current english level: $currentenglevel<br>
	Budget: $budget<br>
	Language learning experience: learningexperience<br>
	Training period: $trainingperiod<br>
	Others: $others";


	wp_mail( "reybatacjr@gmail.com", $subject, $body, $headers );
	echo "OK";
	die();
}

add_shortcode('show_online_registration_form', 'show_online_registration_form_func');
function show_online_registration_form_func() {
	ob_start();
	?>
	<div class="form-horizontal">
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="studentname">Name <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="studentname" name="studentname"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="englishname">English Name <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="englishname" name="englishname"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="email">Email <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-10">
						<input class="form-control" id="email" name="email"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="country">Country <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="country" name="country"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="phone">Phone <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="phone" name="phone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4">Gender</label>
					<div class="col-xs-8">
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="M">Male
					    </label>
						<label class="radio-inline">
				      		<input type="radio" name="gender" value="F">Female
					    </label>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="birthday">Date of birth <span style="color:rgb(255,0,0)">*</span></label>
					<div class="col-xs-8">
						<input class="form-control" id="birthday" name="birthday"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" style="background-color:#c0c0c0;padding:30px 0;margin-bottom: 15px;">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="program1">Program1 <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<select class="form-control" id="program1" name="program1">
									<option value="1">ESL 421,</option>
									<option value="2">ESL 521</option>
									<option value="3">ESL, 611</option>
									<option value="4">Intensive IELTS</option>
									<option value="5">Intensive TOEIC</option>
									<option value="6">IELTS Guarantee</option>
									<option value="7">TOEIC Guarantee</option>
									<option value="8">Power Speaking</option>
									<option value="9">Working Holiday</option>
									<option value="10">Family ESL(Parent)</option>
									<option value="11">Family ESL(Junior))</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="dormitory1">Dormitory <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<select class="form-control" id="dormitory1" name="dormitory1">
									<option value="1">Yanco Center 2 ACC</option>
									<option value="2">Yangco Center 3 ACC</option>
									<option value="3">Yangco Center 4 ACC</option>
									<option value="4">E&amp;E Center 1 ACC</option>
									<option value="5">E&amp;E Center 2 ACC</option>
									<option value="6">E&amp;E Center 3 ACC</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="trainingperiod1">Training period <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<input class="form-control" id="trainingperiod1" name="trainingperiod1" />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="program2">Program2</label>
							<div class="col-xs-8">
								<select class="form-control" id="program1" name="program2">
									<option value="1">ESL 421,</option>
									<option value="2">ESL 521</option>
									<option value="3">ESL, 611</option>
									<option value="4">Intensive IELTS</option>
									<option value="5">Intensive TOEIC</option>
									<option value="6">IELTS Guarantee</option>
									<option value="7">TOEIC Guarantee</option>
									<option value="8">Power Speaking</option>
									<option value="9">Working Holiday</option>
									<option value="10">Family ESL(Parent)</option>
									<option value="11">Family ESL(Junior))</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="dormitory2">Dormitory</label>
							<div class="col-xs-8">
								<select class="form-control" id="dormitory2" name="dormitory2">
									<option value="1">Yanco Center 2 ACC</option>
									<option value="2">Yangco Center 3 ACC</option>
									<option value="3">Yangco Center 4 ACC</option>
									<option value="4">E&amp;E Center 1 ACC</option>
									<option value="5">E&amp;E Center 2 ACC</option>
									<option value="6">E&amp;E Center 3 ACC</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label col-xs-4" for="trainingperiod2">Training period <span style="color:rgb(255,0,0)">*</span></label>
							<div class="col-xs-8">
								<input class="form-control" id="trainingperiod2" name="trainingperiod2" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="emergencycontact">Emergency contact</label>
					<div class="col-xs-8">
						<input class="form-control" id="emergencycontact" name="emergencycontact"></input>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="emergencyphone">Phone</label>
					<div class="col-xs-8">
						<input class="form-control" id="emergencyphone" name="emergencyphone"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<label class="control-label col-xs-4" for="relationship">Relationship with student</label>
					<div class="col-xs-8">
						<input class="form-control" id="relationship" name="relationship"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label class="control-label col-xs-2" for="memo">Memo</label>
					<div class="col-xs-8">
						<textarea class="form-control" id="memo" name="memo"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<button id="send-application" class="btn btn-danger">Submit online application</button>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php echo THEME_URI; ?>/js/online-consulting.js"></script>
	<?php
	return ob_get_clean();
}

add_shortcode('show_floating_contact_form', 'show_floating_contact_form_func');
function show_floating_contact_form_func() {
	ob_start();

	return ob_get_clean();
}

