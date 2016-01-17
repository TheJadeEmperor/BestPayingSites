<?php 
date_default_timezone_set('America/New_York');

global $db; //PDO database connection 
global $context; //DB table names
global $api; //api instance
global $allPrices; //array with all prices

//database info goes here
////////////////////////////////
$dbHost = '74.220.207.187';
$dbUser = 'codegeas_root';
$dbPW = 'KaibaCorp1!';  
$dbName = 'codegeas_trade';   
////////////////////////////////

if(is_int(strpos(__FILE__, 'C:\\'))) { //localhost
    $c = $db = new PDO('mysql:host=74.220.207.187:3306;dbname='.$dbName.';charset=utf8', $dbUser, $dbPW);
}
else { //live website
    $c = $db = new PDO('mysql:host=localhost;dbname='.$dbName.';charset=utf8', $dbUser, $dbPW);
}

$context['tradeDataTable'] = 'api_trade_data';
$context['pricesTable'] = 'api_prices';
$context['optionsTable'] = 'api_options';

//$allPrices = array(); 
?>