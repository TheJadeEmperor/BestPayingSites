<?php
/*
+---------------------------------------------------------------------
| v1.0
| Copyright 2011-2012 Sales Page Machine. 
| All Rights Reserved
|
| The sale, duplication or transfer of the script to any 
| person other than the original purchaser is a violation
| of the purchase agreement and is strictly prohibited.
|
| Any alteration of the script source code or accompanying 
| materials will void any responsibility of Sales Page Machine
| regarding the proper functioning of the script.
|
| By using this script you agree to the terms and conditions 
| of use of the script.  
+---------------------------------------------------------------------
*/

function updateAffStats($userID, $productID)
{
    global $conn; 
    
    //check for affiliate stats
    $selAS = 'select * from affstats where userID="'.$userID.'" and productID="'.$productID.'"';
    $resAS = mysql_query($selAS, $conn) or die(mysql_error()); 
    $a = mysql_fetch_assoc($resAS);  
    
    if(mysql_num_rows($resAS) == 0) //insert affiliate clicks
    {
        $insAS = 'insert into affstats (userID, productID, uniqueClicks, rawClicks) values 
        ("'.$userID.'", "'.$productID.'", "1", "1")';
        mysql_query($insAS) or die(mysql_error());
    }
    else //update affiliate clicks
    {
        if(isset($_COOKIE[sponsor])) //cookie is set, not a unique click
            $cond = 'rawClicks=rawClicks+1';
        else //no cookie set, new visitor
            $cond = 'uniqueClicks=uniqueClicks+1, rawClicks=rawClicks+1';
            
        $updS = 'update affstats set '.$cond.'
           where userID="'.$userID.'" and productID="'.$productID.'"';
        mysql_query($updS) or die(mysql_error());
    }        
}

function curPageURL() 
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") 
    {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") 
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } 
    else 
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

session_start(); 
/* get the path of the product from url
 * if url is www.domain.com/prod
 * the path is "prod" */
$url = curPageURL();  

if(is_int(strpos(__FILE__, 'C:\\'))) //localhost
{
    list($crap, $path) = explode('//', $url);
    list($crap, $crap, $path) = explode('/', $path); 
    $path = str_replace('index.php', '', $path); 
    
    if(is_int(strrpos($path, '?')))
        $path = '';
}
else //live website
{
    list($crap, $path) = explode('//', $url);    
    list($crap, $path) = explode('/', $path); 
    $path = str_replace('index.php', '', $path);
    
    if(is_int(strrpos($path, '?')))
        $path = '';
}
//directory to the root  
if($path == '' || $_GET[p]) //already at the root
    $dir = '';    
else  //not at the root
    $dir = '../'; 

include($dir.'include/functions.php');
include($dir.'include/mysql.php');
include($dir.'include/config.php');
include($dir.'include/spmSettings.php'); 

$selP = 'select * from products where folder="'.$path.'"';
$resP = mysql_query($selP, $conn) or die(mysql_error());

if($p = mysql_fetch_assoc($resP))
{
    //product vars
    $productID = $p['id'];
    $itemName = $p[itemName];
    $itemPrice = $p[itemPrice];
    $itemNumber = $p[itemNumber];
    $keywords = $p[keywords];
    $description = $p[description]; 
    
    //download vars
    $expires = $p[expires];
    $oto = $p[oto]; 
    $otoName = $p[otoName];
    $otoPrice = $p[otoPrice];
    $otoNumber = $p[otoNumber];
    $download = $p[download]; 
    $upsellID = $p[upsellID];

    //affiliate vars
    $affProgram = $p[affProgram];
    $salesPercent = $p[salesPercent]; 

    //template vars 
    $templateHeader = $p['header']; 
    $templateFooter = $p['footer']; 
    $salespage = $p['salespage']; 
    
    //paypal vars 
    $ipnURL = $val[websiteURL].'/ipn.php';
    $cancelURL = $val[websiteURL];
   
    if($oto == 'Y') //one time offer
    {
        $selO = 'select * from products where id="'.$upsellID.'"';
        $resO = mysql_query($selO, $conn) or die(mysql_error());
        $o = mysql_fetch_assoc($resO);
        
        if($p[otoName])
            $otoName = $p[otoName];
        else
            $otoName = $o[itemName];
        
        if($p[otoPrice]) 
            $otoPrice = $p[otoPrice];
        else
            $otoPrice = $o[itemPrice];
        
        if($p[otoNumber])
            $otoNumber = $p[otoNumber];
        else
            $otoNumber = $o[itemNumber]; 
    }
}

if($_POST[dl])
{
    $item =  $_POST[url];
    
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: binary");
    header("Content-Description: File Transfer");

    $fparts = explode("/", $item );
    $filename = $fparts[count($fparts)-1];
    header("Content-Disposition: attachment; filename=$filename");
    @readfile($item);

    exit;
}

if($_GET[e])
    $_GET[r] = $_GET[e]; 

//referral views
if($_GET[r] || $_COOKIE[sponsor])//check for cookie, set as affiliate
{
    if(empty($_GET[r]))
        $selU = 'select * from users where id="'.$_COOKIE[sponsor].'"';
    else
        $selU = 'select * from users where username="'.$_GET[r].'"';
    $resU = mysql_query($selU, $conn) or die(mysql_error());

    $u = mysql_fetch_assoc($resU);
    $userID = $u[id]; 
    $affiliateEmail = $u[paypal];    
    
    $cookieExpire = time() + 60*60*24*30*12; //expires after 1 year
    setcookie("sponsor", $userID, $cookieExpire);
    setcookie("productID", $productID, $cookieExpire);     

    //update aff stats    
    updateAffStats($userID, $productID); 
    
    $sel = 'select * from affstats where userID="'.$_COOKIE[sponsor].'" and productID="'.$productID.'"'; 
    $aff = mysql_fetch_assoc(mysql_query($sel, $conn));
  
    //default payee is the admin
    $paidToEmail = $paypalEmail; 
    
    //determine who gets paid 
    if($salesPercent == 100) //give away product 
    {
        $paidToEmail = $affiliateEmail; 
    }
    else if($salesPercent > 0) //commissions is set
    {   //formula for affiliate sales
        $decimal = bcdiv($aff[salesPaid], $aff[sales], 3) * 100;
        
        if($decimal <= $salesPercent)  //affiliate gets paid
        {
            $paidToEmail = $affiliateEmail; 
        }  
    }  
}
else //no affiliate, payee is admin
{
    $paidToEmail = $paypalEmail;
}

if(false) //debug
{
    echo 'path: '.$path.'<br>
    productID: '.$productID.'<br>
    userID: '.$userID.' <br>
    paidToEmail: '.$paidToEmail;
    exit;
}
$action = $_GET[action];

switch($action)
{
case 'order':
    if($itemPrice == 0) //free gift product
       $fileName = 'download.html';
    else
       $fileName = $dir.'templates/order.html'; 
    $trackViews = false;
    break;
case 'oto':
    $fileName = $dir.'templates/otoOrder.html';
    $trackViews = true;
    break;
case 'download':
    $fileName = $dir.'templates/download.php';
    $trackViews = false; 
    break;      
case 'posts':
    $templateHeader = $val['blogHeader'];
    $templateFooter = $val['blogFooter'];  
    $fileName = 'blog/index.php';
    $trackViews = true; 
    break;  
default:
    $keywords = $p['keywords'];
    $description = $p['description']; 

    $fileName = $salespage; //default action: show sales page  
    $trackViews = true;
    
    //blog post
    if($_GET[p])
    {
        $templateHeader = $val['blogHeader'];
        $templateFooter = $val['blogFooter'];   
        $fileName = 'blog/post.php';
        $meta = postMetaTags($_GET[p]);     
        $trackViews = true;
    }    
    
    //custom pages 
    $selM = 'select * from memberpages order by url';
    $resM = mysql_query($selM, $conn) or die(mysql_error());
    
    while($m = mysql_fetch_assoc($resM))
    {
        if($action == $m['url'])
        {
            $templateHeader = $m['header'];
            $templateFooter = $m['footer'];
            $fileName = $m['file'];
            $trackViews = true; 
        }
    }       
}

if(file_exists($templateHeader))
include($templateHeader);

include($fileName);

if(file_exists($templateFooter))
include($templateFooter);   


//track pageviews
if($trackViews)
{
    $pageName = $_SERVER["REQUEST_URI"];
    
    if($_GET[r])
        $pageName = '/'.$path;
    
    //check if pageview exists
    $selPV = 'select * from pageviews where page="'.$pageName.'"';
    $resPV = mysql_query($selPV); 
    
    if(mysql_num_rows($resPV) == 0)
    {
        $queryI = 'insert into pageviews (page, views) values ("'.$pageName.'", "1")';
        $resI = mysql_query($queryI) or die(mysql_query());
    }
    else 
    {
        //add to pageviews
        $upd = 'update pageviews set views=views+1 where page="'.$pageName.'"';
        $res = mysql_query($upd) or die(mysql_error());      
    }
}

mysql_close($conn);  ?>