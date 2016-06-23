<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Basic_Theme
 */

function bt_default_widget_args ( $widget_name ) {
	return array(
		'before_widget' => "<section class='widget {$widget_name}'>",
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
}

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
?>

	<aside id="secondary" class="widget-area" role="complementary">
		<?php

		/*
		 * Default Sidebar Widgets
		 */

		// Search Widget
		the_widget(
			'WP_Widget_Search',
			array(
				'title' => null
			),
			bt_default_widget_args( 'widget_search' )
		);

		// Recent Posts
		the_widget(
			'WP_Widget_Recent_Posts',
			array(
				'title' => __( 'Recent Posts', 'bt' )
			),
			bt_default_widget_args( 'widget_recent_entries' )
		);

		// Recent Comments
		the_widget(
			'WP_Widget_Recent_Comments',
			array(
				'title' => __( 'Recent Comments', 'bt' )
			),
			bt_default_widget_args( 'widget_recent_comments' )
		);

		// Tag Cloud
		the_widget(
			'WP_Widget_Tag_Cloud',
			array(
				'title' => __( 'Tags', 'bt' )
			),
			bt_default_widget_args( 'widget_tag_cloud' )
		);

		// Categories
		the_widget(
			'WP_Widget_Categories',
			array(
				'title' => __( 'Categories', 'bt' ),
				'hierarchical' => 1,
				'dropdown' => 1
			),
			bt_default_widget_args( 'widget_categories' )
		);

		// Meta
		the_widget(
			'WP_Widget_Meta',
			array(
				'title' => __( 'Links', 'bt' )
			),
			bt_default_widget_args( 'widget_meta' )
		);

		?>
	</aside><!-- #secondary -->

<?php
} else {
?>

	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->

<?php
}
?>
