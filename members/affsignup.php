<?php
/////////////////
$productID = '1';
/////////////////
$selP = 'select * from products where id="'.$productID.'"';
$resP = mysql_query($selP) or die(mysql_error());

$p = mysql_fetch_assoc($resP);

$itemName = $p[itemName];
$itemPrice = $p[itemPrice];
$salesPercent = $p[salesPercent];
?>
<center>
<h1 style="color: black">Are You Interested in Promoting <br /><span class="dark red"><?=$businessName ?></span> Products?</h1>
</center>

<p><b><font size="4" color="#FF0000">
    This just takes a second and you can begin making money right away.
</font></b></p>

<p align="left">Just enter your name, PayPal email address, and the Affiliate ID (nickname) 
you'd like to use in the form below. We'll immediately generate the <b>affiliate link</b> 
you can use to promote our products and earn commissions paid immediately to 
your Paypal account.</p>

<p align="left">If they click and buy, <font color="#FF0000">$<?= $itemPrice ?></font> 
will be paid directly to you for <?= $salesPercent ?>% of your sales!</p>

<div class="line"></div>
	 
<h2>Commissions Structure</h2>


<p><?=$itemName ?> pays <strong><?=$salesPercent ?>%</strong> 
Commissions on the <strong>$<?=$itemPrice ?></strong> front end.</p>

<p align="left">
Commissions work a little differently than you may be used to. Instead of receiving x% of each sale, you will receive 100% commissions on <?= $salesPercent ?>% 
of your sales.</p>

<p align="left">
This works out to the same amount, but allows you to be paid for your sales immediately into your Paypal account. This means <b>no waiting</b> 30 to 60 days for your money. </p>

<center>
<table style="border: 1px solid black;" class="joinForm">
<tr>
	<th align=center><b>Here's an example of what you can make</b></th>
</tr><tr>
<td>
<table style="font-size: 0.9em;">
<tr>
	<td width="160px">
		<p align="left"><strong>Front End Sale </strong></p>
	</td><td width="170px">
		<p align="left"><strong>50% Commission </strong></p>
	</td><td>
		<p><strong>75% Commission</strong></p>
	</td>
</tr><tr>
	<td style="WIDTH: 157px">
		<p align="left">Sale #1</p>
	</td><td>
	    <p align="left"><strong>$<?=$itemPrice ?></strong></p>		
	</td><td>
        <p align="left"><strong> $<?=$itemPrice ?> </strong></p>
	</td>
</tr><tr>
	<td style="WIDTH: 157px">
		<p align="left">Sale #2 </p>
	</td><td>
        <p align="left">$0.00</p>
	</td><td>
       <p align="left"><strong> $<?=$itemPrice ?></strong></p>
	</td>
</tr><tr>
	<td style="WIDTH: 157px">
		<p align="left"> Sale #3 </p>
	</td><td>
		<p align="left"><strong> $<?=$itemPrice ?></strong></p>
	</td><td>
		<p align="left"><strong> $<?=$itemPrice ?> </strong></p>
	</td>
</tr><tr>
	<td style="WIDTH: 157px">
		<p align="left">Sale #4 </p>
	</td><td>
		<p align="left">$0.00</p>
	</td><td>
        <p align="left">$0.00</p>
	</td>
</tr>
</table>
</td></tr></table>
</center>

<p>&nbsp;</p>

<h2>Payment of Commissions</h2>

<p>Commissions are delivered straight to your PayPal account. You must have a <b>Premier or Business account</b> in order to receive affiliate payments.&nbsp; Personal Paypal accounts are limited in the amount of funds and types of payments they can receive</p>

<p><?= $itemName ?>'s affiliate system has been specifically designed to do this. Your affiliate ID is your Paypal email address or the "Nickname" that you choose below. </p>
   

<center>
<form method="post" action="?action=confirm">

<p><?=$errorMsg?></p>
<table style="border: 1px solid black; width: 450px;" class="joinForm">
<tr>
    <th>Register for Affiliate Account</th>
</tr>
<tr>
    <td>
        <p>First Name<br />
            <input class=activeField name=fname value="<?=$_POST[fname]?>" size=40></p>
    </td>
</tr><tr>
	<td>
	    <p>Last Name<br />
                <input type=text class=activeField name=lname value="<?=$_POST[lname]?>" size=40></p>
    </td>
</tr><tr>
    <td>
        <p>Username<br />
            <input type=text class=activeField name=username value="<?=$_POST[username]?>" size=40></p>
    </td>
</tr><tr>	
    <td><p>Password<br />
            <input type=text class=activeField name=password value="<?=$_POST[password]?>" size=40></p>
    </td>
</tr><tr>
	<td>   
	    <p>Your <b>Preferred Contact</b> Email Address: <br />
            <i><font size="2">To receive our training newsletters</font></i><br />
            <input type=text class=activeField name=email value="<?=$_POST[email]?>" size=40></p>
    </td>
</tr><tr>
	<td>
	    <p>Your <b>Primary PayPal</b> Email Address: <br />
            <i><font size="2">To receive your Paypal commissions</font></i><br />
             <input type=text class=activeField name=paypal value="<?=$_POST[paypal]?>" size=40></p>
	</td>
</tr>
<tr>
	<td colspan=2 align=center>
	    <input type="submit" class="btn danger" name=register value="Register Now" <?=$disField?> />
	    
	    <p class="ps" align="center">
    <span class="red"><b>NOTICE:</b></span> We <b>HATE</b> SPAM, and will not 
    reuse your email address for any other purpose. </p>
    </td>
</tr>
</table> 
</form>
</center>

<p>&nbsp;</p> 