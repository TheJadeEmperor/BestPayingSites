<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText)
{
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText)
{
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}


$aff = 'mrbowl';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://bestpayingsites.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{

	case 'home':
	default:
		$meta = array(
			'title' => 'Great PTC Sites', 
			'tags' => 'great ptc sites, make money',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>