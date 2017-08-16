<?php
$nusLink = 'http://neobuxultimatestrategy.com/';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';

switch($_GET['page']) {
	
	case 'ptc-referrals':
		$metaTitle = 'PTC Referrals'; 
		$file = 'ptc-referrals.html';
		break;

	case 'ptc-strategy':
		$metaTitle = 'PTC Strategy'; 
		$file = 'ptc-strategy.html';
		break;
	
	case 'ptc-reviews':
		$metaTitle = 'PTC Reviews'; 
		$file = 'ptc-reviews.html';
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