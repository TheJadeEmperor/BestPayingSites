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

$dir = '../../';
$aff = 'perfweapon33';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'home':
	default:
		$meta = array(
			'title' => 'Top Clicks 4 You', 
			'tags' => 'make money from ptc',
			'desc' => 'Pay to click websites, top pay to click websites'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>