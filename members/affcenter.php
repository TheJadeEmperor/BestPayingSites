<h1>Members Home</h1>
<?php

//get all products to display 
$selP = 'SELECT * FROM products WHERE affcenter="Y" ORDER BY itemName';
$resP = $conn->query($selP);

$cust = 0; //# of products they bought
while($p = $resP->fetch_array()) {
    $itemName = $p['itemName']; 
    $productID = $p['id'];
    
    $selS = 'SELECT *, date_format(purchased, "%m/%d/%y") AS purchased FROM sales WHERE (payerEmail="'.$_SESSION['login']['paypal'].'") AND productID="'.$p['id'].'"'; 
    $resS = $conn->query($selS);
    
	if($p['id'] == '3')
		$isMiniSitesCustomer = 1;
	
    if(mysqli_num_rows($resS) == 0) { // not a customer 
        $downloadContent = 'You are not a customer of '.$itemName.'<br />
        <a href="'.$dir.$p['folder'].'" target="_BLANK">Click here to get it</a>';
    }
    else  {
        $cust++;  //# of products they bought
    }

    if($p['itemPrice'] == 0) { //free gift - download is available
    
        $downloadContent  = $itemName.' is a free product <br />
        The product was last updated on '.date('m/d/Y', time()-2592000).' <br />
        Click below to download the latest version of '.$itemName.' <br />
        <center>
        <form method="POST">
        <p><input type="submit" name="dl" class="downloadNow" value=" Download Now "></p>
        <input type="hidden" name="id" value="'.$p['id'].'">
        <input type="hidden" name="url" value="'.$p['download'].'">
        </form></center>';
    }
    else if(mysqli_num_rows($resS) > 0) { //sale
    
        $sale = mysql_fetch_assoc($resS);
        
        //multiple downloads
        $selD = 'SELECT * FROM downloads WHERE productID="'.$productID.'" ORDER BY name';
        $resD = $conn->query($selD);

        if(mysqli_num_rows($resD) > 0) { //multiple downloads
        
            $downloadContent = '<table>
                <tr>
                    <td>You bought the product on '.$sale['purchased'].' </td>
                </tr>';
            while($d = mysql_fetch_assoc($resD)) {
            
                $downloadContent .= '<tr>
                <td>'.$d['name'].'</td>
                <td>
                    <form method="POST"><input type="submit" name="dl" class="downloadNow" value=" Download "/>
                    <input type="hidden" name="url" value="'.$d['url'].'" /></form>
                </td>';
            }    
            $downloadContent .= '</table>';
        }
        else { //single download 
            $downloadContent = 'You bought the product on '.$sale['purchased'].' <br />
            The product was last updated on '.date('m/d/Y', time()-2592000).' <br />
            Click below to download the latest version of '.$itemName.' <br />
            <center>
            <form method="post">
            <p><input type="submit" name="dl" class="downloadNow"  value=" Download Now "></p>
            <input type="hidden" name="id" value="'.$p['id'].'">
            <input type="hidden" name="url" value="'.$p['download'].'">
            </form></center>';
        }
    }

    echo '<div class="moduleGradient"><h1>'.$p['itemName'].'</h1>
	<div>
    '.$downloadContent.'
    </div></div><br />'; 
}
?>

<p>&nbsp;</p> 

<? 
$opt = array(
    'tableName' => 'sales',
    'cond' => "WHERE productID='10' AND
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')"
);
    
$res = dbSelectQuery($opt); 

if($res->num_rows > 0) {
    ?>
    <fieldset>
        <h2>Paypal Booster</h2>
        
        <p><a href="?action=pp-booster">Paypal Booster Tutorial</a></p>
        
        <p><a href="?action=pp-html-files">Get the HTML Files</a></p>
              
        <p><a href="?action=pp-links">PP Booster Links</a></p>
                
        <p><a href="?action=pp-tools">Promotion Tools</a></p>
    </fieldset>

<?
}

if($isEPSCustomer == 1) {
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