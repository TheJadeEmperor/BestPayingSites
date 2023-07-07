<?php
$nusLink = 'http://ultimateneobuxstrategy.com/';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';

switch($_GET['page']) {
    case 'home':
    default:
        $metaTitle = 'Escape 9-5'; 
        $file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>