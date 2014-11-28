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
$aff = 'paulac44';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$nusImg = 'http://neobuxultimatestrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'whatis':
		$meta = array(
			'title' => 'What Is A PTC?', 
			'tags' => 'what is a ptc',
			'desc' => 'What is a PTC?'); 
		$file = 'whatis.html';
		break;
	case 'virtualaccounts':
		$meta = array(
			'title' => 'Virtual Accounts', 
			'tags' => 'virtual accounts',
			'desc' => 'virtual accounts'); 
		$file = 'virtualaccounts.html';
		break;
	case 'contact':
		$meta = array(
			'title' => 'Traffic', 
			'tags' => 'traffic',
			'desc' => 'traffic'); 
		$file = 'contact.html';
		break;
	case 'home':
	default:
		$meta = array(
			'title' => 'How To Make Money At Home', 
			'tags' => 'make money at home, make money online',
			'desc' => 'How to make money at home'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>