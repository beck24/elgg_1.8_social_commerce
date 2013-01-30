<?php
/**
 * Elgg view - header extend
 * 
 * @package Elgg SocialCommerce
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Cubet Technologies
 * @copyright Cubet Technologies 2009-2010
 * @link http://elgghub.com/
 **/
	 
global $CONFIG, $settings;
if(isadminloggedin() && $settings == 1){
	confirm_social_commerce_settings();
}
?>