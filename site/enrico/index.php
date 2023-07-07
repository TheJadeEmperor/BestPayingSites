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
$nusLink = 'http://ultimateneobuxstrategy.com/';
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
$basicsLink = 'http://ultimateneobuxstrategy.com/basics';

switch($_GET['page']) {
    case 'ptcInfo':
        $meta = array(
            'title' => 'PTC Information', 
            'tags' => 'PTC Information',
            'desc' => 'PTC Information'); 
        $file = 'ptcInfo.html';
        break;
    case 'trafficExchange':
        $meta = array(
            'title' => 'Traffic Exchanges', 
            'tags' => 'Traffic Exchanges',
            'desc' => 'Traffic Exchanges'); 
        $file = 'trafficExchange.php';
	break;
    case 'planB4U':
        $meta = array(
            'title' => 'PlanB4u', 
            'tags' => 'PlanB4u', 
            'desc' => 'PlanB4u'); 
        $file = 'planB4U.html';
        break;
    case 'niche':
         $meta = array(
            'title' => 'Niche Marketing', 
            'tags' => 'Niche Marketing',  
            'desc' => 'Niche Marketing'); 
        $file = 'niche.html';
        break;
    case 'blog':
 
        $file = 'blog.html';
        break;
    case 'home':
    default:
        $meta = array(
            'title' => 'Best PTC Sites', 
            'tags' => 'best ptc sites, earn by clicking sites, make money online, best ultimate strategy',
            'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate 
                strategy to use in order to profit from PTC sites'); 
        $file = 'homepage.html';
}

include('header.html');
include($file);
include('footer.html'); ?>