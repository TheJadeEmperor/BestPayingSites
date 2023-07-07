<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText) {
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'" width="468"/>'; 
}

$dir = '../../';
$nusLink = 'http://ultimateneobuxstrategy.com/';
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';
$nusLink = 'http://ultimateneobuxstrategy.com/';
$vcLink = 'http://ultimateneobuxstrategy.com/video/';

switch($_GET['page']) {
	case 'home':
	default:
		$meta = array(
			'title' => 'Make $1000 a Month or More From PTC Sites', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>