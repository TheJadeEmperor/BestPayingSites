<?php
$dir = '../../';

$aff = 'admin';
if($_GET['r'])
    $aff = $_GET['r'];

$basicsLink = 'http://neobuxultimatestrategy.com/basics';
$nusLink = 'http://neobuxultimatestrategy.com/?r='.$aff;
$msLink = 'http://neobuxultimatestrategy.com/minisite/?r='.$aff;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=$meta[title]?></title>
    <style>
        /* CSS Document */
        body {
            font: normal 16px Arial, Helvetica, sans-serif;
            color: #000; }

        p, li, ol {
            color: #000;
            font-family: Georgia; 
            font-size: 18px; 
        }

        h1,h2,h3,h4 {
            color: #151515;
            text-align:center; 
        }

        h1 {
            letter-spacing: 0em;
            line-height: 36px;
            font: bold 40px/42px Tahoma;
            margin:0 0 25px;
            text-align: center;
        }

        h2 {
            letter-spacing: -.03em; 
            font: bold 1.4em Tahoma; 
            font-weight: bold; 
            line-height:24px; 
            color: #767676; 
        }

        h3 {
            color: #a90000;
            font: bold 24px Tahoma;
            letter-spacing: 0em;
        }

        a { 
            color: blue;
        }
        a:hover { 
            color: purple;
            text-decoration:none; 
        }

        #wrapper {
            margin: 0 auto;
            width: 892px;
        }

        #contentWrap {
            margin: 5px 0 0;
            width: 892px;
        }

        #contentTop {
            background: url(../../images/splash/contentTop.png) no-repeat;
            height: 36px;
            width: 892px
        }
        
        #content {
            background:url(../../images/splash/contentBG.png) repeat-y;
            padding: 30px 56px 5px;
        }

        #content .subheadline {
            background:url(../../images/splash/highlight.png) repeat-y center top;
            font:italic 20px Arial, Helvetica, sans-serif;
            margin:0 0 20px;
            text-align:center;
            color: black;
        }

        #contentBtm {
            background:url(../../images/splash/contentBtm.png) no-repeat;
            height:36px;
        }

        .line { 
            background:url(../../images/splash/line.gif) no-repeat; 
            height:1px; 
            margin:0 auto; 
            width:780px; 
        }
        .center { 
            text-align:center; margin:0 auto; 
        }
        .strong { 
            font-weight:bold; 
        }
        .red { 
            color:#c13100; 
        } 
        .note {
            color: #000;
            font: normal 14px Verdana;
            margin: 15px auto 0;
            text-align: center;
        }

        .checkList{
            margin-left: 20px;
            list-style-image:url(../../images/splash/check.png);
            font-family: Georgia;
        }

        .crossList{
            list-style-image:url(../../images/cross.jpg);
            font-family: Georgia;
        }

        .clickable {
            border: 1px solid white; 
         }

        .clickable:hover {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="wrapper">
<div id="contentWrap">
    <div id="contentTop"></div>
    <div id="content">

        <h2 class="subheadline"><span class="strong red">Warning:</span> Prices can go up at any time!</h2>
        <h1 align="center">PTC Products Catalog</h1>
        <p align="center">Your Sponsor is: <span class="red"><?=$aff?></span></p>
		 
        <table width="100%">
        <tr valign="top">
                <td align="left">
                    <h3>Neobux Basics<br /><br /></h3><br />
                        <a href="<?=$basicsLink?>">
                            <img class="clickable" src="<?=$dir?>images/sales/nus.jpg" alt="Neobux Basics" height="340" />
                    </a>
                </td><td width="20px"></td>
                <td align="center">
                    <h3>Neobux Ultimate Strategy</h3><br /><br />
                        <a href="<?=$nusLink?>">
                            <img class="clickable" src="<?=$dir?>images/sales/cd.jpg" alt="Neobux Ultimate Strategy" title="Neobux Ultimate Strategy" height="240" />
                        </a>
                        </td>
                <td width="20px"></td>
            <td align="center">
                <h3>PTC Mini-Sites<br /></h3><p>&nbsp;</p><br />
                        <a href="<?=$msLink?>">
                            <img class="clickable" src="http://neobuxultimatestrategy.com/images/video/video-course-box.jpg" alt="PTC Mini-Sites" title="PTC Mini-Sites"
                height="260" />
                        </a>
                </td>
        </tr><tr>
                <td><p>Format: PDF<br />
                        Price: <span class="subheadline">FREE</span></p><br />
                        <center><a href="http://neobuxultimatestrategy.com/basics">Download Now</a></center>
                </td><td></td><td>
                        <table width="95%" class="catalog">
                        <tr>
                                <td colspan="2"><p><b>Format</b>: PDF + Videos<br />
                                <b>Price</b>: $17.00 <br />
                                <b>Bonus</b>: Many </p></td>
                        </tr><tr>
                                <td align="center"><a href="<?=$nusLink?>">Read More</a></td>
                        </tr>
                        </table>
                </td><td></td><td>
                        <table width="95%" class="catalog">
                        <tr>
                                <td colspan="2"><p><b>Format</b>: Website<br />
                                <b>Price</b>: $47.00<br>
                                <b>Bonus</b>: NUS </p></td>
                        </tr><tr>
                                <td align="center"><a href="<?=$msLink?>">Read More</a></td>
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

        <p class="note">Neobux Ultimate Strategy<br /> 
        Copyright © 2011 to <?=date('Y', time())?></p>

	</div><!-- content -->
	<div id="contentBtm"></div>
</div><!-- Content Wrap -->
</div><!-- wrapper -->
</body></html>