<?php
	/**
	 * Elgg product - individual view
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/ 

	global $CONFIG;
	
	if (get_context() == "search") { 	// Start search listing version 
		echo elgg_view("{$CONFIG->pluginname}/short_view",$vars);
	}elseif (get_context() == "cartadd") {
		echo elgg_view("{$CONFIG->pluginname}/cart_mainview",$vars);
	}else {
		echo elgg_view("{$CONFIG->pluginname}/mainview",$vars);
		
	}
?>