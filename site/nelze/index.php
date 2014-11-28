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

$aff = 'nelze';
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
    case 'videos':
        $meta = array(
            'title' => 'Make Money Neobux - Videos',
            'tags' => 'make money neobux, get rich ptc, get paid to click',
            'desc' => 'Here are some great ptc sites that you can make money from'
        );
        $fileName = 'videos.html';
        break; 
    case 'catalog':
        $meta = array(
            'title' => 'Neobux eBook Catalog', 
            'tags' => 'neobux ebook, neobux guide, ptc guide',
            'desc' => 'Learn how to make money from ptcs with these ebooks');
        $fileName = 'catalog.php';
        break; 
	case 'home':
	default:
		$meta = array(
			'title' => 'Top Paying PTC Sites - Make $1000 a Month or More', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

include('header.html');
include($fileName);
include('footer.html');
?>