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
$aff = 'chilloutbay';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;
$vcLink = 'http://neobuxultimatestrategy.com/video/?r='.$aff;
$basicsLink = 'http://neobuxultimatestrategy.com/basics';

switch($_GET[page])
{
	case 'neobux':
		$meta = array(
			'title' => "ChilloutBay's PTC Site | Neobux", 
			'tags' => ''); 
		$file = 'neobux.html';
		break;
	case 'clixsense':
		$meta = array(
			'title' => "ChilloutBay's PTC Site | Clixsense",  
			'tags' => ''); 
		$file = 'clixsense.html';
		break;
	case 'probux':
		$meta = array(
			'title' => "ChilloutBay's PTC Site | Probux",  
			'tags' => ''); 
		$file = 'probux.html';
		break; 
	case 'buxhostlist':
		$meta = array(
			'title' => "ChilloutBay's PTC Site | Buxhost List",  
			'tags' => ''); 
		$file = 'buxhostlist.html';
		break;	
	case 'about':
		$meta = array(
			'title' => "ChilloutBay's PTC Site | About",  
			'tags' => ''); 
		$file = 'about.html';
		break; 
	case 'home':
	default:
		$meta = array(
			'title' => '', 
			'tags' => '',
			'desc' => ''); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>