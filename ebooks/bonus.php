<?   
$bonusDir = '/home2/codegeas/ebooks/bonus/';

$bonus1 = $bonusDir.'Traffic-Assault.pdf';
$bonus2 = $bonusDir.'Traffic-Heist.pdf';
$bonus3 = $bonusDir.'Traffic-Soldiers.pdf';

$bonusProducts = array( 
	'Make Money Surveys' => array(
        'img' => 'https://neobuxultimatestrategy.com/images/sales/bonus-mms.jpg',
        'dl' => $bonusDir.'MakeMoneySurveys.pdf',
    ),
	'Make $18K in 30 Days' => array(
        'img' => 'https://neobuxultimatestrategy.com/images/sales/bonus-ppbooster.jpg',
        'dl' => $bonusDir.'Make-$18K-in-30-Days.pdf',
    ),
	'Neobux Basics' => array(
        'img' => 'images/sales/nus.jpg',
        'dl' => $bonusDir.'NeobuxBasics.pdf',
    ), 
	'MR S PTC Course' => array(
        'img' => 'images/members/pdf.png',
        'dl' => $bonusDir.'Santanderinos-PTC-Course.pdf',
    ),
	 
	
);


?>
<center>
<h1>Bonus Downloads</h1>

<p>&nbsp;</p>
<?
	foreach($bonusProducts as $name => $val) {
		echo '<h2>'.$name.'</h2>
		<form method="POST">

			<button type="submit" name="dl" value="dl"><img src="'.$val['img'].'" border="0" /></button>
			 
			<br /><br />		
			<input type="submit" name="dl" value="Download Now" class="btn success" />
			<input type="hidden" name="url" value="'.$val['dl'].'" />
		</form>
		<p>&nbsp;</p>';
	
	}
?>



<p>&nbsp;</p>

<h2>Drive Tons of Traffic to Your Website</h2>
    
<table>
    <tr valign="top">
        <td width="230px">
            <h3>Traffic Assault</h3>
            <form method=POST>
                <table>
                    <tr>
                        <td width="200px" align="center">
                            <fieldset>
                                <button type="submit" name="dl" value="dl"><img src=" images/members/pdf.png" />
                            </fieldset>
                            <br />	
                            <input type=submit name=dl value="Download Now" class="btn success"/>
                            <input type=hidden name=url value="<?= $bonus1 ?>" />
                        </td>
                    </tr>
                </table>
            </form>
        </td>
        <td width="230px">
            
            <h3>Traffic Heist</h3>

            <form method=POST>
                <table>
                    <tr>
                        <td width="200px" align="center">
                            <fieldset>
                                <button type="submit" name="dl" value="dl"><img src=" images/members/pdf.png" />
                            </fieldset>
                            <br />	
                            <input type=submit name=dl value="Download Now" class="btn success"/>
                            <input type=hidden name=url value="<?= $bonus2 ?>" />
                        </td>
                    </tr>
                </table>
            </form>
        </td>
        <td width="230px">
            <h3>Traffic Soldiers</h3>

            <form method=POST>
                <table>
                    <tr>
                        <td width="200px" align="center">
                            <fieldset>
                               <button type="submit" name="dl" value="dl"><img src=" images/members/pdf.png" />
                            </fieldset>
                            <br />	
                            <input type=submit name=dl value="Download Now" class="btn success"/>
                            <input type=hidden name=url value="<?= $bonus3 ?>" />
                        </td>
                    </tr>
                </table>
            </form>
            
        </td>
    </tr>
</table>

<p>&nbsp;</p>
<h3>Want more ways to make money?<br />Check out these sponsors below:</h3>

    <table>
        <tr>
            <td>
                <a href="https://bestpayingsites.com/?action=surveys-ptc&campaign=upsell" target="_blank"><img src="https://bestpayingsites.com/images/banners/surveys/surveys300x250.gif" /></a>
            </td>
            <td width="70px"></td>
            <td>
                <a href="https://www.clixsense.com/?3373459&upsell" target=_blank><img src="https://csstatic.com/banners/clixsense_gpt300x250a.png" border=0></a>
            </td>
        </tr>
    </table>

</center>
<p>&nbsp;</p>
<p>&nbsp;</p>