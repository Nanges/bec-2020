<?php
/**
 * Generate the json file with all pcitures path
 */

	$filelist = array();
	$exclude = ['.','..'];

	if ($handle = opendir("./Images/photos/thumbs/")) {
		while ($entry = readdir($handle)) {
			if(array_search($entry, $exclude) === FALSE)
				$filelist[] = $entry;
		}
		closedir($handle);
	}

	file_put_contents('./Images/photos/thumbs.json', json_encode($filelist));
?>