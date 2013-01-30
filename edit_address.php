<?php
	/**
	 * Elgg address - edit
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/

	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	global $CONFIG;
	gatekeeper();
	
	// Render the category upload page
	
	$address = (int) get_input('address_guid');
	$title = elgg_view_title($title = elgg_echo('address:edit'));
	if ($address = get_entity($address)) {
		if ($address->canEdit()) { 
    		$area2 = "<div class=\"contentWrapper\">".elgg_view("{$CONFIG->pluginname}/forms/edit_address",array('entity' => $address))."</div>";
    		// These for left side menu
			$area1 .= gettags();
			$body = elgg_view_layout('two_column_left_sidebar', $area1, $title . $area2);
			page_draw(elgg_echo("category:edit"), $body);
		}
	} else {
		forward();
	}
	
?>