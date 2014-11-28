<?php
$aff = 'Click4Bucks';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'traffic':
		$metaTitle='Bux Assured Traffic Exchanges'; 
		$file = 'traffic.html';
		break;
	case 'payment':
		$metaTitle='Bux Assured Payment Proofs'; 
		$file = 'payment.html';
		break;
	case 'home':
	default:
		$metaTitle='Bux Assured'; 
		$file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>