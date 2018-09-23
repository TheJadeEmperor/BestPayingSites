<?
//read HTML Files
//process them into variables 
$salesFileOTO = 'download/SalesPage(OTO).html';
$salesFilePTC = 'download/SalesPage(PTC).html';
$capturePageFile = 'download/CapturePage.html';

$otoStream = fopen($salesFileOTO, 'r');
$ptcStream = fopen($salesFilePTC, 'r');
$cpStream = fopen($capturePageFile, 'r');

$contentOTO = fread($otoStream, filesize($salesFileOTO));
$contentPTC = fread($ptcStream, filesize($salesFilePTC));
$contentCP = fread($cpStream, filesize($capturePageFile));

fclose($otoStream);
fclose($ptcStream);
?>
<center><h1>HTML Files</h1></center>

<p>This is the HTML code you copy and paste to your blog. You also have the option of downloading these
files to your computer. You can also use the capture page below to build an email list so you
can sell the Paypal Booster.</p>

<center><h2>Sales Page - For One Time Offers</h2>
<textarea onclick="this.select()" rows=20 cols=80><?=$contentOTO?></textarea>
<br />

<a href="<?=$salesFileOTO?>" target="_blank"><input type=button value="Download File"></a>

<p>&nbsp;</p>

<center><h2>Sales Page - For Advertising on PTC Sites</h2></center>

<textarea onclick="this.select()" rows=20 cols=80><?=$contentPTC?></textarea>
<br />
<a href="<?=$salesFilePTC?>" target="_blank"><input type=button value="Download File"></a>

<p>&nbsp;</p>

<p>&nbsp;</p>