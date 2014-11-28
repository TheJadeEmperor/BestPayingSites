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

switch($_GET[page])
{
    case 'webfire':
        $meta = array(
            'title' => 'Webfire - Instant Free Exposure on Page 1 of Google',
            'tags' => 'get on page 1 of Google, WebFire, get free traffic, get rankings, free traffic from Google',
            'desc' => 'Get Free Traffic, Rankings, Leads, and Exposure with over 22 traffic and ranking-getting tools!' );
        $fileName = 'webfire.php'; 
        break;
    case 'trafficwave':
        $meta = array(
            'title' => 'TrafficWave | Autoresponder | Email Marketing',
            'tags' => 'trafficwave, autoresponder, email marketing',
            'desc' => 'TrafficWave is an email marketing tool that helps build your list and make
            sales');
        $fileName = 'trafficwave.php';
        break; 
    case 'ptc-advantage':
        $meta = array(
            'title' => 'PTC Advantages',
            'tags' => 'Earn Money Online Free, Internet Business, Free Income, Paid To Click',
            'desc' => 'Earn money online for free. Worlwide opportunity. Join for free, pay nothing, Ever. No upgrade.');
        $fileName = 'ptcadvantage.php'; 
        break; 
    case 'videos':
        $meta = array(
            'title' => 'Make Money Neobux - Videos',
            'tags' => 'make money neobux, get rich ptc, get paid to click',
            'desc' => 'Here are some great ptc sites that you can make money from'
        );
        $fileName = 'videos.php';
        break; 
	case 'home':
	default:
		$meta = array(
			'title' => 'Top Paying PTC Sites - Make $1000 a Month or More', 
			'tags' => 'earn money ptc, make money ptc, earn with ptc, get paid to click',
			'desc' => 'Here are some great ptc sites that you can make money from'); 
		$fileName = 'home.html';
}

$msLink = 'http://neobuxultimatestrategy.com/minisite/?r=jameslo';

include('header.html');
include($fileName);
include('footer.html');
?>