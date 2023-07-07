<?php
function anchor($url, $extra, $displayText)
{
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $altText)
{
	return '<img src="'.$url.'" alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$dir = '../../';
$aff = 'kamiao';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://bestpayingsites.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;


switch($_GET[page])
{
    case 'topearning':
        $metaTitle = 'Top Earning Programs';
        $file = 'top.html';
        break;
	case 'traffic':
		$metaTitle='Traffic Exchanges | Downline Builders | List Builders | Solo Ads | Banners'; 
		$file = 'traffic.html';
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