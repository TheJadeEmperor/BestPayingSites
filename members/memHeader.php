<?php
function affiliateMenu() 
{
    $output = '
    <table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tr>
        <td align="center">
            <a href="?action=affcenter">Members Home</a>
        </td>
        <td align="center">
            <a href="?action=tools">Promotion Tools</a>
        </td>
        <td align="center">
            
        </td>
        <td align="center">
            <a href="?action=details">Update Profile</a>
        </td>
        <td align=center width="16%">
            <a href="?action=logout">Logout</a>
        </td>
    </tr>
    </table>';
    
    //check if customer of EPS
    $sel = "SELECT payerEmail FROM sales WHERE productID=12 AND 
        (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')";
    $res = mysql_query($sel) or die(mysql_error());
    
    if(mysql_num_rows($res) > 0) {
        $output .= '<br /><table width="100%"><tr>
    <td width="40%" align="center"><b><a href="?action=eps">Email Profit System</a></b></td>
    <td width="40%" align="center"><b><a href="?action=directory">Paying Sites Directory</a></b></td>
    <td width="30%" align="center"><b><a href="http://bestpayingsites.com/?action=bonus" target="_blank">Bonus</a></b></td>
</tr></table>';
    }

    return $output.'<br /><hr color="#25569a" size="4" />';
}

$imgDir = $dir.'images/crashcourse/'; 
$refDir = $dir.'images/refs/';
$itemName = 'PTC Crash Course';
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
    <style>
    .content, p, li, ol {
        color: #000000;
        font-family: Georgia; 
        font-size: 18px;
        line-height: 28px; }

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
    <br />