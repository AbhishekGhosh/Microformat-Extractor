<?php
	include('hkit.class.php');
	
	$h	= new hKit;
	
	// Config options (see top of class file)
	$h->tidy_mode	= 'proxy'; // 'proxy', 'exec', 'php' or 'none'
	
	// Get by URL
	$result	= $h->getByURL('hcard', 'http://microformats.org');

	// Get by String
	//$result	= $h->getByString('hcard', '<div class="vcard"><p class="fn">Drew McLellan</p></div>');

	print '<pre>'.print_r($result, 1).'</pre>';
?>