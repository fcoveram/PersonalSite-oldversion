<?php

use Queulat\Post_Type;

class Jetpack_Portfolio_Post_Type extends Post_Type {
	public function get_post_type() : string {
		return 'jetpack-portfolio';
	}
	public function get_post_type_args() : array {
		return [
			'label'                 => __('Portfolio', 'cpt_jetpack-portfolio'),
			'labels'                => [
				'name'                     => __('Portfolio', 'cpt_jetpack-portfolio'),
				'singular_name'            => __('Portfolio', 'cpt_jetpack-portfolio'),
				'add_new'                  => __('Add New', 'cpt_jetpack-portfolio'),
				'add_new_item'             => __('Add New Post', 'cpt_jetpack-portfolio'),
				'edit_item'                => __('Edit Post', 'cpt_jetpack-portfolio'),
				'new_item'                 => __('New Post', 'cpt_jetpack-portfolio'),
				'view_item'                => __('View Post', 'cpt_jetpack-portfolio'),
				'view_items'               => __('View Posts', 'cpt_jetpack-portfolio'),
				'search_items'             => __('Search Posts', 'cpt_jetpack-portfolio'),
				'not_found'                => __('No posts found.', 'cpt_jetpack-portfolio'),
				'not_found_in_trash'       => __('No posts found in Trash.', 'cpt_jetpack-portfolio'),
				'parent_item_colon'        => null,
				'all_items'                => __('Portfolio', 'cpt_jetpack-portfolio'),
				'archives'                 => __('Portfolio', 'cpt_jetpack-portfolio'),
				'attributes'               => __('Post Attributes', 'cpt_jetpack-portfolio'),
				'insert_into_item'         => __('Insert into post', 'cpt_jetpack-portfolio'),
				'uploaded_to_this_item'    => __('Uploaded to this post', 'cpt_jetpack-portfolio'),
				'featured_image'           => __('Featured Image', 'cpt_jetpack-portfolio'),
				'set_featured_image'       => __('Set featured image', 'cpt_jetpack-portfolio'),
				'remove_featured_image'    => __('Remove featured image', 'cpt_jetpack-portfolio'),
				'use_featured_image'       => __('Use as featured image', 'cpt_jetpack-portfolio'),
				'filter_items_list'        => __('Filter posts list', 'cpt_jetpack-portfolio'),
				'items_list_navigation'    => __('Posts list navigation', 'cpt_jetpack-portfolio'),
				'items_list'               => __('Posts list', 'cpt_jetpack-portfolio'),
				'item_published'           => __('Post published.', 'cpt_jetpack-portfolio'),
				'item_published_privately' => __('Post published privately.', 'cpt_jetpack-portfolio'),
				'item_reverted_to_draft'   => __('Post reverted to draft.', 'cpt_jetpack-portfolio'),
				'item_scheduled'           => __('Post scheduled.', 'cpt_jetpack-portfolio'),
				'item_updated'             => __('Post updated.', 'cpt_jetpack-portfolio'),
				'menu_name'                => __('Portfolio', 'cpt_jetpack-portfolio'),
				'name_admin_bar'           => __('Portfolio', 'cpt_jetpack-portfolio'),
			],
			'description'           => __('Works', 'cpt_jetpack-portfolio'),
			'public'                => true,
			'hierarchical'          => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_nav_menus'     => true,
			'show_in_admin_bar'     => true,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-portfolio',
			'capability_type'       => [
				0 => 'jetpack-portfolio',
				1 => 'jetpack-portfolios',
			],
			'map_meta_cap'          => true,
			'register_meta_box_cb'  => null,
			'taxonomies'            => [],
			'has_archive'           => true,
			'query_var'             => 'jetpack-portfolio',
			'can_export'            => true,
			'delete_with_user'      => false,
			'rewrite'               => [
				'with_front' => false,
				'feeds'      => true,
				'pages'      => true,
				'slug'       => 'works',
				'ep_mask'    => 1,
			],
			'supports'              => [
				0 => 'title',
				1 => 'editor',
				2 => 'thumbnail',
				3 => 'excerpt',
				4 => 'revisions',
			],
			'show_in_rest'          => true,
			'rest_base'             => false,
			'rest_controller_class' => false
		];
	}
}
