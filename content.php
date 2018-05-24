<?php
	$invalide = array('\\','/','/\/',':','.');
	$site = str_replace($invalide,' ',$site);
	if(!file_exists($site.'.php')) $site = "home";
	include($site.'.php');
?>