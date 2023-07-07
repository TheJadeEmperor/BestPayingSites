<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText)
{
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText)
{
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'" width="468"/>'; 
}

$dir = '../../';
$msLink = 'http://ultimateneobuxstrategy.com/minisite';

switch($_GET[page]) {
    
    case 'neobux':
        $meta = array(
            'title' => 'PTC Sites - Make $1000 a Month or More', 
            'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
            'desc' => 'Here are some great ptc sites that you can make money from'); 
        $fileName = 'neobux.html'; 
        break;
    
    case 'traffic-monsoon':
        $meta = array(
            'title' => 'PTC Sites - Make $1000 a Month or More', 
            'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
            'desc' => 'Here are some great ptc sites that you can make money from'); 
        $fileName = 'traffic-monsoon.html'; 
        break;
    
    case 'home':
    default:
        $meta = array(
            'title' => 'PTC Sites - Make $1000 a Month or More', 
            'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
            'desc' => 'Here are some great ptc sites that you can make money from'); 
        $fileName = 'home.php'; 
}

include('header.html');
include($fileName);
include('footer.html');
?>