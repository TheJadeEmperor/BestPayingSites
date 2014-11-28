<?php
$aff = 'admin';
if($_GET[e])
	$aff = $_GET[e];
else if($_GET[r])
    $aff = $_GET[r];

$basicsLink = 'http://neobuxultimatestrategy.com/basics';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$vcLink = 'http://neobuxultimatestrategy.com/video/?r='.$aff;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$meta[title]?></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
<div id="contentWrap">
	<div id="contentTop"></div>
	<div id="content">
	
	<h1 align="center">PTC Products Catalog</h1>
	<h3>Your Sponsor is: <span class="red"> <?=$aff?></span></h3>
		
<h2 class="subheadline"><span class="strong red">Warning:</span> Prices can go up at any time!</h2>
<table width="100%">
<tr valign="top">
	<td align="left">
	    <div class="title">Neobux Basics <br /><br /></div> <br />
		<a href="<?=$basicsLink?>">
		    <img src="<?=$dir?>images/nus.jpg" alt="Neobux Basics" height="340" />
	    </a>
	</td><td width="20px"></td>
	<td align="center">
		<div class="title">Neobux Ultimate Strategy</div> <br />
		<a href="<?=$nusLink?>">
		    <img src="<?=$dir?>images/nus.jpg" alt="Neobux Ultimate Strategy" title="Neobux Ultimate Strategy" height="340" />
		</a>
		</td>
	<td width="20px"></td>
    <td align="center">
		<div class="title">NUS Video Course</div>  <br /><br />
		<a href="<?=$vcLink?>">
		    <img src="<?=$dir?>images/cd.jpg" alt="NUS Video Course" title="NUS Video Course"
        height="240" />
		</a>
	</td>
</tr><tr>
	<td><p>Format: PDF<br />
		Price: <span class="subheadline">FREE</span></p><br />
		<a href="http://neobuxultimatestrategy.com/basics">Download Now</a>
	</td><td></td><td>
		<table width="95%" class="catalog">
		<tr>
			<td colspan="2"><p><b>Format</b>: ZIP + PDF<br>
			<b>Price</b>: $14.45 <br>
			<b>Bonus</b>: Beginner's PTC Course </p></td>
		</tr><tr>
			<td align="left"><a href="<?=$nusLink?>">Read More</a></td>
			<td align="right"><a href="<?=$nusLink?>#orderForm">Order Page</a></td>
		</tr>
		</table>
	</td><td></td><td>
		<table width="95%" class="catalog">
		<tr>
			<td colspan="2"><p><b>Format</b>: Videos<br>
			<b>Price</b>: $37.00<br>
			<b>Bonus</b>: PTC Riches </p></td>
 		</tr><tr>
			<td align="left"><a href="<?=$vcLink?>">Read More</a></td>
			<td align="right"><a href="<?=$vcLink?>#orderForm">Order Page</a></td>
		</tr></table>
	</td>
</tr>
</table>

<p>&nbsp;</p>	

<p>&nbsp;</p>

<div class="line"></div><br>

<h2 class="subheadline">Want to make some money on auto pilot?</h2>

<p>Become an affiliate and sell these products! Regisration is quick and painless and you
can receive payments to your paypal immediately - no waiting 30 days for payments. Plus,
register within the next half hour, and you can use a site like this to promote our products.</p>

<p>To sell the Neobux Ultimate Strategy guide, please <a href="http://neobuxultimatestrategy.com/members/?action=register">go here</a>.</p>


<p>&nbsp;</p>

<p class="note">
        <a href="./">Home</a> &nbsp; &nbsp;
        <a href="../">PTC Mini-Sites</a> &nbsp; &nbsp; 
        <a href="http://neobuxultimatestrategy.com/minisite">Get Your Own Catalog</a> &nbsp; &nbsp; 
		<a href="mailto:admin@bestpayingsites.com">Contact Us</a></p>
	</div><!-- content -->
	<div id="contentBtm"></div>
</div><!-- Content Wrap -->
</div><!-- wrapper -->
</body></html>