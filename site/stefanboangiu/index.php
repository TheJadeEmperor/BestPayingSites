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
$aff = 'stefanboangiu';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'books':
		$meta = array(
			'title' => 'Books', 
			'tags' => 'books',
			'desc' => 'Books'); 
		$file = 'books.html';
		break;
	case 'religion':
			$meta = array(
			'title' => 'Books', 
			'tags' => 'books',
			'desc' => 'Books'); 
		$file = 'religion.html';
	break;

	case 'forum':
		$meta = array(
			'title' => 'Books', 
			'tags' => 'books',
			'desc' => 'Books'); 
		$file = 'forum.html';
		break;
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