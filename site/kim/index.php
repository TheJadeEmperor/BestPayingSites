<?
function anchor($url, $extra, $displayText) {
    return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText) {
    return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$nusLink = 'http://ultimateneobuxstrategy.com/';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PTC Websites | Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Bauhaus_Md_BT_400.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
   <link href="style_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<div id="main">
  <!-- header -->
  <div id="header">
    <ul class="site-nav">
        <li><a href="./" class="act">Home</a></li>
        <li><a href="./">PTC Websites</a></li>
        <li><a href="./">About Us</a></li>
    </ul>
      <div class="logo"><h1>PTC Websites</h1><br /><br />
          <h3>Earn Money From Home</h3></div>
  </div>

    <!-- content -->
    <div id="content">
    <div class="indent1">
      

    <h2>Top PTC Websites</h2>
    <ul class="list">
        <li><a href="#">Neobux</a><br />
          <?
$refURL = 'http://www.neobux.com/?r=mim911';
$img = 'http://images.neobux.com/imagens/banner9/?u=mim911&u3=13951262';
echo anchor($refURL, 'target=_blank', img($img, '', 'Neobux')); 
?>
        <br /><br />
        </li>
        <li><a href="#">Paidverts</a><br />
        <?
$refURL = 'https://www.paidverts.com/ref/mim911';
$img = 'https://www.paidverts.com/banners/pv/468x60_4.gif ';
echo anchor($refURL, 'target=_blank', img($img, '', 'Paidverts')); 
?>
            <br /><br />
        </li>
        <li><a href="#">Travel to the Animal Planet</a><br />
        <?
$refURL = 'http://adpageviews.com/?ref=Loa333 ';
$img = 'http://adpageviews.com/data/aptools/banner2.gif';
echo anchor($refURL, 'target=_blank', img($img, '', 'AdPageViews')); 
?>
        <br /><br />
        </li>
    </ul>
    
    <br /><br />
    <div class="indent">
        <h2>Welcome to PTC Websites!</h2>
        <h3>Feel free to browse around and check out our list of Top PTC Websites. 
        PTC (paid to click) are sites that you can make money from just by viewing ads
        and signing up referrals.</h3>
        <p>No experience is necessary and no technical knowledge required, so it's the
        perfect way to make money from home. It's great for those who want to make
        some extra money to supplement their income. </p>
    </div>
      
    </div>
  </div>
    

  <!-- footer -->
  <div id="footer">
    <div class="indent">
      <div class="fleft">Copyright - Kim</div>
      <div class="fright">Designed by: <a href="<?=$msLink?>" target='_blank'>PTC Mini-Sites</a>&nbsp; 
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>