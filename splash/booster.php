<?php
date_default_timezone_set('America/New_York'); 
$imgDir = 'images/booster/';
$redirURL = 'http://bestpayingsites.com/redirect.php?url=';
$subscrLandingURL = $confirmLandingURL = $redirURL.'http://bestpayingsites.com/ppbooster'; 

/*
$now = date( 'Y-m-d h:i:s', time() );

if($now > '2014-04-10 01:00:00' && $now < '2014-04-11 23:00:00') {
    $subscrLandingURL = $confirmLandingURL = $redirURL.'http://www.clixsense.com/?3440023';
}
*/

if($_GET['e']) { //email address passed in url
    $emailField = '<input type=text size="25" id="da_email" name="da_email" value="'.$_GET['e'].'" class="activeField">';
}
else
{
    $emailField = '<input type=text size="25" id="da_email" name="da_email" value="name@email.com" onclick="if(this.value==\'name@email.com\') this.value=\'\';" class="activeField">';
}

$mainHeadline = 'Make $267 A Day From Neobux And Clixsense With Our System! The Easiest Money You\'ll Ever Make!';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Paypal Booster | Paypal Booster Pro | Paypal Booster System</title>
<script type="text/javascript" src="include/js/jquery.js"></script>
<script>
    <!-- 
    var NoExitPage = false; 

    function ExitPage() 
    { 
            if(NoExitPage == false) { 
            NoExitPage = true; 
            location.href='http://bestpayingsites.com/ppbooster'; 

            return"***********************************************\n\n"+ 
            " WAIT! Do you really want to close this window? \n\n"+ 
            " Flood your paypal account with cash today! \n\n"+ 
            " Make $267 a Day From Our System! \n\n"+ 
            "***********************************************"; 
            } 
    } 
    // --> 
        
    document.ondragstart = test;
    document.onselectstart = test;
    document.oncontextmenu = test;
    function test() {
        return false;
    }
</script>
<style>
.content {
	margin: 5px;
	padding: 10px 25px 10px 25px;
	background-color: #FFF;
	box-shadow: 10px 10px 25px #333;
	-moz-box-shadow: 5px 5px 25px #333;
	-webkit-box-shadow: 5px 5px 25px #333;
	margin-right: 0 auto;
	display: block;
	width: 650px;
}

h1 {
	font-size: 34px;
}

.activeField {
	background: #FFFFFF;
	height: 20px;
}

.activeField:hover  {
	background: #FFFF99;
}

.clickable {
	border: 1px solid #a1a1a1;
}

.clickable:hover {
	border: 1px solid black;
}

.subheadline {
    background:url(images/splash/highlight.png) repeat-y center top;
    font:italic 20px Arial, Helvetica, sans-serif;
    margin:0 0 20px;
    text-align:center;
    color: black;
}

.strong { font-weight:bold; }
.red { color:#c13100; }
</style>
</head>
<!--<body onbeforeunload="return ExitPage();">-->
<body>
<center>
<br />
<div class="content">
	<br />
	<h2 class="subheadline"><span class="strong red">Warning: </span>This offer will expire on <?=date('F dS', time())?> at midnight...</h2>

	<h1><i><span style="background-color: yellow; color: rgb(204, 0, 0);"><span style="background-color: black; color: white;">FREE!</span> <?=$mainHeadline?></span></i>
	
	<br />
	<font style="font-size: 16pt;" face="Arial"><span style="color: rgb(51, 102, 255);">Includes Step By Step, Easy To Follow Instructions!</span></font></h1>
	
	<br /><br />
	
	<table cellspacing=10>
		<tr valign="top">
			<td>
				<img style="width: 334px; height: 250px;" src="<?=$imgDir?>paypal-balance.jpg" class="clickable">
			</td>
			<td align="center">
				<img style="width: 249px; height: 90px;" alt="" src="<?=$imgDir?>redArrows.png">
				
				<form method="post" onsubmit="window.onbeforeunload=null;" 
				action="http://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">

				<input type=hidden name="da_name" id="da_name" value="Internet Marketer">
				<input type=hidden name="da_cust1" value="" />
				<input type=hidden name="da_cust2" value="<?=$_SERVER[HTTP_REFERER]?>" />
				<input type=hidden name="da_cust3" value="<?=$_GET[campaign]?>" />
				<input type=hidden name="trwvid" value="theemperor" />
				<input type=hidden name="series" value="paypalbooster" />
				<input type=hidden name="subscrLandingURL" value="<?=$subscrLandingURL?>" />
				<input type=hidden name="confirmLandingURL" value="<?=$confirmLandingURL?>" />

				<?=$emailField?>
				
				<br /><br />
				
				<input name="submit" id="submit" src="<?=$imgDir?>getInstantAccess.png" type="image">
				</form>
			</td>
		</tr>
	</table>													
		
	<p style="color: rgb(153, 153, 153); font-size: 10px;" align="center"><img src="images/splash/lock.png"> 
	<font face="Arial">We hate spam and will never sell your email address<br /> to others. 
	All opt-ins are completely optional.</font></p>

</div>
</center>
<br />
<p style="color: rgb(153, 153, 153);" align="center">
    <small><small><small> <font face="Arial">Copyright 2013 &copy; Paypal Booster. All Rights Reserved.</font></small></small></small>
</p>