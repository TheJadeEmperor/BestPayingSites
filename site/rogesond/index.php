<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText)
{
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText)
{
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'" width="468"/>'; 
}

$dir = '../../';
$aff = 'rogesond';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$vcLink = 'http://ultimateneobuxstrategy.com/video/?r='.$aff;

switch($_GET[page])
{
	case 'top':
		$fileName = 'top.html';	
		break;
	case 'traffic':
		$fileName = 'traffic.html';	
		break;
	case 'home':
	default:
		$meta = array(
			'title' => 'Top PTC Programs');		
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>