<?php
global $context; 

$selS = 'select * from settings order by opt';
$resS = mysql_query($selS, $conn) or die(mysql_error());

while($s = mysql_fetch_assoc($resS)) 
{
    $val[$s[opt]] = $s[setting];     
}

$context = array(
    'dir' => $dir, 
    'links' => $links,
    'conn' => $conn, 
    'websiteURL' => $val[websiteURL], 
    'ipnURL' => $ipnURL,
    'adminEmail' => $val[adminEmail],
    'supportEmail' => $val[fromEmail],
    'val' => $val); 

//admin email address 
$adminEmail = $val[adminEmail];

//paypal account to receive payments 
$paypalEmail = $val[paypalEmail];

//customer support email 
$supportEmail = $val[fromEmail];

//the main URL of this domain 
$websiteURL = $val[websiteURL];

//name of business
$businessName = $val[businessName]; 

//URL if IPN handler
$ipnURL = $val[ipnURL];

//affiliate registration
$affLink = $websiteURL.'/members/?action=register';

//members area
$affLogin = $websiteURL.'/members/';


//weekly backups
//backup options
$dayOfWeek = '0'; //day of week to backup 
$backupDir = '.backup';
$backupFile = date('Y-m-d', time()).'.sql';

if( date('w', time()) == $dayOfWeek )
{
    $dump = 'mysqldump -u'.$dbUser.' -p'.$dbPW.' '.$dbName.' > ./'.$backupDir.'/'.$backupFile;
    system($dump); 
} 

if(file_exists('error_log'))
    unlink('error_log');
?>