<?php
    /*### If no theme options are needed comment out the following line ###*/
    function styles_scripts(){
			wp_deregister_script('jquery');
			wp_register_script('jquery','//code.jquery.com/jquery-2.1.3.min.js',array(),'2.1.3',true);
			wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css',array(),'3.3.0');
			wp_enqueue_script('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js',array('jquery'),'3.3.0',true);
			wp_enqueue_style('bootstrap-xl',get_stylesheet_directory_uri().'/assets/styles/css/bootstrap-xl.css',array(),null);
			wp_enqueue_style('rollovers',get_stylesheet_directory_uri().'/assets/styles/css/rollovers.css',array(),null); 
// 			wp_enqueue_style('navigation',get_stylesheet_directory_uri().'/assets/styles/navigation.scss',array(),null); 
			wp_enqueue_script('typekit-remote','//use.typekit.net/zog8gya.js',array(),false);
			wp_enqueue_script('typekit-local',get_stylesheet_directory_uri().'/assets/fonts/typekit.js',array(),false);
			wp_enqueue_style('font-awesome','//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css',array(),'4.2.0');
			wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,900italic,700,700italic,600,600italic,400italic',array(),null); 
			wp_enqueue_style('ideomaSpray',get_stylesheet_directory_uri().'/assets/fonts/ideomaSpray/stylesheet.css',array(),null); 
			// wp_enqueue_style('assets',get_stylesheet_directory_uri().'/assets/styles/css/style.css',array(),null);
			wp_enqueue_script('modernizr',get_stylesheet_directory_uri().'/assets/libs/mozernizr.js',array(),false);
			wp_enqueue_script('underscore','//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js',array(),'1.7.0',true);
			wp_enqueue_script('main',get_stylesheet_directory_uri().'/assets/js/main.js?cachebuster='.time(),array(),null,true);
			wp_enqueue_script('accordion-js',get_stylesheet_directory_uri().'/assets/js/accordion.js',array(),null,true);
    }
    function baw_hack_wp_title_for_home( $title ){
			if( empty( $title ) && ( is_home() || is_front_page() ) ) {
					return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
			}
			return $title;
    }
    
    function build_sections(){

			$sects = array(
				'labels'             => array(
						'name'               => 'Sections',
						'singular_name'      => 'Section',
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'section' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);
			$servs = array(
				'labels'             => array(
						'name'               => 'Services',
						'singular_name'      => 'Service',
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'service' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'          => 'dashicons-admin-generic',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);
			$focus = array(
				'labels'             => array(
						'name'               => 'Focuses',
						'singular_name'      => 'Focus',
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'focus' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'taxonomies'         => array('category'),
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'          => 'dashicons-search',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'category' )
			);
			$exp = array(
				'labels'             => array(
						'name'               => 'Expertise',
						'singular_name'      => 'Expertise',
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'expertise' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'          => 'dashicons-star-half',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);
			$team = array(
				'labels'             => array(
						'name'               => 'Team',
						'singular_name'      => 'Team',
				),
				'public'               => true,
				'publicly_queryable'   => true,
				'show_ui'              => true,
				'show_in_menu'         => true,
				'query_var'            => true,
				'rewrite'              => array( 'slug' => 'team' ),
				'capability_type'      => 'post',
				'has_archive'          => true,
				'hierarchical'         => false,
				'menu_position'        => null,
				'menu_icon'            => 'dashicons-groups',
				'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
				'register_meta_box_cb' => 'add_meta_boxes'
			);
			$clients = array(
				'labels'             => array(
						'name'               => 'Clients',
						'singular_name'      => 'Clients',
				),
				'public'               => true,
				'publicly_queryable'   => true,
				'show_ui'              => true,
				'show_in_menu'         => true,
				'query_var'            => true,
				'rewrite'              => array( 'slug' => 'clients' ),
				'capability_type'      => 'post',
				'has_archive'          => true,
				'hierarchical'         => false,
				'menu_position'        => null,
				'menu_icon'            => 'dashicons-businessman',
				'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
				'register_meta_box_cb' => 'add_meta_boxes'
			);
			$work = array(
				'labels'             => array(
						'name'               => 'Work',
						'singular_name'      => 'Work',
				),
				'public'               => true,
				'publicly_queryable'   => true,
				'show_ui'              => true,
				'show_in_menu'         => true,
				'query_var'            => true,
				'rewrite'              => array( 'slug' => 'work' ),
				'capability_type'      => 'post',
				'has_archive'          => true,
				'hierarchical'         => false,
				'menu_position'        => null,
				'menu_icon'            => 'dashicons-desktop',
				'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
				'register_meta_box_cb' => 'add_meta_boxes',
			);
			register_post_type( 'section', $sects );
			register_post_type( 'service', $servs);
			register_post_type( 'focus', $focus);
			register_post_type( 'expertise', $exp );
			register_post_type( 'team', $team );
			register_post_type( 'clients', $clients );
			register_post_type( 'work', $work );
    }
    
    add_action( 'init', 'build_taxonomies' );
    function build_taxonomies() {
			register_taxonomy( 'work_category', 'work', array( 'label' => __( 'Category' ), 'rewrite' => array( 'slug' => 'work_category' ), 'hierarchical' => true, 'show_ui' => true, 'public' => true, ) );
			register_taxonomy( 'client_category', 'clients', array( 'label' => __( 'Category' ), 'rewrite' => array( 'slug' => 'client_category' ), 'hierarchical' => true, 'show_ui' => true, 'public' => true, ) );
    }
    
    function add_meta_boxes() {
			add_meta_box('craft_staff_title', 'Staff Title', 'craft_staff_title', 'team', 'normal', 'high');
			add_meta_box('craft_staff_email', 'Staff Email', 'craft_staff_email', 'team', 'normal', 'high');
			add_meta_box('craft_staff_fb', 'Staff Facebook', 'craft_staff_fb', 'team', 'normal', 'high');
			add_meta_box('craft_staff_twitter', 'Staff Twitter', 'craft_staff_twitter', 'team', 'normal', 'high');
			add_meta_box('craft_staff_linkedin', 'Staff Linkedin', 'craft_staff_linkedin', 'team', 'normal', 'high');
			
			add_meta_box('work_site_url', 'Website URL', 'work_site_url', 'work', 'normal', 'high');
			add_meta_box('work_yt_id', 'YouTube ID', 'work_yt_id', 'work', 'normal', 'high');
			add_meta_box('work_tweet', 'Tweet', 'work_tweet', 'work', 'normal', 'high');
    }
    
    // Staff Title
    function craft_staff_title($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'craft_staff_title', true);
			echo '<input name="craft_staff_title" type="text" value="'.$meta.'" class="widefat">';
    }
    // Staff Email
    function craft_staff_email($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'craft_staff_email', true);
			echo '<input name="craft_staff_email" type="text" value="'.$meta.'" class="widefat">';
    }
    // Staff Facebook
    function craft_staff_fb($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'craft_staff_fb', true);
			echo '<input name="craft_staff_fb" type="text" value="'.$meta.'" class="widefat">';
    }
    // Staff Twitter
    function craft_staff_twitter($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'craft_staff_twitter', true);
			echo '<input name="craft_staff_twitter" type="text" value="'.$meta.'" class="widefat">';
    }
    // Staff Linkedin
    function craft_staff_linkedin($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'craft_staff_linkedin', true);
			echo '<input name="craft_staff_linkedin" type="text" value="'.$meta.'" class="widefat">';
    }
    
    // Work URL
    function work_site_url($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'work_site_url', true);
			echo '<input name="work_site_url" type="text" value="'.$meta.'" class="widefat">';
    }
    // Work Video
    function work_yt_id($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'work_yt_id', true);
			echo '<input name="work_yt_id" type="text" value="'.$meta.'" class="widefat">';
    }
    // Work Tweet
    function work_tweet($post) {
			wp_nonce_field('add_meta_boxes', 'add_meta_boxes_nonce');
			$meta = get_post_meta($post->ID, 'work_tweet', true);
			echo '<input name="work_tweet" type="text" value="'.$meta.'" class="widefat">';
    }

    
    // Save Meta Data
		function save_meta($post_id){
			$post_icon = sanitize_text_field( $_POST['craft_staff_title'] );
			update_post_meta( $post_id, 'craft_staff_title', $post_icon );
			$post_icon = sanitize_text_field( $_POST['craft_staff_email'] );
			update_post_meta( $post_id, 'craft_staff_email', $post_icon );
			$post_icon = sanitize_text_field( $_POST['craft_staff_fb'] );
			update_post_meta( $post_id, 'craft_staff_fb', $post_icon );
			$post_icon = sanitize_text_field( $_POST['craft_staff_twitter'] );
			update_post_meta( $post_id, 'craft_staff_twitter', $post_icon );
			$post_icon = sanitize_text_field( $_POST['craft_staff_linkedin'] );
			update_post_meta( $post_id, 'craft_staff_linkedin', $post_icon );
			
			$post_icon = sanitize_text_field( $_POST['work_site_url'] );
			update_post_meta( $post_id, 'work_site_url', $post_icon );
			$post_icon = sanitize_text_field( $_POST['work_yt_id'] );
			update_post_meta( $post_id, 'work_yt_id', $post_icon );
			$post_icon = sanitize_text_field( $_POST['work_tweet'] );
			update_post_meta( $post_id, 'work_tweet', $post_icon );
		}
		
		// Register Sidebars
		add_action( 'widgets_init', 'build_sidebars' );
		function build_sidebars() {
			register_sidebar(
				array(
					'id' => 'team-sidebar',
					'name' => __('Team Sidebar'),
					'before_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			register_sidebar(
				array(
					'id' => 'blog-sidebar',
					'name' => __('Blog Sidebar'),
					'before_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
		}
		
		// Register Widgets
		class staff_widget extends WP_Widget {
			function __construct() {
				parent::__construct(
					'staff_list',
					'Staff List',
					array( 'description' => __( 'Displays the staff list. Automatically updates when a new staff member is added.' ) )
				);
			}
			function update($new_instance, $old_instance) {
				$instance = $old_instance;
				$instance['title'] = strip_tags($new_instance['title']);
				$instance['staffNames'] = strip_tags($new_instance['staffNames']);
				return $instance;
			}
			function form($instance) {
				if($instance) {
					$title = esc_attr($instance['title']);
				} else {
					$title = 'New title';
				}
				?>
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'realty_widget'); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
				</p>
				<?php
			}
			function widget($args, $instance) {
				extract( $args );
				$title = apply_filters('widget_title', $instance['title']);
				$staffNames = $instance['staffNames'];
				echo $before_widget;
				if( $title ) {
					echo $before_title . $title . $after_title;
				}
				$this->getStaffNames($staffNames);
				echo $after_widget;
			}
			function getStaffNames($staffNames) {
				global $post;
				$names = new WP_Query();
				$names->query('post_type=team&posts_per_page=100');
				if($names->found_posts > 0) {
					echo '<ul class="staff-list">';
						while($names->have_posts()) {
							$names->the_post();
							$listItem = '<li>';
							$listItem .= '<a href="' . get_permalink() . '">';
							$listItem .= get_the_title() . '</a>';
							$listItem .= '</li>';
							echo $listItem;
						}
					echo '</ul>';
					wp_reset_postdata();
				} else {
					echo '<p>Something went wrong.</p>';
				}
			}
		}
		register_widget('staff_widget');
		
		function make_bitly_url($url, $format='txt') {
			$login = "craftdigital";
			$appkey = "R_51f1d08490554d30113708ffc409c238";
			$bitly_api = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$bitly_api);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}
		
		// Change Read More Text
		function new_excerpt_more($more) {
			return ' <a class="read-more" href="'.get_permalink().'">[READ MORE]</a>';
		}
		add_filter('excerpt_more', 'new_excerpt_more');
		
		// Pagination
		if ( ! function_exists( 'my_pagination' ) ) :
			function my_pagination() {
				global $wp_query;

				$big = 999999999; // need an unlikely integer
		
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					'prev_text' => __('Previous'),
					'next_text' => __('Next')
				) );
			}
		endif;
    
    add_filter('show_admin_bar', '__return_false');
    add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
    add_action('init','build_sections');
    add_action('save_post','save_meta');
    add_action('wp_enqueue_scripts','styles_scripts');
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );