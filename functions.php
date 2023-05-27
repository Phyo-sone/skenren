<?php
/**
 * Include parent theme's stylesheet.
 */

 //ニュースカスタム

 function custom_post_news() {
    $labels = array(
        'name' => 'ニュース',
        'singular_name' => 'ニュース',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
		'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest' => true,

        'taxonomies' => array('category', 'post_tag'), // カテゴリータクソノミーとタグタクソノミーを追加
    );

    register_post_type( 'news', $args );
}

add_action( 'init', 'custom_post_news' );

add_theme_support('post-thumbnails');