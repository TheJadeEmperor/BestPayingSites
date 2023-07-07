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
$aff = 'khemiri';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://bestpayingsites.com/images/banners/ebook1.jpg';  
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'ptc': 
		$meta = array(
			'title' => 'Best PTC Sites - Making Money Online',
			'tags' => 'best paying sites, best PTC, top ptc, intantly paying ptc, make money,
			work at home',
			'desc' => 'work at home, earn in surfing'); 
		$file = 'ptc.html'; 
		break; 
	case 'programs':
		$meta = array(
			'title' => 'Best Programs - Making Money Online',
			'tags' => 'ptc referrals, make money online, work at home, earn money online',
			'desc' => 'work at home, earn in surfing');  
		$file = 'programs.html'; 
		break;
	case 'traffic':
		$meta = array(
			'title' => 'Best Traffic Sites - Making Money Online',
			'tags' => 'best traffic sites, traffic exchanges, best traffic exchanges, make money', 
			'desc' => 'work at home, earn in surfing'); 
		$file = 'traffic.html'; 
		break;	
	default:
	case 'home':
		$meta = array(
			'title' => 'Neobux Ultimate Strategy',
			'tags' => 'neobux ultimate strategy, neobux referrals, neobux referral',
			'desc' => 'Make $20 to $30 a day with the Neobux Ultimate Strategy'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>