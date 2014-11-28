<?
//database info goes here
////////////////////////////////
$dbHost = '74.220.207.187';
$dbUser = 'codegeas_root';
$dbPW = 'KaibaCorp1!';
$dbName = 'codegeas_cc';
////////////////////////////////

$conn = $context[conn] = database($dbHost, $dbUser, $dbPW, $dbName);

$host = "mail.bestpayingsites.com"; // SMTP host
$username = "ptc@bestpayingsites.com"; //SMTP username
$password = "KaibaCorp1!"; // SMTP password
$fromName = 'Profit From PTCs';
$fromEmail = $username;
?>