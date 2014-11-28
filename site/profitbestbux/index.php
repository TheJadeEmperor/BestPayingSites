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
$aff = 'Aurel60';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;
$basicsLink = 'http://neobuxultimatestrategy.com/basics';
$vcLink = 'http://neobuxultimatestrategy.com/video/?r='.$aff;

switch($_GET[page])
{
	case 'home':
	default:
		$meta = array(
			'title' => 'The Best Paying Sites | Top Paying Sites', 
			'tags' => 'best ptc sites, earn by clicking sites, make money online, best ultimate strategy',
			'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate strategy to 
			use in order to profit from PTC sites'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>