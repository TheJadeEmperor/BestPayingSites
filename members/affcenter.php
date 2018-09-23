<?
function purchasedProducts() {
    global $conn;
    
    $selP = 'SELECT * from products WHERE affcenter="Y" ORDER BY itemName';
    $resP = mysql_query($selP, $conn) or die(mysql_error());

    while($p = mysql_fetch_assoc($resP)) {
        $itemName = $p['itemName']; 
        $productID = $p['id'];

        $selS = 'SELECT *, date_format(purchased, "%m/%d/%Y") AS purchased FROM sales WHERE
        (payerEmail="'.$_SESSION['login']['paypal'].'" or contactEmail="'.$_SESSION['login']['email'].'") 
            AND productID="'.$p['id'].'"'; 
        $resS = mysql_query($selS) or die(mysql_error());

        if(mysql_num_rows($resS) == 0) { // not a customer 
            $downloadContent = 'You are <b>not</b> a customer of '.$itemName.'<br>
            <a href="'.$dir.$p['folder'].'" target="_blank">Click here to get it</a>';
        }
    
        if($p['itemPrice'] == 0) { //free gift - download is available

            $downloadContent = $itemName.' is a free product.
            The product was last updated on '.date('m/d/Y', time()).' <br>
            Click below to download the latest version of '.$itemName.' <br>
            <center>
            <form method=post>
            <input type=submit name="dl" value=" Download Now " class="btn info">
            <input type=hidden name=id value="'.$p['id'].'">
            <input type=hidden name=url value="'.$p['download'].'">
            </form></center>';
        }
        else if(mysql_num_rows($resS) > 0) { //sale

            $sale = mysql_fetch_assoc($resS);

            //search for multiple downloads
            $selD = 'SELECT * FROM downloads WHERE productID="'.$productID.'" ORDER BY name';
            $resD = mysql_query($selD) or die(mysql_error());

            $numDownloads = mysql_num_rows($resD); 

            if($numDownloads > 0) { //multiple downloads

                $downloadContent = '<table>
                <tr>
                    <td>You bought the product on '.$sale['purchased'].' </td>
                </tr>';
                while($d = mysql_fetch_assoc($resD)) {
                    $downloadContent .= '<tr>
                    <td>'.$d['name'].'</td>
                    <td>
                        <form method=post><input type=submit name=dl value=" Download " class="btn info" />
                        <input type=hidden name=url value="'.$d['url'].'"></form>
                    </td>';
                }    
                $downloadContent .= '</table>';
            }
            else { //single download
            
                $downloadContent = 'You bought the product on '.$sale['purchased'].' <br>
                    The product was last updated on '.date('m/d/Y', time()).' <br>';
                
                if($p['download'] != '') { //download link is set
                    $downloadContent .= '
                    Click below to download the latest version of '.$itemName.' <br>
                    <center>
                    <form method=post>
                    <input type=submit name="dl" value=" Download Now " />
                    <input type=hidden name=id value="'.$p['id'].'">
                    <input type=hidden name=url value="'.$p['download'].'">
                    </form></center>';
                }
            }
        }

        $allContent .= '<div class="moduleBlue"><h1>'.$p[itemName].'</h1><div>
        '.$downloadContent .'
        </div></div> <br />'; 
    }

    return $allContent;
}
?>
<h1>Members Home</h1>

<p>&nbsp;</p> 
<?
echo purchasedProducts(); 

//check if customer of PPB
$sel = "SELECT payerEmail FROM sales WHERE productID='10' AND 
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')";
    
$res = mysql_query($sel) or die(mysql_error());
    
if(mysql_num_rows($res) > 0) {
    ?>
    <fieldset>
        <h2>Paypal Booster</h2>
        
        <p><a href="?action=pp-booster">Paypal Booster Video</a></p>
        
        <p><a href="?action=pp-html-files">HTML Files</a></p>
              
        <p><a href="?action=pp-links">Booster Links</a></p>
                
        <p><a href="?action=pp-tools">Promotion Tools</a></p>
               
    </fieldset>

<?
}

//check if customer of EPS
$sel = "SELECT payerEmail FROM sales WHERE productID='12' AND 
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')";
$res = mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($res) > 0) {
?>
    <br /><br />
    <fieldset>
        <h2>Email Profit System</h2>
        
    <p>To get started using the Email Profit System, go to the links below:</p>

    <p><a href="?action=eps">3 Steps to the Email Profit System</a></p>

    <p><a href="?action=classified">Classified Ads List</a></p>

    <p><a href="?action=directory">Paying Sites Directory</a></p>
    
    <p><a href="?action=tools">Promotion Tools</a></p>
    </fieldset>
<?
}
?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<center>
    <p>Click here to claim your bonuses (worth over $1,000)</p>
    <a href="<?=$dir?>?action=bonus"><img src="<?=$dir?>images/members/bonus.png" /></a>
</center>

<p>&nbsp;</p>
<p>&nbsp;</p>