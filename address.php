<?php
	/**
	 * Elgg address - add/display entry page
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/
	 
	// Load Elgg engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
		global $CONFIG;
	// Get the current page's owner
		$page_owner = page_owner_entity();
		if ($page_owner === false || is_null($page_owner)) {
			$page_owner = $_SESSION['user'];
			set_page_owner($_SESSION['guid']);
		}
		$container_guid = page_owner();

	//set Category title
	
		$title = elgg_view_title(elgg_echo('stores:address'));
		
	// Get objects
		if(elgg_get_entities('object',"address",page_owner())){
			set_context('search');
			$area2 .= list_entities("object","address",page_owner(),10);
			$area2 .= elgg_view("{$CONFIG->pluginname}/forms/confirm_address");
			set_context('address');
		}else{
			$area2 .= elgg_view("{$CONFIG->pluginname}/forms/edit_address");
		}
		
		$area2 = <<<EOF
			{$title}
			<div class="contentWrapper stores">
				{$area2}
			</div>
EOF;

	// These for left side menu
		$area1 .= gettags();
		//$area1 .= get_storestype_cloud(page_owner());
	// Create a layout
		$body = elgg_view_layout('two_column_left_sidebar', $area1, $area2);
	
	// Finally draw the page
		page_draw(sprintf(elgg_echo("stores:address"),page_owner_entity()->name), $body);
	
?>