<?php
/**
 * Elgg view - extend header
 * 
 * @package Elgg SocialCommerce
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Cubet Technologies
 * @copyright Cubet Technologies 2009-2010
 * @link http://elgghub.com/
 **/
	 
global $CONFIG;
$context = get_context();
if($context == 'socialcommerce' || $context == 'stores' || $context == 'search' || $context == 'main'){
	
?>
<?PHP
}
?>
<script type="text/javascript" src="<?php echo $CONFIG->wwwroot; ?>mod/<?php echo $CONFIG->pluginname; ?>/js/socialcommerce.js"></script>