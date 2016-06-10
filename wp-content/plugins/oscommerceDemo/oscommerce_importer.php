<?php 
    /*
    Plugin Name: OSCommerce Product Display
    Plugin URI: http://www.orangecreative.net
    Description: Plugin for displaying products from an OSCommerce shopping cart database
    Author: C. Lupu
    Version: 1.0
    Author URI: http://www.orangecreative.net
    */
	function oscimp_getproducts($product_cnt=1) 
	{
		return "Demo Data Here";
	}
	function oscimp_admin() 
	{
		include('oscommerce_import_admin.php');
	}
	function oscimp_admin_actions() 
	{
		add_management_page("OSCommerce Product Display", "OSCommerce Product Display", 1, "OSCommerce Product Display", "oscimp_admin");	
		// Last parameter is actually a function name that will be called when the newly added menu item is clicked on 
	}
 
add_action('admin_menu', 'oscimp_admin_actions');

?>