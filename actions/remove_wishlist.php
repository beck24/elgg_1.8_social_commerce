<?php
	/**
	 * Elgg wishlist - remove action
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
	 **/ 

	global $CONFIG;
	
	// Get variables
	$product_guid = get_input("product_guid");
	$product = get_entity($product_guid);
	if($product_guid && $product_guid > 0 && isloggedin()){
		$relation = check_entity_relationship($_SESSION['user']->guid,'wishlist',$product_guid);
		if($relation){
			$result = remove_entity_relationship($_SESSION['user']->guid,'wishlist',$product_guid);
			if($result){
				system_message(sprintf(elgg_echo("wishlist:deleted"),$product->title));
			}else {
				register_error(elgg_echo("wishlist:delete:failed"));
			}
		}else{
			register_error(elgg_echo("wishlist:delete:failed"));
		}
	}
	
	$return = $CONFIG->url . "pg/{$CONFIG->pluginname}/" . $product->getOwnerEntity()->username . "/wishlist";
	forward($return);
?>