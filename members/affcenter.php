<p>&nbsp;</p>

<h1>Members Home</h1>

<p>&nbsp;</p> 
<?
$selP = 'select * from products where affcenter="Y" order by itemName';
$resP = mysql_query($selP, $conn) or die(mysql_error());

while($p = mysql_fetch_assoc($resP))
{
    $itemName = $p['itemName']; 
    $productID = $p['id'];
    
    $selS = 'select *, date_format(purchased, "%m/%d/%y") as purchased from sales where
    (payerEmail="'.$_SESSION['login']['paypal'].'" or contactEmail="'.$_SESSION['login']['email'].'") and productID="'.$p['id'].'"'; 
    $resS = mysql_query($selS) or die(mysql_error());

    if(mysql_num_rows($resS) == 0) // not a customer
    {
        $downloadContent = 'You are not a customer of '.$itemName.'<br>
        <a href="'.$dir.$p['folder'].'" target=_blank>Click here to get it</a>';
    }
    if($p[itemPrice] == 0) //free gift - download is available
    {
        $downloadContent  = $itemName.' is a free product.
        The product was last updated on '.date('m/d/Y', time()).' <br>
        Click below to download the latest version of '.$itemName.' <br>
        <center>
        <form method=post>
        <input type=submit name="dl" value=" Download Now " class="btn info">
        <input type=hidden name=id value="'.$p['id'].'">
        <input type=hidden name=url value="'.$p['download'].'">
        </form></center>';
    }
    else if(mysql_num_rows($resS) > 0) //sale
    {
        $sale = mysql_fetch_assoc($resS);
        
        //multiple downloads
        $selD = 'select * from downloads where productID="'.$productID.'" order by name';
        $resD = mysql_query($selD) or die(mysql_error());
        
        if(mysql_num_rows($resD) > 0) //multiple downloads
        {
            $downloadContent = '<table>
            <tr>
                <td>You bought the product on '.$sale['purchased'].' </td>
            </tr>';
            while($d = mysql_fetch_assoc($resD))
            {
                $downloadContent .= '<tr>
                <td>'.$d[name].'</td>
                <td>
                    <form method=post><input type=submit name=dl value=" Download " class="btn info" />
                    <input type=hidden name=url value="'.$d[url].'"></form>
                </td>';
            }    
            $downloadContent .= '</table>';
        }
        else //single download
        {
    		$downloadContent = 'You bought the product on '.$sale[purchased].' <br>
    		The product was last updated on '.date('m/d/Y', time()).' <br>
    	        Click below to download the latest version of '.$itemName.' <br>
    		<center>
    		<form method=post>
    		<input type=submit name="dl" value=" Download Now " />
    		<input type=hidden name=id value="'.$p[id].'">
    		<input type=hidden name=url value="'.$p[download].'">
    		</form></center>';
        }
    }

    echo '<div class="moduleBlue"><h1>'.$p[itemName].'</h1><div>
    '.$downloadContent .'
    </div></div> <br />'; 
}

//members area content
$selMC = 'select * from settings where opt="memAreaContent"';
$resMC = mysql_query($selMC) or die(mysql_query());

$mc = mysql_fetch_assoc($resMC);

$memAreaContent = $mc['setting'];
$memAreaContent = stripslashes($memAreaContent);    

echo $memAreaContent; 
?>
<p>&nbsp;</p>

<center>
    <p>Click here to claim your bonuses (worth over $1,000)</p>
    <a href="<?=$dir?>?action=bonus"><img src="<?=$dir?>images/members/bonus.png" /></a>
</center>

<p>&nbsp;</p>

<center>
<h3>Want more ways to make money?<br />Check out these sponsors below:</h3>


<table>
    <tr>
        <td>
            <a href="http://bestpayingsites.com/?action=surveys-ptc&campaign=upsell" target="_blank"><img src="http://bestpayingsites.com/images/banners/surveys/surveys300x250.gif" /></a>
        </td>
        <td width="70px"></td>
        <td>
             <a href="http://bestpayingsites.com/?action=translate&campaign=upsell" target="_blank"><img src="http://bestpayingsites.com/images/banners/translate/translate1.gif" /></a>
        </td>
    </tr>
</table>

</center>
        
<p>&nbsp;</p>
<p>&nbsp;</p>