<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText) {
	return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
	return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$dir = '../../';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';

switch($_GET['page']) {
	case 'what-is-ptc':
		$meta = array(
			'title' => 'What is PTC? | What is MLM? | What is Neobux?',
			'tags' => 'what is ptc, what is mlm, what is neobux',
			'desc' => ''); 
		$file = 'what-is-ptc.html';
		break;
		
	case 'neobux-tutorial':
		$meta = array(
			'title' => 'Neobux Tutorial | How to Use Neobux',
			'tags' => 'neobux, neobux tutorial, how to use neobux',
			'desc' => ''); 
		$file = 'neobux-tutorial.html';
		break;

	case 'how-it-works':
		$meta = array(
			'title' => 'How it Works | Neobux ',
			'tags' => 'neobux, neobux tutorial, how to use neobux',
			'desc' => ''); 
		$file = 'how-it-works.html';
		break;
		
	case 'home':
	default:
		$meta = array(
			'title' => 'Join These Top Paying PTC Sites | They Are Chosen From The Best', 
			'tags' => 'best ptc sites, earn by clicking sites, make money online, best ultimate strategy',
			'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate strategy to 
			use in order to profit from PTC sites'); 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html'); ?>