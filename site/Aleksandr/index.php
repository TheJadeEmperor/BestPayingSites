<?php
$nusLink = 'http://ultimateneobuxstrategy.com/';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';

switch($_GET['page'])
{
	case 'home':
	default:
		$metaTitle = 'Quality PTC Sites'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>