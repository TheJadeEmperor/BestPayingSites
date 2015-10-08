<?
$sites = array(
'NeoBux: The Best PTC Site' => array(
    'imgSite' => 'http://images.neobux.com/imagens/banner9/?u=Legendaryzero7&u3=19603338',
    'linkSite' => 'http://www.neobux.com/?r=Legendaryzero7'
),

'Trafficmonsoon: Best Revenue Sharing Site Pays Hourly' => array(
    'imgSite' => "https://trafficmonsoon.com/data/aptools/468x60.gif",
    'linkSite' => "https://trafficmonsoon.com/?ref=striderzero7",
),

'BuxVertise: Great Active Referrals' => array(
    'imgSite' => "http://buxvertise.com/templates/ModernBlue/css/images/buxvertise468.gif",
    'linkSite' => "http://buxvertise.com/?ref=legendaryzero7",
),

'Grandbux - The Next Neobux' => array(
    'imgSite' => "http://www.grandbux.net/b/03.gif",
    'linkSite' => "http://www.grandbux.net/?ref=Legendaryzero7",
),
    
'Long Term Fundz: Easiest Site to Make Money' => array(
    'imgSite' => 'http://www.longtermfundz.com/members/images/banner1.gif',
    'linkSite' => 'http://www.longtermfundz.com/?legendaryzero7',
),
    
'DownlineRefs: Build Your Own Downline For FREE' => array(
    'imgSite' => "http://www.downlinerefs.com/images/banner1.png",
    'linkSite' => "http://www.downlinerefs.com/?ref=legendaryzero7",
    'info' => ''
),
    
'Clixsense: One of The Most Trusted PTCs' => array(
    'imgSite' => "http://csstatic.com/banners/clixsense_gpt468x60a.png",
    'linkSite' => "http://www.clixsense.com/?7629165",
    'info' => ''
),
 
'Ojooo: The PTC Site with The Most Ads' => array(
    'imgSite' => "https://wad.ojooo.com/bs.php?lng=en&u=712712",
    'linkSite' => "https://wad.ojooo.com/register.php?ref=Legendaryzero7",
    'info' => ''
),
);

$paymentProcessors = '<img src="images/paypal.jpg" />
<img src="images/payza.jpg" />';

foreach($sites as $name => $details)
{
	$tableRow .= '<tr><td><b>'.$name.'</b></td>
	<td><b>Payments via</b></td></tr>
	<tr valign="top">';
	
	$image = img($details[imgSite], $name, $name);
	
	$tableRow .= "<tr valign='top'><td align='left'><p>".anchor($details[linkSite], "target=_blank", $image)."</p></td>
	<td>".$paymentProcessors."<p>&nbsp;</p><p>&nbsp;</p></td>
	</tr>";
}

?>
<p>&nbsp;</p>
<center>
    <h1>The BEST PTC Sites to Join Are Below</h1>

<br /><br />

<p align='left'>Why Paid to Click sites? Paid to Click websites are online business sites that pays you 
to simply view ads and refer members to their sites. It is really simple to make money,
no experience or technical expertise is necessary, so anyone can join and make money. 
But only the top PTC sites pay out well, the others pay only pennies and it's not worth
your time. </p> 

<br /><br />

<table width="95%" cellpadding="15">
<?=$tableRow?>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

</center>
<p>&nbsp;</p>