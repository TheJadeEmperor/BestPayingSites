<?
if(!$_SESSION[login][id])
    header('Location: index.php');

$userID = $u[id];

$selS = 'select *, date_format(purchased, "%m/%d/%Y") as purchasedDate from sales where affiliate="'.$userID.'" and id="'.$_GET[id].'"';
$resS = mysql_query($selS, $conn) or die(mysql_error()); 

if($s = mysql_fetch_assoc($resS))
{
    $title = 'Sales Record #'.$s[id].' - '.$s[itemName];
}
else 
{
	$title = 'Invalid sales record';
}
?>

<hr color="#25569a" size="4" />
<p>&nbsp;</p>
<h2><?=$title?></h2>
<table>
<tr>
    <td>Transaction ID</td>
    <td><a href="https://www.paypal.com/" target=_blank><?=$s[transID]?></a></td>
</tr>
<tr>
    <td>Customer Email</td>
    <td><?=$s[payerEmail]?></td>
</tr>
<tr>
    <td>Customer Name</td>
    <td><?=$s[firstName].' '.$s[lastName]?></td>
</tr>
<tr>
    <td>Transaction Date</td>
    <td><?=$s[purchasedDate]?></td>
</tr>
<tr>
    <td>Product Name</td>
    <td><?=$s[itemName]?></td>
</tr>
<tr>
    <td>Product ID</td>
    <td><?=$s[itemNumber]?></td>
</td>
</tr>
<tr>
    <td>Paid To</td>
    <td><?=$s[paidTo]?></td>
</tr>
<tr>
    <td>Amount</td>
    <td>$<?=$s[amount]?></td>
</tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>