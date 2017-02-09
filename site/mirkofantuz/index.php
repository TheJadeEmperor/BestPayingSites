<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText) {
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'" width="468" />'; 
}

$dir = '../../';
$aff = 'Aguiaforever';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';
$basicsLink = 'http://neobuxultimatestrategy.com/basics';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$vcLink = 'http://neobuxultimatestrategy.com/video/?r='.$aff;

switch($_GET['page']) {
	
	case 'contact-me':
		$meta = array(
			'title' => 'Best PTC Sites | Contact Me', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
			
		$fileName = 'contact.html';
		break;
	case 'payment-proof':
		$meta = array(
			'title' => 'Best PTC Sites | Payment Proof', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
			
		$fileName = 'payment.html';
		break;
	case 'home':
	default:
		$meta = array(
			'title' => 'Best PTC Sites', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
			
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>