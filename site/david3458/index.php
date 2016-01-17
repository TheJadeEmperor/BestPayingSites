<?php
$aff = '';
$nusLink = 'http://neobuxultimatestrategy.com/';
$msLink = 'http://neobuxultimatestrategy.com/minisite/';

switch($_GET['page']) {
    case 'home':
    default:
        $metaTitle = 'Good PTC Sites - Paid to Click Sites'; 
        $file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');

unlink('error_log');
?>