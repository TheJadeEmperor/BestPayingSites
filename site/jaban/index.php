<?php
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET['page']) {
    case 'home':
    default:
        $metaTitle='Best PTC Sites'; 
        $file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>