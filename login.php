<?php
	/**
	 * Elgg social commerce - login page
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/
	
	global $CONFIG;
	// Load Elgg engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
		$last_forward_from = get_input('forward_url');
		if($last_forward_from){
			$_SESSION['last_forward_from'] = $last_forward_from;
		}
		$area2 = elgg_view("socialcommerce/login");
		
	// Create a layout
		$body = elgg_view_layout('one_column', $area2);
	
	// Finally draw the page
		page_draw(sprintf(elgg_echo("stores:your"),page_owner_entity()->name), $body);
	
?>