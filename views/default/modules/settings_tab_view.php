<?PHP
	/**
	 * Elgg modules - settings tab view
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/ 
	 
	$base_view = $vars['base_view'];
	$filter = $vars['filter'];
	$settings = $vars['entity'];

?>
<div class="">
	<div id="elgg_horizontal_tabbed_nav">
		<ul>
			<li <?php if($filter == "settings") echo "class='selected'"; ?>><a href="<?php echo $url; ?>?filter=settings"><?php echo elgg_echo('general:settings:tab'); ?></a></li>
			<?php if($settings[0]->checkout_methods){ ?>
				<li <?php if($filter == "checkout") echo "class='selected'"; ?>><a href="<?php echo $url; ?>?filter=checkout"><?php echo elgg_echo('checkout:methods:tab'); ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php echo $base_view; ?>
</div>