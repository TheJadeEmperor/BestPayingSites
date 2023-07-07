<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText) {
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$dir = '../../';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$vcLink = 'http://ultimateneobuxstrategy.com/video/?r='.$aff;

switch($_GET['page']) {

	case 'ptc-1':
		$fileName = 'ptc-1.html';
		break;
	case 'ptc-2':
		$fileName = 'ptc-2.html';
		break;
	case 'ptc-3':
		$fileName = 'ptc-3.html';
		break;
	case 'ptc-4':
		$fileName = 'ptc-4.html';
		break;
	case 'home':
	default:
		$meta = array(
			'title' => "Top PTC Websites", 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>