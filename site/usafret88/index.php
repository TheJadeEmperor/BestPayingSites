<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText) {
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}


function showBanner ($siteName, $referralURL, $imgURL) {
	
	echo '<h2>'.$siteName.'</h2><br />';
	
	$image = img($imgURL, $siteName, $siteName);
	
	echo '<p><a href="'.$referralURL.'" "target=_blank">'.$image.'</a></p>';
}


$dir = '../../';
$nusLink = 'http://neobuxultimatestrategy.com/';
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';
$basicsLink = 'http://neobuxultimatestrategy.com/basics';
$nusLink = 'http://neobuxultimatestrategy.com/';
$vcLink = 'http://neobuxultimatestrategy.com/video/';

switch($_GET['page']) {

	case 'exchanges-wallets':
		$fileName = 'exchanges-wallets.html';
		break;
	case 'free-bitcoins':
		$fileName = 'free-bitcoins.html';
		break;
	case 'survey-sites':
		$fileName = 'survey-sites.html';
		break;
	case 'traffic':
		$fileName = 'traffic.html';
		break;
	case 'home':
	default:
		$meta = array(
			'title' => "PTC earnings site", 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>