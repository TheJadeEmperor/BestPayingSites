<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function anchor($url, $displayText, $extra)
{
    return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $altText, $extra)
{
    return '<img src="'.$url.'" alt="'.$altText.'" title="'.$altText.'" '.$extra.' />'; 
}

$aff = 'simoptc';
$url = curPageURL(); 

switch($_GET[page])
{
	case 'scams':
		$metaTitle='How to Avoid Scams'; 
		$file = 'scams.html';
		break;
	case 'home':
	default:
		$metaTitle='Top Paying PTC Sites'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>