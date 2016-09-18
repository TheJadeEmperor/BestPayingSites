<?php 
date_default_timezone_set('America/New_York');

global $db; //PDO database connection 
global $context; //DB table names
global $api; //api instance
global $allPrices; //array with all prices
global $emailTo; //email address to send alerts to

//database info goes here
////////////////////////////////
$dbHost = '74.220.207.187';
$dbUser = 'codegeas_root';
$dbPW = 'KaibaCorp1!';  
$dbName = 'codegeas_trade';   
////////////////////////////////

if(is_int(strpos(__FILE__, 'C:\\'))) { //localhost
    $db = new PDO('mysql:host=74.220.207.187:3306;dbname='.$dbName.';charset=utf8', $dbUser, $dbPW);
}
else { //live website
    $db = new PDO('mysql:host=localhost;dbname='.$dbName.';charset=utf8', $dbUser, $dbPW);
}

$emailTo = '17182136574@tmomail.net';

define('BITFINEX_API_KEY', 'ICjjvFfrC63hlQJqBbXAtJifp3tLNWUbtmtxtO4rmRL');
define('BITFINEX_API_SECRET', 'xhM2a7Lf2Gl3y2q8TSnv3DAzo09F4g8ULL7bKboKMaY');


$context['tradeDataTable'] = 'api_trade_data';
$context['optionsTable'] = 'api_options';
$context['pricesTable2h'] = 'api_prices';
$context['pricesTable30m'] = 'api_prices_30m';
$context['balanceTable'] = 'api_balance';
?>