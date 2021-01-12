<?php

$output = '<table cellspacing="0" cellpadding="0" width="100%" border="0">
<tr>
    <td width="20px"></td>
    <td align="left">
        <a href="?action=affcenter">Members Home</a>
    </td>
    <td width="25%" align="center">
        <a href="http://bestpayingsites.com/?action=bonus" target="_blank">Bonus Downloads</a>
    </td>
    <td align="center">
        <a href="?action=details">Update Profile</a>
    </td>
    <td align="right">
        <a href="?action=logout">Logout</a>
    </td>
</tr>
</table>';
    

$opt = array( //check if customer of EPS
    'tableName' => 'sales',
    'cond' => "WHERE productID='12' AND 
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')"
);
        
$res = dbSelectQuery($opt); 

if($res->num_rows > 0) {
    $output .= '<br />
    <table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tr>
        <td width="20px"></td>
        <td  align="left">
            <b><a href="?action=eps">Email Profit System</a></b>
        </td>
        <td align="center">
            <b><a href="?action=classified">Classified Ads</a></b>
        </td>
        <td align="center">
            <b><a href="?action=directory">Paying Sites Directory</a></b>
        </td>
        <td align="right">
            <b><a href="?action=tools">Promotion Tools</a></b>
        </td>
    </tr>
    </table>';
}


$opt = array( //check if customer of BPS
    'tableName' => 'sales',
    'cond' => "WHERE productID='13' AND 
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')"
);
    
$res = dbSelectQuery($opt); 

if($res->num_rows > 0) {
    $output .= '<br />
    <table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tr>
        <td width="20px"></td>
        <td align="left">
            <b><a href="?action=bps-database">Surveys Database</a></b>
        </td>
        <td align="center">
            <b><a href="?action=bps-apps">Paid Apps & GPT</a></b>
        </td>
        <td align="right">
            <b><a href="?action=bps-guide">Surveys Guide</a></b>
        </td>
    </tr>
    </table>';
}

$output .= '<br /><hr color="#25569a" size="4" /><p>&nbsp;</p>';

$membersMenu = $output;

$imgDir = $dir.'images/crashcourse/'; 
$refDir = $dir.'images/refs/';
$itemName = 'Email Profit System';


//BPS Surveys Database
$opt = array(
	'tableName' => 'surveys',
    'cond' => 'WHERE category="" ORDER BY name '
);

$resS = dbSelectQuery($opt);

while($s = $resS->fetch_array()) {
	$bpsSurveysContent .= '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>'; 
}


//Paid Apps database
$opt = array(
	'tableName' => 'surveys',
    'cond' => 'WHERE category="paidapp" ORDER BY name '
);

$resS = dbSelectQuery($opt);

while($s = $resS->fetch_array()) {
	$bpsPaidAppContent .= '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>';
}


//GPT database
$opt = array(
	'tableName' => 'surveys',
    'cond' => 'WHERE category="gpt" ORDER BY name '
);

$resS = dbSelectQuery($opt);

while($s = $resS->fetch_array()) {
	$bpsGPTContent .= '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>';
}



$productID = 10; //paypal booster
$opt = array( //get download URL from products table
	'tableName' => 'products',
    'cond' => 'WHERE id="'.$productID.'"'
);

$resPPB = dbSelectQuery($opt);

$ppb = $resPPB->fetch_array();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Members Area | <?=$businessName?></title>
    <meta name="description" content="<?=$description?>" />
    <meta name="keywords" content="<?=$keywords?>" />
    <link href="<?=$dir?>include/css/buttons.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=$dir?>include/css/turbo.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="icon" href="<?=$dir?>images/splash/dollarSign.jpg" type="image/x-icon" />
	<meta name="google-site-verification" content="bv0J3GWHae3VQ6UNSknC9DFOnLhEEyzzKsyyLhIcITw" />
    <style>
    .content, p, li, ol {
        color: #000000;
        font-family: Georgia; 
        font-size: 18px;
        line-height: 28px; 
	}
		
	.content {
		padding: 0px 20px 0px 20px;
	}
	
	.innerContent {
		padding: 0px 20px 0px 20px;
	}

    .list {
        font-size:12px;
    }

    .moduleBlue {
        font-family: Tahoma, Geneva, sans-serif;
        border: solid 1px #531d2a;
        text-align: left;
        background: #eeeeee;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .moduleBlue h1 {
        margin-top: 0px;
        margin-bottom: 0px;
        text-align: center;
        display: block;
        padding: 0.3em 0;
        background: #12649b;
        color: #ffffff;
        font-size: 16px;
        color: #ffffff;
    }

    .moduleBlue div {
        padding: 10px 15px;
    }

    .moduleBlue th {
        margin: 0px;
        text-align: center;
        padding: 10px 12px;
        background: #12649b;
        color: #ffffff;
        font-size: 16px;
        color: #ffffff;
    }

    .moduleBlue td {
        padding: 5px;
    }

    .clickable {
        border: 1px solid black; 
    }

    .clickable:hover {
        border: 1px solid white; 
    }

    .url {
        color: #767676;
        font: normal 14px Arial, Helvetica, sans-serif;
        margin: 15px auto;
        text-align: center;
    }
	
    </style>
</head>
<body>
<center>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'es,de,fi,fr,el,id',
            gaTrack: true,
            gaId: 'UA-29416561-1',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'language');
    }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div id="language"></div>
</center>
<div class="content">
<div class="innerContent">
    <br />