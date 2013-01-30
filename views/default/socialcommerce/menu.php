<?php
	/**
	 * Elgg view - side menu
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/
?>

	<p class="user_menu_stores">
		<a href="<?php echo $vars['url']; ?>pg/<?php echo $CONFIG->pluginname; ?>/<?php echo $vars['entity']->username; ?>"><?php echo elgg_echo("stores"); ?></a>	
	</p>