<?php
/**
 	 * Elgg country tax	 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
	 **/ 
	global $CONFIG;
	$country_code = trim(get_input('code'));
	$tax_entity = elgg_get_entities_from_metadata('tax_country',$country_code,'object','addtax_country','',1);
	foreach($tax_entity as $tax_entitys)
	{
			$tax_rate = $tax_entitys->taxrate;
	}
	echo $tax_rate ;
?>