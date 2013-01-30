<?php
	/**
	 * Elgg social commerce - thumbnail
	 * 
	 * @package Elgg SocialCommerce
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Cubet Technologies
	 * @copyright Cubet Technologies 2009-2010
	 * @link http://elgghub.com/
 	**/

	// Get engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	// Get file GUID
		$file_guid = (int) get_input('stores_guid',0);
		
	// Get file thumbnail size
		$size = get_input('size','small');
		if ($size != 'small') {
			$size = 'large';
		}
		
	// Get file entity
		if ($file = get_entity($file_guid)) {
			
			if ($file->getSubtype() == "stores") {
				
				$simpletype = $file->simpletype;
				if ($simpletype == "image") {
					
					// Get file thumbnail
						if ($size == "small") {
							$thumbfile = $file->smallthumb;
						} else {
							$thumbfile = $file->largethumb;
						}
						
					// Grab the file
						if ($thumbfile && !empty($thumbfile)) {
							$readfile = new ElggFile();
							$readfile->owner_guid = $file->owner_guid;
							$readfile->setFilename($thumbfile);
							$mime = $file->getMimeType();
							$contents = $readfile->grabFile();
							
							header("Content-type: $mime");
							echo $contents;
							exit;
							
						} 
					
				}
				
			}
			
		}
		
?>