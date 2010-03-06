<?php
	require_once('Cache.class.php');
	
	function build ($sourcefile) {
		$source = file_get_contents($sourcefile);
		$source = str_replace('#{time}', date("d.m.Y, H:i:s"), $source);
		
		return $source;
	}
	
	$testCache = new Cache (
		'source/', // source directory
		'cache/', // cache directory
		'build' // callback for building cache
	);
	
	echo file_get_contents($testCache->get('test'));
?>
