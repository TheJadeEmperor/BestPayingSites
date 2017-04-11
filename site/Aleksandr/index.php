<?php
$nusLink = 'http://neobuxultimatestrategy.com/';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';

switch($_GET[page])
{
	case 'home':
	default:
		$metaTitle = 'Quality PTC Sites'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>