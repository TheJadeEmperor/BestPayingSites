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
$aff = 'wukliker';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
    case 'contact':
        $meta = array(
            'title' => 'Contact Us',
            'tags' => 'earn with ptc, earn from ptc, earn money from ptc, make money ptc, ptc money making',
            'desc' => 'Here are some great ptc sites that you can make money from'
        );
        $fileName = 'contact.php';
        break; 
	case 'home':
	default:
		$meta = array(
			'title' => 'Neobux | Clixsense | NUS | Make $600 to $900 A Month', 
			'tags' => 'earn with ptc, earn from ptc, earn money from ptc, make money ptc, ptc money making',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>