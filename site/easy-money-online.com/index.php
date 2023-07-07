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
$nusLink = 'http://ultimateneobuxstrategy.com/';
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';

switch($_GET[page])
{
	case 'ptcincometoday':
		$meta = array(
			'title' => 'PTC Income Today', 
			'tags' => 'ptc income today',
			'desc' => 'PTC Income Today'); 
		$file = 'ptcincometoday.html';
		break;
	case 'downlinebuilders':
			$meta = array(
			'title' => 'Downline Builders | DownlineRefs | GetRef', 
			'tags' => 'downline builders, downlinerefs, getref',
			'desc' => 'Downline Builders | DownlineRefs | GetRef'); 
		$file = 'downlinebuilders.html';
	break;
	case 'home':
	default:
		$meta = array(
			'title' => 'The Best Paying Sites | Top Paying Sites', 
			'tags' => 'best ptc sites, earn by clicking sites, make money online, best ultimate strategy',
			'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate strategy to 
			use in order to profit from PTC sites'); 
		$file = 'homepage.html';
}

include('header.html');
include($file);
include('footer.html'); ?>