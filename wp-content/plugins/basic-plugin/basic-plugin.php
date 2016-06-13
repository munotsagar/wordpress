<?php
/**
 * Plugin Name: Basic Pugin
 * Plugin URI: http://mysite.sm
 * Description: Sagar Munots First WordPress Plugin For Learning
 * Author: SAGAR MUNOT
 * Author URI: http://mysite.sm
 * Version: 0.0.1
 * License: SMU1
 */

function smu_remove_dashboard_widget()
{
    remove_meta_box('dashboard_primary', 'dashboard', 'post_container_2');
}

add_action('wp_dashboard_setup', 'smu_remove_dashboard_widget');

function smu_add_google_link()
{
    global $wp_admin_bar;

    $wp_admin_bar->add_menu(array(
        'id'    =>  'google_analytics',
        'title' =>  'Google Analytics',
        'href'  =>  'https://google.com/analytics'

    ));
    /*echo "<pre>";
    var_dump($wp_admin_bar);*/
}

add_action('wp_before_admin_bar_render', 'smu_add_google_link');

function smu_alter_pages_icon( $args )
{
    echo "sagar";exit;
    $args['menu_icon']  =   'dashicons-format-image';
    return $args;
}

add_filter('smu_post_type_args', 'smu_alter_pages_icon');


function smu_change_label($plural)
{
    echo $plural;exit;
    $plural = "Bookssssss";
    return $plural;
}


add_filter('smu_label_plural', 'smu_change_label');



add_filter( 'gettext', 'smu_change_post_to_article' );
//add_filter( 'ngettext', 'smu_change_post_to_article' );

function smu_change_post_to_article( $translated )
{
    //echo "<pre>";
    //var_dump($translated);//exit;
    $translated = str_replace( 'Posts', 'Articles', $translated );
    $translated = str_replace( 'post', 'article', $translated );
    return $translated;
}
?>