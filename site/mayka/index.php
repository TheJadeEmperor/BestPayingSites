<?php
function anchor($url, $displayText)
{
	return '<a href="'.$url.'">'.$displayText.'</a>'; 
}

function img($url, $altText)
{
	return '<img src="'.$url.'" alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$dir = '../../';
$aff = 'mayka';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://bestpayingsites.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;


switch($_GET[page])
{
	case 'catalog':
		$metaTitle='Neobux Ultimate Strategy'; 
		$file = 'catalog.html';
		break;
	case 'ptc':
		$metaTitle='Best Paying Sites | Top PTC Sites'; 
		$file = 'ptc.html';
		break;
	case 'home':
	default:
		$metaTitle='Best Paying Sites | Money Making Sites'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>