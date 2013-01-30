<?php
	/**
	 * Elgg view - short
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/
	 
	global $CONFIG;
	
	$search_viewtype = get_input('search_viewtype');
	
	if($search_viewtype == "gallery"){
		echo elgg_view("{$CONFIG->pluginname}/gallery_view",$vars);
	}else{
		echo elgg_view("{$CONFIG->pluginname}/list_view",$vars);
	}
?>