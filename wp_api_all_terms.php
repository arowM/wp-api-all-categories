<?php

/*
Plugin Name:  WP REST API All Categories
Plugin URI:   https://github.com/arowM/wp-api-all-categories
Description:  This plugin adds an endpoint for all categories
Version:      1.0
Author:       Kadzuya Okamoto
Author URI:   https://github.com/arowM
License:      MIT License
*/


class all_categories
{
    public function __construct()
    {
        $version = '2';
        $namespace = 'wp/v' . $version;
        $base = 'all-categories';
        register_rest_route($namespace, '/' . $base, array(
            'methods' => 'GET',
            'callback' => array($this, 'get_all_categories'),
        ));
    }

    public function get_all_categories($object)
    {
        $return = get_terms('category', 'get=all');
        return new WP_REST_Response($return, 200);
    }
}

add_action('rest_api_init', function () {
    $all_categories = new all_categories;
});
