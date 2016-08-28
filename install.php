<?php

if ( !function_exists('wp_install_defaults') ) :

	function wp_install_defaults($user_id) {
		global $wpdb, $wp_rewrite, $current_site, $table_prefix;

		update_option('timezone_string','America/Chicago');
		update_option('start_of_week', 0);
		update_option('thread_comments', 1);
		update_option('thread_comments_depth', 3);
		update_option('show_avatars', 0);
		update_option('avatar_default', 'blank');
		update_option('close_comments_for_old_posts', 0);
		update_option('page_comments', 0);
		update_option('comment_whitelist', 0);
		update_option('comment_registration', 0);
		update_option('permalink_structure', '/%postname%/ ');
		update_option('page_on_front', 1);
		update_option('page_for_posts', 2);
		update_option('posts_per_page', 12);
		update_option('posts_per_rss', 12);
		update_option('show_on_front', 'page');
		update_option('template', 'minnowproject');
		update_option('ping_sites', 'http://rpc.pingomatic.com/');
		update_option('use_smilies', 0);
		update_option('enable_xmlrpc', 0);
		update_option('default_post_edit_rows', '40');
		update_option('uploads_use_yearmonth_folders', 1);
		update_option('template', 'minnowproject');
		update_option('stylesheet', 'minnowproject');
		update_option('category_base', 'category');
		update_option('tag_base', 'tag');

		$cat_name = __('News');
		$cat_slug = sanitize_title(_x('News', 'news'));

		if(global_terms_enabled()){
			$cat_id = $wpdb->get_var($wpdb->prepare("SELECT cat_ID FROM {$wpdb->sitecategories} WHERE category_nicename = %s", $cat_slug));
			if($cat_id == null){
				$wpdb->insert($wpdb->sitecategories, array('cat_ID' => 0, 'cat_name' => $cat_name, 'category_nicename' => $cat_slug, 'last_updated' => current_time('mysql', true)));
				$cat_id = $wpdb->insert_id;
			}
			update_option('default_category', $cat_id);
		}else {
			$cat_id = 1;
		}

		$wpdb->insert( $wpdb->terms, array('term_id' => $cat_id, 'name' => $cat_name, 'slug' => $cat_slug, 'term_group' => 0) );
		$wpdb->insert( $wpdb->term_taxonomy, array('term_id' => $cat_id, 'taxonomy' => 'category', 'description' => '', 'parent' => 0, 'count' => 1));
		$cat_tt_id = $wpdb->insert_id;

		$home_page = get_option('home') . '/?page_id=1';
		$post_page = get_option('home') . '/?page_id=1';

		$wpdb->insert( $wpdb->posts, array(
			'post_author' => $user_id,
			'post_excerpt' => '',
			'post_title' => __( 'Home' ),
			'post_name' => __( 'home' ),
			'guid' => $home_page,
			'post_type' => 'page',
			'to_ping' => '',
			'pinged' => '',
			'post_content_filtered' => ''
		));
		$wpdb->insert( $wpdb->posts, array(
			'post_author' => $user_id,
			'post_excerpt' => '',
			'post_title' => __( 'Posts' ),
			'post_name' => __( 'posts' ),
			'guid' => $home_page,
			'post_type' => 'page',
			'to_ping' => '',
			'pinged' => '',
			'post_content_filtered' => ''
		));
		$wpdb->insert( $wpdb->postmeta, array( 'post_id' => 1, 'meta_key' => '_wp_page_template', 'meta_value' => 'default' ) );

		update_user_meta( $user_id, 'wporg_favorites', 'minnowproject' );
		wp_update_user( array(
				'ID' => $user_id,
				'first_name'=>'Ashley',
				'last_name'=>'Cameron',
				'user_email'=>'acameron@live.com',
				'display_name'=>'Ashley Cameron',
				'user_url'=>'http://ashley-cameron.com',
				'nickname'=>'Ashley Cameron',
				'display_name'=>'Ashley Cameron',
				'description'=>'Branding, Graphic Design, & Website Development',
				'show_welcome_panel', 0
			) );
	}
endif;

?>