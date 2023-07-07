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
$aff = 'morten';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$vcLink = 'http://ultimateneobuxstrategy.com/video/?r='.$aff;

switch($_GET[page])
{
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