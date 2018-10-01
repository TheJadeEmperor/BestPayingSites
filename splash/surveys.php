<?php
date_default_timezone_set('America/New_York'); 
$imgDir = 'images/splash/';

$redirURL = 'http://bestpayingsites.com/redirect.php?url=';
$subscrLandingURL = $confirmLandingURL = $redirURL.'http://bestpayingsites.com/?action=get-cash-for-surveys';

//redirect to Neobux opt in
if( date('Y-m-d', time()) > '2015-05-30' && date('Y-m-d', time()) < '2015-06-22' ) {
    if($_GET['action'] == 'surveys-ptc') {
        echo '<h3>Directing you to the sign up page...</h3>
        <META http-equiv="refresh" content="2;URL=http://neobuxultimatestrategy.com/?action=ecourse">';
        exit;
    }

    if($_GET['action'] == 'surveys-neobux') { 

        echo '<h3>Directing you to the sign up page...</h3>
        <META http-equiv="refresh" content="2;URL=http://neobuxultimatestrategy.com/?action=freereport">';
        exit;
    }
}


if($_GET['e']) { //email address passed in url
    $emailField = '<input type=text id="da_email" name="da_email" value="'.$_GET[e].'" class="textField" />';
}
else {
    $emailField = '<input type=text id="da_email" name="da_email" value="name@email.com" onclick="if(this.value==\'name@email.com\') this.value=\'\';" class="textField" />';
}

if($_GET['action'] == 'surveys-neobux')
    $mainHeadline = '<img src="images/splash/headlineNeobux.jpg" width="810px" />';
else
    $mainHeadline = '<img src="images/splash/headlinePTC.jpg" width="810px" />';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Make $5 to $75 Per Survey | Get Cash For Surveys</title>
<meta name="description" content="" />
<link href="<?=$dir?>include/css/splash.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="include/js/jquery.js"></script>
<script>
<!-- 
var NoExitPage = false; 

function ExitPage() 
{ 
    if(NoExitPage == false) { 
    NoExitPage=true; 
    location.href='http://tinyurl.com/high-paying-surveys-product'; 
    
    return"***********************************************\n\n"+ 
    " WAIT! Do you really want to close this window? \n\n"+ 
    " Don't you want to make $5 to $75 per survey? \n\n"+ 
    " Sign up for our FREE offers - no obligation whatsoever!\n\n"+ 
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
</head>
<body onbeforeunload="return ExitPage();">
<div id="wrapper">
<div id="contentWrap">
<div id="contentTop"></div>
<div id="content">

<h2 class="subheadline"><span class="strong red">Warning: </span>This offer will expire on <?=date('F dS', time())?> at midnight...</h2>

<div class="line"></div><br />

<center><?=$mainHeadline?></center>

<br /><div class="line"></div><br />

<div id="form">
    <h3>Sick Of All the Online Scams?</h3>
    <h4 class="red">Then Surveys Are For You!</h4>
    
    <form method="post" onsubmit="window.onbeforeunload=null;" 
	action="https://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">

    <div class="infoWrap">
	<?=$emailField?>
    </div>
    
    <div class="buttonWrap">
    <button type="submit" value="Submit" id="submit" name="subscribe" class="link button"></button>
	</div>
    
    <input type=hidden name="da_name" id="da_name" value="PTC User">
    <input type=hidden name="da_cust1" value="<?=$page?>" />
    <input type=hidden name="da_cust2" value="<?=$_SERVER[HTTP_REFERER]?>" />
    <input type=hidden name="da_cust3" value="<?=$_GET[campaign]?>" />
    <input type=hidden name="trwvid" value="theemperor" />
    <input type=hidden name="series" value="makemoneysurveys" />
    <input type=hidden name="subscrLandingURL" value="<?=$subscrLandingURL?>" />
    <input type=hidden name="confirmLandingURL" value="<?=$confirmLandingURL?>" />
    </form>
</div><!-- form -->

<p class="note"><img src="<?=$imgDir?>lock.png" /> We hate spam and will never sell your email address to others. All opt-ins are completely optional.</p>

</div><!-- content -->
<div id="contentBtm"></div>
</div><!-- Content Wrap -->
</div><!-- wrapper -->
</body></html>