<?php
	/**
	 * Elgg icon - default image
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/
	 
	global $CONFIG;
	if ($vars['full'] && $smallthumb = $vars['entity']->smallthumb) {
 
		echo "<p><a href=\"{$vars['url']}action/{$CONFIG->pluginname}/download?stores_guid={$vars['entity']->getGUID()}\"><img src=\"{$vars['url']}mod/stores/thumbnail.php?stores_guid={$vars['entity']->getGUID()}&size=large\" border=\"0\" /></a></p>";
		
	}

?>