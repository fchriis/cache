<?php
	require_once('Cache.class.php');
	
	function build ($sourceFilename, $cacheFilename) {
		$source = file_get_contents($sourceFilename);
		$source = str_replace('#{time}', date("d.m.Y, H:i:s"), $source);
		file_put_contents($cacheFilename, $source);
	}
	
	$testCache = new Cache (
		'source/', // source directory
		'cache/', // cache directory
		'build' // callback for building cache
	);
	
	echo file_get_contents($testCache->get('test'));
?>
