<?php
/**
 * Elgg icon - mp3 audio
 * 
 * @package Elgg SocialCommerce
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Cubet Technologies
 * @copyright Cubet Technologies 2009-2010
 * @link http://elgghub.com/
 **/ 
 ?>
	 
<?php global $CONFIG; ?>
<object type="audio/mpeg" data="<?php echo $vars['url']; ?>action/<?php echo $CONFIG->pluginname; ?>/download?stores_guid=<?php echo $vars['entity']->getGUID(); ?>" width="200" height="20">
  <param name="autoplay" value="false">
  <param name="autoStart" value="0">
</object>