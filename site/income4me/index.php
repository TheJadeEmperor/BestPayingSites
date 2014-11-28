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
$aff = 'income4me';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://bestpayingsites.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'ptc':
		$meta = array(
			'title' => 'Neobux Ultimate Strategy',
			'tags' => 'neobux ultimate strategy, neobux referrals, neobux referral',
			'desc' => ''); 
		$file = 'ptc.html';
		break;
	case 'home':
	default:
		$meta = array(
			'title' => 'The Best Paying PTC Sites', 
			'tags' => 'best ptc sites, earn by clicking sites, mak money online, best ultimate strategy',
			'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate strategy to 
			use in order to profit from PTC sites'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>