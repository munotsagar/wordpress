<?php
    /*
    Plugin Name: WP Job Listing
    Plugin URI: http://www.mysite.sm
    Description: WP Job Listing Content
    Author: SAGAR MUNOT
    Version: 1.0
    Author URI: http://www.mysite.sm
    */

// Exit if not an wordpress user

if(! defined('ABSPATH')){
    exit;
}

function smu_register_post_type()
{
    /*$args = array(
        'public' => true,
        'label' =>  'Job Listing'
    );*/

    $singular = "Job Listing";
    
    $plural = "Job Listings";

    $labels = array(
        'name'          => $plural,
        'singular_name' => $singular,
        'add_name'      => "Add New",
        'add_new_item'  => "Add New ".$singular,
        'edit'          => "Edit",
        'edit_item'     =>  "Edit ". $singular,
        'view'          => "View ".$singular,
        'view_item'     =>  "View ".$singular,
        'search_item'   => "Search ". $singular,
        'parent'        =>  "Parent ".$singular,
        'not_found'     =>  "No ". $plural. " Found",
        'not_found_in_trash'    => 'No '. $plural." in Trash"
    );


    register_post_type('job', $args);
}


add_action('init', 'smu_register_post_type');