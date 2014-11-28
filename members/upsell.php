<?php
function getProduct($productID)
{
    global $conn; 
    
    $selP = 'select * from products where id="'.$productID.'"';
    $resP = mysql_query($selP, $conn) or die(mysql_error());
    
    $p = mysql_fetch_assoc($resP);
    
    return $p; 
}

$skipButton = '
<p>&nbsp;</p>
<center>
<form method=post>
<input type=submit name="skipUpsell" value="No Thanks, Take Me to the Members Area"
class="btn success"/>
</form>
</center>
<p>&nbsp;</p>'; 

$transition = '<meta http-equiv="refresh" content="1;url=./?action=affcenter">
<center>
<p>&nbsp;</p>
<h1>Logging you in</h1><br />
<img src="../images/waiting.gif" />
<p>&nbsp;</p>
</center>';

//is upsell enabled? 
if($val['memAreaUpsell'] != 'on')
{   //if not
    $_SESSION[login][skipUpsell] = true;
    echo $transition; 
}
else //if yes
{ 
    // is user a customer? 
    $selUP = 'select id from sales where payerEmail="'.$u[paypal].'" and productID="'.$val['memUpsellProductID'].'"';
    $resUP = mysql_query($selUP, $conn) or die(mysql_error());
    
    if(mysql_num_rows($resUP) == 0) //user is not a customer 
    {   
        //get product info, open upsell file
        $upsellA = getProduct($val['memUpsellProductID']);
        $itemPrice = $upsellA[itemPrice];
        $itemName = $upsellA[itemName];  
        $action = $dir.$path.'?action=order';
        include($val['memUpsellFile']);
        echo $skipButton; 
    }       
    else //if user is a customer 
    {  
        //is there another upsell?
        if($val['memUpsellBackup'] != 'on')
        {   //no other upsells
           $_SESSION[login][skipUpsell] = true;
           echo $transition; 
        }
        else //2nd upsell
        {  
            //is user a customer? 
            $selBUP = 'select id from sales where payerEmail="'.$u[paypal].'" and productID="'.$val['memUpsellBackupID'].'"';
            $resBUP = mysql_query($selBUP, $conn) or die(mysql_error()); 
            
            if(mysql_num_rows($resBUP) == 0)//if user is not a customer 
            {
                //get product info, open upsell file
                $upsellB = getProduct($val['memUpsellBackupID']);
                $itemPrice = $upsellB['itemPrice'];
                $itemName = $upsellB['itemName']; 
                $action = $dir.$path.'?action=order';
                include($val['memUpsellBackupFile']);
                echo $skipButton; 
            }
            else { //if user is a customer, skip upsell
                $_SESSION[login][skipUpsell] = true;
                echo $transition; 
            }
        }     
    }
}
    

/*
$upsell = array(
'nus' => array(
    'id' => '1',
    'file' => 'upsellNUS.html'),
'vc' => array(
    'id' => '4',
    'file' => 'upsellVC.html'),
'ms' => array(
    'id' => '3',
    'file' => 'upsellMS.html'),
);


//check for sale 
$productID = $upsell['nus']['id'];
$selA = 'select * from sales where payerEmail="'.$u[paypal].'" and productID="'.$productID.'"';
$resA = mysql_query($selA, $conn) or die(mysql_error());

$p = mysql_fetch_assoc($resA);
if(mysql_num_rows($resA) == 0) //not a customer of NUS
{   
    $nus = getProduct($productID);
    $itemPrice = $nus[itemPrice];
    $itemName = $nus[itemName];  
    $action = $dir.'?action=order';
    include($upsell['nus']['file']);
}
else
{
    $productID = $upsell['ms']['id'];
    $selC = 'select * from sales where payerEmail="'.$u[paypal].'" and productID="'.$productID.'"';
    $resC = mysql_query($selC, $conn) or die(mysql_error());
    
    if(mysql_num_rows($resC) == 0)
    {
        $ms = getProduct($productID); 
        $itemPrice = $ms[otoPrice];
        $itemName = $ms[otoName];  
        $action = $dir.'video/?action=oto';
        include($upsell['ms']['file']);
    }  
    else {
        $productID = $upsell['vc']['id'];   
        $selB = 'select * from sales where payerEmail="'.$u[paypal].'" and productID="'.$productID.'"';
        $resB = mysql_query($selB, $conn) or die(mysql_error());
    
        $p = mysql_fetch_assoc($resB);    
        if(mysql_num_rows($resB) == 0) //not a customer of VC
        {
            $vc = getProduct($productID);
            $itemPrice = $vc[itemPrice];
            $itemName = $vc[itemName];  
            $action = $dir.'video/?action=order';
            include($upsell['vc']['file']);
        }
    }
}*/
?>