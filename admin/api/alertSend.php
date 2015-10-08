<?
/* 
 * Send email alerts whenever there is a new high or low price
 * 
 */

require_once('btce-api.php');
include('include/mysql.php');
include('include/config.php');

$api = new BTCeAPI(
    /*API KEY:    */    'P4ZM898V-DJSR3WKJ-CFVK9VKM-5ISFP5KO-ZVQLXW1P', 
    /*API SECRET: */    'bd6c1c022c334572691b57681c71a4734f08e5d2cddf1de3a8481e6be10d76df'
);


$btcUSD['lastPrice'] = $api->getLastPrice('btc_usd');
$btcUSD['highPrice'] = $api->getHighPrice('btc_usd');
$btcUSD['lowPrice'] = $api->getLowPrice('btc_usd');


$ltcUSD['lastPrice'] = $api->getLastPrice('ltc_usd');
$ltcUSD['highPrice'] = $api->getHighPrice('ltc_usd');
$ltcUSD['lowPrice'] = $api->getLowPrice('ltc_usd');


$ltcBTC['lastPrice'] = $api->getLastPrice('ltc_btc');
$ltcBTC['highPrice'] = $api->getHighPrice('ltc_btc');
$ltcBTC['lowPrice'] = $api->getLowPrice('ltc_btc');


$nvcUSD['lastPrice'] = $api->getLastPrice('nvc_usd');
$nvcUSD['highPrice'] = $api->getHighPrice('nvc_usd');
$nvcUSD['lowPrice'] = $api->getLowPrice('nvc_usd');


$nmcUSD['lastPrice'] = $api->getLastPrice('nmc_usd');
$nmcUSD['highPrice'] = $api->getHighPrice('nmc_usd');
$nmcUSD['lowPrice'] = $api->getLowPrice('nmc_usd');


$sendEmailBody = '';

if($btcUSD['lastPrice'] >= $btcUSD['highPrice']) {
    $sendEmailBody = 'BTC new high price: '.$btcUSD['highPrice'].' ';
}
else if($btcUSD['lastPrice'] <= $btcUSD['lowPrice']) {
    $sendEmailBody = 'BTC new low price: '.$btcUSD['lowPrice'].' ';
}


if($ltcUSD['lastPrice'] >= $ltcUSD['highPrice']) {
    $sendEmailBody .= 'LTC new high price: '.$ltcUSD['highPrice'].' ';
}
else if($ltcUSD['lastPrice'] <= $ltcUSD['lowPrice']) {
    $sendEmailBody .= 'LTC new low price: '.$ltcUSD['lowPrice'].' ';
}


if($nvcUSD['lastPrice'] >= $nvcUSD['highPrice']) {
    $sendEmailBody .= 'NVC new high price: '.$nvcUSD['highPrice'].' ';
}
else if($nvcUSD['lastPrice'] <= $nvcUSD['lowPrice']) {
    $sendEmailBody .= 'NVC new low price: '.$nvcUSD['lowPrice'].' ';
}

if($nmcUSD['lastPrice'] >= $nmcUSD['highPrice']) {
    $sendEmailBody .= 'NMC new high price: '.$nmcUSD['highPrice'].' ';
}
else if($nmcUSD['lastPrice'] <= $nmcUSD['lowPrice']) {
    $sendEmailBody .= 'NMC new low price: '.$nmcUSD['lowPrice'].' ';
}


$headers = 'From: alerts@bestpayingsites.com' . "\r\n" .
    'Reply-To: alerts@bestpayingsites.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo $headers;

if($sendEmailBody) {
    $emailTo = '17182136574@tmomail.net';
    $mailSent = mail($emailTo, 'Text alert', $sendEmailBody, $headers);
    
    if($mailSent) {
        $subject = 'Text alert sent';
    }
    else {
        $subject = 'Text alert NOT sent';
    }
    
    $emailTo = 'louie.benjamin@gmail.com'; 
    echo mail($emailTo, $subject, $sendEmailBody, $headers);
}

?>