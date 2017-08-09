<?php
$nusLink = 'http://neobuxultimatestrategy.com/';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';

switch($_GET['page']) {

	case 'ptc-strategy':
		$metaTitle = 'PTC Strategy'; 
		$file = 'ptc-strategy.html';
		break;
	
	case 'ptc-reviews':
		$metaTitle = 'PTC Reviews'; 
		$file = 'ptc-reviews.html';
		break;
	
	case 'ptc-sites':
		$metaTitle = 'PTC Sites'; 
		$file = 'ptc-sites.html';
		break;
	case 'home':
	default:
		$metaTitle = 'PTC Sites'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>